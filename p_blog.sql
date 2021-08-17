-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 10:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b5yo3n25dtjsk7zprnt6`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `illustration` varchar(255) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `email`, `description`, `content`, `illustration`, `created_on`) VALUES
(11, 'something', 'djack@test.com', 'Debug the new flask app of errors', 'Plain-text posts are sufficient for short messages and status updates, but users who want\r\nto write longer articles will find the lack of formatting very limiting. In this section, the\r\ntext area field where posts are entered will be upgraded to support the Markdown syntax\r\nand present a rich-text preview of the post.', 'uploads/5fb0169ec5a9c1.51798695.jpg', '2020-11-14 17:40:46'),
(12, 'make a web', 'djack009@test.com', 'Ni ngumuu', 'When the form is submitted only the raw Markdown text is sent with the POST request;\r\nthe HTML preview that was shown on the page is discarded. Sending the generated\r\nHTML preview with the form can be considered a security risk, as it would be fairly\r\neasy for an attacker to construct HTML sequences that do not match the Markdown\r\nsource and submit them. To avoid any risks, only the Markdown source text is submit‐\r\nted, and once in the server it is converted again to HTML using Markdown, a Python\r\nMarkdown-to-HTML converter. The resulting HTML will be sanitized with Bleach to\r\nensure that only a short list of allowed HTML tags are used.', 'uploads/5fb01b8fab2a23.77066491.jpg', '2020-11-14 18:01:51'),
(13, 'kumeumana ', 'omodidave@gmail.com', 'wadau wanajiona watamu kuliko chapati', 'sasa mangeus wameamua waringe na wengine wanakaa lami imeomoka kama juzi nlikutana na mende ingine sema uuuuuiii ...for more info fika \r\n@bigglitch007', 'uploads/5fb01e6fca2b29.28827478.jpg', '2020-11-14 18:14:07'),
(14, 'Last blog', 'test003@flasktest.com', 'Just One last One', 'Maze thank God!!!\r\nWhen the form is submitted only the raw Markdown text is sent with the POST request;\r\nthe HTML preview that was shown on the page is discarded. Sending the generated\r\nHTML preview with the form can be considered a security risk, as it would be fairly\r\neasy for an attacker to construct HTML sequences that do not match the Markdown\r\nsource and submit them. To avoid any risks, only the Markdown source text is submit‐\r\nted, and once in the server it is converted again to HTML using Markdown, a Python\r\nMarkdown-to-HTML converter. The resulting HTML will be sanitized with Bleach to\r\nensure that only a short list of allowed HTML tags are used.', 'uploads/5fb01edc9a0994.15246528.jpg', '2020-11-14 18:15:56'),
(15, 'Romeo and Juliet', 'test003@flasktest.com', 'Story of romeo and Juliet', 'It is hard to imagine a world without Shakespeare. Since their\r\ncomposition four hundred years ago, Shakespeare’s plays and poems\r\nhave traveled the globe, inviting those who see and read his works to\r\nmake them their own.\r\nReaders of the New Folger Editions are part of this ongoing process\r\nof “taking up Shakespeare,” finding our own thoughts and feelings\r\nin language that strikes us as old or unusual and, for that very reason,\r\nnew. We still struggle to keep up with a writer who could think a\r\nmile a minute, whose words paint pictures that shift like clouds.\r\nThese expertly edited texts are presented to the public as a resource\r\nfor study, artistic adaptation, and enjoyment. By making the classic\r\ntexts of the New Folger Editions available in electronic form as The\r\nFolger Shakespeare (formerly Folger Digital Texts), we place a\r\ntrusted resource in the hands of anyone who wants them.\r\nThe New Folger Editions of Shakespeare’s plays, which are the basis\r\nfor the texts realized here in digital form, are special because of their\r\norigin. The Folger Shakespeare Library in Washington, DC, is the\r\nsingle greatest documentary source of Shakespeare’s works. An\r\nunparalleled collection of early modern books, manuscripts, and\r\nartwork connected to Shakespeare, the Folger’s holdings have been\r\nconsulted extensively in the preparation of these texts. The Editions\r\nalso reflect the expertise gained through the regular performance of\r\nShakespeare’s works in the Folger’s Elizabethan Theatre.\r\nI want to express my deep thanks to editors Barbara Mowat and Paul\r\nWerstine for creating these indispensable editions of Shakespeare’s\r\nworks, which incorporate the best of textual scholarship with a\r\nrichness of commentary that is both inspired and engaging. Readers\r\nwho want to know more about Shakespeare and his plays can follow\r\nthe paths these distinguished scholars have tread by visiting the\r\nFolger either in-person or online, where a range of physical and\r\ndigital resources exists to supplement the material in these texts. I\r\ncommend to you these words, and hope that they inspire', 'uploads/5fb10801cd6938.38015281.jpg', '2020-11-15 10:50:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
