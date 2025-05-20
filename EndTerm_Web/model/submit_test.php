<?php
// Suppress default PHP error output to prevent HTML
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL); // Vẫn ghi lại lỗi để gỡ lỗi

// Ghi lỗi vào tệp thay vì hiển thị
ini_set('log_errors', 1);
ini_set('error_log', 'đường_dẫn/đến/php-error.log');
ob_start();

// Include database configuration
include dirname(__DIR__) . '/config/config.php';

// Set content type to JSON
header('Content-Type: application/json');

// Function to return JSON error
function returnJsonError($message) {
    echo json_encode(["message" => $message]);
    ob_end_flush();
    exit;
}

// Check database connection
if (!$conn) {
    returnJsonError("Database connection failed: " . mysqli_connect_error());
}

// Nhận dữ liệu JSON từ client
$inputData = json_decode(file_get_contents("php://input"), true);

// Kiểm tra nếu không có dữ liệu từ client
if (empty($inputData)) {
    returnJsonError("You didn't complete the test.");
}

// Tính điểm số
$correctAnswers = 0;
foreach ($inputData as $questionId => $answerId) {
    // Lấy câu trả lời đúng từ database
    $sql = "SELECT correct_answer_id FROM questions WHERE question_id = ?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        returnJsonError("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("i", $questionId);
    if (!$stmt->execute()) {
        returnJsonError("Execute failed: " . $stmt->error);
    }
    $result = $stmt->get_result();
    
    $row = $result->fetch_assoc();
    if ($row && $row['correct_answer_id'] == $answerId) {
        $correctAnswers++;  // Tăng điểm nếu câu trả lời đúng
    }
    $stmt->close();
}

// Đóng kết nối
$conn->close();

// Trả về điểm số về client
echo json_encode(["score" => $correctAnswers]);
ob_end_flush();
?>