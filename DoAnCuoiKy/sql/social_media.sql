CREATE TABLE social_media (
    social_id INT AUTO_INCREMENT PRIMARY KEY,
    platform VARCHAR(50) NOT NULL, -- Tên nền tảng (Facebook, Instagram, Twitter)
    url VARCHAR(255) NOT NULL, -- URL liên kết
    icon_url VARCHAR(255) -- URL biểu tượng (nếu có)
);

INSERT INTO social_media (platform, url) VALUES
    ('Facebook', 'https://facebook.com/vhub'),
    ('Instagram', 'https://instagram.com/vhub'),
    ('Twitter', 'https://twitter.com/vhub');

