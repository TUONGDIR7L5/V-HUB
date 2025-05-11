CREATE TABLE tests (
    test_id INT AUTO_INCREMENT PRIMARY KEY,
    course_id INT, -- Liên kết với khóa học (NULL cho test kiểm tra cơ bản)
    test_type ENUM('basic', 'course') NOT NULL, -- Loại test: cơ bản hay theo bài học
    level ENUM('beginner', 'intermediate', 'advanced', 'all') DEFAULT 'all', -- Cấp độ (dùng cho test cơ bản)
    question TEXT NOT NULL, -- Câu hỏi
    type ENUM('multiple_choice', 'fill_in') NOT NULL, -- Loại câu hỏi
    correct_answer VARCHAR(255) NOT NULL, -- Đáp án đúng
    options JSON, -- Lựa chọn trắc nghiệm (NULL cho điền từ)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Ngày tạo
    FOREIGN KEY (course_id) REFERENCES courses(course_id)
);

----- Example data
INSERT INTO tests (course_id, test_type, level, question, type, correct_answer, options) VALUES
    -- Test kiểm tra mức độ cơ bản (basic)
    (NULL, 'basic', 'beginner', 'What is the Vietnamese word for "hello"?', 'multiple_choice', 'Xin chào', '["Xin chào", "Tạm biệt", "Cảm ơn"]'),
    (NULL, 'basic', 'beginner', 'Fill in the blank: Tôi ___ đi học.', 'fill_in', 'đi', NULL),
    (NULL, 'basic', 'intermediate', 'What is the Vietnamese word for "family"?', 'multiple_choice', 'Gia đình', '["Gia đình", "Bạn bè", "Trường học"]'),
    (NULL, 'basic', 'all', 'Choose the correct greeting for morning:', 'multiple_choice', 'Chào buổi sáng', '["Chào buổi sáng", "Chào buổi tối", "Tạm biệt"]'),

    -- Test theo bài học (course)
    (1, 'course', 'beginner', 'What does "Tạm biệt" mean in English?', 'multiple_choice', 'Goodbye', '["Hello", "Goodbye", "Thank you"]'),
    (1, 'course', 'beginner', 'Fill in the blank: ___ bạn khỏe không?', 'fill_in', 'Xin chào', NULL),
    (2, 'course', 'beginner', 'What is the Vietnamese word for "one"?', 'multiple_choice', 'Một', '["Một", "Hai", "Ba"]'),
    (2, 'course', 'beginner', 'Fill in the blank: Tôi có ___ quả táo.', 'fill_in', 'một', NULL);