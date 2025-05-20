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
                    <a class="nav-link " href="index.php?page=home">Home</a>
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

<div class="blog-header">
    <div class="container">
      <h1 class="blog-title">How I Learned Vietnamese in 6 Months</h1>
      <p class="blog-subtitle">My Learning Journey Starts Here!!</p>
    </div>
</div>

<div class="container">
    <div class="blog-post">
      
      <div class="blog-intro">
          <p>Six months ago, I couldn’t say a single word in Vietnamese. Now, I can hold casual conversations, understand daily life expressions, and even make native speakers smile when I speak. It wasn’t always smooth—but it was one of the most rewarding experiences I’ve ever had.</p>
          <p><strong>Here’s my story.</strong></p>
      </div>
      
      <div class="month-section">
          <h2 class="month-title"><img src="public/img/blog/lich.png" alt="Calendar Icon" class="month-icon"> Month 1: The Beginning Was Humbling</h2>
          <div class="month-text">
              <p>I still remember my first Vietnamese word: <em>xin chào</em>. It felt simple—but the tones? Not so much.</p>
              <p>In the beginning, I struggled a lot. Every word sounded the same, and I couldn’t even tell what people were saying. But instead of getting discouraged, I laughed at my mistakes and just kept listening.</p>
              <p>I spent a lot of time just getting used to the sounds—like background music I was slowly learning the lyrics to.</p>
          </div>
      </div>
      
      <div class="month-section">
          <h2 class="month-title"><img src="public/img/blog/lich.png" alt="Calendar Icon" class="month-icon"> Month 2–3: Speaking Before I Was Ready</h2>
          <div class="month-text">
              <p>I didn’t wait until I was “good enough” to start speaking. I just… started.</p>
              <p>I greeted the lady at the coffee shop. I ordered <em>phở</em> using broken sentences. I asked for help with pronunciation. Most people were surprised, then happy to help.</p>
              <p>I still made embarrassing mistakes. I once said something about <em>chết</em> (to die) instead of <em>trệt</em> (ground floor) when asking for directions. But every mistake became a story—and I remembered the correct word forever.</p>
          </div>
      </div>
      
      <div class="month-section">
          <h2 class="month-title"><img src="public/img/blog/lich.png" alt="Calendar Icon" class="month-icon"> Month 4: Immersed in Vietnamese Life</h2>
          <div class="month-text">
              <p>By month four, I surrounded myself with Vietnamese as much as I could.</p>
              <p>I watched dramas with subtitles, listened to Vietnamese music, and followed Vietnamese creators on social media. I wasn’t always trying to learn—I was just enjoying it. And somehow, the language started sticking.</p>
              <p>Suddenly, I recognized words on the street, caught phrases in conversations, and began replying without translating in my head.</p>
          </div>
      </div>
      
      <div class="month-section">
          <h2 class="month-title"><img src="public/img/blog/lich.png" alt="Calendar Icon" class="month-icon"> Month 5–6: Real Conversations, Real Confidence</h2>
          <div class="month-text">
              <p>In month five, I had my first full conversation without switching to English. It was a small chat about street food, but I’ll never forget how proud I felt.</p>
              <p>From that point, things snowballed. I talked more, listened better, and stopped overthinking. I wasn’t fluent, but I was functional—and that gave me the motivation to keep going.</p>
              <p>People started complimenting my Vietnamese. That meant the world to me.</p>
          </div>
      </div>
      
      <div class="blog-reflection">
          <p>It wasn’t magic. It was just showing up every day, being okay with sounding silly, and letting curiosity lead the way. Six months changed everything. I’m not perfect, and I still have a long way to go—but I’m proud of how far I’ve come.</p>
      </div>
      
      <div class="upload-time">Uploaded 16 minutes ago</div>
  </div>
</div>

<link rel="stylesheet" href="public/css/style4Blog2.css">
<?php
include 'layout/footer.php';
?>