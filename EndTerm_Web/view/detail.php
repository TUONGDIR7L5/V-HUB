<?php
// Đảm bảo chỉ chạy trong controller
if (!defined('IN_CONTROLLER')) {
    die('Direct access not allowed');
}

// Kiểm tra tham số type và title
$type = isset($_GET['type']) ? strtolower($_GET['type']) : null;
$title = isset($_GET['title']) ? urldecode($_GET['title']) : null;

if (!$type || !$title || !in_array($type, ['vocabulary', 'listening', 'grammar'])) {
    die('Invalid parameters.');
}

// Dữ liệu mẫu (tương tự index.php)
$data = [];
if ($type === 'vocabulary') {
    $data = [
        ['title' => 'Self Introduction', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/selfIntro.png', 'description' => 'Learn basic phrases to introduce yourself in Vietnamese, such as greetings and personal information.'],
        ['title' => 'Going Shopping', 'level' => 'Intermediate', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/shopping.png', 'description' => 'Vocabulary for shopping scenarios, including asking for prices and items in a store.'],
        ['title' => 'Traveling', 'level' => 'Intermediate', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/traveling.png', 'description' => 'Essential travel vocabulary for navigating airports, hotels, and tourist attractions.'],
        ['title' => 'What time is it?', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/clock.png', 'description' => 'Learn how to ask and tell the time in Vietnamese with simple phrases.'],
        ['title' => 'Culture', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/culture.png', 'description' => 'Key cultural terms to understand Vietnamese traditions and customs.'],
        ['title' => 'Family Members', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/family.png', 'description' => 'Vocabulary for family members and how to talk about your family in Vietnamese.'],
        ['title' => 'Counting Numbers', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/countNum.png', 'description' => 'Learn to count numbers in Vietnamese, from 1 to 100 and beyond.'],
        ['title' => 'Technology', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Advanced vocabulary related to technology, gadgets, and digital terms.'],
        ['title' => 'Hobbies', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/hobby.png', 'description' => 'Words and phrases to describe hobbies and interests in Vietnamese.'],
        ['title' => 'Technology 2', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'More advanced technology terms for professional use.'],
        ['title' => 'Technology 3', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Technical vocabulary for IT and software development.'],
        ['title' => 'Technology 4', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Terms related to cybersecurity and data privacy.'],
        ['title' => 'Technology 5', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Vocabulary for artificial intelligence and machine learning.'],
        ['title' => 'Technology 6', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Terms for cloud computing and networking.'],
        ['title' => 'Technology 7', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Vocabulary for mobile app development.'],
        ['title' => 'Technology 8', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Terms for blockchain and cryptocurrency.'],
        ['title' => 'Technology 9', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Vocabulary for IoT (Internet of Things).'],
        ['title' => 'Technology 10', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png', 'description' => 'Terms for robotics and automation.'],
    ];
} elseif ($type === 'listening') {
    $data = [
        ['title' => 'Greetings Audio', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/greetings.png', 'description' => 'Practice listening to basic greetings in Vietnamese through audio clips.'],
        ['title' => 'Shopping Dialogue', 'level' => 'Intermediate', 'category' => 'Listening', 'image' => 'public/img/listen/shopping.png', 'description' => 'Listen to a dialogue between a customer and a shopkeeper in a Vietnamese market.'],
        ['title' => 'Travel Conversation', 'level' => 'Intermediate', 'category' => 'Listening', 'image' => 'public/img/listen/travel.png', 'description' => 'Audio of a conversation between a traveler and a local guide in Vietnam.'],
        ['title' => 'Time Questions Audio', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/time.png', 'description' => 'Practice listening to questions and answers about the time in Vietnamese.'],
        ['title' => 'Cultural Talk', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/culture.png', 'description' => 'An audio clip discussing Vietnamese culture and traditions.'],
        ['title' => 'Family Discussion', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/family.png', 'description' => 'Listen to a family discussing their daily routines in Vietnamese.'],
        ['title' => 'Counting Practice', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/numbers.png', 'description' => 'Audio practice for counting numbers in Vietnamese.'],
        ['title' => 'Tech Podcast', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'A podcast episode discussing the latest technology trends in Vietnamese.'],
        ['title' => 'Hobby Interview', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/hobby.png', 'description' => 'An interview with someone talking about their hobbies in Vietnamese.'],
        ['title' => 'Tech Podcast 2', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Another podcast episode on technology, focusing on AI.'],
        ['title' => 'Tech Podcast 3', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Podcast discussing cybersecurity in Vietnamese.'],
        ['title' => 'Tech Podcast 4', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Audio on cloud computing trends.'],
        ['title' => 'Tech Podcast 5', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Podcast episode about blockchain technology.'],
        ['title' => 'Tech Podcast 6', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Discussion on IoT in Vietnamese.'],
        ['title' => 'Tech Podcast 7', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Podcast on mobile app development trends.'],
        ['title' => 'Tech Podcast 8', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Audio discussing robotics in Vietnamese.'],
        ['title' => 'Tech Podcast 9', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Podcast on automation technologies.'],
        ['title' => 'Tech Podcast 10', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png', 'description' => 'Advanced listening practice on tech innovations.'],
    ];
} elseif ($type === 'grammar') {
    $data = [
        ['title' => 'Basic Sentence Structure', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/sentence.png', 'description' => 'Learn the basic structure of Vietnamese sentences: subject, verb, object.'],
        ['title' => 'Verb Conjugation', 'level' => 'Intermediate', 'category' => 'Grammar', 'image' => 'public/img/grammar/verb.png', 'description' => 'Understand how verbs are conjugated in Vietnamese for different tenses.'],
        ['title' => 'Tenses Overview', 'level' => 'Intermediate', 'category' => 'Grammar', 'image' => 'public/img/grammar/tenses.png', 'description' => 'An overview of past, present, and future tenses in Vietnamese.'],
        ['title' => 'Question Formation', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/question.png', 'description' => 'How to form questions in Vietnamese using question words.'],
        ['title' => 'Cultural Grammar Notes', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/culture.png', 'description' => 'Grammar rules influenced by Vietnamese culture and politeness.'],
        ['title' => 'Family Grammar', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/family.png', 'description' => 'Grammar for talking about family members and relationships.'],
        ['title' => 'Numbers in Sentences', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/numbers.png', 'description' => 'How to use numbers in Vietnamese sentences correctly.'],
        ['title' => 'Advanced Syntax', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Advanced sentence structures for formal and academic writing.'],
        ['title' => 'Hobby Sentences', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/hobby.png', 'description' => 'Sentence structures to describe hobbies in Vietnamese.'],
        ['title' => 'Advanced Syntax 2', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'More complex syntax for professional communication.'],
        ['title' => 'Advanced Syntax 3', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Syntax for legal and technical documents in Vietnamese.'],
        ['title' => 'Advanced Syntax 4', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Advanced grammar for storytelling in Vietnamese.'],
        ['title' => 'Advanced Syntax 5', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Grammar rules for persuasive writing in Vietnamese.'],
        ['title' => 'Advanced Syntax 6', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Complex sentence structures for academic essays.'],
        ['title' => 'Advanced Syntax 7', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Grammar for formal speeches in Vietnamese.'],
        ['title' => 'Advanced Syntax 8', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Advanced syntax for business communication.'],
        ['title' => 'Advanced Syntax 9', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Grammar for writing technical manuals in Vietnamese.'],
        ['title' => 'Advanced Syntax 10', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png', 'description' => 'Advanced grammar for creative writing in Vietnamese.'],
    ];
}

// Tìm mục khớp với title
$detail_item = null;
foreach ($data as $item) {
    if ($item['title'] === $title) {
        $detail_item = $item;
        break;
    }
}

if (!$detail_item) {
    die('Item not found.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Detail - <?php echo htmlspecialchars($detail_item['title']); ?> | VHuB</title>
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
                      <a class="nav-link" href="index.php?page=home">Home</a>
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
                          <a href="index.php?page=dashboard" class="btn btn-login me-2 px-4 py-1">
                              <?php echo htmlspecialchars($_SESSION['username']); ?>
                          </a>
                          <a href="index.php?page=logout" class="btn btn-signup px-4 py-1">Logout</a>
                      <?php else: ?>
                          <a href="index.php?page=form" class="btn btn-login me-2 px-4 py-1">Log in</a>
                          <a href="index.php?page=form" class="btn btn-signup px-4 py-1">Sign up</a>
                      <?php endif; ?>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- Nội dung -->
  <div class="container py-4">
    <div class="mb-4">
        <h1><?php echo htmlspecialchars($detail_item['title']); ?></h1>
        <p class="text-muted"><?php echo htmlspecialchars($detail_item['level']); ?> - <?php echo htmlspecialchars($detail_item['category']); ?></p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo htmlspecialchars($detail_item['image']); ?>" class="img-fluid rounded" alt="<?php echo htmlspecialchars($detail_item['title']); ?>" style="max-height: 300px; object-fit: cover;">
        </div>
        <div class="col-md-8">
            <h3>Description</h3>
            <p><?php echo htmlspecialchars($detail_item['description']); ?></p>
            <a href="index.php?page=<?php echo htmlspecialchars($type); ?>" class="btn btn-warning mt-3">Back to <?php echo htmlspecialchars(ucfirst($type)); ?></a>
        </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-light text-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-4">
                <img id="logo-in-footer" src="public/img/logoFooter.png" alt="Logo Footer">
                <p id="text-in-footer">
                    We're always finding out the best ways to help you master in learning Vietnamese!
                </p>
            </div>
            <div class="col-md-7 mb-4">
                <div class="row">
                    <div class="col-md-4">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="index.php?page=test" class="text-dark text-decoration-none">Test</a></li>
                            <li><a href="index.php?page=vocabulary" class="text-dark text-decoration-none">Courses</a></li>
                            <li><a href="index.php?page=blog" class="text-dark text-decoration-none">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Terms & Conditions</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-dark text-decoration-none">Privacy</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Terms of Use</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Social Media</h5>
                        <div class="social-grid">
                            <a href="#" class="text-dark"><i class="bi bi-envelope"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-instagram"></i></a>
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