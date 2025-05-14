CREATE TABLE courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL, -- Chủ đề khóa học (ví dụ: "Greetings", "Numbers")
    level ENUM('beginner', 'intermediate', 'advanced') NOT NULL, -- Cấp độ
    description TEXT, -- Mô tả khóa học (ví dụ: "Learn basic Vietnamese greetings")
    category VARCHAR(100), -- Danh mục (ví dụ: "Vocabulary", "Grammar", "Pronunciation")
    duration INT, -- Thời lượng ước tính (phút, ví dụ: 30)
    image_url VARCHAR(255), -- URL hình ảnh minh họa
    content TEXT, -- Nội dung chi tiết (có thể lưu HTML hoặc JSON)
    order_number INT, -- Thứ tự hiển thị (ví dụ: khóa 1, khóa 2)
    is_free BOOLEAN DEFAULT TRUE, -- Khóa học miễn phí hay trả phí
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Ngày tạo
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Ngày cập nhật
    created_by INT, -- ID người tạo (admin)
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);


--- Update 
UPDATE courses SET
    category = CASE
        WHEN course_id = 1 THEN 'Vocabulary'
        WHEN course_id = 2 THEN 'Vocabulary'
        WHEN course_id = 3 THEN 'Vocabulary'
        WHEN course_id = 4 THEN 'Vocabulary'
        WHEN course_id = 5 THEN 'Grammar'
        WHEN course_id = 6 THEN 'Vocabulary'
    END,
    duration = 30,
    image_url = CASE
        WHEN course_id = 1 THEN 'woman-with-book-board.png'
        WHEN course_id = 4 THEN 'woman-with-headphones.png'
        WHEN course_id = 5 THEN 'woman-with-chart.png'
        ELSE NULL
    END,
    content = '<p>Course content goes here...</p>',
    order_number = course_id,
    created_by = 1;

-- Them Index
CREATE INDEX idx_courses_category ON courses(category);


--- -- Example data
INSERT INTO courses (title, level, description) VALUES
    ('Greetings', 'beginner', 'Learn basic Vietnamese greetings'),
    ('Numbers', 'beginner', 'Learn to count in Vietnamese');
    ('Food and Drink', 'intermediate', 'Learn vocabulary related to food and drink'),
    ('Travel', 'intermediate', 'Learn vocabulary for traveling in Vietnam'),
    ('Advanced Grammar', 'advanced', 'Deep dive into Vietnamese grammar rules'),
    ('Business Vietnamese', 'advanced', 'Learn vocabulary and phrases for business communication');
