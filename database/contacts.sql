USE assignment2;

-- 创建 contacts 表（如果尚未存在）
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY, -- 自增主键
    name VARCHAR(100) NOT NULL,         -- 客户名称
    email_address VARCHAR(255) NOT NULL, -- 客户邮箱地址
    message TEXT NOT NULL,              -- 客户留言信息
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- 创建时间
);

-- 可选：插入一些示例数据
INSERT INTO contacts (name, email_address, message) 
VALUES 
('John Doe', 'john.doe@example.com', 'This is a test message.'),
('Jane Smith', 'jane.smith@example.com', 'Another test message.');