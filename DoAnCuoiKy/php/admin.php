<?php
header('Content-Type: application/json');
require 'config.php';
session_start();

$action = $_SERVER['REQUEST_URI'];

// Kiểm tra quyền admin
if ($action === '/api/check-admin') {
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
        http_response_code(403);
        echo json_encode(["message" => "Access denied"]);
        exit;
    }
    echo json_encode(["message" => "Access granted"]);
    exit;
}

// Kiểm tra CSRF token cho các yêu cầu POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    if (!isset($data['csrf_token']) || $data['csrf_token'] !== $_SESSION['csrf_token']) {
        http_response_code(403);
        echo json_encode(["message" => "Invalid CSRF token"]);
        exit;
    }
}

// API cho Courses
if ($action === '/api/courses') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sql = "SELECT course_id, title, level FROM courses";
        $result = $conn->query($sql);
        $courses = [];
        while ($row = $result->fetch_assoc()) {
            $courses[] = $row;
        }
        echo json_encode($courses);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        $title = $conn->real_escape_string($data['title']);
        $level = $conn->real_escape_string($data['level']);
        $description = $conn->real_escape_string($data['description']);
        $content = $conn->real_escape_string($data['content']);
        $created_by = $_SESSION['user_id'];

        $sql = "INSERT INTO courses (title, level, description, content, created_by) 
                VALUES ('$title', '$level', '$description', '$content', $created_by)";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Course added successfully"]);
        } else {
            echo json_encode(["message" => "Error: " . $conn->error]);
        }
    }
}

// API cho Blog Posts
if ($action === '/api/blog-posts') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sql = "SELECT post_id, title FROM blog_posts";
        $result = $conn->query($sql);
        $posts = [];
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
        echo json_encode($posts);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        $title = $conn->real_escape_string($data['title']);
        $content = $conn->real_escape_string($data['content']);
        $author_id = $_SESSION['user_id'];

        $sql = "INSERT INTO blog_posts (title, content, author_id) 
                VALUES ('$title', '$content', $author_id)";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Blog post added successfully"]);
        } else {
            echo json_encode(["message" => "Error: " . $conn->error]);
        }
    }
}

// API upload hình ảnh
if ($action === '/admin/upload-image') {
    $target_dir = "assets/images/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    echo json_encode(["location" => $target_file]);
}

$conn->close();
?>