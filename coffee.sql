-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 02:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `content`, `image`) VALUES
(5, 'Welcome To Absolute Vacations', 'Welcome To Absolute Vacations', '73411.jpg'),
(6, 'Welcome To Absolute Vacations', 'Welcome To Absolute Vacations', '487Europe-Tour4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `cat_id`, `comment`, `status`) VALUES
(1, 4, 'comment1', 1),
(2, 3, 'comment2', 1),
(3, 4, 'comment13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `message` varchar(500) NOT NULL,
  `datetmie` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(80) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `cat_id`, `image`, `content`) VALUES
(2, 4, '164Hydrangeas.jpg', 'this is coffee  list'),
(3, 4, '451Lighthouse.jpg', 'Coffee1'),
(4, 3, '628Chrysanthemum.jpg', 'Coffee2');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_cat`
--

CREATE TABLE `gallery_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `reviewer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_cat`
--

INSERT INTO `gallery_cat` (`id`, `name`, `owner_id`, `reviewer`) VALUES
(3, 'Shop1', 2, '         good  company                                                                '),
(4, 'Shop2', 1, NULL),
(5, 'Shop3', 1, NULL),
(7, 'Shop 4', 1, NULL),
(9, 'Shop 5', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `type` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `pwd`, `type`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'owner', 'owner', '2');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `cat_id`, `heading`, `content`, `price`, `image`) VALUES
(12, 10, 'Leh Ladakh', ' Ladakh is a land in the Jammu and Kashmir region of northern India, which lies between Karakoram mountain in the north and Himalaya mountain in the south. It is one of the most rare parts of Nepal. Area of ??Ladakh district is 97,776 square kilometers', '5N/6D Rs. 45000/', '9731.jpg'),
(13, 10, 'KASHMIR', 'Kashmir Valley has a moderate climate, which is largely defined by its geographic location, with the towering Karakoram Range in the north, Pir Panjal Range in the south and west and Zanskar Range in the east.It can be generally described as cool in the spring and autumn, mild in the summer and cold in the winter. As a large valley with significant differences in geo-location among various districts, the weather is often cooler in the hilly areas compared to the flat lower part.', 'Rs. 45000 /- p.p. 5N', '1482.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `package_cat`
--

CREATE TABLE `package_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_cat`
--

INSERT INTO `package_cat` (`id`, `name`) VALUES
(10, 'DOMESTIC PACKAGE'),
(11, 'INTERNATIONAL PACKAGE');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `image` varchar(80) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `heading`, `content`, `image`, `datetime`) VALUES
(3, 'Ram', 'sjs dssd sd d sdk daad d dhdka', '130Koala.jpg', '2018-09-02 05:17:17'),
(4, 'Ram', 'ssd ds sd ds dssf ULQWYW EWE ', '602Lighthouse.jpg', '2018-09-02 05:17:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_cat`
--
ALTER TABLE `gallery_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_cat`
--
ALTER TABLE `package_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery_cat`
--
ALTER TABLE `gallery_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package_cat`
--
ALTER TABLE `package_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
