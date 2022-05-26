-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 08:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myphpsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `feat`
--

CREATE TABLE `feat` (
  `id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `para` varchar(255) NOT NULL,
  `groups` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feat`
--

INSERT INTO `feat` (`id`, `year`, `title`, `place`, `para`, `groups`) VALUES
(1, ' 2017\r\n      ', '    Mobile Web', 'Master Design', 'Please tell your friends about Tooplate website. That would be very helpful. We need your support.', 'Educations'),
(2, '2018', 'mmmmmmmmmmm', 'lllllllllllll', 'ppppppppppppppppp', 'Experiences'),
(3, '2019', 'wwwwwwwwwwwwwwwwwwwwww', 'yyyyyyyyyyyyyy', 'llllllllllllllllllllllllllllllllllllllllllllllllllll', 'Experiences'),
(4, '2020', 'adminastrator ', 'technical company', '2021 adminastrator in technical company for insulation materials for 8 years', 'Educations'),
(5, '2016', 'tttttttttttt', 'rrrrrrrrrrrr', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'Experiences'),
(6, '2015', 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', 'rrrrrrrrrrrrrrrr', 'Educations'),
(7, '2014', 'dddddddddddddddd', 'ssssssssssssssssssss', 'ooooooooooooooooooooooooooooooooooooo', 'Experiences'),
(8, '2013', '11111111111', '22222222', '9999999999999999999999999999999999', 'Educations');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `lang` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `resum` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `smalltext` varchar(255) NOT NULL,
  `span1` varchar(255) NOT NULL,
  `span2` varchar(255) NOT NULL,
  `span3` varchar(255) NOT NULL,
  `span4` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `h2projects` varchar(255) NOT NULL,
  `svg` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `group1` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `h1` varchar(255) NOT NULL,
  `m1` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `h2` varchar(255) NOT NULL,
  `m2` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `h3` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `h4` varchar(255) NOT NULL,
  `m4` varchar(255) NOT NULL,
  `p4` varchar(255) NOT NULL,
  `group2` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `h5` varchar(255) NOT NULL,
  `m5` varchar(255) NOT NULL,
  `p5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `h6` varchar(255) NOT NULL,
  `m6` varchar(255) NOT NULL,
  `p6` varchar(255) NOT NULL,
  `s7` varchar(255) NOT NULL,
  `h7` varchar(255) NOT NULL,
  `m7` varchar(255) NOT NULL,
  `p7` varchar(255) NOT NULL,
  `welcome` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `flink` varchar(255) NOT NULL,
  `ilink` varchar(255) NOT NULL,
  `welcontact` varchar(255) NOT NULL,
  `yname` varchar(255) NOT NULL,
  `yemail` varchar(255) NOT NULL,
  `ymsg` varchar(255) NOT NULL,
  `sending` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `lang`, `content`, `title`, `brand`, `about`, `projects`, `resum`, `contact`, `mode`, `smalltext`, `span1`, `span2`, `span3`, `span4`, `paragraph`, `link`, `quote`, `h2projects`, `svg`, `attachment`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `group1`, `s1`, `h1`, `m1`, `p1`, `s2`, `h2`, `m2`, `p2`, `s3`, `h3`, `p3`, `s4`, `h4`, `m4`, `p4`, `group2`, `s5`, `h5`, `m5`, `p5`, `s6`, `h6`, `m6`, `p6`, `s7`, `h7`, `m7`, `p7`, `welcome`, `phone`, `email`, `flink`, `ilink`, `welcontact`, `yname`, `yemail`, `ymsg`, `sending`) VALUES
(4, 'ar', 'موقع شخصي , موقع ديناميكي ', 'موقعى الشخصى لغة بي اتش بي', 'محمد خير', 'عنى', 'اعمالي', 'سيرتى الذاتية', 'اتصل بى', 'حالة اللون', 'مرحبا بكم فى موقعى الشخصى ', 'اهلا بكم ايها القوم', 'مطور ويب لغة بى اتش بى', 'مطور ووردبريس', 'تسويق الكترونى', 'بناء مواقع الكترونية ناجحة وقوية . لديا خبرة جيدة فى لغات البرمجة والووردبريس والمتاجر الالكترونية', 'تنزيل السيرة الذاتية', 'احصل على عرض سعر', 'بعض من اعمالى التي قمت ببرمجتها للاشخاص والشركات', '001.png', '01.jpg', '3.jpg', '7.jpg', '13.jpg', '30.jpg', '50.jpg', '51.jpg', 'الخبرات', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', 'الشهادات', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', 'مرحبا بكم ', '00201150986743', 'mrmkhair9@gmail.com', 'mohamed.khair.121', 'mohamed.khair.121', 'مرحبا بكم يسعدنى تواصلكم معى عبر الهاتف او الايميل فى اى وقت على مدار اليوم', 'اكتب اسمك الكريم من فضلك', 'اكتب بريد الكترونى صالح خاص بحضرتك', 'اكتب رسالتك هنا اخى الكريم شكرا لك', 'ارسال الرسالة'),
(5, 'eng', 'my php personal site , php site , mohamed khair site ,my first dynamic site, portfolio ', 'my php personal site ', 'Mohamed Khair ', 'about me ', 'my projects ', 'my resume ', 'contact me ', 'color mode ', 'Welcome to my portfolio website! ', 'Hey folks , I\'m ', 'PHP developer', 'WordPress developer', 'Digital Marketing', 'Building a successful product is a challenge. I am highly energetic in user experience design, interfaces and web development ', 'Download Resume', 'Get a free quote', 'Things I have designed for digital media agencies', 'Screenshot (10).png', 'Screenshot (11).png', 'Screenshot (12).png', 'Screenshot (13).png', 'Screenshot (14).png', 'Screenshot (15).png', 'Screenshot (16).png', 'Screenshot (18).png', 'experience', '2019', 'Project Manager', 'Best Studio', 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc', '2018', 'UX Designer \r\n', 'Digital Ace', 'Fusce rutrum augue id orci rhoncus molestie. Nunc auctor dignissim lacus vel iaculis.', '2016', '\r\nUI Freelancer\r\n', 'Sed fringilla vitae enim sit amet cursus. Sed cursus dictum tortor quis pharetra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '2014', 'Junior Designer \r\n', 'Crafted Co.', 'Cras scelerisque scelerisque condimentum. Nullam at volutpat mi. Nunc auctor ipsum eget magna consequat viverra.', 'education', '2017', 'Mobile Web \r\n', 'Master Design', 'Please tell your friends about Tooplate website. That would be very helpful. We need your support.', '2015', 'User Interfaces', 'Creative Agency\r\n', '\r\nTooplate is a great website to download HTML templates without any login or email.', '2013', 'Artwork Design', 'New Art School\r\n', '\r\nYou can freely use Tooplate\'s templates for your business or personal sites. You cannot redistribute this template without a permission.', 'say hello', '00201150986743', 'mrmkhair9@gmail.com', 'mohamed.khair.121', 'mohamed.khair.121', 'welcome to you can fell free to call me or send me message any time', 'write your name please', 'write a valid email', 'put your message here', 'send message');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feat`
--
ALTER TABLE `feat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feat`
--
ALTER TABLE `feat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
