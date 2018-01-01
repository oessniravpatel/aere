-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 05:34 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aere`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tablcontact`
--

CREATE TABLE IF NOT EXISTS `tablcontact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Remark` varchar(500) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tablcontact`
--

INSERT INTO `tablcontact` (`Id`, `Fname`, `Contact`, `Email`, `Remark`) VALUES
(6, 'nirav', '123456789', 'n@gmail.com', ' fgbgb');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE IF NOT EXISTS `tblcourse` (
  `CourseID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(250) NOT NULL,
  `OfferedBy` varchar(250) NOT NULL,
  `Summary` text NOT NULL,
  `StartDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Location` varchar(250) NOT NULL,
  `Time` varchar(60) NOT NULL,
  `IntendedAudience` varchar(30) NOT NULL,
  `MeetingType` varchar(10) NOT NULL,
  `CourseFees` int(6) NOT NULL,
  `TotalCapacity` int(3) NOT NULL,
  `NoofUserRegistered` int(11) NOT NULL,
  `Instructor` varchar(100) NOT NULL,
  `Instigator` varchar(250) NOT NULL,
  `IsStatus` int(11) NOT NULL DEFAULT '1',
  `CourseStartDate` date DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ModifiedBy` int(11) NOT NULL,
  `ModifiedOn` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`CourseID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`CourseID`, `Title`, `OfferedBy`, `Summary`, `StartDate`, `EndDate`, `Location`, `Time`, `IntendedAudience`, `MeetingType`, `CourseFees`, `TotalCapacity`, `NoofUserRegistered`, `Instructor`, `Instigator`, `IsStatus`, `CourseStartDate`, `CreatedBy`, `CreatedOn`, `ModifiedBy`, `ModifiedOn`) VALUES
