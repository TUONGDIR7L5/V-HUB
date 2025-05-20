<?php
// Đảm bảo chỉ chạy trong controller
if (!defined('IN_CONTROLLER')) {
    die('Direct access not allowed');
}

// Tab mặc định
$tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : 'all';
$valid_tabs = ['all', 'basic', 'intermediate', 'advanced'];
if (!in_array($tab, $valid_tabs)) $tab = 'all';

// Ánh xạ tab sang số (1: All, 2: Basic, 3: Intermediate, 4: Advanced)
$tab_to_number = [
    'all' => 1,
    'basic' => 2,
    'intermediate' => 3,
    'advanced' => 4
];
$current_tab_number = $tab_to_number[$tab];

// Xác định tab trước và sau cho thanh phân trang tab
$prev_tab = $current_tab_number > 1 ? array_search($current_tab_number - 1, $tab_to_number) : null;
$next_tab = $current_tab_number < 4 ? array_search($current_tab_number + 1, $tab_to_number) : null;

// Kiểm tra trạng thái đăng nhập
$is_logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="public/css/style4Grammar.css">
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
        <p id="title-vocabulary" style="color:rgba(99, 99, 99, 0.662)">Grammar</p>
        <h3><img src="public/img/grammar.png" alt="book" class="me-2"/>Vietnamese Grammar</h3>
        <p>Whether you're a beginner or looking to improve your Vietnamese grammar skills, we provide easy-to-follow lessons, interactive exercises, and practical rules to help you learn effectively.</p>
        <div class="vocab-keywords">
            <span>Grammar</span>
            <span>Vietnamese</span>
            <span>Rules</span>
        </div>
    </div>

    <!-- Tabs and Search -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <ul class="nav nav-tabs border-0" id="grammar-tabs">
            <li class="nav-item">
                <a class="nav-link <?php echo $tab === 'all' ? 'active' : 'text-muted'; ?>" href="#" data-tab="all">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $tab === 'basic' ? 'active' : 'text-muted'; ?>" href="#" data-tab="basic">Basic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $tab === 'intermediate' ? 'active' : 'text-muted'; ?>" href="#" data-tab="intermediate">Intermediate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $tab === 'advanced' ? 'active' : 'text-muted'; ?>" href="#" data-tab="advanced">Advanced</a>
            </li>
        </ul>
        <div class="search-container">
            <div class="icon">
                <img src="public/img/searchIcon.png" alt="Search">
            </div>
            <input type="text" class="form-control search-bar" placeholder="Search Courses">
        </div>
    </div>

    <div class="row g-4">
        <div class="container my-5">
            <!-- Danh sách ngữ pháp sẽ được cập nhật động -->
            <div class="row row-cols-1 row-cols-md-3 g-4" id="grammar-list">
                <!-- Nội dung sẽ được tải bằng AJAX -->
            </div>
        </div>
    </div>

    <!-- Thanh phân trang tab (xuất hiện dưới chân) -->
    <div class="d-flex justify-content-between align-items-center mt-4" id="tab-pagination">
        <?php if ($prev_tab): ?>
            <div class="text-muted">
                <a href="#" class="text-warning" data-tab="<?php echo $prev_tab; ?>">Previous</a>
            </div>
        <?php else: ?>
            <div style="width: 70px;"></div>
        <?php endif; ?>

        <div class="pagination mb-0">
            <span class="me-3">
                <a href="#" class="<?php echo $tab === 'all' ? 'text-warning' : 'text-muted'; ?>" data-tab="all">1</a>
            </span>
            <span class="me-3">
                <a href="#" class="<?php echo $tab === 'basic' ? 'text-warning' : 'text-muted'; ?>" data-tab="basic">2</a>
            </span>
            <span class="me-3">
                <a href="#" class="<?php echo $tab === 'intermediate' ? 'text-warning' : 'text-muted'; ?>" data-tab="intermediate">3</a>
            </span>
            <span class="me-3">
                <a href="#" class="<?php echo $tab === 'advanced' ? 'text-warning' : 'text-muted'; ?>" data-tab="advanced">4</a>
            </span>
        </div>

        <?php if ($next_tab): ?>
            <div class="text-warning d-flex align-items-center">
                <a href="#" class="text-warning" data-tab="<?php echo $next_tab; ?>">Next <span class="ms-1">→</span></a>
            </div>
        <?php else: ?>
            <div style="width: 70px;"></div>
        <?php endif; ?>
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

