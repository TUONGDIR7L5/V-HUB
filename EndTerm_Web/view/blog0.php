<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>How to Stay Motivated in Language Learning - Blog | VHuB</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style4Home.css">
  <link rel="icon" href="public/img/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="public/css/style4Blog.css">
  <style>

        h2 {
            color: #000; /* Black for section headings */
            margin-top: 20px;
            font-weight: bold;
        }
        h2::before {
            content: "⭐ "; /* Default emoji, will be overridden by specific ones */
            margin-right: 5px;
        }
        h2:nth-child(2)::before {
            content: "🎯 "; /* Icon for Set Clear, Achievable Goals */
        }
        h2:nth-child(4)::before {
            content: "⏰ "; /* Icon for Create a Routine, Not a Burden */
        }
        h2:nth-child(6)::before {
            content: "📚 "; /* Icon for Use Diverse Learning Materials */
        }
        h2:nth-child(8)::before {
            content: "💡 "; /* Icon for Remember Your “Why” */
        }
        p, li {
            color: #333; /* Dark gray for body text and list items */
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
        }
        .content p, ul {
            font-size: 20px;
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
                    <p class="text-muted mb-3"style="font-size: 20px">
                        Learning a new language can be one of the most rewarding journeys—but it’s also one of the longest. Whether you're learning Vietnamese, English, or any other language, staying motivated is often the biggest challenge. In this blog post, we’ll explore practical, real-life strategies to keep your energy high and your goals on track.
                    </p>
                </div>
            </div>
        </div>
    </section>

   <div class="container">
        <div class="content">
            <h2>1. Set Clear, Achievable Goals</h2>
            <p>Learning a new language is a long journey. Instead of aiming for fluency, set smaller, measurable goals to track your progress:</p>
            <ul>
                <li>Learn 10 new words a day.</li>
                <li>Hold a 5-minute conversation with a native speaker.</li>
                <li>Watch a short video without subtitles.</li>
            </ul>
            <p>These milestones provide quick wins and a sense of progress.</p>

            <h2>2. Create a Routine, Not a Burden</h2>
            <p>Consistency beats intensity. Even 15–30 minutes a day is better than cramming once a week. Add language learning to your existing habits:</p>
            <ul>
                <li>Listen to a podcast during your commute.</li>
                <li>Review vocabulary with flashcards while waiting in line.</li>
                <li>Read one article before bed.</li>
            </ul>

            <h2>3. Use Diverse Learning Materials</h2>
            <p>Monotony kills motivation. Keep it fun by mixing up your resources:</p>
            <ul>
                <li>Songs, dramas, and movies.</li>
                <li>Comic books or novels.</li>
                <li>Language apps like Duolingo, Memrise, or Anki.</li>
                <li>Online courses or YouTube lessons.</li>
            </ul>
            <p>The more engaging it is, the more you’ll want to learn!</p>

            <h2>4. Remember Your “Why”</h2>
            <p>Why did you start learning this language? Reflect on your purpose:</p>
            <ul>
                <li>Travel?</li>
                <li>Career goals?</li>
                <li>Making friends?</li>
                <li>Understanding culture?</li>
            </ul>
            <p>Write down your reason and keep it visible. On tough days, your “why” will keep you motivated.</p>

            <p>Language learning isn’t a race—it’s a lifestyle. Stay connected to your purpose, keep it fun, and motivation will follow. Keep going. The future you, who can speak a whole new language, will thank you!</p>
            <div class="uploaded-2-days-ago" style="text-align: end;color:rgba(0, 0, 0, 0.25)">Uploaded 2 days ago</div>
        </div>
    </div>


    <script src="public/js/script4Blog.js"></script>
    <!-- Footer -->
<?php
    require_once('layout/footer.php');
?>