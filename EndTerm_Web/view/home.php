<?php

// index.php
$pageTitle = "Home | VHuB";
require_once 'layout/header.php';
?>

<!-- Hero Section -->
<section class="py-5">
  <div class="container d-flex align-items-center justify-content-between flex-wrap">
    <div class="col-md-6">
      <h2 class="fw-bold" style="font-family: monospace; padding-bottom: 50px">
        Smart Learning<br>
        Deeper & More<br>
        <span style="color: red;">-AMAZING</span>
      </h2>
      <p class="text-muted">
        Unlock Vietnamese with fun, interactive lessons! Learn through real-life conversations,
        quizzes, and cultural insights. Start today and speak with confidence!
      </p>
      <a href="index.php?page=test" class="btn btn-light border border-warning px-4 py-2 rounded-pill" title="Start Learning Now">
          Start Learning now
      </a>

    </div>
    <div class="col-md-5 position-relative mt-4 mt-md-0">
      <img src="public/img/happyStudent.png" alt="Happy Student" class="img-fluid">
    </div>
  </div>
</section>

<div class="container">
  <p class="contentBetw">
      We are passionate about empowering leaders world wide with high quality,  
      <br>accessible education. Our mission is offering a diverse range of Vietnamese courses.
  </p>
</div>

<!-- Statistics Section -->
<section class="py-4 bg-light">
  <div class="container d-flex justify-content-between text-center">
    <div class="stat-box">
      <h4>25+</h4><p>Years of Experiences</p>
    </div>
    <div class="stat-box">
      <h4>25+</h4><p>Years of Experience</p>
    </div>
    <div class="stat-box">
      <h4>25+</h4><p>Years of Students</p>
    </div>
  </div>
</section>

<!-- Courses Section -->
  <section class="py-5">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 id="exploreCourses">Explore Courses</h4>
        <div class="search-bar-container">
            <div class="search-bar">
                <div class="icon">
                    <img src="public/img/searchIcon.png" alt="Search Icon">
                </div>
                <input id="search" type="text" placeholder="Search Courses">
            </div>
        </div>
      </div>
      <div class="row g-4">
        <!-- Repeat course cards -->
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Course Card 1 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/home/traveling.png" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Traveling</h5>
                            <p class="card-text">Internmediate - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 2 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/home/shopping.png" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Going Shopping</h5>
                            <p class="card-text">Internmediate - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 3 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/home/countNum.png" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Counting Numbers</h5>
                            <p class="card-text">Beginner - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 4 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/home/tellingDirect.png" class="card-img-top" alt="Image 4">
                        <div class="card-body">
                            <h5 class="card-title">Telling Directions</h5>
                            <p class="card-text">Beginner - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 5 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/home/culture.png" class="card-img-top" alt="Image 5">
                        <div class="card-body">
                            <h5 class="card-title">Culture</h5>
                            <p class="card-text">Advanced - Vocabulary</p>
                        </div>
                    </div>
                </div>
                <!-- Course Card 6 -->
                <div class="col">
                    <div class="card">
                        <img src="public/img/home/selfIntro.png" class="card-img-top" alt="Image 6">
                        <div class="card-body">
                            <h5 class="card-title">Self Introduction</h5>
                            <p class="card-text">Beginner - Vocabulary</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add more cards as needed -->
      </div>
      <div class="text-center mt-4">
        <button type="button" id="browse-all-courses" class="btn btn-warning">Browse All Courses</button>
      </div>
    </div>
  </section>


  <!-- Take Test Section -->
  <!-- <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="public/img/studentTakesBooks.png" class="img-fluid" alt="Subscribe" />
        </div>
        <div class="col-md-6 text-center text-md-start">
          <h3 class="fw-bold take-test-heading">Start today and learn with confidence!</h3>
          <p id="phrase-taketest">
            Unlock Vietnamese with fun, interactive lessons! Learn through real-life conversations, quizzes, and cultural insights. Start today and speak with confidence!
          </p>
          <button type="button" class="btn btn-warning text-uppercase">Take test</button>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Take Test Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 text-center">
          <h3 class="fw-bold take-test-heading">Start today and learn with confidence!</h3>
          <button type="button" class="btn btn-take-test mt-4">Take test</button>
        </div>
        <div class="col-md-7 text-center">
          <div class="take-test-content">
            <p id="phrase-taketest">
              Unlock Vietnamese with fun, interactive lessons! Learn through the vocabs and grammar
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- What are you looking for -->
  <div class="container text-center my-5">
    <h1 class="title">What you looking for?</h1>
    <p class="text-muted">Unlock Vietnamese with fun, interactive lessons! Don’t wait anymore! Join now!</p>

    <div class="row justify-content-center mt-5 g-4">
      <div class="col-12 col-md-5">
        <div class="card card-custom card-spacing">
            <!-- Thay đổi thẻ img này bằng nội dung truyền vào -->
            <img class="slot1" src="public/img/home/lantern.png" alt="">
        </div>
      </div>
      <div class="col-12 col-md-5">
        <div class="card card-custom card-spacing">
          <!-- Thay đổi thẻ img này bằng nội dung truyền vào -->
          <img class="slot2" src="public/img/home/aodai.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- Who We Teach Section -->
  <section class="py-5">
    <div class="container text-center my-5">
      <h1 class="title">Who We Teach</h1>
      <p class="text-muted">We offer engaging lessons tailored for diverse learners to master Vietnamese.</p>

      <div class="row justify-content-center mt-5 g-4">
        <div class="col-12 col-md-5">
          <div class="card card-custom-who card-spacing">
            <div class="card-body">
              <!-- <img src="public/img/lightning.png" alt="Lightning Icon" class="mini-logo mb-2"> -->
              <h5 class="card-title">For Foreigners</h5>
              <p class="card-text">Learn the professional vocabulary and grammar you need to achieve your goals.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-5">
          <div class="card card-custom-who card-spacing">
            <div class="card-body">
              <!-- <img src="public/img/graduation-cap.png" alt="Graduation Cap Icon" class="mini-logo mb-2"> -->
              <h5 class="card-title">For Students</h5>
              <p class="card-text">Prepare for your study in Vietnam. We will help you gain confidence and enhance communication with local people.</p>
            </div>
          </div>
        </div>
      </div>
      <p class="contentBetw mt-4">And for everyone who is eager to learn Vietnamese!</p>
    </div>
  </section>

  <!-- Frequently Asked Questions Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row" style="color: #F58E42">
        <div class="col-md-3 d-flex align-items-start">
          <h2 class="title faq-title">Frequently Asked Questions</h2>
        </div>
        <div class="col-md-9">
          <div class="accordion mt-4 mt-md-0" id="faqAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  How can I access the lessons?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You have to log in to access the lesson. When you click on details, it will lead to the login page and after successful login, you can easily start to learn.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do I contact you?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can reach us through the contact form on our website or email us directly at support@vhub.com.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  What is this website about?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  This website is dedicated to helping you learn Vietnamese through interactive lessons, real-life conversations, quizzes, and cultural insights.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Are there certificates after completion?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, we provide certificates upon successful completion of our courses to acknowledge your learning achievements.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
require_once 'layout/footer.php';
?>