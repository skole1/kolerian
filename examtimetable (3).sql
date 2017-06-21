-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2017 at 06:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examtimetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `addclass`
--

CREATE TABLE `addclass` (
  `classid` int(11) NOT NULL,
  `classname` varchar(50) NOT NULL,
  `Courses` varchar(50) NOT NULL,
  `numberofstudent` int(100) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addclass`
--

INSERT INTO `addclass` (`classid`, `classname`, `Courses`, `numberofstudent`, `semester_id`, `status`) VALUES
(1, '100L', 'PHY', 76, 76, 1),
(2, '200L', 'PHY', 64, 64, 1),
(3, '300L', 'PHY', 54, 54, 1),
(5, '500L', 'PHY', 37, 37, 1),
(6, '100L', 'CHM', 70, 70, 1),
(7, '200L', 'CHM', 57, 57, 1),
(8, '300L', 'CHM', 37, 37, 1),
(9, '500L', 'CHM', 25, 25, 1),
(10, '100L', 'CS', 66, 66, 1),
(11, '200L', 'CS', 35, 35, 1),
(12, '300L', 'CS', 27, 27, 1),
(14, '100L', 'BIO', 87, 87, 1),
(15, '200L', 'BIO', 50, 50, 1),
(16, '300L', 'BIO', 34, 34, 1),
(18, '100L', 'GEO', 60, 60, 1),
(19, '200L', 'GEO', 38, 38, 1),
(20, '300L', 'GEO', 32, 32, 1),
(21, '500L', 'GEO', 31, 31, 1),
(22, '100L', 'MTH', 190, 190, 1),
(23, '200L', 'MTH', 54, 54, 1),
(26, '100L', 'ST', 144, 144, 1),
(27, '200L', 'ST', 136, 136, 1),
(28, '300L', 'ST', 109, 109, 1),
(29, '500L', 'ST', 89, 89, 1);

-- --------------------------------------------------------

--
-- Table structure for table `addcourse`
--

CREATE TABLE `addcourse` (
  `courseid` int(11) NOT NULL,
  `class_id` varchar(11) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `courseunit` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcourse`
--

INSERT INTO `addcourse` (`courseid`, `class_id`, `coursename`, `coursecode`, `courseunit`, `semester_id`) VALUES
(1, '22', 'Elementary Algebra I', 'MTH 111', 3, 1),
(2, '22', 'Calculus i', 'MTH 112', 3, 1),
(3, '22', 'Geometry', 'MTH 113', 3, 1),
(4, '22', 'Introductory Mech. & Prop.of Matters', 'PHY 183', 3, 1),
(5, '22', 'Use of English Language', 'GNS101', 2, 1),
(6, '22', 'Basic Experimental Physics I', 'PHY 171', 1, 1),
(7, '22', 'Introductory Heat and Sound', 'PHY 184', 4, 1),
(8, '22', 'Foundation Chemistry', 'CHM 101', 4, 1),
(9, '22', 'Introductory Geology I', 'GEO 101', 3, 1),
(10, '22', 'Introductory Biology I', 'BIO 101', 3, 1),
(11, '22', 'Elementary Algebra II', 'MTH 121', 4, 2),
(12, '22', 'Calculus II', 'MTH 122', 4, 2),
(13, '22', 'Elementary Theory of Sets', 'MTH 123', 2, 2),
(14, '22', 'introductory Computer Science', 'CS 142', 3, 2),
(15, '22', 'Intro. Optics & Modern Physics', 'PHY189', 3, 2),
(16, '22', 'Basic Experimental Physics II', 'PHY 172', 1, 2),
(17, '22', 'Use of English LanguageII', 'GNS102', 2, 2),
(18, '23', 'Linear Algebra I', 'MTH 211', 3, 1),
(19, '23', 'Mathematical Methods I', 'MTH 212', 3, 1),
(20, '23', 'Analysis I', 'MTH 213', 3, 1),
(21, '23', 'Intermediate Mechanics', 'PHY 202', 4, 1),
(22, '23', 'Computer Program', 'CS 232', 4, 1),
(23, '23', 'Introductory Stats. & Elem. Probability', 'ST 271', 4, 1),
(24, '23', 'Information Science', 'GNS 201', 2, 1),
(25, '23', 'Linear Algebra II', 'MTH 221', 3, 2),
(26, '23', 'Mathematical Methods II', 'MTH 222', 3, 2),
(27, '23', 'Analysis II', 'MTH 223', 3, 2),
(28, '23', 'Intro. to Mathematical Modeling', 'MTH 224', 3, 2),
(29, '23', 'Introduction to File Processing', 'CS 242', 3, 2),
(30, '23', 'Descriptive Statistics', 'ST 281', 3, 2),
(31, '20', 'Abstract Algebra I', 'MTH 311', 3, 1),
(32, '24', 'Analysis III', 'MTH 312', 3, 1),
(33, '24', 'Numerical Analysis I', 'MTH 337', 3, 1),
(34, '24', 'Operations Research I', 'MTH 338', 3, 1),
(35, '24', 'Probability Theory I', 'ST 371', 3, 1),
(36, '24', 'Science, Technology & Society', 'GNS 301', 2, 1),
(37, '24', 'Data Structure', 'CS 331', 3, 1),
(38, '24', 'Analytical Mechanics', 'PHY 303', 4, 1),
(39, '24', 'Abstract Algebra II', 'MTH 321', 3, 2),
(40, '24', 'Topology I', 'MTH 322', 3, 2),
(41, '24', 'Complex Analysis I', 'MTH 323', 3, 2),
(42, '24', 'Discrete Mathematics', 'MTH 324', 3, 2),
(43, '24', 'Numerical Analysis II', 'MTH 347', 3, 2),
(44, '24', 'Mathematical Model III', 'MTH 348', 3, 2),
(45, '24', 'Time Series & Index Numbers', 'ST 382', 3, 2),
(46, '25', 'Topology II', 'MTH 511', 3, 1),
(47, '25', 'Ordinary Differential Equation', 'MTH 512', 3, 1),
(48, '25', 'Measure and Integration', 'MTH 513', 3, 1),
(49, '25', 'Project', 'MTH 599', 3, 1),
(50, '25', 'Number Theory', 'MTH 521', 3, 2),
(51, '25', 'Partial Differenctial Equations', 'MTH 522', 3, 2),
(52, '25', 'Functional Analysis', 'MTH 523', 3, 2),
(53, '25', 'Project', 'MTH 599', 3, 2),
(54, '21', 'Hydrogeology', 'GEO 505', 3, 1),
(55, '21', 'Micropaleontology', 'GEO 513', 3, 1),
(56, '21', 'Applied Geo Physics', 'GEO 517', 3, 1),
(57, '21', 'Geology of Africa', 'GEO 507', 2, 1),
(58, '21', 'Economic Mineral Deposite', 'GEO 501', 4, 1),
(59, '21', 'Petroleum Geology', 'GEO 502', 4, 2),
(60, '21', 'Engineering Geology', 'GEO 504', 3, 2),
(61, '21', 'Seminar in Geology', 'GEO 506', 1, 2),
(62, '21', 'Project', 'GEO 509', 6, 2),
(63, '21', 'Geochemical Exploration', 'GEO 510', 3, 2),
(64, '18', 'Introduction Biology I', 'BIO 101', 4, 1),
(65, '18', 'Foundation Chemistry', 'CHM 101', 4, 1),
(66, '18', 'Introduction to Geology', 'GEO 101', 3, 1),
(67, '18', 'Use of English I', 'GNS101', 2, 1),
(68, '18', 'Elementary Algebra I', 'MTH 111', 3, 1),
(69, '18', 'Calculus I', 'MTH 112', 3, 1),
(70, '18', 'Basic Experimental Physics ', 'PHY 171', 1, 1),
(71, '18', 'Introduction to Heat and Sound', 'PHY 164', 3, 1),
(72, '18', 'Use of English II', 'GNS 102', 2, 2),
(73, '18', 'Intro. To Biology II (Biosystematics & Intro. Ecol', 'BIO 102', 4, 2),
(74, '18', 'Foundation Chemistry II', 'CHM 102', 4, 2),
(75, '18', 'Introduction to Geology II', 'GEO 102', 3, 2),
(76, '18', 'Basic Experimental Physics ', 'PHY 172', 1, 2),
(77, '18', 'Introductory to Electricity & Management', 'PHY 188', 3, 2),
(78, '19', 'Intro to Chemistry', 'CHM 201', 5, 1),
(79, '19', 'Physical Geology', 'GEO 201', 3, 1),
(80, '19', 'Introduction to Historical Geology', 'GEO 203', 3, 1),
(81, '19', 'Elementary Structural Geology & Map Interpretation', 'GEO 205', 2, 1),
(82, '19', 'Information Science', 'GNS 201', 2, 1),
(83, '19', 'Plane Surveying', 'LSV 211', 2, 1),
(84, '19', 'Elementary Algebra I', 'MTH 111', 3, 1),
(85, '19', 'Calculus', 'MTH 112', 3, 1),
(86, '19', 'Intro Statistics', 'ST 271', 4, 1),
(87, '19', 'Introduction to Rocks and Minerals', 'GEO 202', 4, 2),
(88, '19', 'Earth Resources', 'GEO 204', 3, 2),
(89, '19', 'Earth Resources', 'GEO 204', 3, 2),
(90, '19', 'Field Method in Geology', 'GEO 206', 2, 2),
(91, '19', 'African History and Culture', 'GNS 202', 2, 2),
(92, '19', 'Peace and Conflict Resolution', 'GNS 222', 2, 2),
(93, '19', 'Inorganic Chemistry', 'CHM 221', 3, 2),
(94, '19', 'introductory Computer Science', 'CS 142', 3, 2),
(95, '19', 'Descriptive Statistics', 'ST 281', 3, 2),
(96, '20', 'Structural Geology', 'GEO 301', 3, 1),
(97, '20', 'Paleontology', 'GEO 303', 4, 1),
(98, '20', 'Minerology', 'GEO 307', 3, 1),
(99, '20', 'Principle of Geophysics', 'GEO 311', 2, 1),
(100, '20', 'Sedimentary Petrology', 'GEO 313', 3, 1),
(101, '20', 'Geochemistry', 'GEO 313', 3, 1),
(102, '20', 'Entrepreneurship and Innovation', 'GNS 301', 2, 1),
(103, '20', 'Tectonics and Photogeology', 'GEO 302', 3, 2),
(104, '20', 'Stratigraphy', 'GEO 304', 3, 2),
(105, '20', 'Igneous Petrology', 'GEO 306', 3, 2),
(106, '20', 'Metamorphic Petrology', 'GEO 308', 3, 2),
(107, '20', 'Mineral Optics', 'GEO 312', 2, 2),
(108, '20', 'Sedimentary Environment and Basin Analysis', 'GEO 314', 3, 2),
(109, '20', 'Geology of Nigeria', 'GEO 316', 2, 2),
(110, '20', 'Fields Mapping', 'GEO 318', 4, 2),
(111, '20', 'Business Creation and Growth', 'GEO 302', 2, 2),
(112, '1', 'Intro. Mech. & Prop. Physics Intro. Heat', 'PHY 183', 3, 1),
(113, '1', 'Wave Motion & Sound', 'PHY 184', 3, 1),
(114, '1', 'Wave Motion & Sound', 'PHY 184', 3, 1),
(115, '1', 'Basic Exptl. Physics I', 'PHY 171', 1, 1),
(116, '1', 'Elementary Algebra I', 'MTH 111', 3, 1),
(117, '1', 'Calculus I', 'MTH 112', 3, 1),
(118, '1', 'Geometry', 'MTH 113', 3, 1),
(119, '1', 'Foundation Chemistry I', 'CHM 101', 4, 1),
(120, '1', 'Use of English Language I', 'GNS 101', 2, 1),
(121, '1', 'Intro. Elec. & Magnetism', 'PHY 188', 3, 2),
(122, '1', 'Intro. Elec. & Magnetism', 'PHY 188', 3, 2),
(123, '1', 'Intro. Opt. & Mod. Phys.', 'PHY 189', 3, 2),
(124, '1', 'Basic Exptal. Phys II', 'PHY 172', 1, 2),
(125, '1', 'Elementary Algebra II', 'MTH 121', 4, 2),
(126, '1', 'Calculus II', 'MTH 122', 4, 2),
(127, '1', 'Elementary Theory of Sets', 'MTH 123', 2, 2),
(128, '1', 'Foundation Chemistry II', 'CHM 102', 4, 2),
(129, '1', 'Use of English Language II', 'GNS 102', 2, 2),
(130, '2', 'Intermediate Mechanics', 'PHY 202', 4, 1),
(131, '2', 'Heat & Thermodynamics', 'PHY 222', 3, 1),
(132, '2', 'Basic Exptl. Physics III', 'PHY 271', 1, 1),
(133, '2', 'Mathematics Methods I', 'MTH 212', 3, 1),
(134, '2', 'Analysis I', 'MTH 213', 3, 1),
(135, '2', 'Linear Algebra I', 'MTH 211', 3, 1),
(136, '2', 'Introd. Computer Sci. I', 'CS 231', 3, 1),
(137, '2', 'Infromation Science', 'GNS 201', 3, 1),
(138, '2', 'Intro. Fields & Waves', 'PHY 212', 4, 2),
(139, '2', 'Atomic Physics I', 'PHY 242', 3, 2),
(140, '2', 'Basic Exptl. Physics IV', 'PHY 272', 1, 2),
(141, '2', 'Linear Algebra II', 'MTH 221', 3, 2),
(142, '2', 'Mathematical Methods II', 'MTH 222', 3, 2),
(143, '2', 'Analysis II', 'MTH 223', 4, 2),
(144, '2', 'Introd. Computer Sci. II', 'CS 241', 4, 2),
(145, '2', 'Nigerian History & Culture', 'GNS 202', 2, 2),
(146, '3', 'Analytical Mechanics', 'PHY 303', 4, 1),
(147, '3', 'Optics', 'PHY 313', 3, 1),
(148, '3', 'Atomic Physics II', 'PHY 343', 3, 1),
(149, '3', 'Basic Exptl. Physics V', 'PHY 371', 2, 1),
(150, '3', 'Electronics I', 'PHY 353', 4, 1),
(151, '3', 'Analysis III', 'MTH 3312', 3, 1),
(152, '3', 'Science Tech.', 'GNS 301', 2, 1),
(153, '3', 'Quantum Mechanics I', 'PHY 333', 4, 2),
(154, '3', 'Solid Stat Physics I', 'PHY 355', 3, 2),
(155, '3', 'Nuclear & Part. Phys. I', 'PHY 362', 3, 2),
(156, '3', 'Energy Sour. & Enrg. Conv', 'PHY 386', 2, 2),
(157, '3', 'Basic Exptl. Physics VI', 'PHY 372', 2, 2),
(158, '3', 'Complex Analysis I', 'MTH 323', 3, 2),
(159, '3', 'Mathematical Methods III', 'MTH 348', 3, 2),
(160, '3', 'Workshop Practice I', 'ME 203', 1, 2),
(161, '5', 'Research Project', 'PHY 599', 3, 1),
(162, '5', 'Quantum Mechanics II', 'PHY 533', 3, 1),
(163, '5', 'Classical Electrodynamics', 'PHY 514', 3, 1),
(164, '5', 'Statistical Physics', 'PHY 522', 4, 1),
(165, '5', 'Advance Exptl. Phys. I', 'PHY 571', 4, 1),
(166, '5', 'Numerical Analysis I', 'MTH 337', 3, 1),
(167, '5', 'Project', 'PHY 599', 3, 2),
(168, '5', 'Electronics', 'PHY 554', 4, 2),
(169, '5', 'Workshop Practice II', 'ME 307', 1, 2),
(170, '5', 'Advance Exptl. Phys. II', 'PHY 572', 3, 2),
(171, '5', 'Nuclear & Part. Phys. II', 'PHY 561', 4, 2),
(172, '5', 'Solid State Physics II', 'PHY 551', 4, 2),
(173, '9', 'Vaccum Techniques', 'PHY 581', 4, 2),
(174, '5', 'Applied Geophysics', 'PHY 580', 4, 2),
(175, '5', 'Nucl. Inst. & React. Phys.', 'PHY 562', 4, 2),
(176, '5', 'Seltd Tops. In Sol. st. Phy.', 'PHY 555', 4, 2),
(177, '3', 'Nuclear Models', 'PHY 567', 4, 2),
(178, '5', 'Advance Optics', 'PHY 511', 3, 2),
(179, '5', 'Plasma Phys. & Spectroscopy', 'PHY 541', 4, 2),
(180, '5', 'Partial Diffe. Equation', 'MTH 522', 3, 2),
(181, '14', 'Intro. Biology I (Cell & Organization Biology)', 'BIO 101', 4, 1),
(182, '14', 'Foundation Chemistry I', 'CHM 101', 4, 1),
(183, '14', 'Elementary Algebra I', 'MTH 111', 3, 1),
(184, '14', 'Elementary Calculus', 'MTH 112', 3, 1),
(185, '14', 'Physics for Life Science I', 'PHY 190', 3, 1),
(186, '14', 'Use of English I', 'GNS 101', 2, 1),
(187, '14', 'Intro Biology II (Biosystematic & Structure)', 'BIO 102', 4, 2),
(188, '14', 'Intro Biology III (Heredity, Ecology & Dev.', 'CHM 102', 5, 2),
(189, '14', 'Physics for Life Science II', 'PHY 191', 4, 2),
(190, '14', 'Physics for Life Science II', 'PHY 191', 4, 2),
(191, '14', 'Use of English II', 'GNS 102', 2, 2),
(192, '14', 'Use of English II', 'GNS 102', 2, 2),
(193, '15', 'Genetic & Evolusion', 'BIO 102', 3, 1),
(194, '15', 'Principles of Ecology', 'ECO 201', 3, 1),
(195, '15', 'Principles of Ecology', 'ECO 201', 3, 1),
(196, '15', 'Intro. Chemistry', 'CHM 201', 5, 1),
(197, '16', 'Metabolism & Chemical of Life', 'BCH 201', 3, 1),
(198, '15', 'General Microbiology I', 'MCB201', 3, 1),
(199, '15', 'General Microbiology I', 'MCB201', 3, 1),
(200, '15', 'Information Science II', 'GNS 201', 3, 1),
(201, '15', 'Information Science II', 'GNS 201', 3, 1),
(202, '15', 'Physical Chemistry I (MCB only)', 'CHM 241', 4, 1),
(203, '15', 'Quantitative Method in Biology', 'BIO 202', 3, 2),
(204, '15', 'Cell Biology', 'BIO 203', 3, 2),
(205, '15', 'The Environ. & Worlds Ecosystem (Non MCB)', 'ECO 202', 3, 2),
(206, '15', 'Review of Plant Kingdom', 'BOT 201', 4, 2),
(207, '15', 'Organic Chemistry I', 'CHM 231', 3, 2),
(208, '15', 'Organic Chemistry I', 'CHM 231', 3, 2),
(209, '15', 'African History and Culture', 'GNS 202', 2, 2),
(210, '15', 'Inorganic Chemistry I ', 'CHM221', 3, 2),
(211, '16', 'Quantitative Methods in Biology II', 'BIO 301', 3, 1),
(212, '16', 'Savannah and Forest Ecology', 'ECO 301', 3, 1),
(213, '16', 'Savannah and Forest Ecology', 'ECO 301', 3, 1),
(214, '16', 'Physiological Ecology', 'ECO 302', 3, 1),
(215, '16', 'Reclamation of Derelict Land', 'ECO 304', 3, 1),
(216, '16', 'Entomology', 'ZOO 305', 3, 1),
(217, '16', 'Microbial Genetics', 'BIO 306', 3, 1),
(218, '16', 'Backteriology', 'MCB 301', 3, 1),
(219, '16', 'Industrial Microbiology', 'MCB 303', 3, 2),
(220, '16', 'Industrial Microbiology', 'MCB 303', 3, 2),
(221, '16', 'Immunology', 'MCB 306', 3, 2),
(222, '16', 'Microbial Physiology', 'MCB 305', 3, 2),
(223, '16', 'Medical & Vet. Entomology', 'ZOO 304', 3, 2),
(224, '16', 'Medical Microbiology', 'MCB 304', 3, 2),
(225, '16', 'Parasitic Protozoan', 'ZOO 303', 3, 2),
(226, '16', 'Parasitic Protozoan', 'ZOO 303', 3, 2),
(227, '17', 'Project', 'BIO 502', 3, 0),
(228, '17', 'Soil Microbiology', 'MCB 502', 3, 1),
(229, '17', 'Seminar in Microbiology', 'MCD 505', 1, 1),
(230, '17', 'Pharmaceutical Microbiology', 'MCD 506', 3, 1),
(231, '17', 'Parasite Helminthes', 'ZOO 501', 3, 1),
(232, '17', 'Project', 'BIO 502', 3, 2),
(233, '17', 'Food Microbiology', 'MCD 501', 3, 2),
(234, '17', 'Environ. Microbiology', 'MCD 503', 3, 2),
(235, '17', 'Analytical Microbiology & Quality Control', 'MCD 507', 2, 2),
(236, '22', 'Elementary Algebra I', 'MTH 111', 3, 1),
(237, '10', 'Elementary Algebra I', 'MTH 111', 3, 1),
(238, '10', 'Calculus I', 'MTH 112', 3, 1),
(239, '10', 'Geometry', 'MTH 113', 3, 1),
(240, '10', 'Introductory Mechanics & Properties of Matter', 'PHY 138', 3, 1),
(241, '10', 'Basic Experimental Physics I', 'PHY 171', 1, 1),
(242, '10', 'Use of English I', 'GNS 101', 2, 1),
(243, '10', 'Introductory Head & Sound', 'PHY 184', 3, 1),
(244, '10', 'Foundation Chemisty I', 'CHM 101', 4, 1),
(245, '10', 'Introductory Geology I', 'GEO 101', 3, 1),
(246, '10', 'Introductory Biology I', 'BIO 101', 3, 1),
(247, '10', 'Elementary Algebra II', 'MTH 121', 4, 2),
(248, '10', 'Calculus II', 'MTH 122', 4, 2),
(249, '10', 'Elementary Theory of Sets', 'MTH 123', 2, 2),
(250, '10', 'Intro. Electricity & Magnetism', 'PHY 188', 3, 2),
(251, '10', 'Basic Physics II', 'PHY 172', 1, 2),
(252, '10', 'Use of English Language II', 'GNS 102', 2, 2),
(253, '10', 'Intro. Computer Science', 'CS 142', 3, 2),
(254, '11', 'Linear Algebra II', 'MTH 211', 3, 1),
(255, '11', 'Mathematical Methods II', 'MTH 212', 3, 1),
(256, '11', 'Analysis II', 'MTH 213', 3, 1),
(257, '11', 'Introduction to Statistics and Prob.', 'ST 271', 3, 1),
(258, '11', 'Introduction to Statistics and Prob.', 'ST 271', 3, 1),
(259, '11', 'African History and Culture', 'GNS 201', 2, 1),
(260, '11', 'Intro. to File Processing', 'CS 232', 3, 1),
(261, '11', 'Immediate Mechanics', 'PHY 202', 4, 1),
(262, '11', 'Linear Algebra II', 'MTH 221', 3, 2),
(263, '11', 'Mathematical Method II', 'MTH 222', 3, 2),
(264, '11', 'Mathematical Method II', 'MTH 222', 3, 2),
(265, '11', 'Analysis II', 'MTH 223', 3, 2),
(266, '11', 'Analysis II', 'MTH 223', 3, 2),
(267, '11', 'Introduction to Mathematical Modeling', 'MTH 224', 3, 2),
(268, '11', 'Introduction to File Processing', 'CS 242', 3, 2),
(269, '11', 'Descriptive Statistics', 'ST 281', 3, 2),
(270, '11', 'African History & Culture', 'GNS 202', 2, 2),
(271, '12', 'Abstract Algebra I', 'MTH 311', 3, 1),
(272, '12', 'Data Structure', 'CS 331', 3, 1),
(273, '12', 'Theoretical Computer Science', 'CS 332', 3, 1),
(274, '12', 'C Programming', 'CS 334', 3, 1),
(275, '12', 'Numerical Analysis I', 'MTH 337', 2, 1),
(276, '12', 'Operation Research I', 'MTH 338', 3, 1),
(277, '12', 'Science and Technology', 'GNS 301', 3, 1),
(278, '12', 'Organization of Programming Languages', 'CS 343', 3, 2),
(279, '12', 'System Analysis & Design', 'CS 344', 4, 2),
(280, '12', 'Intro. to Computer System Discrete', 'CS 345', 3, 2),
(281, '12', 'Mathematics', 'MTH 324', 3, 2),
(282, '12', 'Numerical Analysis II', 'MTH 347', 2, 2),
(283, '12', 'Operation Research II', 'MTH 346', 3, 2),
(284, '12', 'Time Series & Index Numbers', 'ST 381', 3, 2),
(286, '13', 'Project', 'CS 599', 6, 1),
(287, '13', 'Design and Analysis of Algorithms', 'CS 531', 3, 1),
(288, '13', 'Translations of Programming Languages', 'CS 533', 3, 1),
(289, '13', 'Fundamental of Software Engineering', 'CS 534', 3, 1),
(290, '13', 'Data Communication and Networs', 'CS 535', 3, 1),
(291, '13', 'Microcomputer & Microprocessor systems', 'CS 536', 3, 1),
(292, '13', 'Digital systems Laboratory', 'CS 537', 1, 1),
(294, '13', 'Intro. to Operating systems principles', 'CS 541', 3, 2),
(295, '13', 'Database Management', 'CS 541', 3, 2),
(296, '13', 'Intro. to Computer Architecture', 'CS 543', 3, 2),
(297, '13', 'Intro. to Artificial Intelligence', 'CS 544', 3, 2),
(298, '13', 'Microcomputer and Microprocessor systems Laborator', 'CS 546', 1, 2),
(299, '13', 'Advanced Computer Programming', 'CS 547', 3, 2),
(300, '13', 'Computer and Society', 'CS 545', 3, 2),
(301, '26', 'Elementary Algebra I', 'MTH 111', 3, 1),
(302, '26', 'Calculus I', 'MTH 112', 3, 1),
(303, '26', 'Geometry', 'MTH 113', 3, 1),
(304, '26', 'Introductory Mech. & Prop.of Matters', 'PHY 183', 3, 1),
(305, '26', 'Use of English Lanugage', 'GNS 101', 2, 1),
(306, '26', 'Basic Experimental Physics I', 'PHY 171', 1, 1),
(307, '26', 'Introductory Heat and Sound', 'PHY 184', 3, 1),
(308, '26', 'Foundation Chemistry', 'CHM 101', 4, 1),
(309, '26', 'Introductory Geology I', 'GEO 101', 3, 1),
(310, '26', 'Elementary Algebra II', 'MTH 121', 4, 2),
(311, '26', 'Calculus II', 'MTH 122', 4, 2),
(312, '26', 'Elementary Theory of Sets', 'MTH 123', 2, 2),
(313, '26', 'Introductory computer Science', 'CS 142', 3, 2),
(314, '26', 'Introdutory Optics & Modern Physics', 'PHY 189', 3, 2),
(315, '26', 'Basic Experimental Physics II', 'PHY 172', 1, 2),
(316, '26', 'Use of English Language II', 'GNS 102', 2, 2),
(317, '27', 'Linear Algebra I', 'MTH 211', 3, 1),
(318, '27', 'Mathemtical Methods I', 'MTH 212', 3, 1),
(319, '27', 'Analysis I', 'MTH 213', 3, 1),
(320, '27', 'Intermediate Mechanics', 'PHY 202', 4, 1),
(321, '27', 'Computer Programming', 'CS 232', 4, 1),
(322, '27', 'Introductory Stats. & Elem. Probability', 'ST 271', 4, 1),
(323, '27', 'Information Science', 'GNS 201', 2, 1),
(324, '27', 'Linear Algebra II', 'MTH 221', 3, 2),
(325, '27', 'Mathematical Methods II', 'MTH 222', 3, 2),
(326, '27', 'Analysis II', 'MTH 223', 3, 2),
(327, '27', 'Introduction to File Processing', 'CS 242', 3, 2),
(328, '27', 'Descriptive Statistics', 'ST 281', 3, 2),
(329, '27', 'African History & Culture', 'GNS 202', 2, 2),
(330, '28', 'Numerical Analysis I', 'MTH 337', 3, 1),
(331, '28', 'Operations Research I', 'MTH 338', 3, 1),
(332, '28', 'Probability Theory I', 'ST 372', 3, 1),
(333, '28', 'Optimization Theory', 'ST 372', 3, 1),
(334, '28', 'Data Structures', 'CS 331', 2, 1),
(335, '28', 'Theoretical Computer Science', 'CS 332', 4, 1),
(336, '28', 'Science, Tehcnology & Society', 'GNS 301', 2, 1),
(337, '28', 'Time Series & Index Number', 'ST 381', 3, 2),
(338, '28', 'Probabilty Theory II', 'ST 382', 4, 2),
(339, '28', 'Statistical Inference', 'ST 383', 3, 2),
(340, '28', 'Biometry I', 'ST 384', 3, 2),
(341, '28', 'Survey Methodology', 'ST 385', 3, 2),
(342, '28', 'Discrete Mathematics', 'MTH 324', 3, 2),
(343, '28', 'Operations Research II', 'MTH 346', 3, 2),
(344, '29', 'Project', 'ST 599', 3, 1),
(345, '29', 'Non-parametric Inf. & Seq. Methods', 'ST 571', 3, 1),
(346, '29', 'Linear Models and Regression Analysis', 'ST 572', 3, 1),
(347, '29', 'Design and Analysis of Experiments', 'ST 573', 3, 1),
(348, '29', 'Intro. to Stochastic of Experiments', 'ST 574', 3, 1),
(349, '29', 'Statistical Quality Control', 'ST 575', 2, 1),
(350, '29', 'Applied Statistics', 'ST 576', 3, 1),
(351, '29', 'Project', 'ST 599', 3, 2),
(352, '29', 'Advance Probability Theory', 'ST 581', 4, 2),
(353, '29', 'Decision Theory', 'ST 582', 3, 2),
(354, '29', 'Multivariate Analysis', 'ST 583', 3, 2),
(355, '29', 'Simulation & Monte-Carlo Methods', 'ST 584', 2, 2),
(356, '29', 'Sampling Techniques', 'ST 585', 3, 2),
(357, '29', 'Biometry II', 'ST 586', 3, 2),
(358, '8', 'Intro to Chemical Bounding', 'CHM 311', 3, 1),
(359, '8', 'Intro to Chemical Bounding', 'CHM 311', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `addstaff`
--

CREATE TABLE `addstaff` (
  `staffid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addstaff`
--

INSERT INTO `addstaff` (`staffid`, `fname`, `sname`, `oname`, `age`, `gender`, `state`, `phone`, `username`, `password`) VALUES
(3, '', 'RIDHWANULLAH', 'TAHIR', 27, 'male', 'kogi', '+2347030517671', '', ''),
(2, '', 'ahmadu', 'Yusuf', 33, 'male', 'bauchi', '0696789569056', '', ''),
(4, '', 'ABUBAKAR', 'YUSUF', 24, 'male', 'bauchi', '08034323030', '', ''),
(5, '', 'ATEKPE', 'ESH', 45, 'male', 'kebbi', '11234567890', '', ''),
(6, '', 'dd', 'dd', 14, 'male', 'abuja', '08090909090', '', ''),
(7, '', 'Badamasi', 'Bukky', 23, 'female', 'oyo', '08140434582', 'pelumi', 'sweety'),
(10, 'GHANIYA', 'BADAMASI', 'BUKKY', 23, 'female', 'oyo', '08140434528', 'bukkylove', '12/98135'),
(11, 'Dadis', 'Gabriel', 'H', 31, 'male', 'anambra', '08069544034', 'dadis', '12345678'),
(12, 'ty ', 'danjuma', '', 43, 'male', 'Kogi', '08079885575', 'danjo', '6c44e5cd17f0019c64b042e4a745412a');

-- --------------------------------------------------------

--
-- Table structure for table `addvenues`
--

CREATE TABLE `addvenues` (
  `venueid` int(11) NOT NULL,
  `venuename` varchar(50) NOT NULL,
  `venuecapacity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addvenues`
--

INSERT INTO `addvenues` (`venueid`, `venuename`, `venuecapacity`) VALUES
(1, 'Auditorium', '77'),
(4, 'NBLLR', '86'),
(5, 'NBULR', '86'),
(6, 'SLT', '180'),
(7, 'NEEDs HALL', '500');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `surname`, `admin_username`, `password`) VALUES
(2, 'admin', 'admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99'),
(5, 'muktar', 'mukhtar', 'muk', 'b60fb7657926287713da4f2861d6db35'),
(6, 'abubakar', 'mukhtar', 'muk', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'dahiru', 'Abubakar', 'dahiru', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'dahiru', 'Abubakar', 'dahiru', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'Sani', 'Sanda', 'ssanda', '02139636');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`, `course_id`) VALUES
(1, 'First Semester', 0),
(2, 'Second Semester', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `surname`, `username`, `password`) VALUES
(1, 'IBRAHIM', 'SADIQ', 'sadiqson', '12345'),
(2, 'student', 'ssss', 'stud', '1a1dc91c907325c69271ddf0c944bc72');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `table_id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `coursetittle` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `invigilators` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`table_id`, `class`, `semester`, `coursecode`, `coursetittle`, `date`, `start_time`, `end_time`, `venue`, `invigilators`) VALUES
(1, '17', '1', 'MCB 502', 'Soil Microbiology', '2017/02/03', '10:00am', '1:00pm', 'NBULR', '10'),
(2, '25', '1', 'MTH 511', 'Topology II', '2017/02/12', '2:00pm', '5:00pm', 'NBLLR', '14'),
(3, '13', '1', 'CS 534', 'Fundamental of Software Engineering', '2017/02/13', '10:00am', '1:00pm', 'NBLLR', '5'),
(4, '24', '1', 'MTH 337', 'Numerical Analysis I', '2017/02/16', '2:00pm', '5:00pm', 'Auditorium', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addclass`
--
ALTER TABLE `addclass`
  ADD PRIMARY KEY (`classid`);

--
-- Indexes for table `addcourse`
--
ALTER TABLE `addcourse`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `addstaff`
--
ALTER TABLE `addstaff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `addvenues`
--
ALTER TABLE `addvenues`
  ADD PRIMARY KEY (`venueid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcourse`
--
ALTER TABLE `addcourse`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;
--
-- AUTO_INCREMENT for table `addstaff`
--
ALTER TABLE `addstaff`
  MODIFY `staffid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `addvenues`
--
ALTER TABLE `addvenues`
  MODIFY `venueid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