<script>
// JavaScript để xử lý chuyển tab không reload trang
document.addEventListener('DOMContentLoaded', function() {
    // Trạng thái đăng nhập
    const isLoggedIn = <?php echo $is_logged_in ? 'true' : 'false'; ?>;

    // Tải dữ liệu ban đầu
    loadGrammar('<?php echo $tab; ?>');

    // Xử lý sự kiện nhấp vào tab
    document.querySelectorAll('#grammar-tabs .nav-link').forEach(tab => {
        tab.addEventListener('click', function(e) {
            e.preventDefault();
            const tabName = this.getAttribute('data-tab');
            loadGrammar(tabName);
        });
    });

    // Xử lý sự kiện nhấp vào thanh phân trang tab
    document.querySelectorAll('#tab-pagination a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const tabName = this.getAttribute('data-tab');
            if (tabName) {
                loadGrammar(tabName);
            }
        });
    });

    // Hàm tải dữ liệu ngữ pháp bằng AJAX
    function loadGrammar(tab) {
        fetch(`index.php?action=getGrammar&tab=${tab}`)
            .then(response => response.json())
            .then(data => {
                // Cập nhật danh sách ngữ pháp
                const grammarList = document.getElementById('grammar-list');
                grammarList.innerHTML = '';
                if (data.length === 0) {
                    grammarList.innerHTML = '<p>No grammar items found for this level.</p>';
                } else {
                    data.forEach(item => {
                        const cardContent = `
                            <div class="card">
                                <img src="${item.image}" class="card-img-top" alt="${item.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${item.title}</h5>
                                    <p class="card-text">${item.level} - ${item.category}</p>
                                </div>
                            </div>
                        `;
                        const card = isLoggedIn ? `
                            <div class="col">
                                <a href="index.php?page=detail&type=grammar&title=${encodeURIComponent(item.title)}" style="text-decoration: none; color: inherit;">
                                    ${cardContent}
                                </a>
                            </div>
                        ` : `
                            <div class="col">
                                ${cardContent}
                            </div>
                        `;
                        grammarList.insertAdjacentHTML('beforeend', card);
                    });
                }

                // Cập nhật trạng thái tab
                document.querySelectorAll('#grammar-tabs .nav-link').forEach(t => {
                    t.classList.remove('active');
                    t.classList.add('text-muted');
                    if (t.getAttribute('data-tab') === tab) {
                        t.classList.add('active');
                        t.classList.remove('text-muted');
                    }
                });

                // Cập nhật thanh phân trang tab
                const tabNumber = { 'all': 1, 'basic': 2, 'intermediate': 3, 'advanced': 4 }[tab];
                const prevTab = tabNumber > 1 ? Object.keys({ 'all': 1, 'basic': 2, 'intermediate': 3, 'advanced': 4 }).find(key => ({ 'all': 1, 'basic': 2, 'intermediate': 3, 'advanced': 4 }[key]) === tabNumber - 1) : null;
                const nextTab = tabNumber < 4 ? Object.keys({ 'all': 1, 'basic': 2, 'intermediate': 3, 'advanced': 4 }).find(key => ({ 'all': 1, 'basic': 2, 'intermediate': 3, 'advanced': 4 }[key]) === tabNumber + 1) : null;

                const pagination = document.getElementById('tab-pagination');
                pagination.innerHTML = `
                    ${prevTab ? `<div class="text-muted"><a href="#" class="text-warning" data-tab="${prevTab}">Previous</a></div>` : '<div style="width: 70px;"></div>'}
                    <div class="pagination mb-0">
                        <span class="me-3"><a href="#" class="${tab === 'all' ? 'text-warning' : 'text-muted'}" data-tab="all">1</a></span>
                        <span class="me-3"><a href="#" class="${tab === 'basic' ? 'text-warning' : 'text-muted'}" data-tab="basic">2</a></span>
                        <span class="me-3"><a href="#" class="${tab === 'intermediate' ? 'text-warning' : 'text-muted'}" data-tab="intermediate">3</a></span>
                        <span class="me-3"><a href="#" class="${tab === 'advanced' ? 'text-warning' : 'text-muted'}" data-tab="advanced">4</a></span>
                    </div>
                    ${nextTab ? `<div class="text-warning d-flex align-items-center"><a href="#" class="text-warning" data-tab="${nextTab}">Next <span class="ms-1">→</span></a></div>` : '<div style="width: 70px;"></div>'}
                `;

                // Gắn lại sự kiện cho các liên kết mới trong thanh phân trang tab
                document.querySelectorAll('#tab-pagination a').forEach(link => {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        const tabName = this.getAttribute('data-tab');
                        if (tabName) {
                            loadGrammar(tabName);
                        }
                    });
                });
            })
            .catch(error => {
                console.error('Error loading grammar items:', error);
                document.getElementById('grammar-list').innerHTML = '<p>Error loading grammar items.</p>';
            });
    }
});
</script>
</body>
</html>