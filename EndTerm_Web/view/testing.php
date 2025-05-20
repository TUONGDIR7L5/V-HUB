<?php 
  include 'config/config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test | VHuB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" href="public/img/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/css/style4Test.css">
  <link rel="stylesheet" href="public/css/style4Home.css">

  <style>
    /* CSS tối giản chỉ cho phần không thể thực hiện bằng Bootstrap */
    .highlight-box {
        background-color: #fdf6d9;
        height: 350px;
    }
      
    .highlight-box img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
      
    /* Custom button styles */
    .btn-primary {
        background-color: #F9F3CE;
        color: #333;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15) !important;
        transition: all 0.3s ease;
    }
      
    .btn-primary:hover {
        background-color: #fff3a5;
        color: #222;
        border-color: #ccc;
        box-shadow: none;
        transform: translateY(3px);
  
    }
      
    @media (max-width: 768px) {
        .highlight-box {
          height: 250px;
        }
    }
  </style>
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
                    <a class="nav-link" href="index.php?page=home">Home</a>
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
                <li class="nav-item"><a class="nav-link text-dark fw-bold" href="index.php?page=test">Test</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=about">About</a></li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <a href="index.php?page=dashboard" style="color: black; text-decoration: none;" class="me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black; border-radius: 50rem;">
                            <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </a>                        <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Logout</a>
                    <?php else: ?>
                        <a href="index.php?page=form" class="btn rounded-pill me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black;">Log in</a>
                        <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Sign up</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Test Section -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <!-- Image Column (6) -->
      <div class="col-lg-6">
        <div class="highlight-box rounded-3 overflow-hidden shadow">
          <img src="public/img/takingTest.jpg" class="w-100" alt="Vietnamese language test">
        </div>
      </div>
      
      <!-- Text Column (6) -->
      <div class="col-lg-6">
        <div class="ps-lg-5">
          <h2 class="fw-bold mb-4">Are you ready to take the test?</h2>
          <p class="lead mb-4 text-secondary">
            Whether you're a beginner or looking to improve your Vietnamese skills, we provide easy-to-follow lessons, interactive exercises, and practical vocabulary to help you learn effectively.
          </p>
          <a href="index.php?page=takingTest" class="btn btn-primary px-4 py-2 rounded-pill fw-semibold shadow-sm">
              Start Testing Now
          </a>
            
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- Footer -->
 <footer class="bg-light text-dark py-4">
    <div class="container">
      <div class="row">
        <!-- Cột đầu tiên chiếm 5 phần -->
        <div class="col-md-5 mb-4">
          <img id="logo-in-footer" src="public/img/logoFooter.png" alt="Logo Footer">
          <p id="text-in-footer">
            We're always finding out the best ways to help you master in learning Vietnamese!
          </p>
        </div>
  
        <!-- Cột thứ hai chiếm 7 phần và được chia 3 phần con -->
        <div class="col-md-7 mb-4">
          <div class="row">
            <!-- Phần con 1 -->
            <div class="col-md-4">
              <h5>Quick Links</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-dark text-decoration-none">Test</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Courses</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Blog</a></li>
              </ul>
            </div>
            <!-- Phần con 2 -->
            <div class="col-md-4">
              <h5>Terms & Conditions</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="text-dark text-decoration-none">Privacy</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Terms of Use</a></li>
                <li><a href="#" class="text-dark text-decoration-none">Contact</a></li>
              </ul>
            </div>
            <!-- Phần con 3 -->
            <div class="col-md-4">
              <h5>Social Media</h5>
              <div class="social-grid">
                <a href="#" class="text-dark me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-dark"><i class="bi bi-twitter-x"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>