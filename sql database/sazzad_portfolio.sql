-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 09:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sazzad_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_portfolio_sazzad`
--

CREATE TABLE `login_portfolio_sazzad` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_portfolio_sazzad`
--

INSERT INTO `login_portfolio_sazzad` (`id`, `name`, `email`, `password`, `date`) VALUES
(1, 'sazzad', 'sazzad01835558000@gmail.com', 'sazzad00', '2020-06-18 23:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `main_text_portfollio`
--

CREATE TABLE `main_text_portfollio` (
  `id` int(11) NOT NULL,
  `text_name` text NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_text_portfollio`
--

INSERT INTO `main_text_portfollio` (`id`, `text_name`, `text`, `date`) VALUES
(12, 'main admin', 'Rahath', '2020-06-18 22:43:13'),
(13, 'what_i_heading', 'What I Know.\r\n', '2020-06-18 22:43:13'),
(14, 'what_i_desc', 'I am a profassional\r\nfreelancher.I hope you satisfied my work.', '2020-06-18 22:43:13'),
(15, 'web_design', 'web design', '2020-06-18 22:43:13'),
(16, 'web_design_desc', 'I am making any website using html,css,jquery,\r\n                javascript,bootstrap and php or wordpress.', '2020-06-18 22:43:13'),
(17, 'web_development', 'web development.', '2020-06-18 22:43:13'),
(18, 'web_development_desc', 'Web Development is a like web design I also do this work.I am full stuk devloper.\r\n                    I design frontend and backend code.', '2020-06-18 22:43:13'),
(20, 'wordpress', 'wordpress', '2020-06-18 22:43:14'),
(21, 'wordpress_desc', 'use wordpress CMS making 2 to 3 hour making a website is very easy.\r\nbug_fix-Bug fixes', '2020-06-18 22:43:14'),
(22, 'bug_fix', 'Bug fixes\r\n', '2020-06-18 22:50:26'),
(23, 'bug_fix_desc', '\r\nhelp to fix in your website any bug.It somtimes very trickey.\r\n\r\nHtml5\r\nIt make structure in any website.html:Hyper text markap languge.\r\n', '2020-06-18 22:50:27'),
(24, 'html', 'Html5', '2020-06-18 22:50:27'),
(25, 'html_desc', 'It make structure in any website.html:Hyper text markap languge.', '2020-06-18 22:50:27'),
(26, 'css', 'Css3', '2020-06-18 22:50:27'),
(27, 'css_desc', 'Css is very important for website it give style in website.css give website eye contuct and bewty.css:cascading stylesheet.', '2020-06-18 22:50:27'),
(28, 'javascript', 'javascript', '2020-06-18 22:50:27'),
(29, 'javascript_desc', 'Java-script given website some movement and more functional.it is very useful.', '2020-06-18 22:50:27'),
(30, 'php', 'php-mysql', '2020-06-18 22:50:27'),
(31, 'php_desc', 'Php is life of website.sql database and php combination is important.', '2020-06-18 22:50:27'),
(32, 'proudect_section_heading', 'My work sample.', '2020-06-18 22:58:49'),
(33, 'proudect_section_desc', 'I complete this tamplate sample I hope you like this.\r\nsample_one_name-sazzad Hossain.', '2020-06-18 22:58:50'),
(34, 'sample_one_name', 'serity', '2020-06-18 22:58:50'),
(35, 'sample_one_desc', 'This poetfollio is very nice.I make this site.sazzad portfollio is full responsive.\r\n', '2020-06-18 22:58:50'),
(36, 'sample_tow_name', 'Silon', '2020-06-18 22:58:50'),
(37, 'sample_tow_desc', 'Silon is a single page E-commerce website it is full responsive and nice.I make it.\r\n', '2020-06-18 23:01:46'),
(40, 'sample_three_name', 'lopa', '2020-06-18 23:06:56'),
(41, 'sample_three_desc', 'Lopa is a nice spa probider site and full responsive .I make it.\r\n', '2020-06-18 23:06:56'),
(42, 'sample_four_name', 'consiment', '2020-06-18 23:06:56'),
(43, 'sample_four_desc', 'This consiment tamplate is portfollio.I make this site.sazzad portfollio is full not use mobile but use all tab and desktop responsive.\r\n', '2020-06-18 23:06:56'),
(44, 'services_section', 'My services', '2020-06-18 23:06:56'),
(45, 'services_section_desc', 'I am provide this services.this work also halful for us.', '2020-06-18 23:06:56'),
(46, 'Wordpress_services_desc', 'wordpress cms is very poplor in now.any website make in wordpress is very easy.\r\n', '2020-06-18 23:12:47'),
(47, 'portfollio_desc', 'portfollio site is a parsonal homepage.portfollio site I made very attrictive look.\r\n', '2020-06-18 23:12:47'),
(48, 'e_commerce_desc', 'E-commerce website is design and development need for you.I make varuis e-commerce site.', '2020-06-18 23:12:47'),
(49, 'blog_site_desc', 'Blog is very popoler in entre world.I make any blog site.so you need blog-site nocked me.\r\n', '2020-06-18 23:12:47'),
(50, 'responsive_section_text', 'RESPONSIVE', '2020-06-18 23:12:47'),
(51, 'res_desc', 'My design is full responsive and user friendly.You use to any divice this tamplate and site demo.', '2020-06-18 23:12:47'),
(52, 'skill_section_text', 'My Skills.', '2020-06-18 23:16:24'),
(53, 'skill_section_desc', 'My skill parameter like this.', '2020-06-18 23:16:24'),
(54, 'contuct_section_name', 'Get in tuch.', '2020-06-18 23:16:24'),
(55, 'contuct_section_desc', 'if you need me contuct us in inbox.', '2020-06-18 23:16:24'),
(56, 'Load_more_section_desc', 'I am a student. I read Bangladesh sweden polytecnic institute in machanical.But my dream in programing and web developing so i can do this.my dream im make so big web deveper and programer.', '2020-06-18 23:16:24'),
(57, 'footer_section_location_text', 'chakaria(1741) - Coxbazar - Chittgong - Bangladesh.', '2020-06-18 23:16:24'),
(58, 'button_proudect_section', ' more project...', '2020-06-19 23:42:08'),
(59, 'services_blog_title', 'Blog site', '2020-06-19 23:51:08'),
(60, 'services_wordpress_title', 'Wordpress', '2020-06-19 23:51:08'),
(61, 'services_portfollio_title', 'Portfolio', '2020-06-19 23:52:12'),
(62, 'services_ecommerce_title', 'E-Commerce', '2020-06-19 23:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `sazzad_portfollio`
--

CREATE TABLE `sazzad_portfollio` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sazzad_portfollio`
--

INSERT INTO `sazzad_portfollio` (`id`, `name`, `email`, `password`, `date`, `massage`) VALUES
(5, 'vfdg', 'jkcsdn@gmail.com', 'fdfds', '2020-06-15', 'fdsfdsdvfs'),
(6, 'fdg', 'grer', 'erg', '2020-06-15', 'gtre');

-- --------------------------------------------------------

--
-- Table structure for table `sazzad_portfollio_picture`
--

CREATE TABLE `sazzad_portfollio_picture` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sazzad_portfollio_picture`
--

INSERT INTO `sazzad_portfollio_picture` (`id`, `images`, `name`, `date`) VALUES
(1, 'main_admin1.jpg', 'main_admin_picture_one', '0000-00-00 00:00:00'),
(3, 'main_admin2.jpg', 'main_admin_picture_tow', '0000-00-00 00:00:00'),
(5, 'sazzad_tamb.jpg', 'sazzad_tambnill', '0000-00-00 00:00:00'),
(6, 'silon_tamb.jpg', 'silon_tambnill', '0000-00-00 00:00:00'),
(7, 'lopa_tamb.jpg', 'lopa_tambnill', '0000-00-00 00:00:00'),
(10, 'consiment_tamb.jpg', 'consiment_tambnill', '0000-00-00 00:00:00'),
(12, 'res_icon.png', 'responsive_icon', '0000-00-00 00:00:00'),
(14, 'res.png', 'responsive_main_picture', '0000-00-00 00:00:00'),
(15, 'developera.png', 'footer_developer_img', '0000-00-00 00:00:00'),
(16, 'map.jpg', 'footer_map_img', '0000-00-00 00:00:00'),
(17, 'Picture_s.png', 'sazzad_load_more_pic', '2020-06-18 14:36:03'),
(18, 'consiment.jpg', 'proudect_main_con', '2020-06-18 14:40:51'),
(19, 'lopa.jpg', 'proudect_main_lopa', '2020-06-18 14:40:51'),
(20, 'portfollio.jpg', 'proudect_main_sazzad', '2020-06-18 14:41:25'),
(21, 'silon.jpg', 'proudect_main_silon', '2020-06-18 14:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `sazzad_portfollio_text`
--

CREATE TABLE `sazzad_portfollio_text` (
  `id` int(11) NOT NULL,
  `text_name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_portfolio_sazzad`
--
ALTER TABLE `login_portfolio_sazzad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_text_portfollio`
--
ALTER TABLE `main_text_portfollio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sazzad_portfollio`
--
ALTER TABLE `sazzad_portfollio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sazzad_portfollio_picture`
--
ALTER TABLE `sazzad_portfollio_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sazzad_portfollio_text`
--
ALTER TABLE `sazzad_portfollio_text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_portfolio_sazzad`
--
ALTER TABLE `login_portfolio_sazzad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_text_portfollio`
--
ALTER TABLE `main_text_portfollio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `sazzad_portfollio`
--
ALTER TABLE `sazzad_portfollio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sazzad_portfollio_picture`
--
ALTER TABLE `sazzad_portfollio_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sazzad_portfollio_text`
--
ALTER TABLE `sazzad_portfollio_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
