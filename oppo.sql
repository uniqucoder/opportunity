-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 05:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oppo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `srno` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`srno`, `username`, `password`) VALUES
(2, 'admin', 'admin'),
(4, 'chaitya', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` varchar(30) NOT NULL,
  `mnum` int(10) NOT NULL,
  `details` varchar(400) NOT NULL,
  `date_enq` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobid` int(11) NOT NULL,
  `jobtitle` varchar(500) NOT NULL,
  `aboutcompany` varchar(1000) NOT NULL,
  `companyname` varchar(600) NOT NULL,
  `position` varchar(600) NOT NULL,
  `jobtype` varchar(100) NOT NULL,
  `required` varchar(100) NOT NULL,
  `salary` varchar(600) NOT NULL,
  `lastdate` varchar(600) NOT NULL,
  `quali` varchar(100) NOT NULL,
  `job_uplode_date` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL,
  `year` varchar(100) NOT NULL,
  `eligibility` varchar(1000) NOT NULL,
  `skills` varchar(1000) NOT NULL,
  `bond` varchar(60) NOT NULL,
  `locations` varchar(600) NOT NULL,
  `branch` varchar(600) NOT NULL,
  `applylink` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobid`, `jobtitle`, `aboutcompany`, `companyname`, `position`, `jobtype`, `required`, `salary`, `lastdate`, `quali`, `job_uplode_date`, `status`, `year`, `eligibility`, `skills`, `bond`, `locations`, `branch`, `applylink`) VALUES
(4, 'OffCampus Opportunity', 'Mindtree is leading technology and digital transformation technology service oriented company', 'Mindtree', 'Softwere Engineer', 'Full Time', 'Fresher', '4lpa', '2021-07-25', 'Btech,BE,BCA', '2021-07-14', 'Active', '2022', '60%', 'cpp,python,js', '1', 'Any where ', '2021', 'https://www.instagram.com/'),
(5, 'demo', 'djlkdjlkasjdl', 'slajdalsk', 'ldjskad', 'Internship', 'Experience', '4', '3 july', 'BE,BCA', '', 'Active', '2020', 'dsa , problem solving', 'sd', 'dsad', 'sad', 'asd', 'asd'),
(6, 'sasd', 'dsad', 'sds', 'sad', 'jobtype', 'required', 'sdad', 'sad', 'BE,BCA,MCA', '', 'Active', '2018,2019', 'sad', 'sad', 'sad', 'sad', 'sd', 'dsad'),
(7, 'Offcampus opportunity | Associate Software Engineer | 2021', 'Accenture Strategy provides business strategy, technology strategy and operations strategy services,Accenture Consulting provides technology, business and management consulting,Accenture Interactive (formerly Digital) provides digital marketing, analytics and mobility services. ... This includes business process outsourcing, IT services, cloud services, managed operations and security.', 'Accenture', 'Associate Software Engineer', 'Full Time', 'required', '4.5 lpa', 'today', 'Btech,BE', '2021-07-14', 'Active', '2021', '55% throughout', 'Any Programming language,good problem solver, can handle stress, multitasking person ', 'No Bond ,3 month notice period', 'Pune,Hydrabad', 'All branch with fundamental knowledge of computer', 'https://www.accenture.com/'),
(8, 'HCL Off Campus Drive 2021 | Team Leader-Quality Assurance/Quality Control | Any Graduates | Any Batch | Salary: 3+ LPA | Chennai, India', 'HCL Hiring Engineering Graduates as a position of Looking for HCL hiring for Team Leader-Quality Assurance/Quality Control Role in Chennai, India Software, and Services For the full time. HCL company is going to recruit candidates for graduates off-campus. The candidates who are completed Any B.E/ B.Tech/ M.E/ M.Tech/ MCA/ M.Sc/BSc/BCA Any Engineering Graduates degree Pass out in the Year 2021 / 2020/ 2019/ 2018/Others only. batches are Eligible to apply. \r\nIn this article you can easily find the Oracle address, date of interview, eligibility details, interview syllabus, selection process, apply link, application procedure details explanation is given below.\r\nIn this article, you will get to know this drive, and also you can prefer a video which I created for your better understanding firstly understand the few points which I discussed in this video before applying.', 'HCL', 'Team Leader-Quality Assurance', 'Full Time', 'required', '2.5 lpa', '12-9-21', 'Btech,BE,BCA,MCA', '2021-07-15', 'Active', '2019,2020,2021', '60% throughout', ' Meet daily productivity and quality scores,Responsible for meeting productivity matrix and quality standards and Team Player', 'NA', 'Chennai India', 'any', 'https://www.naukri.com/job-listings-hcl-hiring-for-product-testing-for-freshers-hcl-technologies-limited-chennai-0-to-0-years-210621006166'),
(9, 'NTT DATA Recruitment | Graduate Trainee | BE/ B.Tech | Bangalore', 'NTT DATA Recruitment: NTT DATA schedule to hire for the role of Graduate Trainee 2021. If you have BE/ B.Tech, you may apply for the post. The location of the job is Bangalore. The detailed eligibility criteria and application process are given below.\r\n\r\n NTT DATA is your Innovation Partner anywhere around the world. With business operations in more than 35 countries, we put emphasis on long-term commitment and combine global reach and local intimacy to provide premier professional services from consulting, system development, business process and IT outsourcing to cloud-based solutions.', 'NTT', 'Graduate Trainee – Portal Development', 'Full Time', 'required', 'Not specified', '2021-07-24', 'Btech,BE,Mtech', '2021-07-25', 'Active', '2021', '60% throughout', ' Design, develop, troubleshoot and debug User Interfaces (web portals, mobile applications) and back-end integrations into data sources and applications platforms,Apply User Experience (UX) principles and graphic design to develop enticing, user-friendly applications that lead to high user adoption,Develop server-side web application logic and integrations to UI, using web services and APIs', '1 year', 'Any', 'dadas', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sr` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sr`, `username`, `email`, `password`) VALUES
(1, 'chaitya', 'chaitanya@gmail.com', '123456'),
(17, 'chaitya', 'chaitanya@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
