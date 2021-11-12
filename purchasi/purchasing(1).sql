-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 11:24 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `purchasing`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `empl_id` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` longtext,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`),
  KEY `empl_id` (`empl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`empl_id`, `username`, `password`, `role`, `status`) VALUES
('emp10', 'abinet', '75ca9414bd3383b7d85ba42af7e8fe52', 'finance officer', 'inactive'),
('emp15', 'abrham', 'd729a00aaf6160589f48f540d5779ec1', 'department head', 'active'),
('emp12', 'alene', 'e7ab711c074ccf7e42b97d71a0b9c971', 'technical room', 'active'),
('emp06', 'amsalu', '458b447cbd6f9c3176c15a50ef9a22cf', 'supplier', 'active'),
('emp07', 'asfaw', '46802d016a1bdd18e3bd435cb0caf34c', 'purchasing worker', 'active'),
('emp01', 'ashagrie', 'c930eecd01935feef55942cc445f708f', 'adminstrator', 'active'),
('emp14', 'azanu', 'd7edcac9c377ebbe40d525d7ad4df177', 'school dean', 'active'),
('emp13', 'bantayew', 'e7ac46cba0a48f5f7a63b0bf2b337be0', 'offices', 'active'),
('emp11', 'belete', 'c79d1e176c0e8c309df1219e230964c6', 'quality assurer', 'active'),
('emp08', 'jerry', '30035607ee5bb378c71ab434a6d05410', 'marketstudy team', 'active'),
('emp05', 'kidist', '95151403b0db4f75bfd8da0b393af853', 'approval commite', 'active'),
('emp02', 'mekides', '372d3f309fef061977fb2f7ba36d74d2', 'college adminstrator', 'active'),
('emp04', 'tadilo', '78b9cab19959e4af8ff46156ee460c74', 'purchasing directorate', 'active'),
('emp09', 'tsion', '95af431f6c675c8a0692bbf57aca742f', 'inventory', 'active'),
('emp03', 'zenebech', '1714726c817af50457d810aae9d27a2e', 'purchasing team', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE IF NOT EXISTS `agreement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `result_id` int(11) NOT NULL,
  `supplying_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `result_id` (`result_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`id`, `result_id`, `supplying_date`) VALUES
(23, 12, '2019-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `college_name` varchar(50) NOT NULL DEFAULT '',
  `college_admin_fname` varchar(20) NOT NULL,
  `college_admin_lname` varchar(20) NOT NULL,
  PRIMARY KEY (`college_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`college_name`, `college_admin_fname`, `college_admin_lname`) VALUES
('agriculture', 'tsion', 'demelash'),
('behaivoral', 'hirut', 'tesema'),
('business and economics', 'alex', 'mulu'),
('computational science', 'lemlem', 'melese'),
('medicine', 'mekides', 'worku'),
('social science and humanities', 'adino', 'adamitew'),
('technology', 'ashagrie', 'ayenew');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `comment` longtext,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `fname`, `lname`, `comment`, `date`) VALUES
(1, 'getahun', 'muche', 'it is best system', '2019-06-02'),
(2, 'ff', 'bn', 'atgxfg\r\nggh', '2020-02-17'),
(3, 'y', 'u', 'b', '2020-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `department_name` varchar(50) NOT NULL DEFAULT '',
  `department_head_fname` varchar(20) NOT NULL,
  `department_head_lname` varchar(20) NOT NULL,
  `college_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`department_name`),
  KEY `college_name` (`college_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_name`, `department_head_fname`, `department_head_lname`, `college_name`) VALUES
('banking', 'abidu', 'mohamed', 'business and economics'),
('biology', 'dd', 'sss', 'computational science'),
('english', 'alemu', 'moges', 'computational science'),
('it', 'agegnew', 'melaku', 'technology'),
('mechanical enginering', 'alemu', 'moges', 'technology'),
('midwifery', 'meseret', 'moges', 'medicine'),
('psycology', 'lemlem', 'denekew', 'behaivoral');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE IF NOT EXISTS `document` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `uploaded_date` date DEFAULT NULL,
  `document` varchar(500) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `uploaded_date`, `document`) VALUES
