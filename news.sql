-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 05:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'vivek', 'vivek65k@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `des`) VALUES
(1, 'World', 'World'),
(2, 'Technology', 'Technology'),
(3, 'Culture', 'Culture'),
(4, 'Business', 'Business'),
(5, 'Politics', 'Politics'),
(6, 'Science', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`) VALUES
(1, 'vivek kumar pandey', 'vivek65k@gmail.com', 'this is vivek');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `date`, `category`, `thumbnail`, `admin`) VALUES
(1, 'The quick, brown fox jumps over a lazy dog. ', 'The quick, brown fox jumps over a lazy dog. The quick, brown fox jumps over a lazy dog. The quick, brown fox jumps over a lazy dog.  ', '2019-03-05', 'World', 'theresa-may-seeks-mps-support-for-her-deal-after-delay-to-brexit-agreed-136434675067041001-190322033039.jpg', 'vivek'),
(4, 'A wonderful serenity has taken possession of my entire sou', 'A wonderful serenity has taken possession of my entire souA wonderful serenity has taken possession of my entire souA wonderful serenity has taken possession of my entire souA wonderful serenity has taken possession of my entire sou ', '2019-03-08', 'Technology', '3-2-750x350.png', 'vivek'),
(5, ' I neglect my talents. I should be incapable of drawing a single ', ' I neglect my talents. I should be incapable of drawing a single  I neglect my talents. I should be incapable of drawing a single  I neglect my talents. I should be incapable of drawing a single  I neglect my talents. I should be incapable of drawing a single  ', '2019-12-10', 'Culture', 'Celebrity-Advertising-news-938x450.jpg', 'ashish'),
(8, 'Far far away, behind the word mountains, far from the countries Vokalia', 'Far far away, behind the word mountains, far from the countries VokaliaFar far away, behind the word mountains, far from the countries VokaliaFar far away, behind the word mountains, far from the countries VokaliaFar far away, behind the word mountains, far from the countries Vokalia', '2019-03-30', 'Culture', 'Business-News-Sites-in-India.jpg', 'amit'),
(9, 'd text by the name of Lorem Ipsum decided to leave for the far World of Gramm', 'd text by the name of Lorem Ipsum decided to leave for the far World of Grammd text by the name of Lorem Ipsum decided to leave for the far World of Grammd text by the name of Lorem Ipsum decided to leave for the far World of Grammd text by the name of Lorem Ipsum decided to leave for the far World of Grammd text by the name of Lorem Ipsum decided to leave for the far World of Gramm', '2019-03-28', 'Business', 'Business-News-Sites-in-India.jpg', 'pritesh'),
(10, 'vious Semikoli, but the Little Blind Text didnâ€™t listen. She packed her seven ver', 'vious Semikoli, but the Little Blind Text didnâ€™t listen. She packed her seven vervious Semikoli, but the Little Blind Text didnâ€™t listen. She packed her seven vervious Semikoli, but the Little Blind Text didnâ€™t listen. She packed her seven vervious Semikoli, but the Little Blind Text didnâ€™t listen. She packed her seven ver', '2019-03-19', 'Politics', 'Celebrity-Advertising-news-938x450.jpg', 'vivek'),
(11, ' last view back on the skyline of her hometown Bookmarksgrove, t', ' last view back on the skyline of her hometown Bookmarksgrove, t last view back on the skyline of her hometown Bookmarksgrove, t last view back on the skyline of her hometown Bookmarksgrove, t last view back on the skyline of her hometown Bookmarksgrove, t last view back on the skyline of her hometown Bookmarksgrove, t last view back on the skyline of her hometown Bookmarksgrove, t', '2019-04-18', 'Politics', 'Rahul_B2_13715.jpg', 'vivek'),
(12, 'ich roasted parts of sentences fly into your mouth. Even the all-powerful P', 'ich roasted parts of sentences fly into your mouth. Even the all-powerful Pich roasted parts of sentences fly into your mouth. Even the all-powerful Pich roasted parts of sentences fly into your mouth. Even the all-powerful Pich roasted parts of sentences fly into your mouth. Even the all-powerful Pich roasted parts of sentences fly into your mouth. Even the all-powerful P', '2018-12-13', 'World', 'water07nuke759.jpg', 'vivek'),
(13, 'But I must explain to you how all this mistaken idea of denouncing pleasure', 'But I must explain to you how all this mistaken idea of denouncing pleasureBut I must explain to you how all this mistaken idea of denouncing pleasureBut I must explain to you how all this mistaken idea of denouncing pleasureBut I must explain to you how all this mistaken idea of denouncing pleasureBut I must explain to you how all this mistaken idea of denouncing pleasureBut I must explain to you how all this mistaken idea of denouncing pleasureBut I must explain to you how all this mistaken idea of denouncing pleasure', '2019-03-22', 'World', 'theresa-may-seeks-mps-support-for-her-deal-after-delay-to-brexit-agreed-136434675067041001-190322033039.jpg', 'vivek'),
(14, 'On the other hand, we denounce with righteous indignation', 'On the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignationOn the other hand, we denounce with righteous indignation', '2019-03-25', 'Science', 'Science India Portal-min.png', 'vivek'),
(15, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', '2019-03-20', 'Health', 'water07nuke759.jpg', 'Ankur'),
(16, ' At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', ' At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis', '2019-03-27', 'Technology', 'in-memory-computing.jpg', 'vivek'),
(17, 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiumSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium', '2019-03-17', 'Health', '1-550-620x400.jpg', 'Ankit'),
(18, 'dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspe', 'dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspedicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspe', '2019-03-12', 'Culture', '22-08-2018-India-business-news-headlines.jpg', 'rohit'),
(19, 'voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos', 'voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimosvoluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos', '2019-07-25', 'Health', 'water07nuke759.jpg', 'Rajesh'),
(20, ' pariatur? At vero eos et accusamus et iusto odio dignissimos ducim', ' pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim pariatur? At vero eos et accusamus et iusto odio dignissimos ducim', '2019-06-14', 'Politics', 'file-20181217-185240-jlbt21.jpg', 'vivek'),
(21, 'nimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis es', 'nimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis esnimi, id est laborum et dolorum fuga. Et harum quidem rerum facilis es', '2019-03-25', 'Style', 'theresa-may-seeks-mps-support-for-her-deal-after-delay-to-brexit-agreed-136434675067041001-190322033039.jpg', 'vivek'),
(22, 'one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolor', 'one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolor', '2019-03-13', 'Style', 'article-201737613233248212000.jpeg', 'vivek'),
(23, 'one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi', 'one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorone voluptatem sequi nesciunt. Neque porro quisquam est, qui dolor', '2019-03-22', 'Style', 'Air-pollution-pti-620x400.jpg', 'vivek'),
(24, 'molestiae consequatur, vel illum qui dolorem eum fugiat quo volupta', 'molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2019-03-15', 'Style', 'Celebrity-Advertising-news-938x450.jpg', 'vivek'),
(25, 'vivek', 'vufggsfgsgd', '2019-03-21', 'World', 'Business-News-Sites-in-India.jpg', 'vivek'),
(26, ' sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui r', ' sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui r sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui r sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui r', '2019-03-08', 'Style', '3-2-750x350.png', 'vivek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
