<?php
header('Content-Type: application/json');
require 'config.php';

$action = $_SERVER['REQUEST_URI'];

if ($action === '/admin/courses') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        $title = $conn->real_escape_string($data['title']);
        $level = $conn->real_escape_string($data['level']);
        $description = $conn->real_escape_string($data['description']);
        $content = $conn->real_escape_string($data['content']);
        $created_by = 1; // Giả định admin ID là 1

        $sql = "INSERT INTO courses (title, level, description, content, created_by) 
                VALUES ('$title', '$level', '$description', '$content', $created_by)";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Course added successfully"]);
        } else {
            echo json_encode(["message" => "Error: " . $conn->error]);
        }
    }
}

if ($action === '/admin/blog-posts') {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents('php://input'), true);
        $title = $conn->real_escape_string($data['title']);
        $content = $conn->real_escape_string($data['content']);
        $author_id = 1; // Giả định admin ID là 1

        $sql = "INSERT INTO blog_posts (title, content, author_id) 
                VALUES ('$title', '$content', $author_id)";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(["message" => "Blog post added successfully"]);
        } else {
            echo json_encode(["message" => "Error: " . $conn->error]);
        }
    }
}

$conn->close();
?>