(1, '2019-06-04', 'w.docx'),
(2, '2019-06-04', 'A.txt'),
(3, '2019-06-05', 'xml.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` varchar(20) NOT NULL,
  `empfname` varchar(20) DEFAULT NULL,
  `emplname` varchar(20) DEFAULT NULL,
  `emp_phone` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `empfname`, `emplname`, `emp_phone`, `email`) VALUES
('emp01', 'ashagrie', 'ayenew', '0943489679', 'daniman1447@gmail.com'),
('emp02', 'tadilo', 'berihun', '0935451052', 'tadilo@gmail.com'),
('emp03', 'zenebech', 'wale', '0910122323', 'zed7@gmail.com'),
('emp04', 'mekides', 'worku', '0945123456', 'mekdi1465@gmail.com'),
('emp05', 'kidist', 'mitiku', '0953633411', 'kidy@gmail.com'),
('emp06', 'amsalu', 'kasahun', '0923456789', 'amsalu@gmail.com'),
('emp07', 'asfaw', 'yeniehun', '0947090267', 'asfaw@gmail.com'),
('emp08', 'jerry', 'adane', '0910123456', 'jerry@gmail.com'),
('emp09', 'tsion', 'ezialay', '0914123456', 'tsi@gmail.com'),
('emp10', 'abinet', 'sewunet', '0914123456', 'abu@gmail.com'),
('emp11', 'belete', 'dagnaw', '0939719148', 'belete09@gmail.com'),
('emp12', 'alene', 'girmaw', '0910123456', 'alene21@gmail.com'),
('emp13', 'bantayew', 'tarekegni', '0987673456', 'bantish@gmail.com'),
('emp14', 'azanu', 'nigus', '0919123456', 'azanu11@gmail.com'),
('emp15', 'abrham', 'yaregal', '0987673456', 'abirish@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fikade`
--

CREATE TABLE IF NOT EXISTS `fikade` (
  `id` int(11) NOT NULL,
  `f` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fikade`
--

INSERT INTO `fikade` (`id`, `f`) VALUES
(1, 'w.docx');

-- --------------------------------------------------------

--
-- Table structure for table `item_quality`
--

CREATE TABLE IF NOT EXISTS `item_quality` (
  `item_quality_id` varchar(20) NOT NULL,
  `item_type` varchar(20) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `quality` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`item_quality_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_quality`
--


-- --------------------------------------------------------

--
-- Table structure for table `logfile`
--

CREATE TABLE IF NOT EXISTS `logfile` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `employ_id` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL,
  `activity` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`logid`),
  KEY `employ_id` (`employ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `logfile`
--


-- --------------------------------------------------------

--
-- Table structure for table `marketdetail`
--

CREATE TABLE IF NOT EXISTS `marketdetail` (
  `marketdetail_id` varchar(20) NOT NULL,
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_price` varchar(20) DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  `total_price` varchar(20) DEFAULT NULL,
  `studied_date` date DEFAULT NULL,
  PRIMARY KEY (`marketdetail_id`),
  KEY `request_id` (`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `marketdetail`
--

INSERT INTO `marketdetail` (`marketdetail_id`, `request_id`, `unit_price`, `quantity`, `total_price`, `studied_date`) VALUES
('md01', 36, '55', '4', '220', '2019-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `model19`
--

CREATE TABLE IF NOT EXISTS `model19` (
  `recieving_reciept_no` varchar(20) NOT NULL,
  `deliverer` varchar(20) DEFAULT NULL,
  `reciepant` varchar(20) DEFAULT NULL,
  `item_type` varchar(20) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`recieving_reciept_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model19`
--

INSERT INTO `model19` (`recieving_reciept_no`, `deliverer`, `reciepant`, `item_type`, `model`, `quantity`, `unit_price`, `total_price`) VALUES
('rec01', 'microsoft', 'dmu', 'computer', 'cori5', 7, 50, 200),
('rec02', 'microsoft', 'dmu', 'book', 'oxford', 4, 45, 180);

-- --------------------------------------------------------

--
-- Table structure for table `model20`
--

CREATE TABLE IF NOT EXISTS `model20` (
  `withdraw_requistion_no` varchar(20) NOT NULL,
  `request_num` int(11) NOT NULL AUTO_INCREMENT,
  `request_date` date DEFAULT NULL,
  `requester_body` varchar(20) DEFAULT NULL,
  `officers_name` varchar(20) DEFAULT NULL,
  `item_type` varchar(30) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`withdraw_requistion_no`),
  KEY `request_num` (`request_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `model20`
--

INSERT INTO `model20` (`withdraw_requistion_no`, `request_num`, `request_date`, `requester_body`, `officers_name`, `item_type`, `model`, `quantity`) VALUES
('w01', 39, '2019-06-03', 'degu', 'dagnachew', 'computer', 'oxford', 6),
('w02', 37, '2019-06-04', 'zelalem', 'hunegnaw', 'book', 'oxford', 4),
('w03', 36, '2019-06-02', 'aklilu', 'hunegnaw', 'computer', 'cori5', 6),
('w04', 37, '2019-06-05', 'dagim', 'ayalew', 'book', 'oxford', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model22`
--

CREATE TABLE IF NOT EXISTS `model22` (
  `reciept_no` varchar(20) NOT NULL,
  `request_number` int(11) NOT NULL AUTO_INCREMENT,
  `reciepant` varchar(20) DEFAULT NULL,
  `donor` varchar(20) DEFAULT NULL,
  `item_type` varchar(20) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`reciept_no`),
  KEY `request_number` (`request_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `model22`
--


-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` varchar(20) NOT NULL DEFAULT '',
  `subject` varchar(80) NOT NULL,
  `content` varchar(15000) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `subject`, `content`, `start_date`, `end_date`) VALUES
('1234', 'car', 'gfhjtrffhgf', '2020-02-14', '2020-02-24'),
('fddsf', 'gfds', ' gfvd', '2020-02-14', '2020-02-24'),
('notice01', 'purchasing', ' submit your purchasing need\r\nto us', '2019-06-02', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `office_id` varchar(20) NOT NULL DEFAULT '',
  `colege_name` varchar(50) DEFAULT NULL,
  `department_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`office_id`),
  KEY `colege_name` (`colege_name`),
  KEY `department_name` (`department_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`office_id`, `colege_name`, `department_name`) VALUES
('01', 'medicine', 'midwifery'),
('02', 'technology', 'mechanical enginering'),
('03', 'business and economics', 'banking'),
('04', 'behaivoral', 'psycology');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `reciept` varchar(500) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `reciept`) VALUES
(1, 'ashagrie security.docx'),
(3, 'purchasing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `request_no` int(11) NOT NULL AUTO_INCREMENT,
  `item_type` varchar(20) DEFAULT NULL,
  `item_quantity` varchar(20) DEFAULT NULL,
  `specification` varchar(20) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `officce_id` varchar(20) DEFAULT NULL,
  `colleg_name` varchar(50) DEFAULT NULL,
  `dept_name` varchar(50) DEFAULT NULL,
  `sent_from` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`request_no`),
  KEY `colleg_name` (`colleg_name`),
  KEY `dept_name` (`dept_name`),
  KEY `officce_id` (`officce_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_no`, `item_type`, `item_quantity`, `specification`, `order_date`, `officce_id`, `colleg_name`, `dept_name`, `sent_from`, `status`) VALUES
(36, 'computer', '6', 'cori5', '2019-06-02', '01', 'computational science', 'english', 'technical room', 'approved'),
(37, 'book', '4', 'oxford', '2019-06-02', '01', 'computational science', 'english', 'offices', NULL),
(39, 'computer', '6', 'oxford', '2019-06-02', '01', 'computational science', 'english', 'offices', NULL),
(40, 'printer', '3', 'www', '2019-06-04', '02', 'technology', 'it', 'department head', 'approved'),
(41, 'printer', '30', 'www', '2019-06-04', '02', 'technology', 'it', 'offices', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL,
  `supplier_fname` varchar(20) DEFAULT NULL,
  `supplier_lname` varchar(20) DEFAULT NULL,
  `supplier_sex` varchar(20) DEFAULT NULL,
  `supplier_phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `item_type` varchar(20) DEFAULT NULL,
  `item_model` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `tin_number` varchar(500) NOT NULL,
  `trade_license` varchar(500) NOT NULL,
  `vat_registration_number` varchar(20) DEFAULT NULL,
  `registereddate` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supplier_fname`, `supplier_lname`, `supplier_sex`, `supplier_phone`, `email`, `item_type`, `item_model`, `quantity`, `unit_price`, `total_price`, `tin_number`, `trade_license`, `vat_registration_number`, `registereddate`, `status`) VALUES
(0, 'ashagrie', 'ayenew', 'male', '0943489679', 'daniman1447@gmail.com', 'computer', 'cori5', 4, 50, 200, 'ethio.png', 'facbook.png', '12', '2019-06-02', 'accepted'),
(2, 'tilay', 'asche', 'male', '0943489656', 'tila@gmail.com', 'computer', 'cori5', 4, 45, 180, 'google.jpg', 'agreement.jfif', '11', '2019-06-03', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `tender_id` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `posted_date` date DEFAULT NULL,
  `closing_date` date DEFAULT NULL,
  PRIMARY KEY (`tender_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tender_id`, `subject`, `content`, `posted_date`, `closing_date`) VALUES
('tender01', 'biding', ' ssssss', '2019-06-02', '2019-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `tender_result`
--

CREATE TABLE IF NOT EXISTS `tender_result` (
  `result_id` int(11) NOT NULL,
  `winner_fname` varchar(20) DEFAULT NULL,
  `winner_lname` varchar(20) DEFAULT NULL,
  `posted_date` date DEFAULT NULL,
  `winner_id` int(11) NOT NULL,
  PRIMARY KEY (`result_id`),
  KEY `winner_id` (`winner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_result`
--

INSERT INTO `tender_result` (`result_id`, `winner_fname`, `winner_lname`, `posted_date`, `winner_id`) VALUES
(12, 'abrham', 'yaregal', '2019-06-02', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`empl_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `agreement`
--
ALTER TABLE `agreement`
  ADD CONSTRAINT `agreement_ibfk_1` FOREIGN KEY (`result_id`) REFERENCES `tender_result` (`result_id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`college_name`) REFERENCES `colleges` (`college_name`);

--
-- Constraints for table `logfile`
--
ALTER TABLE `logfile`
  ADD CONSTRAINT `logfile_ibfk_1` FOREIGN KEY (`employ_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `marketdetail`
--
ALTER TABLE `marketdetail`
  ADD CONSTRAINT `marketdetail_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`request_no`);

--
-- Constraints for table `model20`
--
ALTER TABLE `model20`
  ADD CONSTRAINT `model20_ibfk_1` FOREIGN KEY (`request_num`) REFERENCES `request` (`request_no`);

--
-- Constraints for table `model22`
--
ALTER TABLE `model22`
  ADD CONSTRAINT `model22_ibfk_1` FOREIGN KEY (`request_number`) REFERENCES `request` (`request_no`);

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_ibfk_1` FOREIGN KEY (`colege_name`) REFERENCES `colleges` (`college_name`),
  ADD CONSTRAINT `offices_ibfk_2` FOREIGN KEY (`department_name`) REFERENCES `departments` (`department_name`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`colleg_name`) REFERENCES `colleges` (`college_name`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`dept_name`) REFERENCES `departments` (`department_name`),
  ADD CONSTRAINT `request_ibfk_3` FOREIGN KEY (`officce_id`) REFERENCES `offices` (`office_id`);

--
-- Constraints for table `tender_result`
--
ALTER TABLE `tender_result`
  ADD CONSTRAINT `tender_result_ibfk_1` FOREIGN KEY (`winner_id`) REFERENCES `supplier` (`id`);
