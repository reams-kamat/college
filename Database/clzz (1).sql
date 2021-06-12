-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 01:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `des` varchar(1500) NOT NULL,
  `affiliated` varchar(500) NOT NULL,
  `stu_photos` varchar(1500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `des`, `affiliated`, `stu_photos`) VALUES
(9, 'BSc. CSIT', 'yub.jpg', '<p><strong>BSc. CSIT (Bachelors in Computer Science and Information Technology)</strong> is a four years Eight Semesters Undergraduate Degree affiliated to Tribhuvan University (TU) which is designed to provide the student with all sorts of knowledge in the field of Information Technology, Networking, Artificial Intelligence, Computing, Database, Programming, Software Development, Data Structure &amp; Algorithm.</p><p>Himalaya Darshan college one of the top IT college in Biratnagar which is preferred by students searching for affordable best BSc.CSIT College in Nepal. It is the college not only having the professional team of teachers but also facilitates for the students that encourage students to study and aims for the bright future. The college focus on standard Qualitative Education. The BSc.CSIT degree of Himalaya Darshanl college is famous globally due to the teachers who give the theoretical and practical knowledge required by a CSIT student and could sustain worth in the professional world thus making the college one of the top BSc CSIT Colleges in Nepal.</p>', 'TU', 'bhm1.jpg bim.jpg bim1.jpg kishor.jpg maxresdefault.jpg '),
(10, 'BBS', 'bbs.jpg', '<p><strong>BBS(Bachelor of Business Studies)</strong> is a four-year program conducted by the Faculty of Management of Tribhuvan University. The program focuses on business studies and trains students to develop intellectual and interpersonal skills. The profound knowledge of the fields of business and administration gives these students an enormously different and insightful perspective. This degree supplies broad business knowledge and specialist knowledge of a particular business area. Therefore, students will have the opportunity to understand the practical and reality-based skills required to organize and manage organizations of any kind through this course. The program will focus on general management, marketing management, and accounting.</p><p><strong>Bachelor of Business Studies </strong>incorporates management concepts &amp; reality-based skills integrating them with the latest changes in the business environment. The programme concentrates on specialized areas such as accounting, finance, human resource management, or marketing. It also builds a foundation in allied areas such as language, economics, statistics, and law that help students to understand management practices &amp; market needs. Because of the entrepreneurial skills &amp; functional expertise nurtured, graduates eventually become effective agents of change in society.</p>', 'TU', 'bca.jpg bhm.jpg bim.jpg bim1.jpg csit.jpg '),
(11, 'BCA', 'bca.jpg', '<p><strong>BCA (Bachelor of Computer Applications)</strong> is a four-year undergraduate degree affiliated to Tribhuvan University (TU) . It is a technical degree that prepares students for a career in the field of computer applications and software development. It is a common degree for CS/IT universities and is an alternative to the engineering counterpart, BE/BTech in Computer Science/IT which also takes four years. With a BCA, students can study for a masters in computer application.</p><p>This 4 years program in Computer Application has been started with an objective to produce qualified computer software developers having wide range of knowledge in the technical field. Students learn to solve computer based problems of different types of business and industries.</p>', 'TU', 'kishor.jpg yam.jpg yub.jpg '),
(12, 'BIM', 'bim.jpg', '<p><strong>Bachelor of Information Management (BIM)</strong> is a four year (eight semester) degree affiliated to Tribhuvan University (TU) offering an integrated IT and Management courses. The main objective of this degree is to prepare IT professional and proficient in the use of computer and computational technique in order to develop effective information system to solve real life problem in the organizational field.</p><p>Information Management is the study of information and communication systems in business and administration, and is becoming increasingly relevant to other fields as well. Information Management includes development and application of theories, ideas, models, methods, and tools in order to analyze, configure, and use information systems.</p><p>Information Management relies on approaches used in business administration, economics, and computer science; it integrates these and supplements them with approaches that are specific to this subject area. The program is interdisciplinary in nature and courses are borrowed from many different disciplines like Management, Economics, Computer Science, Psychology and Sociology.</p>', 'TU', 'bca.jpg bim1.jpg csit.jpg '),
(14, 'BHM', 'bhm.jpg', '<p><strong>Bachelor of Hotel Management (BHM)</strong> affiliated to Tribhuvan University is a four year( 8 semester) degree course . This course finds its core on hotel and hospitality management to incorporate appropriate skills to students in hotels, restaurants , sales ,tourism industry and entire management . This course provides suitable training and skill development to meet management requirements in Hotel Industry.</p><p>The Bachelor of Hotel Management (BHM) programme of Tribhuvan University has been designed to prepare the students to enter the hospitality industry at the supervisory level in area of hotel and catering operations.BHM program of Tribhuvan University is a four year, 8 semester program which is offered in more than 10 Hotel Management colleges of Nepal . Every year the total capacity of enrollment for BHM program of Tribhuvan University is more than 600.</p>', 'TU', 'bhm1.jpg kishor.jpg yam.jpg yub.jpg ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `author`, `content`, `image`, `date`) VALUES
(3, 'i am a boy 342', 'reams', '', 'download (5).jpg', '2020-05-12'),
(4, 'i am a boy 342', 'reams', '', 'download (5).jpg', '2020-05-12'),
(5, '7845857', 'reams', '', 'download (3).jpg', '2020-05-12'),
(6, 'i am a boy 342', 'Reams', '', 'download (6).jpg', '2020-05-12'),
(7, '123', 'Reams', '', 'download (2).jpg', '2020-05-12'),
(8, '111', 'Reams', '', 'download (3).jpg', '2020-05-12'),
(9, 'gkh first 1', 'Reams', '', '0424000954d8d679d27d63bf545b359b.jpg', '2020-05-12'),
(10, 'lovely', 'Reams', '', '1196156.jpg', '2020-05-12'),
(12, 'i am a boy 342', 'Reams', '', 'download (3).jpg', '2020-05-13'),
(13, 'salina', 'Reams', '<p>cute girl</p>', 'download (9).jpg', '2020-05-13'),
(17, 'i am a boy 342 i am a boy 342 i am a boy 342 i am a boy 342 i am a boy 342 i am a boy 342 ', 'Reams', 'my first content', 'unnamed.jpg', '2020-05-13'),
(18, 'new', 'Reams', '<p>mnsmnbc</p>', 'download (9).jpg', '2020-05-13'),
(19, 'Hello world !!!', 'Reams', '<p>you are my world &lt;3</p>', 'download (10).jpg', '2020-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `author`, `image`, `content`, `date`, `status`) VALUES
(2, 'My first post', 'reams', 'download.jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(3, 'My second post', 'reams', 'download (7).jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(4, 'My third post', 'Reams', 'download (6).jpg', '<p>salina scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example salinalove you Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-12', 'approved'),
(5, 'My 4th post', 'reams', 'download (4).jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(7, 'My 6th post', 'reams', 'download (3).jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(8, 'my 7th post', 'reams', 'download (2).jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(9, 'My 8th post', 'reams', 'download (1).jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p><p>&nbsp;</p>', '2020-05-10', 'approved'),
(10, 'My 9th post', 'Reams', '1196156.jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-12', 'approved'),
(12, 'my 11th post', 'reams', 'download (8).jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(13, 'My 12th post', 'reams', '0424000954d8d679d27d63bf545b359b.jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(14, 'My 13th post', 'reams', '5aa7a213c0fcdf319b76d8035a4498c3.jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(15, 'My 14 post', 'reams', '1196156.jpg', '<p>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</p>', '2020-05-10', 'approved'),
(16, 'My 15 post', 'reams', 'unnamed.jpg', '<p><i>scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.scholar, learner especially : one who attends a school. 2 : one who studies : an attentive and systematic observer a <strong>student</strong> of politics. Synonyms &amp; Antonyms More Example Sentences Learn More about <strong>student</strong>.</i></p>', '2020-05-10', 'approved'),
(50, 'salina ', 'Reams', '1196156.jpg', '<p>salina salina salina salina salina salina salina salina salina salina salina salina salina&nbsp;</p>', '2020-05-12', 'approved'),
(59, 're3w4f', 'User1', 'Screenshot (1).png', '3t54wrt', '2020-06-05', 'pending'),
(60, 'tyhgt', 'User1', 'Screenshot (2).png', 'tgggggghr', '2020-06-05', 'rejected'),
(62, 'new', 'User1', '', '1111111111', '2020-06-05', 'pending'),
(63, 'sssssssss', 'User1', '', 'qqqqqqqqqqqqqqq', '2020-06-05', 'pending'),
(64, '324e2411111111', 'User1', 'Screenshot (3).png', '23r23', '2020-06-05', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `content` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `author`, `image`, `content`, `date`) VALUES
(4, '4th slider ', 'Reams', '2.png', '<p>This is 4th slider.</p>', '2020-05-13'),
(5, 'Fifth Slider', 'Reams', '3.png', '<p>This is fifth slider.</p>', '2020-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `phn` decimal(50,0) NOT NULL,
  `member_since` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `name`, `role`, `password`, `address`, `image`, `phn`, `member_since`) VALUES
(1, 'admin123', 'admin123@gmail.com', 'Admin1', 'admin', 'admin1231', '', 'unnamed.jpg', '10', '0000-00-00'),
(3, 'user123', 'user123@gmail.com', 'User1', 'user', 'user1234', '', '', '0', '0000-00-00'),
(5, 'reams.kamat', 'reams.kamat@gmail.com', 'Reams Kmt', 'admin', 'salina43', 'Malahanuwa', 'Sliderv1-005.jpg', '9810491612', '2020-05-21'),
(7, 'salina.reams', 'salina.reams@yahoo.com', 'salina Khatiwada', 'admin', 'reams', 'jhapa', '1196156.jpg', '9814004585', '0000-00-00'),
(22, 'reams.kmt', 'reams.kmt@gmail.com', 'Reams', 'user', '1', 'Brt', 'inbound1183951845861366145.jpg', '98123456788', '2020-06-03'),
(23, 'Rishav', 'rishavthakuri69@gmail.com', 'Rishav Malla Thakuri', 'admin', 'rishav', 'Brt', 'rishav.jpg', '9842553420', '2020-06-04'),
(24, 'root1', 'root@123gmail.com', 'root', 'user', '00', 'Brt', 'IMG_20190802_113319.jpg', '981234568897', '2020-06-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
