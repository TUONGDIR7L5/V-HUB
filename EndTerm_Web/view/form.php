<?php
include 'config/config.php'; 

// Khởi tạo biến thông báo
$signup_error = '';
$signup_success = '';
$signin_error = '';

// Hàm làm sạch dữ liệu đầu vào để tránh XSS và SQL injection
function sanitizeInput($data, $conn) {
    return htmlspecialchars(mysqli_real_escape_string($conn, trim($data)), ENT_QUOTES, 'UTF-8');
}

// Xử lý đăng ký
if (isset($_POST['signup'])) {
    $username = isset($_POST['name']) ? sanitizeInput($_POST['name'], $conn) : '';
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email'], $conn) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Kiểm tra cơ bản
    if (empty($username) || empty($email) || empty($password)) {
        $signup_error = "Vui lòng điền đầy đủ thông tin.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signup_error = "Email không hợp lệ.";
    } elseif (strlen($password) < 8) {
        $signup_error = "Mật khẩu phải có ít nhất 8 ký tự.";
    } else {
        // Hash mật khẩu
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if ($hashedPassword === false) {
            $signup_error = "Lỗi khi mã hóa mật khẩu.";
            error_log("Password hashing failed for email: $email");
        } else {
            // Kiểm tra username đã tồn tại
            $checkUsernameStmt = $conn->prepare("SELECT username FROM users WHERE username = ?");
            if (!$checkUsernameStmt) {
                $signup_error = "Lỗi chuẩn bị truy vấn: " . $conn->error;
                error_log("Prepare statement (check username) failed: " . $conn->error);
            } else {
                $checkUsernameStmt->bind_param("s", $username);
                $checkUsernameStmt->execute();
                $usernameResult = $checkUsernameStmt->get_result();

                if ($usernameResult->num_rows > 0) {
                    $signup_error = "Tên người dùng đã được sử dụng.";
                    $checkUsernameStmt->close();
                } else {
                    $checkUsernameStmt->close();

                    // Kiểm tra email đã tồn tại
                    $checkEmailStmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
                    if (!$checkEmailStmt) {
                        $signup_error = "Lỗi chuẩn bị truy vấn: " . $conn->error;
                        error_log("Prepare statement (check email) failed: " . $conn->error);
                    } else {
                        $checkEmailStmt->bind_param("s", $email);
                        $checkEmailStmt->execute();
                        $emailResult = $checkEmailStmt->get_result();

                        if ($emailResult->num_rows > 0) {
                            $signup_error = "Email đã được sử dụng.";
                            $checkEmailStmt->close();
                        } else {
                            $checkEmailStmt->close();

                            // Chèn dữ liệu vào bảng users
                            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                            if (!$stmt) {
                                $signup_error = "Lỗi chuẩn bị truy vấn: " . $conn->error;
                                error_log("Prepare statement (insert) failed: " . $conn->error);
                            } else {
                                $stmt->bind_param("sss", $username, $email, $hashedPassword);
                                if ($stmt->execute()) {
                                    $signup_success = "Đăng ký thành công! Vui lòng đăng nhập.";
                                } else {
                                    $signup_error = "Lỗi đăng ký: " . $stmt->error;
                                    error_log("Insert failed: " . $stmt->error);
                                }
                                $stmt->close();
                            }
                        }
                    }
                }
            }
        }
    }
}

// Xử lý đăng nhập
if (isset($_POST['signin'])) {
    $email = isset($_POST['email']) ? sanitizeInput($_POST['email'], $conn) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Kiểm tra cơ bản
    if (empty($email) || empty($password)) {
        $signin_error = "Vui lòng điền đầy đủ thông tin.";
    // } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $signin_error = "Email không hợp lệ.";
    } else {
        $stmt = $conn->prepare("SELECT user_id, username, password FROM users WHERE email = ?");
        if (!$stmt) {   
            $signin_error = "Lỗi chuẩn bị truy vấn: " . $conn->error;
            error_log("Prepare statement (signin) failed: " . $conn->error);
        } else {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $user = $result->fetch_assoc();

                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['username'] = $user['username'];
                    header("Location: index.php?page=home");
                    exit();
                } else {
                    $signin_error = "Mật khẩu không đúng.";
                }
            } else {
                $signin_error = "Email không tồn tại.";
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="public/css/style4Form.css" />
    <link rel="icon" href="public/img/logo.ico" type="image/x-icon">
    <title>Login Page | VHuB</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="index.php?page=form">
                <img src="public/img/logoicon.png" alt="Logo" class="form-logo" />
                <h2 class="form-title">Get Started!</h2>
                <p class="form-subtitle">Welcome to VHub! Let's create your account!</p>
                <hr class="form-divider" />
                
                <?php if (!empty($signup_success)): ?>
                    <div class="alert alert-success"><?php echo htmlspecialchars($signup_success); ?></div>
                <?php elseif (!empty($signup_error)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($signup_error); ?></div>
                <?php endif; ?>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="ms.ella@gmail.com" required />
                
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Ella Mary" required />
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="********" required />

                <button type="submit" name="signup" value="signup">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="index.php?page=form">
                <img src="public/img/logoicon.png" alt="Logo" class="form-logo" />
                <h2 class="form-title">Sign In</h2>
                <hr>
                
                <?php if (!empty($signin_error)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($signin_error); ?></div>
                <?php endif; ?>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="ms.ella@gmail.com" required />
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="********" required />

                <button type="submit" name="signin" value="signin" class="btn-red">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="public/js/script4Form.js"></script>
</body>
</html>
<?php
// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>