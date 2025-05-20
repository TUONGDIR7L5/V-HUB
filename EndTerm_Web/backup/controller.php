<?php
session_start();

class Controller {
    public function handleRequest() {
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'form':
                define('IN_CONTROLLER', true);
                $pageTitle = "Sign in/Sign up Page | VHuB";
                $viewPath = __DIR__ . '/../view/form.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'home':
                define('IN_CONTROLLER', true);
                $pageTitle = "Home | VHuB";
                $viewPath = __DIR__ . '/../view/home.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'dashboard':
                // if (!isset($_SESSION['user_id'])) {
                //     header("Location: index.php?page=form");
                //     exit();
                // }
                define('IN_CONTROLLER', true);
                $pageTitle = "Dashboard | VHuB";
                $viewPath = __DIR__ . '/../view/dashboard.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'grammar':
                define('IN_CONTROLLER', true);
                $pageTitle = "Grammar | VHuB";
                $viewPath = __DIR__ . '/../view/grammar.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'vocabulary':
                define('IN_CONTROLLER', true);
                $pageTitle = "Vocabulary | VHuB";
                $viewPath = __DIR__ . '/../view/vocab.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'listening':
                define('IN_CONTROLLER', true);
                $pageTitle = "Listening | VHuB";
                $viewPath = __DIR__ . '/../view/listen.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'blog':
                define('IN_CONTROLLER', true);
                $pageTitle = "Blog | VHuB";
                $viewPath = __DIR__ . '/../view/blog.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'test':
                define('IN_CONTROLLER', true);
                $pageTitle = "Test | VHuB";
                $viewPath = __DIR__ . '/../view/testing.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'takingTest':
                define('IN_CONTROLLER', true);
                $pageTitle = "Testing - Test | VHuB";
                $viewPath = __DIR__ . '/../view/takingTest.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'result':
                define('IN_CONTROLLER', true);
                $pageTitle = "Result | VHuB";
                $viewPath = __DIR__ . '/../view/result.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'about':
                define('IN_CONTROLLER', true);
                $pageTitle = "About | VHuB";
                $viewPath = __DIR__ . '/../view/about.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;
            case 'logout':
                session_destroy();
                header("Location: /CK_WEB/index.php?page=form");
                exit();
            default:
                $pageTitle = "404 | VHuB";
                echo "<h1>404 - Page Not Found</h1>";
                $viewPath = __DIR__ . '/../view/footer.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: Footer file not found at $viewPath";
                }
                break;
        }
    }
}

$controller = new Controller();
$controller->handleRequest();
?>