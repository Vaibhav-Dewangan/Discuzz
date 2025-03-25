-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 07:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discuzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` varchar(2000) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `answer`, `username`) VALUES
(7, 4, 10, 'Yes, PHP is a good programming language, especially for web development. It\'s easy to learn, widely supported, cost-effective, and works well with popular CMS platforms like WordPress. Modern PHP (7+ and 8+) offers great performance and features.\r\n\r\nHowever, for real-time apps, data-heavy tasks, or highly scalable projects, languages like Node.js, Python, or Go might be better choices. Use PHP if you\'re building dynamic websites or CMS-based projects on a budget!', 'T-Series'),
(8, 6, 10, 'It’s a design approach where websites adapt to fit any screen size, making them user-friendly on all devices.', 'T-Series'),
(9, 7, 10, 'Apps need permissions to access features or data they rely on, but it’s important to check for unnecessary requests.', 'T-Series'),
(10, 8, 10, 'Spicy foods contain capsaicin, which tricks your nerves into sensing heat, causing a burning sensation.', 'T-Series'),
(11, 4, 10, 'yes!', 'T-Series'),
(12, 5, 10, 'yes!', 'T-Series');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'laptop'),
(2, 'food'),
(3, 'mobile'),
(4, 'coding'),
(5, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `user_id`, `category`) VALUES
(4, 'Is php good programming language ?', 'Is php good programming language ?', 10, 'coding'),
(5, 'Is javascript good programming language ?', 'Is javascript good programming language ?', 10, 'coding'),
(7, 'Why do apps ask for so many permissions?', 'Have you ever wondered why apps need access to your camera, location, or contacts? Is it always necessary?', 10, 'Mobile'),
(8, 'Why does spicy food make your mouth burn?', 'Please answer!', 10, 'Food'),
(9, 'What are the key differences between an SSD and an HDD?', 'key differences between an SSD and an HDD', 10, 'Laptop'),
(10, 'Why do laptops overheat, and how can you prevent it?', 'how can you prevent it', 10, 'Laptop'),
(11, 'Why do magnets attract or repel each other?', 'Anyone ?', 10, 'General'),
(12, 'Which processor is best in Samsung S21FE ?', 'snapdragon or exynos', 10, 'Mobile'),
(15, 'Tell me about Taj Mahal ?', 'in brief', 14, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Vaibhav Dewangan', 'vaibhav@gmail.com', 'vaibhav'),
(10, 'T-Series', 'tseries@gmail.com', 'vaibhav'),
(12, 'Internshala', 'helpdesk@internshala.com', 'vaibhav'),
(14, 'pogo', 'pogo@gmail.com', 'vaibhav'),
(15, 'abc', 'abc@gmail.com', 'vaibhav');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
