-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2017 at 09:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `institute1`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `al2015_student_list`
-- (See below for the actual view)
--
CREATE TABLE `al2015_student_list` (
`StdNumber` varchar(10)
,`StdName` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `TecId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`TecId`) VALUES
('T001'),
('T002'),
('T004'),
('T006'),
('T009');

-- --------------------------------------------------------

--
-- Stand-in structure for view `coordinator_list`
-- (See below for the actual view)
--
CREATE TABLE `coordinator_list` (
`TecId` varchar(10)
,`TecName` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `it_department_modules`
-- (See below for the actual view)
--
CREATE TABLE `it_department_modules` (
`Mcode` varchar(20)
,`Title` varchar(20)
,`Credit_value` int(11)
,`Diploma` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `TecId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`TecId`) VALUES
('T001'),
('T002'),
('T003'),
('T004'),
('T005'),
('T006'),
('T007'),
('T008'),
('T009');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_module`
--

CREATE TABLE `lecturer_module` (
  `TecId` varchar(10) NOT NULL,
  `Mcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_module`
--

INSERT INTO `lecturer_module` (`TecId`, `Mcode`) VALUES
('T001', 'M005'),
('T001', 'M003'),
('T002', 'M002'),
('T003', 'M005'),
('T004', 'M001'),
('T004', 'M003'),
('T005', 'M002'),
('T006', 'M001'),
('T007', 'M005'),
('T007', 'M001'),
('T008', 'M003'),
('T009', 'M002'),
('T004', 'M005');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `Mcode` varchar(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Credit_Value` int(11) NOT NULL,
  `Diploma` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `CoordinatorId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`Mcode`, `Title`, `Credit_Value`, `Diploma`, `Department`, `CoordinatorId`) VALUES
('M001', 'DBMS', 3, 'CS', 'IT', 'T001'),
('M002', 'Physics', 2, 'Physical Science', 'Science', 'T002'),
('M003', 'Programming', 4, 'SE', 'IT', 'T004'),
('M004', 'Statistics', 2, 'Mathematics', 'Maths', 'T006'),
('M005', 'DSA', 3, 'CS', 'IT', 'T009');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `TecId` varchar(20) NOT NULL,
  `Qualifications` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`TecId`, `Qualifications`) VALUES
('T001', 'PhD'),
('T002', 'MSc'),
('T003', 'BSc'),
('T004', 'MSc'),
('T005', 'BSc'),
('T006', 'PhD'),
('T007', 'MSc'),
('T008', 'BSc'),
('T009', 'PhD');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StdNumber` varchar(10) NOT NULL,
  `StdName` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Past_Performance` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StdNumber`, `StdName`, `Address`, `Past_Performance`) VALUES
('S001', 'Akila', 'Arawwala', 'AL2015'),
('S002', 'Mekhala', 'Matara', 'AL2016'),
('S003', 'Rusiru', 'Kaleniya', 'BCS'),
('S004', 'Pahan', 'Galle', 'OL2014'),
('S005', 'Gayashmi', 'Kandy', 'AL2015'),
('S006', 'Ravindu', 'Matara', 'OCPJP'),
('S007', 'Dinuk', 'Rathnapura', 'AL2015'),
('S008', 'Praveen', 'Matara', 'BIT'),
('S009', 'Senali', 'Galle', 'BCS'),
('S010', 'Asitha', 'Gampaha', 'AL2015');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `StdNumber` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`StdNumber`, `Password`) VALUES
('S001', 'akila'),
('S002', 'mekhala'),
('S003', 'rusiru'),
('S004', 'pahan'),
('S005', 'gayashmi'),
('S006', 'ravindu'),
('S007', 'dinuk'),
('S008', 'praveen'),
('S009', 'senali'),
('S010', 'asitha');

-- --------------------------------------------------------

--
-- Table structure for table `student_module`
--

