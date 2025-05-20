<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>About | VHub</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="public/css/style4Home.css">
<link rel="icon" href="public/img/logo.ico" type="image/x-icon">
<link rel="stylesheet" href="public/css/style4About.css">


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
                  <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=test">Test</a></li>
                  <li class="nav-item"><a class="nav-link text-dark fw-bold" href="index.php?page=about">About</a></li>
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

  <!-- About Hero Section -->
  <section class="about-hero">
  <div class="container">
      <h1 class="about-title text-center">About VHub</h1>
      <div class="row">
          <div class="col-md-6">
              <h2 class="about-heading">Making every student Unstoppable</h2>
              <p class="about-content">
              At our core, we believe that every learner has the power to break through language barriers and reach new heights. <br><br>
              Whether you're just starting or aiming for fluency, our resources empower you to learn at your own pace and gain the confidence to use Vietnamese in any situation.
              </p>
          </div>
          <div class="col-md-6">
              <img src="public/img/about/a1.png" alt="About VHub" class="img-fluid">
          </div>
      </div>
  </div>
  </section>

  <!-- 60 Monthly Learners -->
  <section class="new-section">
  <div class="container">
      <h2 class="about-title text-start">60 Monthly Learners</h2>
      <div class="row">
          <div class="col-md-6">
              <img src="public/img/about/a2.png" alt="Learner Image" class="img-fluid">
          </div>
          <div class="col-md-6">
              <h3 class="section-subtitle">From a single lesson to the world</h3>
              <p class="section-content">
               Every lesson you complete brings you one step closer to understanding the heart of Vietnam and sharing your voice with the world. Let your journey with Vietnamese be the key to new opportunities, friendships, and stories beyond borders.
              </p>
          </div>
      </div>
  </div>
  </section>

  <h2 class="about-title text-center">Our investors</h2>
  <div class="student-list-container">
      <div class="student-card">
          <div class="student-image">
              <img src="public/img/about/m1.png" alt="Su Yi Phyo">
          </div>
          <div class="student-info">
              <h3>Su Yi Phyo</h3>
              <p>52300286</p>
              <p>Faculty of Information Technology</p>
              <p>Ton Duc Thang University</p>
              <p>Ho Chi Minh City, Vietnam</p>
              <p>52300286@student.tdtu.edu.vn</p>
          </div>
      </div>

      <div class="student-card">
          <div class="student-image">
              <img src="public/img/about/m2_1.png" alt="Tiêu Thế Bảo">
          </div>
          <div class="student-info">
              <h3>Tiêu Thế Bảo</h3>
              <p>52300180</p>
              <p>Faculty of Information Technology</p>
              <p>Ton Duc Thang University</p>
              <p>Ho Chi Minh City, Vietnam</p>
              <p>52300180@student.tdtu.edu.vn</p>
          </div>
      </div>

      <div class="student-card">
          <div class="student-image">
              <img src="public/img/about/m3.png" alt="Nguyễn Tường Vy">
          </div>
          <div class="student-info">
              <h3>Nguyễn Tường Vy</h3>
              <p>52300273</p>
              <p>Faculty of Information Technology</p>
              <p>Ton Duc Thang University</p>
              <p>Ho Chi Minh City, Vietnam</p>
              <p>52300273@student.tdtu.edu.vn</p>
          </div>
      </div>
  </div>

  <!-- Footer -->
<?php 
  require_once('layout/footer.php');
?>