<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'VHuB'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/style4Home.css">
    <link rel="icon" href="public/img/logo.ico" type="image/x-icon">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php?page=home">
            <img id="logo" src="public/img/Logo50x50.png" alt="VL Logo">
        </a>
        
        <button class="navbar-toggler" type="button" title="Toggle navigation" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3 align-items-center">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        Our Courses
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?page=grammar"><span><img id="grammar" src="public/img/grammar.png" alt=""> Grammar</span></a></li>
                        <li><a class="dropdown-item" href="index.php?page=vocabulary"><span><img id="vocab" src="public/img/vocab.png" alt=""> Vocabulary</span></a></li>
                        <li><a class="dropdown-item" href="index.php?page=listening"><span><img id="listen" src="public/img/listen.png" alt=""> Listening</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=test">Test</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=about">About</a></li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- <a href="index.php?page=dashboard" class="btn rounded-pill me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black;">Dashboard</a> -->
                        <a href="index.php?page=dashboard" style="color: black; text-decoration: none;" class="me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black; border-radius: 50rem;">
                            <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </a>
                        <a href="index.php?page=logout" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Logout</a>
                    <?php else: ?>
                        <a href="index.php?page=form" class="btn rounded-pill me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black;">Log in</a>
                        <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Sign up</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
