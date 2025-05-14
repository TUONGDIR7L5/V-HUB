CREATE TABLE user_progress (
    progress_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    lesson_id INT,
    status ENUM('in_progress', 'completed') NOT NULL,
    score INT, -- Điểm bài kiểm tra (0-100)
    completed_at TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (lesson_id) REFERENCES lessons(lesson_id)
);


--- -- Example data
INSERT INTO user_progress (user_id, lesson_id, status, score, completed_at) VALUES
    (1, 1, 'completed', 85, '2023-10-01 10:00:00'),
    (1, 2, 'in_progress', NULL, NULL),
    (2, 1, 'completed', 90, '2023-10-02 11:00:00'),
    (2, 3, 'in_progress', NULL, NULL),
    (3, 4, 'completed', 75, '2023-10-03 12:00:00');
    