CREATE TABLE `student_module` (
  `StdNumber` varchar(10) NOT NULL,
  `Mcode` varchar(20) NOT NULL,
  `Grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_module`
--

INSERT INTO `student_module` (`StdNumber`, `Mcode`, `Grade`) VALUES
('S002', 'M001', 'C'),
('S006', 'M004', 'B'),
('S001', 'M005', 'B'),
('S003', 'M002', 'C'),
('S004', 'M004', 'A'),
('S005', 'M002', 'D'),
('S007', 'M003', 'B'),
('S008', 'M004', 'C'),
('S009', 'M001', 'B'),
('S010', 'M003', 'A'),
('S010', 'M001', 'B'),
('S010', 'M005', 'A'),
('S002', 'M003', 'C'),
('S007', 'M005', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TecId` varchar(10) NOT NULL,
  `TecName` varchar(20) NOT NULL,
  `LFlag` tinyint(1) NOT NULL DEFAULT '1',
  `CFlag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TecId`, `TecName`, `LFlag`, `CFlag`) VALUES
('T001', 'Dr.Asanka', 1, 1),
('T002', 'Ms.Ramani', 1, 1),
('T003', 'Mr.Rohan', 1, 0),
('T004', 'Mr.Palitha', 1, 1),
('T005', 'Ms.Ruwanthi', 1, 0),
('T006', 'Dr.Gihan', 1, 1),
('T007', 'Ms.Hashini', 1, 0),
('T008', 'Mr.Omal', 1, 0),
('T009', 'Dr.Erandi', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tec_login`
--

CREATE TABLE `tec_login` (
  `TecId` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tec_login`
--

INSERT INTO `tec_login` (`TecId`, `Password`) VALUES
('T001', 'asanka'),
('T002', 'ramani'),
('T003', 'rohan'),
('T004', 'palitha'),
('T005', 'ruwanthi'),
('T006', 'gihan'),
('T007', 'hashini'),
('T008', 'omal'),
('T009', 'erandi');

-- --------------------------------------------------------

--
-- Structure for view `al2015_student_list`
--
DROP TABLE IF EXISTS `al2015_student_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `al2015_student_list`  AS  select `student`.`StdNumber` AS `StdNumber`,`student`.`StdName` AS `StdName` from `student` where (`student`.`Past_Performance` = 'AL2015') ;

-- --------------------------------------------------------

--
-- Structure for view `coordinator_list`
--
DROP TABLE IF EXISTS `coordinator_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `coordinator_list`  AS  select `teacher`.`TecId` AS `TecId`,`teacher`.`TecName` AS `TecName` from `teacher` where (`teacher`.`CFlag` = '1') ;

-- --------------------------------------------------------

--
-- Structure for view `it_department_modules`
--
DROP TABLE IF EXISTS `it_department_modules`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `it_department_modules`  AS  select `module`.`Mcode` AS `Mcode`,`module`.`Title` AS `Title`,`module`.`Credit_Value` AS `Credit_value`,`module`.`Diploma` AS `Diploma` from `module` where (`module`.`Department` = 'IT') ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`TecId`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`TecId`);

--
-- Indexes for table `lecturer_module`
--
ALTER TABLE `lecturer_module`
  ADD KEY `TecId` (`TecId`),
  ADD KEY `Mcode` (`Mcode`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`Mcode`),
  ADD KEY `CoordinatorId` (`CoordinatorId`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`TecId`,`Qualifications`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StdNumber`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`StdNumber`);

--
-- Indexes for table `student_module`
--
ALTER TABLE `student_module`
  ADD KEY `student_module_ibfk_1` (`StdNumber`),
  ADD KEY `student_module_ibfk_2` (`Mcode`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TecId`);

--
-- Indexes for table `tec_login`
--
ALTER TABLE `tec_login`
  ADD PRIMARY KEY (`TecId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lecturer_module`
--
ALTER TABLE `lecturer_module`
  ADD CONSTRAINT `lecturer_module_ibfk_1` FOREIGN KEY (`TecId`) REFERENCES `lecturer` (`TecId`),
  ADD CONSTRAINT `lecturer_module_ibfk_2` FOREIGN KEY (`Mcode`) REFERENCES `module` (`Mcode`);

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`CoordinatorId`) REFERENCES `coordinator` (`TecId`);

--
-- Constraints for table `student_login`
--
ALTER TABLE `student_login`
  ADD CONSTRAINT `student_login_ibfk_1` FOREIGN KEY (`StdNumber`) REFERENCES `student` (`StdNumber`);

--
-- Constraints for table `student_module`
--
ALTER TABLE `student_module`
  ADD CONSTRAINT `student_module_ibfk_1` FOREIGN KEY (`StdNumber`) REFERENCES `student` (`StdNumber`),
  ADD CONSTRAINT `student_module_ibfk_2` FOREIGN KEY (`Mcode`) REFERENCES `module` (`Mcode`);

--
-- Constraints for table `tec_login`
--
ALTER TABLE `tec_login`
  ADD CONSTRAINT `tec_login_ibfk_1` FOREIGN KEY (`TecId`) REFERENCES `teacher` (`TecId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
