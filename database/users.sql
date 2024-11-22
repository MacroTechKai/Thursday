-- 创建数据库
CREATE DATABASE IF NOT EXISTS `assignment2`;

-- 使用数据库
USE `assignment2`;

-- 创建表
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `username` VARCHAR(50) NOT NULL UNIQUE,
    `pass` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 插入数据
INSERT INTO `users` (`id`, `email`, `username`, `pass`) 
VALUES 
(1, 'alice.green@example.com', 'alicegreen', 'a1b2c3d4'),
(2, 'bob.brown@example.com', 'bobbrown', 'z8y7x6w5'),
(3, 'charlie.gray@example.com', 'charliegray', 'p4l3k2j1'),
(4, 'diana.white@example.com', 'dianawhite', 'm9n8o7p6');
