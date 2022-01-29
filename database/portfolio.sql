-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Pritësi (host): 127.0.0.1
-- Koha e gjenerimit: Jan 29, 2022 në 06:49 MD
-- Versioni i serverit: 10.4.20-MariaDB
-- PHP Versioni: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databaza: `portfolio`
--

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `aboutme_section`
--

CREATE TABLE `aboutme_section` (
  `aId` int(10) NOT NULL,
  `aName` varchar(255) DEFAULT NULL,
  `aDescription` text DEFAULT NULL,
  `aImage` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `aboutme_section`
--

INSERT INTO `aboutme_section` (`aId`, `aName`, `aDescription`, `aImage`) VALUES
(1, 'Denis Hoti', 'Web developer that creates beautifully website designs and multi functional websites using variety of programming languages like JavaScript, php, mysql etc...', 'deenis.jpg');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `admin_login`
--

CREATE TABLE `admin_login` (
  `aId` int(10) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `apassword` varchar(255) DEFAULT NULL,
  `isConfirmed` int(1) NOT NULL DEFAULT 0,
  `terms` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `admin_login`
--

INSERT INTO `admin_login` (`aId`, `username`, `email`, `apassword`, `isConfirmed`, `terms`) VALUES
(1, 'denis', 'denishoti18@gmail.com', '325481a57697834668ac55c555de5953', 1, 'PO');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `blog`
--

CREATE TABLE `blog` (
  `bId` int(10) NOT NULL,
  `bBanner` varchar(255) DEFAULT NULL,
  `bSubtitle` varchar(255) DEFAULT NULL,
  `bTitle` varchar(255) DEFAULT NULL,
  `bShortDescription` varchar(255) DEFAULT NULL,
  `bContent` text DEFAULT NULL,
  `bDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `blog`
--

INSERT INTO `blog` (`bId`, `bBanner`, `bSubtitle`, `bTitle`, `bShortDescription`, `bContent`, `bDate`) VALUES
(7, 'pg2.png', 'Intro to Web Design Couse', 'Intro to Web Design Couse', 'In collaboration with NGO THY I lectured a 4 week intensive training on WEBSITE DESIGN and WEBSITE DEVELOPMENT and in the end all successful participants were certified', 'This 4 week training was intended for participants to have an introduction to the basics of web programming.\r\n\r\n\r\nThis training was all held online remotely through the ZOOM platform.\r\n\r\n\r\nAfter the 4 week training all participants were familiar with the syntax of these languages and had the knowledge to create a basic website.\r\n\r\n\r\nAnd all the successful participants were certified proving that they are knowledgeable about web development.', '2022-01-29'),
(8, 'thyweb.png', 'Website of NGO THY', 'Developing the Website of NGO THY', 'This project aimed, together with NGO volunteers and with my help as a web developer, to come to a conclusion about what the THY web should contain ?;  And what will the design be like?', 'On July 15, a workshop was held for the design of the website where as a sample we took the page of the Multifunctional Youth Center ARKA.\r\n<br>\r\nDuring this workshop we discussed and learned about the basic concepts of Web design and also got feedback from participants on how they would have liked to see a website for NGO THY.\r\n<br>\r\nOn July 16, the second day of the website design workshop was held, where we took the site of the ARKA Multifunctional Youth Center as a sample.\r\n<br>\r\nDuring the day it was discussed about designing registration forms and the easiest way to create accounts on THY web. We also got feedback and examples from participants on how a form of user registration would look nice and simple.\r\n<br>\r\nAnd on July 17, the third day of the website design workshop was held, where we took the site of the ARKA Multifunctional Youth Center as a sample.\r\n<br>\r\nDuring this day we discussed and learned about the administration part of a website. The division of tasks for web administration was also discussed.', '2022-01-29'),
(9, 'img1.jpg', 'Digital Portfolio', 'Creating a Digital Portfolio (CV)', 'During this project I was facilitator where I held a two-day workshop about DIGITAL PORTFOLIO in cooperation with NGO THY.', 'In this workshop, participants had the opportunity to show their work and career to the general public using a portfolio web. They have learned that: what is a web portfolio ?; What should a web portfolio contain ?; What is the importance of having a web portfolio? etc ... Then create a RESUME which they will display in the portfolio. And finally, they created their own web where they put their data and put it on the vast web of web sites!\r\n<br><br><br>\r\nThe methodology used during this training was mainly interactive and having a conversation about the topic with the participants. I also used presentations to make the participants as clear as possible. During the time we programmed the website I first explained what role the code plays then we started writing it! Frequently asked questions to participants and quick tasks have made it even more productive.\r\n<br><br><br>\r\nAll participants have obtained the necessary knowledge and created their web portfolio and published it. In addition, they have been very inquisitive about other topics related to programming and computer science, where they have also received information! They have also been able to create in this form the web where as an example we have the web portfolio created by one of the participants, <a href=\"https://puhizashemsedini.netlify.app/\" target=\"_blank\">Puhiza Shemsedini</a>\r\n<br><br><br>\r\nIn the end, all participants were certified and were satisfied with this training. And they have also expressed a desire to have even more workshops with digital skills. Also as a trainer I am satisfied with the achievement of the group and their work.', '2022-01-29'),
(10, 'kosict.jpg', 'KosICT X Winner', 'Hackathon winner team in Tech Festival KosICT', 'During these 2 days in Tech Festival, I participate in a Hackathon with topic: \"Back to the future\", where I won the First Place, Best Project title with my project: \"Feel the Space\" in part of KosICT.', 'Part of the 10th edition of the KosICT Technology Festival. #kosictx During these two days of the technology festival I had the opportunity to share my experiences and meet many startups and businesses in the field of technology!\r\n<br><br><br>\r\nI was also part of the Hackathon organized by KosICT with the theme: \"Back to the Future\", as part of @shkolladigjitaleofficial . Together with @valart_zk we have created the project: \"Feel the Space\".\r\n<br><br><br>\r\nWhere we won first place in this Hackathon! 🥇\r\n<br><br><br>\r\nThanks to @kos_ict for allowing us to be part of the festival and @shkolladigjitaleofficial\r\n<br><br><br>\r\nHave a look at Feel the Space web: <a href=\"https://feelthespace.000webhostapp.com/\" target=\"_blank\">Feel the Space</a>\r\n<hr>\r\n<h3>Video of me presenting our Project in front of Jury in MAIN STAGE at KOSICT:</h3>\r\n<a href=\"https://drive.google.com/file/d/1Oa4Ge9w_09fU1ctt4mtVZCqXUkowYRku/view?usp=sharing\" target=\"_blank\">Click Here to watch the video</a>', '2022-01-29'),
(11, 'ncf.JPG', 'ONE OF THE BEST PROJECTS', 'November Code Festival', 'I was part of November Code Festival organized by Digital School. My project was chosen one of the best in this festival.', 'November Code Festival is the organized by Digital School and is one of the biggest tech festivals in Kosovo.\r\n<br><br><br>\r\nI was also part of the November Code Festival with the project: \"Feel the Space\".\r\n<br><br><br>\r\nWhere my project was chosen one of the best in this Hackathon! 🥇\r\n<br><br><br>\r\nThanks to @DigitalSchool for allowing me to be part of the festival!\r\n<br><br><br>\r\nHave a look at Feel the Space web: <a href=\"https://feelthespace.000webhostapp.com/\" target=\"_blank\">Feel the Space</a>\r\n<hr>\r\n<h3>Video of me presenting our Project in front of Jury in MAIN STAGE at KOSICT:</h3>\r\n<a href=\"https://denishoti.netlify.app/ncf/images/4.mp4\" target=\"_blank\">Click here to watch the video</a>', '2022-01-29');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `contact`
--

CREATE TABLE `contact` (
  `cId` int(10) NOT NULL,
  `cName` varchar(255) DEFAULT NULL,
  `cEmail` varchar(255) DEFAULT NULL,
  `cMessage` text DEFAULT NULL,
  `cDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `contact`
--

INSERT INTO `contact` (`cId`, `cName`, `cEmail`, `cMessage`, `cDate`) VALUES
(2, 'Denis Hoti', 'denishoti18@gmail.com', 'Second Message!!!!', '2022-01-25 23:03:23'),
(3, 'Denis Hoti', 'denishoti18@gmail.com', 'Hi, this is the last message before deploying into Github!!!!', '2022-01-29 18:48:07');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `footer`
--

CREATE TABLE `footer` (
  `fId` int(10) NOT NULL,
  `fAboutMe` text DEFAULT NULL,
  `fAreaCode` int(4) DEFAULT NULL,
  `fPhoneNumber` int(15) DEFAULT NULL,
  `fEmail` varchar(255) DEFAULT NULL,
  `fInstagram` varchar(255) DEFAULT NULL,
  `fLinkedin` varchar(255) DEFAULT NULL,
  `fGithub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `footer`
--

INSERT INTO `footer` (`fId`, `fAboutMe`, `fAreaCode`, `fPhoneNumber`, `fEmail`, `fInstagram`, `fLinkedin`, `fGithub`) VALUES
(1, 'Full-stack Developer at Dookoo| Backend Developer| PHP, MySql, HTML5, CSS3, JavaScript, Wordpress, Shopify ...', 383, 44665827, 'denishoti18@gmail.com', 'denishotiii', 'denishoti', 'denishotii');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `header`
--

CREATE TABLE `header` (
  `hId` int(255) NOT NULL,
  `hLogoName` varchar(255) DEFAULT NULL,
  `hLinkedin` varchar(255) DEFAULT NULL,
  `hInstagram` varchar(255) DEFAULT NULL,
  `hGithub` varchar(255) DEFAULT NULL,
  `hSnapchat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `header`
--

INSERT INTO `header` (`hId`, `hLogoName`, `hLinkedin`, `hInstagram`, `hGithub`, `hSnapchat`) VALUES
(1, 'Denis Hoti', 'denishoti', 'denishotiii', 'denishotii', 'denis.hotii');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `hero_section`
--

CREATE TABLE `hero_section` (
  `hId` int(10) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `subheading` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `hero_section`
--

INSERT INTO `hero_section` (`hId`, `heading`, `subheading`) VALUES
(1, 'Beautifully Crafted Web Experiences', 'Meet Denis Hoti');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `resume_section`
--

CREATE TABLE `resume_section` (
  `rId` int(10) NOT NULL,
  `rEnglishResume` varchar(255) DEFAULT NULL,
  `rAlbanianResume` varchar(255) DEFAULT NULL,
  `rCertifications` varchar(255) DEFAULT NULL,
  `rLetterOfRecommendation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `resume_section`
--

INSERT INTO `resume_section` (`rId`, `rEnglishResume`, `rAlbanianResume`, `rCertifications`, `rLetterOfRecommendation`) VALUES
(1, 'Denis Hoti CV - EN.pdf', 'Denis Hoti CV - AL.pdf', 'certificates.pdf', 'Letter Recommendation - Denis Hoti.pdf');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `skilled_section`
--

CREATE TABLE `skilled_section` (
  `sId` int(10) NOT NULL,
  `sIcon` varchar(255) DEFAULT NULL,
  `sHeading` varchar(30) DEFAULT NULL,
  `sDescription` varchar(255) DEFAULT NULL,
  `sCertificatedFrom` varchar(30) DEFAULT NULL,
  `sCertificate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `skilled_section`
--

INSERT INTO `skilled_section` (`sId`, `sIcon`, `sHeading`, `sDescription`, `sCertificatedFrom`, `sCertificate`) VALUES
(1, 'ux-design.svg', 'ICT & Digital Skills - JAVA', 'I am certified as a JAVA Developer and for Project Menagment and mysql', 'Kosovo ICT Support', 'java-certificate.pdf'),
(2, 'frontend.webp', 'Front end & Back end Developer', 'I am certified as a FRONT-END DEVELOPER and BACK-END DEVELOPER', 'Digital School in Prizren', 'front&backend.pdf'),
(6, 'backend.webp', 'Best project in November Code', 'In the November Code Festival, my project Feel the Space was chosen one of the best', 'NCF Jury', 'NovemberCodeFest.pdf');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `skills`
--

CREATE TABLE `skills` (
  `sId` int(10) NOT NULL,
  `sName` varchar(255) DEFAULT NULL,
  `sPercentage` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `skills`
--

INSERT INTO `skills` (`sId`, `sName`, `sPercentage`) VALUES
(5, 'HTML5', 'h20'),
(6, 'CSS3', 'h18'),
(7, 'JQuery', 'h17'),
(8, 'JavaScript', 'h17'),
(9, 'Wordpress', 'h18'),
(10, 'php', 'h18'),
(11, 'mySql', 'h19'),
(12, 'Google Firebase', 'h14'),
(13, 'React.js', 'h12');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `subscribers`
--

CREATE TABLE `subscribers` (
  `suId` int(10) NOT NULL,
  `suEmail` varchar(255) DEFAULT NULL,
  `suDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `subscribers`
--

INSERT INTO `subscribers` (`suId`, `suEmail`, `suDate`) VALUES
(2, 'denishoti18@gmail.com', '2022-01-25 23:45:04');

-- --------------------------------------------------------

--
-- Struktura e tabelës për tabelën `work`
--

CREATE TABLE `work` (
  `wId` int(10) NOT NULL,
  `wBanner` varchar(255) DEFAULT NULL,
  `wTitle` varchar(255) DEFAULT NULL,
  `wDescription` varchar(255) DEFAULT NULL,
  `wLink` varchar(255) DEFAULT NULL,
  `wGithub` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zbraz të dhënat për tabelën `work`
--

INSERT INTO `work` (`wId`, `wBanner`, `wTitle`, `wDescription`, `wLink`, `wGithub`) VALUES
(8, 'jsm.png', 'HTML, CSS, Javascript Smooth Scroll', 'This website is created just for fun to use some javascript and css trick to create amazing scroll :)', 'https://javascript-smooth-scroll.netlify.app/', 'https://github.com/denishotii/html-css-js-website-smooth-scroll.git'),
(9, 'loc.png', 'Omegle IP Location Finder', 'This code is a litle JavaScript trick to use in omegle website when you can find the users IP and their Location and Address :)', 'https://denishoti.netlify.app/work.html#nolink', 'https://github.com/denishotii/omegle-IP-location-finder.git'),
(10, 'cov-1.png', 'Covid-19 stats for Albanians', 'This project is for all states where Albanians live. I used HTML, CSS and JavaScript also an API to get all the real time data about new covid cases!', 'https://statistikat.netlify.app/', 'https://github.com/denishotii/covid-19_tracker.git'),
(11, 'thy.png', 'THY Website for students', 'This project was created when I was teaching Front-End Development in cooperation with NGO THY. In this website student can get all the materials needed for class and to submit their homeworks!', 'https://thy.netlify.app/', 'https://github.com/denishotii/THY-web_for_training.git'),
(12, 'cov.png', 'Covid-19 Statistics', 'In this time when we all need to know more about covid new cases, I used a javascript api using react js to get all new data in real time....', 'https://cov-statistics.netlify.app/', 'https://github.com/denishotii/react-covid19-tracker.git'),
(13, 'tac.png', 'Games', 'Designed to play with no ads and to have fun with friends and family :)', 'https://lojra.netlify.app/', 'https://github.com/denishotii/JavaScript-tic-tac-toe.git'),
(14, 'tic.png', 'Tic Tac Toe Game', 'Designed to play with no ads and to have fun with friends and family :)', 'https://playtictactoenow.netlify.app/', 'https://github.com/denishotii/JavaScript-tic-tac-toe.git'),
(15, 'ichat.png', 'Chat App', 'Chat App using React Js, Firebase, Chat Engine', 'https://justchatwithme.netlify.app/', 'https://github.com/denishotii/chatApp_with_react.git'),
(16, 'eshop.png', 'Online Store using React js', 'Online store with paypal payments intergration and guest user shopping', 'https://i-shop.netlify.app/', 'https://github.com/denishotii/E-commerce-React.js---Node.js.git'),
(17, 'city.png', 'My town website', 'Created for the town where I live, just to notify the people about my town', 'https://ratkoci.netlify.app/', '#noFiles'),
(18, 'ecom.jpg', 'Online Store using php & mysql', 'Online store admin side and user side!', 'http://bleje.onlinewebshop.net/', 'https://github.com/denishotii/e-shop-php-sql.git'),
(19, 'fts.png', 'Feel the Space', 'Winner Project of KosICT Hackathon 2021', 'https://feelthespace.000webhostapp.com/', 'https://github.com/denishotii/feelthespace---php.git');

--
-- Indekset për tabelat e hedhura
--

--
-- Indekset për tabelë `aboutme_section`
--
ALTER TABLE `aboutme_section`
  ADD PRIMARY KEY (`aId`);

--
-- Indekset për tabelë `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`aId`);

--
-- Indekset për tabelë `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bId`);

--
-- Indekset për tabelë `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cId`);

--
-- Indekset për tabelë `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`fId`);

--
-- Indekset për tabelë `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`hId`);

--
-- Indekset për tabelë `hero_section`
--
ALTER TABLE `hero_section`
  ADD PRIMARY KEY (`hId`);

--
-- Indekset për tabelë `resume_section`
--
ALTER TABLE `resume_section`
  ADD PRIMARY KEY (`rId`);

--
-- Indekset për tabelë `skilled_section`
--
ALTER TABLE `skilled_section`
  ADD PRIMARY KEY (`sId`);

--
-- Indekset për tabelë `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`sId`);

--
-- Indekset për tabelë `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`suId`);

--
-- Indekset për tabelë `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`wId`);

--
-- AUTO_INCREMENT për tabelat e hedhura
--

--
-- AUTO_INCREMENT për tabelë `aboutme_section`
--
ALTER TABLE `aboutme_section`
  MODIFY `aId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `aId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `blog`
--
ALTER TABLE `blog`
  MODIFY `bId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT për tabelë `contact`
--
ALTER TABLE `contact`
  MODIFY `cId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT për tabelë `footer`
--
ALTER TABLE `footer`
  MODIFY `fId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `header`
--
ALTER TABLE `header`
  MODIFY `hId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `hero_section`
--
ALTER TABLE `hero_section`
  MODIFY `hId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `resume_section`
--
ALTER TABLE `resume_section`
  MODIFY `rId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT për tabelë `skilled_section`
--
ALTER TABLE `skilled_section`
  MODIFY `sId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT për tabelë `skills`
--
ALTER TABLE `skills`
  MODIFY `sId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT për tabelë `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `suId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT për tabelë `work`
--
ALTER TABLE `work`
  MODIFY `wId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
