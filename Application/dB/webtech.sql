-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 11:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE `adminprofile` (
  `id` int(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`id`, `username`, `mail`, `password`, `gender`) VALUES
(28905, 'ANISUL KHAN', 'anis@gmail.com', '1111', 'Male'),
(42619, 'MOSHIUR RAHMAN', 'moshiur@gmail.com', '1234', 'Male'),
(43210, 'Zubayer Khan', 'zubayer@gmail.com', '1234', 'Male'),
(98765, 'Sazzad Hossain Tasnim', 'sazzadss@gmail.mail', '1111', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `code` int(10) NOT NULL,
  `curriculum` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `credit` int(5) NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`code`, `curriculum`, `name`, `credit`, `description`) VALUES
(1101, 'FST', 'Introduction to Computer Studies', 1, 'The course will highlight university and department’s rules, regulations and policies (pre-registration, registration, exam permit, Set-B exams, Adding/Dropping, Grading scale, Course Evaluation procedures) etc. along with the online learning system VUES (Virtual University Expert Systems) which they have to use throughout their bachelor studies for every educational and official operations.'),
(1204, 'FST', 'Discrete Mathematics\r\n', 3, 'Explain propositional logic and propositional equivalences Explain different types of sets and set operations Determine whether two compound propositions are logically equivalent using different techniques Describe different types of functions; representations of graphs Describe different types of tree traversal algorithms such as Preorder, Inorder, Postorder Explain Euler and Hamilton paths and circuits Discuss Relations and their properties'),
(3045, 'FST', 'Web Technologies', 3, 'Escalate the increasing importance of Web technology and how it is changing the role of the IT. Understand what strategic web development is and apply a framework to help identify strategic uses of Internet Compare the fundamental types of web technologies and how they can be used to provide real business benefit; Explore new technologies and issues affecting the web development Apply a web development approach in analyzing the role of web technology in organizations Describe the process used in developing information systems and the concepts of web engineering and web process reengineering Analyze the skills needed for web development professionals Develop real life and society targeted Web Applications'),
(3456, 'FE', 'ELECTRONIC DEVICE LAB', 1, 'Introduction- PMOS, NMOS and CMOS transistors and their switching characteristics, depletion and enhancement MOSFET. Analog Electronics Operational Amplifiers (Op-Amp), Introduction to Op- Amps and its applications, AC Performance of Op-Amp: Familiarize with the frequency response of Op- Amp, Active Filter: Analyze and design diverse types of filter, Transistor at High Frequencies: Observe the performance of hybrid model and the amplifier response, Feedback Amplifiers: Classify the amplifiers and analyze different methods of a feedback amplifier, Multistage Amplifiers: Achieve a clear idea about RC coupled amplifiers and their frequency response.'),
(4263, 'FST', 'Advanced Programming with JAVA', 3, 'The Java Enterprise Edition or Java EE course covers the fundamentals components of Oracle’s enterprise Java computing platform. The framework supports network and web services, and supports large-scale, multi-tiered, scalable, reliable, and secure network application. Topics covered will include J2EE architecture, Web Server, Servlets, and JSPs. J2EE Architecture; Multi-tiered client-server architecture; Configure Http Server and/or Web Server Architecture (specially Apache Tomcat 7.0); Servlet Architecture; JSP Architecture; Model View Controller (MVC) Architecture; Implement multi-tiered application using J2EE technologies');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `email`, `position`, `dept`, `address`, `dob`, `gender`, `date`) VALUES
('28905', 'MD. AL-AMIN', 'amin@aiub.edu', 'Sr. Assistant Professor', 'FST', '777/2, Banani', '1982-08-16', 'Male', '2010-08-03'),
('45234', 'Anik Hossain', 'anik@aiub.edu', 'Sr. Assistant Professor', 'FBA', 'Uttara, Sector-03', '1988-06-23', 'Male', '2014-07-09'),
('45678', 'MD. SHAKIR HOSSAIN', 'shakir@aiub.edu', 'lecturer', 'FE', 'Banani, 536/2', '1980-05-25', 'Male', '2008-08-22'),
('77687', 'JAHARIN NASRIN', 'khan@aiub.edu', 'Assistant Professor', 'FBA', '657/2, Mirpur-10', '1989-04-17', 'Female', '2015-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`) VALUES
(11, '../image/Course_Adjustment_Form.pdf'),
(12, '../image/Thesis_group_list.pdf'),
(13, '../image/Transfer_Credit_Request.pdf'),
(14, '../image/Student_Policy_Statement.PDF'),
(15, '../image/Set_B_Form-Fillable.pdf'),
(20, '../image/Parental_Agrement_Letter.docx'),
(21, '../image/AIUB_Assignment_Cover_Sheet.docx'),
(22, '../image/AIUB_Assignment_Cover_Sheet (2 files merged).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `date`, `description`) VALUES
(1, 'Holiday due to Maharram (Ashura) 2022.', '2022-08-03', 'It is to notify all concerned that the University would remain closed on Tuesday, August 09, 2022, due to Muharram (Ashura), 2022.'),
(11, 'Admission Final Result of FALL 22-23 (Slot-1)', '2022-08-11', 'To complete the admission process, please visit the online admission portal at https://admission.aiub.edu/  [After login to the admission portal, please click ‘Proceed to Admission’ from the Dashboard]. In case if you face any difficulty, please contact by email at admission@aiub.edu or call 01844115000, 01886566666, 01844515912 (10 AM – 3:30 PM).'),
(12, 'Holiday due to Eid-Ul-Azha, 2022.', '2022-07-05', 'It is to notify to all concerned that the University would remain closed due to Eid-Ul-Azha, 2022 from Friday, July 08, 2022, to Thursday, July 14, 2022. Classes will resume on July 15, 2022 (Graduate) and July 17, 2022 (Undergraduate).');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `admissionDate` date NOT NULL,
  `graduationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `id`, `program`, `address`, `dob`, `gender`, `admissionDate`, `graduationDate`) VALUES
('ARHAM KHAN RABBI', 8888, 'Bachelor of Science in Electrical Engineering', '30/1, Mirpur-10', '2000-06-28', 'Male', '2022-06-29', '0000-00-00'),
('AKM MOSHIUR RAHMAN MAZUMDER', 9999, 'Bachelor of Science in Computer Science & Engineering', '545/2, Banani', '2000-05-01', 'Male', '2022-06-30', '0000-00-00'),
('MAHARABUR RAHMAN', 27676, 'FE', 'Gulshan, 545/2', '2000-05-11', 'Male', '2017-08-10', '0000-00-00'),
('Sazzad Hossain Tasnim', 28905, 'FST', 'Rampura, 536/9', '1998-12-20', 'Male', '2022-08-01', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminprofile`
--
ALTER TABLE `adminprofile`
  ADD UNIQUE KEY `adminID_unique` (`id`),
  ADD UNIQUE KEY `adminMail_unique` (`mail`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD UNIQUE KEY `course_code_unique` (`code`),
  ADD UNIQUE KEY `course_name_unique` (`name`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD UNIQUE KEY `faculty_id_unique` (`id`),
  ADD UNIQUE KEY `faculty_email_unique` (`email`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD UNIQUE KEY `course_id_unique` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `student_id_unique` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
