-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 02:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katuyaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `Admin_ID` int(100) NOT NULL,
  `Admin_Username` varchar(250) NOT NULL,
  `Admin_Email` varchar(250) NOT NULL,
  `Admin_Password` varchar(250) NOT NULL,
  `Admin_Affiliation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`Admin_ID`, `Admin_Username`, `Admin_Email`, `Admin_Password`, `Admin_Affiliation`) VALUES
(1, 'Engr. Marte Nipas', 'NIPAS@gmail.com', '123', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `dancedataset_approval_table`
--

CREATE TABLE `dancedataset_approval_table` (
  `DanceDataset_ID` int(100) NOT NULL,
  `User_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dancedataset_approval_table`
--

INSERT INTO `dancedataset_approval_table` (`DanceDataset_ID`, `User_ID`) VALUES
(81, 1),
(80, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dancedataset_table`
--

CREATE TABLE `dancedataset_table` (
  `DanceDataset_ID` int(100) NOT NULL,
  `DanceDataset_Name` varchar(250) NOT NULL,
  `DanceDataset_FileLink` varchar(250) NOT NULL,
  `DanceDataset_Description` varchar(250) NOT NULL,
  `DanceDataset_Location` varchar(250) NOT NULL,
  `DanceDataset_Papers` varchar(250) NOT NULL,
  `DanceDataset_Filesize` varchar(250) NOT NULL,
  `DanceDataset_Owner` varchar(250) NOT NULL,
  `DanceDataset_Tribe` varchar(250) NOT NULL,
  `DanceDataset_UploadDate` varchar(250) NOT NULL,
  `DanceDataset_YTLink` varchar(250) NOT NULL,
  `DanceDataset_Status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dancedataset_table`
--

INSERT INTO `dancedataset_table` (`DanceDataset_ID`, `DanceDataset_Name`, `DanceDataset_FileLink`, `DanceDataset_Description`, `DanceDataset_Location`, `DanceDataset_Papers`, `DanceDataset_Filesize`, `DanceDataset_Owner`, `DanceDataset_Tribe`, `DanceDataset_UploadDate`, `DanceDataset_YTLink`, `DanceDataset_Status`) VALUES
(80, 'Turayen', 'Dance Dataset File.FBX', 'The word Gaddang originated from the combination of two words which are “ga”, meaning heat, and “dang” which is to burn. The Gaddang people live in the center of Cagayan Valley. Furthermore, some of their groups have resided in Isabela, Kalinga, and ', 'Lanao del Sur', 'Dance Dataset Document.docx', '8.78 M', 'KATUYAW', 'Manobo', '2020/03/01', '7Ev0ISU7jmA', 'Accepted'),
(81, 'Pangalay', 'Dance Dataset File.FBX', 'The Panglay, a dance native to the Badjaos meant to highlight the power of the upper body, is executed through the rhythmic bounce of the shoulder  while simultaneously waving the arms. Most times, this dance is performed in social gatherings like we', 'Zamboanga del Sur', 'Dance Dataset Document.docx', '8.78 M', 'KATUYAW', 'Badjao', '2020/03/01', 'lt6pSzfAPwk', 'Accepted'),
(82, 'Asikman', 'Dance Dataset File.FBX', 'The Asik is solo dance performance portrays an unmarried young woman who tries to gain the approval and support of her sultan master. She can dance for two reasons. The first is to try to win the heart of her master and the second is to be able to ma', 'Lanao del Sur', 'Dance Dataset Document.docx', '8.78 M', 'KATUYAW', 'Maguindanao', '2020/03/01', 'n7gG5jCo0sw', 'Accepted'),
(85, 'Pag-apir', 'Dance Dataset File.FBX', 'Maranao people from the around the Lake Lanao have a royal manner of “walking” called the Pagapir. The ladies of the royal court perform this dance for important events and to show their good upbringing. It involves a graceful manipulation of the Ape', 'Lanao del Sur', 'Dance Dataset Document.docx', '8.78 M', 'KATUYAW', 'Maranao', '2020/03/01', 'revS-kD3HFw', 'Pending'),
(88, 'Kadal Taho', 'Dance Dataset File.FBX', 'Bagobo Rice Cycle, also known as Sugod Uno, is a tribal dance which portrays the rice production cycle. This includes the prepping the land, planting rice, watering the rice, and harvesting it. This dance also portrays rituals to say thank you for th', 'Lanao del Sur', 'Dance Dataset Document.docx', '8.78 M', 'KATUYAW', 'Aeta', '2020/03/01', 'QpAEwvM8kUk', 'Pending'),
(89, 'Dugso', 'Dance Dataset File.FBX', 'Performances such as a sacrifice dance rite exists in provinces wherein religion is given the highest regard, such as the Higaonon of Bukidnon province in Mindanao place. “Dugso” is performed as a form of thanksgiving for good harvest, healing of the', 'Bukidnon', 'Dance Dataset Document.docx', '8.78 M', 'KATUYAW', 'Talaindig', '2020/03/01', 'sKvzMbC7QOc', 'Accepted'),
(90, 'Kadal Heroyon', 'Dance Dataset File.FBX', 'Kadal Heroyon, also known as the dance of flirtation, is performed by T’boli girl adolescents qualified to get married. Beautification, which was held of high importance in the tribe, is portrayed through movements that would imitate how birds flew.', 'Lake Sebu, South Cotabato', 'Dance Dataset Document.docx', '8.78 M', 'KATUYAW', 'T’boli', '2020/03/01', 'ZtG_JHdZdh8', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `userrequesttodl_table`
--

CREATE TABLE `userrequesttodl_table` (
  `User_ID` int(100) NOT NULL,
  `DanceDataset_ID` int(100) NOT NULL,
  `User_ReasonforDL` varchar(500) NOT NULL,
  `Proof_of_Identity` varchar(500) NOT NULL,
  `Request_Status` varchar(500) NOT NULL,
  `Contact_No` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrequesttodl_table`
--

INSERT INTO `userrequesttodl_table` (`User_ID`, `DanceDataset_ID`, `User_ReasonforDL`, `Proof_of_Identity`, `Request_Status`, `Contact_No`) VALUES
(3, 80, 'dasda', '12.PNG', '', 'dsada'),
(3, 85, 'wala lang', '32.png', 'Pending', '09472423');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `User_ID` int(100) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `User_Email` varchar(250) NOT NULL,
  `User_Password` varchar(250) NOT NULL,
  `User_Affiliation` varchar(250) NOT NULL,
  `User_Profile_Pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`User_ID`, `User_Name`, `User_Email`, `User_Password`, `User_Affiliation`, `User_Profile_Pic`) VALUES
(1, 'Lander Xavier Ignacio', 'Landerxavier17@gmail.com', '123', 'Student', 'hdhdcn.jpeg'),
(2, 'hououin kyouma', 'a@yahoo.com', 'lander', '', ''),
(3, 'Mark Dalandanan', 'justineb_salandanan@yahoo.com', '123', '', 'DP1.jpeg'),
(4, 'fetalvero,joel a.', 'joelfetalvero@gmail.com', 'guitar21', '', ''),
(5, 'jonel', 'jonel.palma188@gmail.com', 'palma1717', '', ''),
(6, 'Justin Paulle Arconado', 'justinarconado08@gmail.com', 'Security123', '', ''),
(7, 'Jollibee Mcdo', 'jhenjopetshop@gmail.com', 'Password123!!', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `Admin_ID` (`Admin_ID`);

--
-- Indexes for table `dancedataset_approval_table`
--
ALTER TABLE `dancedataset_approval_table`
  ADD PRIMARY KEY (`DanceDataset_ID`),
  ADD KEY `DanceDataset_ID` (`DanceDataset_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `dancedataset_table`
--
ALTER TABLE `dancedataset_table`
  ADD PRIMARY KEY (`DanceDataset_ID`),
  ADD UNIQUE KEY `DanceDataset_ID` (`DanceDataset_ID`);

--
-- Indexes for table `userrequesttodl_table`
--
ALTER TABLE `userrequesttodl_table`
  ADD PRIMARY KEY (`DanceDataset_ID`),
  ADD KEY `User_ID` (`User_ID`),
  ADD KEY `DanceDataset_ID` (`DanceDataset_ID`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `User_ID` (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `Admin_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dancedataset_table`
--
ALTER TABLE `dancedataset_table`
  MODIFY `DanceDataset_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `User_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dancedataset_approval_table`
--
ALTER TABLE `dancedataset_approval_table`
  ADD CONSTRAINT `dancedataset_approval_table_ibfk_1` FOREIGN KEY (`DanceDataset_ID`) REFERENCES `dancedataset_table` (`DanceDataset_ID`),
  ADD CONSTRAINT `dancedataset_approval_table_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user_table` (`User_ID`);

--
-- Constraints for table `userrequesttodl_table`
--
ALTER TABLE `userrequesttodl_table`
  ADD CONSTRAINT `userrequesttodl_table_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_table` (`User_ID`),
  ADD CONSTRAINT `userrequesttodl_table_ibfk_2` FOREIGN KEY (`DanceDataset_ID`) REFERENCES `dancedataset_table` (`DanceDataset_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
