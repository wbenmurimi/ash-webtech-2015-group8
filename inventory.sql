
-- --------------------------------------------------------


create database invetory;
use invetory;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `item_number` varchar(255) NOT NULL,
  `barcode_number` int(11) NOT NULL DEFAULT '0',
  `item_name` varchar(50) NOT NULL,
  `manufacturer`varchar(20) NOT NULL,
  `price`int(11) NOT NULL DEFAULT '0',
  `date_bought` date NOT NULL,
  `last_repair_date` date NOT NULL,
  `conditions` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
	`userid`int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`item_number`),
CONSTRAINT `borrowed` FOREIGN KEY (`userid`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id`int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL, 
  PRIMARY KEY (`user_id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `lecture_halls`
--

CREATE TABLE IF NOT EXISTS `lecture_halls` (
  `hall_number` int(11) NOT NULL DEFAULT '0',
  `hall_name` varchar(255) NOT NULL,
  `item_no` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`hall_number`),
	CONSTRAINT `contains` FOREIGN KEY (`item_no`) REFERENCES `items` (`item_number`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `manufacturer_id` int(11) NOT NULL DEFAULT '0',
  `manufacturer_name` varchar(255) NOT NULL,
  `code_no` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`manufacturer_id`),
CONSTRAINT `produces` FOREIGN KEY (`code_no`) REFERENCES `items` (`barcode_number`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

