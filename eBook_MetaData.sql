-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2019 at 05:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `eBook_MetaData`
--

CREATE TABLE `eBook_MetaData` (
  `id` int(20) UNSIGNED NOT NULL,
  `creator` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `identifier` varchar(13) COLLATE utf8_bin DEFAULT NULL,
  `date` date DEFAULT NULL,
  `language` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `eBook_MetaData`
--

INSERT INTO `eBook_MetaData` (`id`, `creator`, `title`, `type`, `identifier`, `date`, `language`, `description`) VALUES
(1, 'Thomas Harris', 'Silence of the Lambs', 'Thriller', '0-312-02282-4', '1988-01-01', 'en', 'Sequel to the 1981 novel Red Dragon by Thomas Harris.'),
(2, 'Thomas Harris', 'Red Dragon', 'Thriller', '0-399-12442-X', '1981-10-01', 'en', 'First book in the Hannibal Lecter series by Thomas Harris'),
(4, 'Thomas Harris', 'Hannibal', 'Thriller', '0-385-33487-7', '1999-06-08', 'en', 'The third book in the Hannibal Lector Series by Thomas Harris'),
(8, 'Bram Stoker', 'Dracula', 'Horror', '1447002', '1897-05-26', 'en', 'The novel that introduced the vampire Count Dracula'),
(9, '', '', '', '', '0000-00-00', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eBook_MetaData`
--
ALTER TABLE `eBook_MetaData`
  ADD UNIQUE KEY `ID` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eBook_MetaData`
--
ALTER TABLE `eBook_MetaData`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
