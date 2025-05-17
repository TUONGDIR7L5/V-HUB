CREATE TABLE vocabulary (
    word_id INT AUTO_INCREMENT PRIMARY KEY,
    vietnamese VARCHAR(100) NOT  ,
    english VARCHAR(100) NOT  ,
    phonetic VARCHAR(100),
    part_of_speech VARCHAR(50), -- Danh từ, động từ, v.v.
    example TEXT, -- Ví dụ: "Xin chào, bạn khỏe không?"
    course_id INT,
    FOREIGN KEY (lesson_id) REFERENCES lessons(lesson_id)
);

-- --- -- Example data
INSERT INTO vocabulary (vietnamese, english, phonetic, part_of_speech, example, course_id) VALUES
    ('Xin chào', 'Hello', 'sin chao', 'Greeting', 'Xin chào, bạn khỏe không?', 1),
    ('Cảm ơn', 'Thank you', 'kam un', 'Phrase', 'Cảm ơn bạn rất nhiều!', 1),
    ('Tạm biệt', 'Goodbye', 'tam biet', 'Greeting', 'Tạm biệt, hẹn gặp lại!', 1),
    ('Đi học', 'Go to school', 'di hoc', 'Verb Phrase', 'Tôi đi học mỗi ngày.', 2);
    ('Thức ăn', 'Food', 'thuc an', 'Noun', 'Tôi thích thức ăn Việt Nam.', 3),
    ('Nước uống', 'Drink', 'nuoc uong', 'Noun', 'Nước uống rất quan trọng.', 3),
    ('Du lịch', 'Travel', 'du lich', 'Verb', 'Tôi thích du lịch ở Việt Nam.', 4),
    ('Xe cộ', 'Vehicles', 'xe co', 'Noun', 'Xe cộ ở Hà Nội rất đông.', 4);
    ('Học', 'Learn', 'hoc', 'Verb', 'Tôi học tiếng Việt mỗi ngày.', 5),
    ('Nghe', 'Listen', 'nghe', 'Verb', 'Tôi thích nghe nhạc.', 5),
    ('Nói', 'Speak', 'noi', 'Verb', 'Tôi muốn nói tiếng Việt tốt hơn.', 6),
    ('Viết', 'Write', 'viet', 'Verb', 'Tôi viết nhật ký hàng ngày.', 6);
    ('Công việc', 'Work', 'cong viec', 'Noun', 'Công việc của tôi rất thú vị.', 6),
    ('Gặp gỡ', 'Meet', 'gap go', 'Verb', 'Tôi muốn gặp gỡ bạn bè mới.', 6);

    -- Audio bỏ

    