-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 02:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serenitydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginuser`
--

CREATE TABLE `loginuser` (
  `id` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginuser`
--

INSERT INTO `loginuser` (`id`, `fullname`, `gender`, `email`, `username`, `password`) VALUES
(2, 'Melana Tiu', 'Female', 'melanatiu@gmail.com', 'melanatiu', 'mel123'),
(4, 'Mary Ann Santos', 'Others', 'mayann12@gmail.com', 'maryann12', 'maryann@1'),
(5, 'Hazel Manzano', 'Female', 'hazel@gmail.com', 'hazelmanzano', 'hazel123'),
(6, 'Hoshi Kwon', 'Male', 'hoshi12@gmail.com', 'hoshitiger', 'hoshi12'),
(7, 'Karina Gonzales', 'Female', 'karinag@gmail.com', 'karinagonzales', 'karina123'),
(8, 'Lilly Sam', 'Female', 'lilysam@gmail.com', 'lilysam123', 'lilysam1');

-- --------------------------------------------------------

--
-- Table structure for table `mquotes`
--

CREATE TABLE `mquotes` (
  `id` int(11) NOT NULL,
  `quotes` text NOT NULL,
  `author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mquotes`
--

INSERT INTO `mquotes` (`id`, `quotes`, `author`) VALUES
(17, '“All our dreams can come true, if we have the courage to pursue them.”', 'Walt Disney'),
(39, '“Success is not final, failure is not fatal: it is the courage to continue that counts.”', 'Winnston Churchill'),
(40, '“It is during our darkest moments that we must focus to see the light.”', 'Aristotle'),
(41, '“Not having the best situation, but seeing the best in your situation is the key to happiness.”', 'Marie Forleo'),
(42, '“If you have good thoughts they will shine out of your face like sunbeams and you will always look lovely.”', 'Roald Dahi'),
(43, ' “If you don’t like the road you’re walking, start paving another one!”', 'Dolly Parton'),
(44, 'When you’ve seen beyond yourself, then you may find, peace of mind is waiting there.”', 'George Harrison'),
(45, '“I believe that if you’ll just stand up and go, life will open up for you. Something just motivates you to keep moving.”', 'Tina Turner'),
(46, '“If you want to fly give up everything that weighs you down.”', 'Buddha'),
(48, 'It’s okay to outgrow people who don’t grow. Grow tall anyways\".', 'Uknown1243'),
(55, '“This is a reminder to you to create your own rule book, and live your life the way you want it.”', 'Reese Evans'),
(56, '“You can’t go back and change the beginning, but you can start where you are and change the ending.” C.S Lewis', 'C.S Lewis'),
(57, '“You don’t always need a plan. Sometimes you just need to breathe, trust, let go and see what happens.”', 'Mandy Hale');

-- --------------------------------------------------------

--
-- Table structure for table `stressr`
--

CREATE TABLE `stressr` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `steps` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stressr`
--

INSERT INTO `stressr` (`id`, `title`, `steps`) VALUES
(5, 'Karate Breathing', '1. Sit in a comfortable position. While most martial artists use the seiza position, with legs beneath the buttocks with knees directly in front, many people find this position to be uncomfortable. If this is the case, you may also sit cross-legged or in another position that’s more comfortable for you.\r\n\r\n2. Close your eyes, but keep your back straight, your shoulders relaxed, head up, and your eyes (behind your lids) focused ahead.\r\n\r\n3. Take a deep, cleansing breath, expanding your belly and keeping your shoulders relaxed. Hold it in for the count of six.\r\n\r\n4. Exhale, and repeat twice more. Then breathe normally and focus your attention on your breathing.\r\n\r\n5. As you breathe, inhale through your nose and exhale through your mouth, still expanding your belly rather than moving your shoulders up and down.\r\n\r\n6. If your thoughts drift toward the stresses of the day ahead or of the day behind you, gently refocus on your breathing and remain in the present moment. Feel the air move in,'),
(6, 'Awareness of Breathe', 'This practice will help you guide your attention more often to what’s going on in the present, rather than being caught up elsewhere in your mind. The sensation of breathing is often used only because you­­­r breath is with you all the time. The practice isn’t about trying to change how you breathe; your breath simply provides a focus for your attention.\r\n\r\n1. Sit comfortably, finding a stable position you can maintain for a while, either on the floor or in a chair. If not using a guided audio track, set a timer to avoid clock-watching.\r\n\r\n2.Close your eyes if you like, or leave them open and gaze downward toward the floor. Draw attention to the physical sensation of breathing, perhaps noticing the always-present rising and falling of your abdomen or chest, or perhaps the air moving in and out through your nose or mouth.\r\n\r\n3. Take a deep, cleansing breath, expanding your belly and keeping your shoulders relaxed. Hold it in for the count of six.\r\n\r\n4. Practice pausing before making any');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'erica', '$2y$10$rjIZNy.OQGGg4pPQCKSKoOkD/qik/hR2JHXytDKrk0YzTCDuL7lfO'),
(2, 'erica_12', '$2y$10$k0ptTxIattUMRIFejKWHfudZgHtCjTy14NFeMHDR1WbZoR3xzOEzK'),
(3, 'root', '$2y$10$PvkCaE1E9FucfACA0E7dx.HyC586Adi/bETR7qx7HS0S.UjXCziKy'),
(4, 'admin', '$2y$10$cgKvUBlaNMso18Ii397sM.2UYGFiIYikVu8keXkc0s81Dbe1h4ev.'),
(5, 'admin1', 'admin123'),
(6, 'admin3', 'admin32');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(5, 'Admin 1', 'serenityrose554@gmail.com', '$2y$10$AckSjsK9YVe/Y7Hk01qtz.NBl5g1lVvpM0rrR71dSrwDVYVW33.Z2', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginuser`
--
ALTER TABLE `loginuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `mquotes`
--
ALTER TABLE `mquotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stressr`
--
ALTER TABLE `stressr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginuser`
--
ALTER TABLE `loginuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mquotes`
--
ALTER TABLE `mquotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `stressr`
--
ALTER TABLE `stressr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
