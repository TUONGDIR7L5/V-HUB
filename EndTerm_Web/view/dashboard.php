<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | VHuB</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="public/css/style4Dashboard.css">
  <link rel="icon" type="image/x-icon" href="public/img/logo.ico">

</head>
<body>
  <!-- Side Bar -->
  <nav class="sidebar">
    <div class="logo">
    <a href="index.php?page=home">
        <img src="public/img/Logo50x50.png" alt="Logo">
    </a>
    </div>

    <div class="nav-main">
        <div class="nav-section-title">Overview</div>
        <ul class="nav-links overview">
        <li><a href="#"><i class="fa-solid fa-table-cells-large"></i><span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa-solid fa-pen-to-square"></i><span>Test</span></a></li>
        <li><a href="#"><i class="fa-solid fa-book"></i><span>Courses</span></a></li>
        <li><a href="#"><i class="fa-solid fa-file-lines"></i><span>Vocabulary</span></a></li>
        <li><a href="#"><i class="fa-solid fa-square-pen"></i><span>Grammar</span></a></li>
        <li><a href="#"><i class="fa-solid fa-ear-listen"></i><span>Listening</span></a></li>
        </ul>
    </div>

   <div class="nav-bottom">
        <div class="nav-section-title settings">Settings</div>
        <ul class="nav-links setting">
        <li><a href="#"><i class="fa-solid fa-gear"></i><span>Setting</span></a></li>
        <li class="logout"><a href="index.php?page=form"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a></li>
        </ul>
   </div>
  </nav>

  <!-- Thanh Search -->
  <div class="top-bar">
    <div class="search-container">
      <i class="fas fa-search"></i>
      <input type="text" placeholder="Search Courses.....">
    </div>
    <div class="icons">
      <i class="fas fa-envelope"></i>
      <i class="fas fa-bell"></i>
      <i class="fas fa-window-minimize"></i>
      <i class="fas fa-times"></i>
    </div>
    <div class="icons">
      <i class="fas fa-user d-mobile-profile" id="openProfileBtn"></i>
    </div>
  </div>

  <!-- Main content -->
  <div class="main-content">
    <!-- Thanh màu vàng -->
    <div class="yellow-banner"></div>
  
    <!-- 3 ô tính năng -->
    <div class="feture">
      <div class="features">
        <div class="feature-box">
          <span class="watched">2/8 watched</span>
          <span class="label red"><i class="fa-solid fa-pen-to-square"></i> Vocab</span>
        </div>
        <div class="feature-box">
          <span class="watched">2/8 watched</span>
          <span class="label orange"><i class="fa-solid fa-square-pen"></i> Grammar</span>
        </div>
        <div class="feature-box">
          <span class="watched">2/8 watched</span>
          <span class="label yellow"><i class="fa-solid fa-ear-listen"></i> Listening</span>
        </div>
      </div>
    </div>
    <!-- Continue Learning -->
    <h3 class="section-title">Continue Learning</h3>
    <div id="multiCardCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center gap-4">
            <div class="card" style="width: 18rem;">
              <img src="public/img/mentorPA.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traveling in Vietnam</h5>
                <div class="card-text">
                  <span class="profile-pic"></span>
                  <div class="contText">
                    <strong>Phuong Anh</strong>
                    <span class="mentor">Mentor</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="public/img/mentorPA.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traveling in Vietnam</h5>
                <div class="card-text">
                  <span class="profile-pic"></span>
                  <div class="contText">
                    <strong>Phuong Anh</strong>
                    <span class="mentor">Mentor</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="public/img/mentorPA.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traveling in Vietnam</h5>
                <div class="card-text">
                  <span class="profile-pic"></span>
                  <div class="contText">
                    <strong>Phuong Anh</strong>
                    <span class="mentor">Mentor</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center gap-4">
            <!-- Thêm 3 card khác -->
            <div class="card" style="width: 18rem;">
              <img src="public/img/mentorPA.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traveling in Vietnam</h5>
                <div class="card-text">
                  <span class="profile-pic"></span>
                  <div class="contText">
                    <strong>Phuong Anh</strong>
                    <span class="mentor">Mentor</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="public/img/mentorPA.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traveling in Vietnam</h5>
                <div class="card-text">
                  <span class="profile-pic"></span>
                  <div class="contText">
                    <strong>Phuong Anh</strong>
                    <span class="mentor">Mentor</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card" style="width: 18rem;">
              <img src="public/img/mentorPA.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Traveling in Vietnam</h5>
                <div class="card-text">
                  <span class="profile-pic"></span>
                  <div class="contText">
                    <strong>Phuong Anh</strong>
                    <span class="mentor">Mentor</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <button class="carousel-control-prev" type="button" data-bs-target="#multiCardCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#multiCardCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    
    
  </div>
  <aside class="profile">
    <div class="avatar"></div>
    <h3>Ella Jane</h3>
    <p>Good Morning Ella</p>
  </aside>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