(5, 'FREE Online Course Offered by ALL Institute current or total no of register user equal to total capacity', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2017-06-21', '2018-06-26', 'Scottsdale, AZ', '1PM to 4:00PM ET', 'Novice to Expert', 'Virtual', 1200, 10, 8, 'Nitin Shirasad', 'hello', 1, '2017-07-13', 1, '2017-12-28 16:33:45', 1, '2017-06-09 07:29:38'),
(6, 'FREE Online Course Offered by ALL-Institute - featured', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2018-06-26', '2018-08-30', 'Scottsdale, AZ', '1pm to 4:00pm ET', 'Novice to Expert', 'Virtual', 1200, 50, 15, 'Nitin Shirasad', '', 1, NULL, 1, '2017-12-28 15:56:27', 1, '2017-06-09 01:59:38'),
(7, 'FREE Online Course Offered by ALL-Institute - current', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2017-06-17', '2017-06-26', 'Scottsdale, AZ', '1pm to 4:00pm ET', 'Novice to Expert', 'Virtual', 1200, 50, 25, 'Nitin Shirasad', '', 1, NULL, 1, '2017-12-28 13:36:14', 1, '2017-06-09 01:59:38'),
(8, 'FREE Online Course Offered by ALL-Institute - featured', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2017-06-26', '2017-06-30', 'Scottsdale, AZ', '1pm to 4:00pm ET', 'Novice to Expert', 'Virtual', 1200, 50, 5, 'Nitin Shirasad', '', 1, NULL, 1, '2017-12-25 09:40:58', 1, '2017-06-09 01:59:38'),
(9, 'FREE Online Course Offered by ALL-Institute - Finished', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught.\r\n\r\n    Strategic Considerations\r\n        Strategic alignment with organizational goals\r\n        Naming and purpose the credential\r\n        Eligibility criteria\r\n        Assessment type\r\n        Competency level\r\n        Target audiences including SMEs and international audiences\r\n        Target B2B\r\n        Endorsements\r\n        Accreditation\r\n        Maintenance/Recertification\r\n        Certification versus Certificate\r\n        Translation, delivery, vendor management\r\n    Marketing Considerations\r\n        Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)\r\n        Tactical marketing (communication tactics such as social media, integrated marketing, video/native)\r\n        Tradition versus digital channels\r\n        Global considerations\r\n        Implications of social psychology/influence theory on marketing\r\n    Test Development/Psychometric Considerations\r\n        Test Development Lifecycle\r\n        Traditional/Waterfall Models\r\n        Agile Models\r\n        Testing and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines)\r\n    Operational Considerations\r\n        Project Planning\r\n        Risk Analysis\r\n        Costs\r\n        SME Management\r\n        Steering/Oversight Committee\r\n        Vendor selection/management\r\n    Other Considerations\r\n        Accreditation\r\n        Translation/international\r\n        Small volume\r\n', '2017-06-01', '2017-06-18', 'Scottsdale, AZ', '1pm to 4:00pm ET', 'Novice to Expert', 'Virtual', 1200, 50, 5, 'Nitin Shirasad', '', 1, NULL, 1, '2017-06-09 01:59:38', 1, '2017-06-09 01:59:38'),
(10, 'FREE Online Course Offered by ALL Institute current or total no of register user equal to total capacity', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to manage the development of launching a credentialing program in 90 days. Below are the topic areas and examples that will be taught. Strategic Considerations Strategic alignment with organizational goalsNaming and purpose the credentialEligibility criteriaAssessment typeCompetency levelTarget audiences including SMEs and international audiencesTarget B2BEndorsementsAccreditationMaintenance/RecertificationCertification versus CertificateTranslation, delivery, vendor management Marketing Considerations Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)Tactical marketing (communication tactics such as social media, integrated marketing, video/native)Tradition versus digital channelsGlobal considerationsImplications of social psychology/influence theory on marketing Test Development/Psychometric Considerations Test Development LifecycleTraditional/Waterfall ModelsAgile ModelsTesting and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC, SIOP, Uniform Guidelines) Operational Considerations Project PlanningRisk AnalysisCostsSME ManagementSteering/Oversight CommitteeVendor selection/management Other Considerations AccreditationTranslation/internationalSmall volume ', '2017-06-22', '2017-07-28', 'Vadoara, 5023/1245 . Nr. viswamitri nagar', '10:00 PM TO 12:00 AM Mid', 'Novice to Expert', 'Virtual', 200, 40, 0, 'nitin shirasad', 'Dr. ram krushanan', 1, NULL, 0, '2017-06-26 21:27:40', 0, '2017-06-26 21:27:40'),
(11, 'FREE Online Course Offered by ALL Institute current or total no of register user equal to total capacity', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to \r\nmanage the development of launching a credentialing program in 90 days. \r\nBelow are the topic areas and examples that will be taught.\r\n											\r\n											Strategic Considerations \r\n												Strategic alignment with organizational goalsNaming and purpose the credentialEligibility criteriaAssessment typeCompetency levelTarget audiences including SMEs and international audiencesTarget B2BEndorsementsAccreditationMaintenance/RecertificationCertification versus CertificateTranslation, delivery, vendor management\r\n											\r\n											Marketing Considerations \r\n												Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)Tactical marketing (communication tactics such as social media, integrated marketing, video/native)Tradition versus digital channelsGlobal considerationsImplications of social psychology/influence theory on marketing\r\n											Test Development/Psychometric Considerations\r\n												Test Development LifecycleTraditional/Waterfall ModelsAgile ModelsTesting and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC,  SIOP, Uniform Guidelines)\r\n											Operational Considerations\r\n												Project PlanningRisk AnalysisCostsSME ManagementSteering/Oversight CommitteeVendor selection/management\r\n											Other Considerations\r\n												AccreditationTranslation/internationalSmall volume\r\n											', '2017-06-22', '2017-07-28', 'Vadoara, 5023/1245 . Nr. viswamitri nagar', '10:00 PM TO 12:00 AM Mid', 'Novice to Expert', 'Virtual', 200, 40, 0, 'nitin shirasad', 'Dr. ram krushanan', 1, NULL, 0, '2017-06-26 21:32:45', 0, '2017-06-26 21:32:45'),
(12, 'FREE Online Course Offered by ALL Institute current or total no of register user equal to total capacity', 'PSY201 - Beyond Sprinting: 90 Days to Develop a Credentialing Program', 'This course is designed to teach and guide organizations on how to \r\nmanage the development of launching a credentialing program in 90 days. \r\nBelow are the topic areas and examples that will be taught.\r\n											\r\n											Strategic Considerations \r\n												Strategic alignment with organizational goalsNaming and purpose the credentialEligibility criteriaAssessment typeCompetency levelTarget audiences including SMEs and international audiencesTarget B2BEndorsementsAccreditationMaintenance/RecertificationCertification versus CertificateTranslation, delivery, vendor management\r\n											\r\n											Marketing Considerations \r\n												Strategic marketing (segmentation, value proposition plan, positioning, branding, pricing)Tactical marketing (communication tactics such as social media, integrated marketing, video/native)Tradition versus digital channelsGlobal considerationsImplications of social psychology/influence theory on marketing\r\n											Test Development/Psychometric Considerations\r\n												Test Development LifecycleTraditional/Waterfall ModelsAgile ModelsTesting and measurement Standards (NCCA, ANSI, Buros, Joint Standards, ITC,  SIOP, Uniform Guidelines)\r\n											Operational Considerations\r\n												Project PlanningRisk AnalysisCostsSME ManagementSteering/Oversight CommitteeVendor selection/management\r\n											Other Considerations\r\n												AccreditationTranslation/internationalSmall volume\r\n											', '2017-06-22', '2017-07-28', 'Vadoara, 5023/1245 . Nr. viswamitri nagar', '10:00 PM TO 12:00 AM Mid', 'Novice to Expert', 'Virtual', 200, 40, 1, 'nitin shirasad', 'Dr. ram krushanan', 1, NULL, 0, '2017-12-22 17:50:40', 0, '2017-06-26 21:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourseregistered`
--

CREATE TABLE IF NOT EXISTS `tblcourseregistered` (
  `CourserRegisteredId` int(11) NOT NULL AUTO_INCREMENT,
  `RegisterId` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `IsActive` int(1) NOT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`CourserRegisteredId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tblcourseregistered`
--

INSERT INTO `tblcourseregistered` (`CourserRegisteredId`, `RegisterId`, `CourseID`, `IsActive`, `createdOn`) VALUES
(1, 6, 5, 1, '2017-08-09 18:30:00'),
(2, 6, 5, 1, '2017-08-16 18:30:00'),
(11, 7, 8, 1, '2017-08-06 18:30:00'),
(12, 7, 5, 1, '2017-08-14 18:30:00'),
(10, 7, 6, 1, '2017-08-21 18:30:00'),
(42, 36, 7, 1, '2017-12-28 11:23:55'),
(14, 33, 6, 1, '2017-12-22 17:49:53'),
(15, 33, 12, 1, '2017-12-22 17:50:40'),
(41, 36, 6, 1, '2017-12-28 11:18:50'),
(45, 52, 5, 1, '2017-12-28 15:53:26'),
(46, 52, 6, 1, '2017-12-28 15:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE IF NOT EXISTS `tblregister` (
  `RegisterId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `ConfirmationCode` varchar(100) NOT NULL,
  `IsActive` int(11) NOT NULL,
  `CreatedBy` int(11) NOT NULL,
  `createdOn` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `otp` varchar(100) NOT NULL,
  PRIMARY KEY (`RegisterId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`RegisterId`, `UserName`, `Password`, `FirstName`, `LastName`, `Email`, `Address`, `Phone`, `ConfirmationCode`, `IsActive`, `CreatedBy`, `createdOn`, `otp`) VALUES
(2, 'zub', '1234567', 'zuber', 'mansuri', 'nshirasad@theopeney2es.in', 'vadodara', '9173745062', 'a3aa492d2d5891144a81e219102fd14d', 1, 2, NULL, ''),
(5, 'nshirasad11@theopeneyes.com', '12345678', 'nitin', 'shirasad', 'nshirasad@theopeneyes.com', 'the test id', '1234567891', '', 1, 0, NULL, ''),
(6, 'nshirasad@theopeneyes.in', '123456', 'nitin', 'shirasad', 'nshirasad99@theopeneyes.in', 'the test id', '1234567891', '', 1, 0, NULL, ''),
(7, 'shirasad@gmail.com', '123456', 'nitin', 'shirasad', 'nshirasad@theopeneyes.in', 'dfd', '1234567891', '', 1, 0, NULL, ''),
(8, 'patel123@tgmail.com', '123456', 'Jigar', 'patel', 'patel123@tgmail.com', 'Test address,\r\nNr test road', '4567891231', 'b05727a22a15f038f12452f92c8e2cbe', 1, 0, NULL, ''),
(10, 'nshirasad123@theopeneyes.in', 'password', 'nitin', 'shirasad', 'nshirasad123@theopeneyes.in', 'vadodara', '1234568', '9f73ed21fd41756be700aad464273073', 1, 0, NULL, ''),
(9, 'nilopeneyes@gmail.com', '12345678', 'nitin', 'patel', 'nilopeneyes@gmail.com', '102 silver street', '12345678', '1af10b3e07ffdb857207fe1d6e021864', 1, 0, NULL, ''),
(11, 'nshirasad1223@theopeneyes.in', 'password', 'nitin', 'shirasad', 'nshirasad1223@theopeneyes.in', 'vadodara', '1234568', '172242a5261fd9c0c6ddad948930061b', 1, 0, NULL, ''),
(12, 'nitin123@gmail.com', 'password', 'nitin', 'shirasad', 'nitin123@gmail.com', 'vaodara', '123456', 'fc4ab53f67527f996fc0f18bbf42999a', 1, 0, NULL, ''),
(13, 'shirasad@theopeneyes.in', 'password', 'nitin', 'shirasad', 'shirasad@theopeneyes.in', 'vadodara', '1111111111', '224e4e845d200e30ac0b54a980df6ac3', 1, 0, NULL, ''),
(14, 'nshirasad@theopeneys.in', 'password', 'nitin', 'shirasad', 'nshirasad@theopeneys.in', 'vaodara', '123456789', 'df50735a50051783d0d001456e47dcea', 1, 0, NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
