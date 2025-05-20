<?php
session_start();

class Controller {
    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : null;
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        if ($action === 'getVocabulary') {
            $tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : 'all';
            $valid_tabs = ['all', 'basic', 'intermediate', 'advanced'];
            if (!in_array($tab, $valid_tabs)) $tab = 'all';

            $vocabulary = [
                ['title' => 'Self Introduction', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/selfIntro.png'],
                ['title' => 'Going Shopping', 'level' => 'Intermediate', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/shopping.png'],
                ['title' => 'Traveling', 'level' => 'Intermediate', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/traveling.png'],
                ['title' => 'What time is it?', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/clock.png'],
                ['title' => 'Culture', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/culture.png'],
                ['title' => 'Family Members', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/family.png'],
                ['title' => 'Counting Numbers', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/countNum.png'],
                ['title' => 'Technology', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Hobbies', 'level' => 'Beginner', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/hobby.png'],
                ['title' => 'Technology 2', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 3', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 4', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 5', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 6', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 7', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 8', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 9', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
                ['title' => 'Technology 10', 'level' => 'Advanced', 'category' => 'Vocabulary', 'image' => 'public/img/vocab/tech.png'],
            ];

            $filtered_vocabulary = $vocabulary;
            if ($tab !== 'all') {
                $filtered_vocabulary = array_filter($vocabulary, function($item) use ($tab) {
                    $level_map = [
                        'basic' => 'Beginner',
                        'intermediate' => 'Intermediate',
                        'advanced' => 'Advanced'
                    ];
                    return $item['level'] === ($level_map[$tab] ?? '');
                });
                $filtered_vocabulary = array_values($filtered_vocabulary);
            }

            header('Content-Type: application/json');
            echo json_encode($filtered_vocabulary);
            exit();
        }

        if ($action === 'getGrammar') {
            $tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : 'all';
            $valid_tabs = ['all', 'basic', 'intermediate', 'advanced'];
            if (!in_array($tab, $valid_tabs)) $tab = 'all';

            // Dữ liệu mẫu cho Grammar
            $grammar = [
                ['title' => 'Basic Sentence Structure', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/sentence.png'],
                ['title' => 'Verb Conjugation', 'level' => 'Intermediate', 'category' => 'Grammar', 'image' => 'public/img/grammar/verb.png'],
                ['title' => 'Tenses Overview', 'level' => 'Intermediate', 'category' => 'Grammar', 'image' => 'public/img/grammar/tenses.png'],
                ['title' => 'Question Formation', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/question.png'],
                ['title' => 'Cultural Grammar Notes', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/culture.png'],
                ['title' => 'Family Grammar', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/family.png'],
                ['title' => 'Numbers in Sentences', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/numbers.png'],
                ['title' => 'Advanced Syntax', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Hobby Sentences', 'level' => 'Beginner', 'category' => 'Grammar', 'image' => 'public/img/grammar/hobby.png'],
                ['title' => 'Advanced Syntax 2', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 3', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 4', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 5', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 6', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 7', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 8', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 9', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
                ['title' => 'Advanced Syntax 10', 'level' => 'Advanced', 'category' => 'Grammar', 'image' => 'public/img/grammar/syntax.png'],
            ];

            $filtered_grammar = $grammar;
            if ($tab !== 'all') {
                $filtered_grammar = array_filter($grammar, function($item) use ($tab) {
                    $level_map = [
                        'basic' => 'Beginner',
                        'intermediate' => 'Intermediate',
                        'advanced' => 'Advanced'
                    ];
                    return $item['level'] === ($level_map[$tab] ?? '');
                });
                $filtered_grammar = array_values($filtered_grammar);
            }

            header('Content-Type: application/json');
            echo json_encode($filtered_grammar);
            exit();
        }

        if ($action === 'getListening') {
            $tab = isset($_GET['tab']) ? strtolower($_GET['tab']) : 'all';
            $valid_tabs = ['all', 'basic', 'intermediate', 'advanced'];
            if (!in_array($tab, $valid_tabs)) $tab = 'all';

            // Dữ liệu mẫu cho Listening
            $listening = [
                ['title' => 'Greetings Audio', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/greetings.png'],
                ['title' => 'Shopping Dialogue', 'level' => 'Intermediate', 'category' => 'Listening', 'image' => 'public/img/listen/shopping.png'],
                ['title' => 'Travel Conversation', 'level' => 'Intermediate', 'category' => 'Listening', 'image' => 'public/img/listen/travel.png'],
                ['title' => 'Time Questions Audio', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/time.png'],
                ['title' => 'Cultural Talk', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/culture.png'],
                ['title' => 'Family Discussion', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/family.png'],
                ['title' => 'Counting Practice', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/numbers.png'],
                ['title' => 'Tech Podcast', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Hobby Interview', 'level' => 'Beginner', 'category' => 'Listening', 'image' => 'public/img/listen/hobby.png'],
                ['title' => 'Tech Podcast 2', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 3', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 4', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 5', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 6', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 7', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 8', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 9', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
                ['title' => 'Tech Podcast 10', 'level' => 'Advanced', 'category' => 'Listening', 'image' => 'public/img/listen/tech.png'],
            ];

            $filtered_listening = $listening;
            if ($tab !== 'all') {
                $filtered_listening = array_filter($listening, function($item) use ($tab) {
                    $level_map = [
                        'basic' => 'Beginner',
                        'intermediate' => 'Intermediate',
                        'advanced' => 'Advanced'
                    ];
                    return $item['level'] === ($level_map[$tab] ?? '');
                });
                $filtered_listening = array_values($filtered_listening);
            }

            header('Content-Type: application/json');
            echo json_encode($filtered_listening);
            exit();
        }

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

                // ---
                case 'blog?type=detail0':
                    define('IN_CONTROLLER', true);
                    $pageTitle = "How to Stay Motivated in Language Learning - Blog | VHuB";
                    $viewPath = __DIR__ . '/../view/blog0.php';
                    if (file_exists($viewPath)) {
                        require_once $viewPath;
                    } else {
                        echo "Error: View file not found at $viewPath";
                    }
                    break;

                
                case 'blog?type=detail1':
                define('IN_CONTROLLER', true);
                $pageTitle = "Vietnamese Festival - Blog | VHuB";
                $viewPath = __DIR__ . '/../view/blog1.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;


                case 'blog?type=detail2':
                define('IN_CONTROLLER', true);
                $pageTitle = "How I Learned Vietnamese in 6 Months - Blog | VHuB";
                $viewPath = __DIR__ . '/../view/blog2.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;

                //---


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
            // ---
            case 'detail':
                define('IN_CONTROLLER', true);
                $pageTitle = "Detail | VHuB";
                $viewPath = __DIR__ . '/../view/detail.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;

            // ---
            case 'courseDetail':
                define('IN_CONTROLLER', true);
                $pageTitle = "Detail | VHuB";
                $viewPath = __DIR__ . '/../view/courseDetail.php';
                if (file_exists($viewPath)) {
                    require_once $viewPath;
                } else {
                    echo "Error: View file not found at $viewPath";
                }
                break;


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