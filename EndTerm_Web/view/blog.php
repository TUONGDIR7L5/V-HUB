<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog | VHuB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style4Home.css">
  <link rel="icon" href="public/img/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/css/style4Blog.css">
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
                    <li class="nav-item"><a class="nav-link text-dark fw-bold" href="index.php?page=blog">Blog</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=test">Test</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="index.php?page=about">About</a></li>
                    <li class="nav-item">
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <span class="me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black; border-radius: 50rem;"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                            <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Logout</a>
                        <?php else: ?>
                            <a href="index.php?page=form" class="btn rounded-pill me-2 px-4 py-1" style="background-color: #fff8d4; border: 1px solid black;">Log in</a>
                            <a href="index.php?page=form" class="btn rounded-pill px-4 py-1" style="background-color: #fff8d4; border: 1px solid #f58e42;">Sign up</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Cột trái: Hình ảnh -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="image-container">
                        <img src="public/img/blog/mainIMG.png" alt="Hero Image">
                    </div>
                </div>
                <!-- Cột phải: Văn bản -->
                <div class="col-md-6">
                    <div class="tag-container mb-2">
                        <span class="badge">New!</span>
                        <span class="read-time">3 min read</span>
                    </div>
                    <h1 class="fw-bold mb-3">How to Stay Motivated in Language Learning</h1>
                    <p class="text-muted mb-3">Learning a new language can be one of the most rewarding journeys—but it’s also one of the longest. Whether you’re learning Vietnamese, English, or any other language...</p>
                    <a href="index.php?page=blog?type=detail0" class="text-primary text-decoration-none">Read more...</a>
                </div>
            </div>
        </div>
    </section>

   <!-- Recent Articles -->
    <div class="section" style="padding-top: 20px;">
        <div class="container">
            <h2>Our Recent Articles:</h2>
            <div id="recentArticlesCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#recentArticlesCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#recentArticlesCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="article">
                                    <div class="image-container">
                                        <img src="public/img/blog/ORA1.png" alt="Article Image">
                                    </div>
                                    <div class="article-text">
                                        <h3>From Beginner to Confident Speaker</h3>
                                        <p>Everyone only know how to say “Hello”, “Thank you”...</p>
                                        <a href="#">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="article">
                                    <div class="image-container">
                                        <img src="public/img/blog/ORA2.png" alt="Article Image">
                                    </div>
                                    <div class="article-text">
                                        <h3>Vietnamese Festivals You Shouldn’t Miss</h3>
                                        <p>Vietnam is a country rich in traditions, its festivals are some of the most lively...</p>
                                        <a href="index.php?page=blog?type=detail1">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="article">
                                    <div class="image-container">
                                        <img src="public/img/blog/ORA3.png" alt="Article Image">
                                    </div>
                                    <div class="article-text">
                                        <h3>What Makes Vietnamese Culture Unique?</h3>
                                        <p>Vietnam is a country of breathtaking landscapes, flavourful cuisine, and deep...</p>
                                        <a href="#">Read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="article">
                                    <div class="image-container">
                                        <img src="public/img/blog/ORA4.png" alt="Article Image">
                                    </div>
                                    <div class="article-text">
                                        <h3>Vietnamese Cuisine: Taste to Heaven</h3>
                                        <p>Vietnamese cuisine is famous for its deep embedded in the country history...</p>
                                        <a href="#">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="article">
                                    <div class="image-container">
                                        <img src="public/img/blog/ORA5.png" alt="Article Image">
                                    </div>
                                    <div class="article-text">
                                        <h3>Vietnamese Language: Is It Difficult???</h3>
                                        <p>Is it Vietnamese hard to learn??? Most people asked me when they heard that I...</p>
                                        <a href="#">Read more...</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="article">
                                    <div class="image-container">
                                        <img src="public/img/blog/ORA6.png" alt="Article Image">
                                    </div>
                                    <div class="article-text">
                                        <h3>Vietnamese Beaches: Worth the Visit?</h3>
                                        <p>Among its myriad other natural wonders, the country’s 3400km (2113 miles) of coast...</p>
                                        <a href="#">Read more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nút điều hướng -->
                <button class="carousel-control-prev" type="button" data-bs-target="#recentArticlesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#recentArticlesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>


    <!-- Our Student's Voice -->
    <div class="section">
        <div class="container">
            <div class="row">
                <!-- Cột 1: Tiêu đề -->
                <div class="col-md-4">
                    <h2>Our Student's Voice:</h2>
                </div>
                <!-- Cột 2: Danh sách bài viết -->
                <div class="col-md-8">
                    <div class="grid">
                        <div class="student-voice">
                            <div class="image-container">
                                <img src="public/img/blog/OSV1.png" alt="Student Image">
                            </div>
                            <div>
                                <h3>Why I Chose to Learn Vietnamese</h3>
                                <p>Whether you're a beginner or looking to improve your teammates with and talk...</p>
                                <a href="#">Read more...</a>
                            </div>
                        </div>
                        <div class="student-voice">
                            <div class="image-container">
                                <img src="public/img/blog/OSV2.png" alt="Student Image">
                            </div>
                            <div>
                                <h3>How I Learned Vietnamese in 6 Months</h3>
                                <p>How one student transformed their language skills in just 3 months...</p>
                                <a href="index.php?page=blog?type=detail2">Read more...</a>
                            </div>
                        </div>
                        <div class="student-voice">
                            <div class="image-container">
                                <img src="public/img/blog/OSV3.png" alt="Student Image">
                            </div>
                            <div>
                                <h3>How I Handle Stress While Studying in Vietnam</h3>
                                <p>A testimonial from a student who achieved top marks using our system...</p>
                                <a href="#">Read more...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/script4Blog.js"></script>
    <!-- Footer -->
<?php
    require_once('layout/footer.php');
?>