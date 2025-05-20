<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vocab - Our Courses | VHuB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style4Vocab.css">
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
                      <a class="nav-link " href="index.php?page=home">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
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
                        <a href="index.php?page=dashboard" style="color: black; text-decoration: none;" class="me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black; border-radius: 50rem;">
                            <?php echo htmlspecialchars($_SESSION['username']); ?>
                        </a>                          <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Logout</a>
                      <?php else: ?>
                          <a href="index.php?page=form" class="btn rounded-pill me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black;">Log in</a>
                          <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Sign up</a>
                      <?php endif; ?>
                  </li>
              </ul>
          </div>
      </div>
  </nav>  
  <!-- Nội dung -->
  <div class="container py-4">
    <div class="mb-4">
        <p id="title-vocabulary" style="color:rgba(99, 99, 99, 0.662)">Vocabulary</p>
        <h3><img src="public/img/vocab.png" alt="books" class="me-2"/>Vietnamese Vocabulary</h3>
        <p>Whether you're a beginner or looking to improve your Vietnamese skills, we provide easy-to-follow lessons, interactive exercises, and practical vocabulary to help you learn effectively.</p>
        
        <div class="vocab-keywords">
          <span>Vocabulary</span> 
          <span>Vietnamese</span> 
          <span>Vocab</span>
        </div>
      </div>

    <!-- Tabs and Search -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <ul class="nav nav-tabs border-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted" href="#">Basic</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted" href="#">Intermediate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-muted" href="#">Advanced</a>
        </li>
      </ul>
      <div class="search-container">
        <div class="icon">
            <img src="public/img/searchIcon.png" alt="Seach">
        </div>
        <input type="text" class="form-control search-bar" placeholder="Search Courses" style="width: 200px;">
      </div>
    </div>

    <div class="row g-4">
        <!-- Repeat course cards -->
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Course Card 1 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/selfIntro.png" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Self Introduction</h5>
                            <p class="card-text">Beginer - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 2 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/shopping.png" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Going Shopping</h5>
                            <p class="card-text">Internmediate - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 3 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/traveling.png" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Traveling</h5>
                            <p class="card-text">Internmediate - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 4 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/clock.png" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h5 class="card-title">What time is it?</h5>
                            <p class="card-text">Beginer - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 5 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/culture.png" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title">Culture</h5>
                            <p class="card-text">Beginer - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 6 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/family.png" class="card-img-top" alt="Image 6">
                        <div class="card-body">
                            <h5 class="card-title">Family Members</h5>
                            <p class="card-text">Beginner - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 7 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/countNum.png" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Counting Numbers</h5>
                            <p class="card-text">Beginner - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 8 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/tech.png" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h5 class="card-title">Technology</h5>
                            <p class="card-text">Advanced - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 9  -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/vocab/hobby.png" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title">Hobbies</h5>
                            <p class="card-text">Beginer - Vocabulary</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-between align-items-center mt-4">
      <div class="text-muted">Previous</div>
      <div class="pagination mb-0">
        <span class="me-3 text-warning">1</span>
        <span class="me-3 text-muted">2</span>
        <span class="text-muted">3</span>
      </div>
      <div class="text-warning d-flex align-items-center">Next <span class="ms-1">&rarr;</span></div>
    </div>
  </div>

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
      
</body>
</html>
