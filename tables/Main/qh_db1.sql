-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 06:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qh_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `a_ID` int(11) NOT NULL,
  `a_username` varchar(160) NOT NULL,
  `a_password` varchar(160) NOT NULL,
  `a_email` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_master`
--

INSERT INTO `admin_master` (`a_ID`, `a_username`, `a_password`, `a_email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gk_master`
--

CREATE TABLE `gk_master` (
  `gk_ID` int(11) NOT NULL,
  `gk_question` varchar(160) NOT NULL,
  `gk_option1` varchar(160) NOT NULL,
  `gk_option2` varchar(160) NOT NULL,
  `gk_option3` varchar(160) NOT NULL,
  `gk_option4` varchar(160) NOT NULL,
  `gk_answer` varchar(160) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gk_master`
--

INSERT INTO `gk_master` (`gk_ID`, `gk_question`, `gk_option1`, `gk_option2`, `gk_option3`, `gk_option4`, `gk_answer`) VALUES
(1, '\"Pipavav\" in Gujarat is best known for which among the following?', 'India\'s first private port', 'India\'s First Greenfield refinery', 'India\'s First ship breaking yard', 'None of the above', 'A'),
(2, '\"Barbarak Jishnu\" is the nickname of which among the following Solanki king? ', 'Jayasimha Siddharaja', 'Kumarapala', 'Tribhuvanapala', 'Mularaja II', 'A'),
(3, '\"Bhrigukachchh\" was the ancient name of which of the following city of Gujarat?', 'Daman', 'Surat', 'Khambhat', 'Bharuch', 'D'),
(4, '\"Jigar and Ami\" is a romantic novel written by', 'Nanalal Dalpatram Kavi', 'Chunilal Vardhman Shah', 'Dayaram', 'None of the above', 'B'),
(5, 'Who is the founder of Haryanka Dynasty?', 'Ajatashatru', 'Harshvardhan', 'Bimbisara', 'Ghananand', 'C'),
(6, 'The Rowlatt Act was passed in :', '1905', '1930', '1925', '2000', 'C'),
(7, 'Who is the founder of Haryanka Dynasty?', 'Ajatashatru', 'Harshvardhan', 'Bimbisara', 'None of the above', 'C'),
(8, 'Who amongst the following had called Rabindranath Tagore as THE GREAT SENTINEL?', 'Abul Kalam Azad', 'Mahatma Gandhi', 'Dr. Rajendra Prasad', 'Subhash Chandra Bose', 'B'),
(9, 'Grand Central Terminal, Park Avenue, New York is the world\'s', 'highest railway station', 'longest railway station', 'largest railway station', 'None of the above', 'C'),
(10, 'Entomology is the science that studies', 'Behavior of human beings', 'Insects', 'The formation of rocks', 'The origin and history of technical and scientific terms', 'B'),
(11, 'Eritrea, which became the 182nd member of the UN in 1993, is in the continent of', 'Africa', 'Australia', 'Europe', 'Asia', 'A'),
(12, 'Who amongst the following had called Rabindranath Tagore as THE GREAT SENTINEL?', 'Dr. Rajendra Prasad', 'Mahatma Gandhi', 'Abul Kalam Azad', 'None of the above', 'B'),
(13, 'Aam Admi Bima Yojana was launched on:', 'October 2, 2007', 'March 10, 2008', 'March 5, 2009', 'November 14, 2011', 'A'),
(14, 'Planning commission constituted a high level committee for financial sector reforms in August 2007 under the Chairmanship of:', 'K.V. Kamath', 'Raghuram G. Rajan', 'Bimal Jalan', 'None of these', 'B'),
(15, 'Who gave the call for Evergreen Revolution?', 'M. S. Swaminathan', 'Verghese Kurien', 'Tribhuvandas Patel', 'H. M. Dalaya', 'A'),
(16, 'Open market operation is a part of:', 'Credit Policy', 'Debit Policy', 'Deposit Policy', 'None of these', 'A'),
(17, 'During which five Year plan was phase of heavy industrialization initiated?', 'Second five year plan.', 'First five year plan', 'Third five year plan', 'Fourth five year plan', 'A'),
(18, 'The Mid Day Meal scheme was launched on', 'August 15, 2000', 'August 15, 1992', 'August 15, 1995', 'August 15, 2001', 'A'),
(19, 'Who is responsible for establishing and maintaining astound and efficient accounting and financial reporting system in India?', 'The Comptroller General of Accounts', 'NITI Ayog', 'RBI', 'None of these', 'A'),
(20, 'Securities and Exchange Board of India (SEBI) was established on:', 'April 12, 1988', 'July 12, 1982', 'July 9, 1988', 'July 5, 1995', 'A'),
(21, 'The Ministry and programme Implementation - as an independent Ministry came into existence on :', 'October 15, 1999', 'January 15, 1998', 'September 15, 1999', 'June 15, 1999', 'A'),
(22, 'With which country did India’s comprehensive Economic partnership Agreement come into effect on August 1, 2011?', 'South Korea', 'China', 'Taiwan', 'Japan', 'D'),
(23, 'National food for Work programme aimed at intensifying the generation of supplementary wage employment was launched in:', 'October 2004', 'September 2003', 'November 2004', 'January 2004', 'C'),
(24, 'The Money Order system in India was introduced in the year :', '1999', '1880', '1882', '1904', 'B'),
(25, 'In the world in terms of Railway Network system India ranks:', 'second', 'first', 'fourth', 'third', 'C'),
(26, 'In India the term Black Revolution is associated with:', 'Self-dependence in the production of coal', 'Nurturing the Black Soil', 'Self-dependence in the production of petroleum crude oil', 'Self-dependence in the production of balck corp', 'C'),
(27, 'National Rural Health mission was launched in:', 'October 2005', 'August 2005', 'April 2005', 'July 2005', 'C'),
(28, 'Laadli Laxmi Yojana has been launched for supporting girls of all religions and caste up to their marriage by:', 'Uttar Pradesh government', 'Madhya Pradesh government', 'Haryana', 'none of the above', 'C'),
(29, 'Government has merged Annapurna Scheme with:', 'National Old Age Pension Scheme', 'Ujjwala', 'IRDP', 'None of these', 'A'),
(30, 'National Electricity Policy envisages elimination of power shortage by 2012 through addition of:', '50000 Megawatt', '75000 Megawatt', '100000 Megawatt.', '125000 Megawatt', 'C'),
(31, 'For International money transfer which Indian public sector bank has signed MoU with MoneyGram company of America?', 'State Bank of India', 'Bank of Baroda', 'Punjab National Bank', 'Central Bank of India', 'C'),
(32, 'Meera Seth committee was related to:', 'Development of Handlooms', 'sex discrimination at work place', 'female foeticide', 'Banking sector', 'A'),
(33, 'National Income estimates in India is prepared by:', 'Planning Commission', 'Reserve Bank Of India', 'Central Statistical Organisation (CSO)', 'Indian Statistical Institute', 'C'),
(34, 'Earn While you Learn scheme has been launched by:', 'Ministry of Tourism', 'Ministry of Youth', 'Both A and B', 'None of these', 'A'),
(35, 'The first national commission on labours was constituted on:', 'December 24, 1966.', 'December 24, 1967', 'November 24, 1966', 'November 24, 1967', 'A'),
(36, 'Monopolies and restrictive Trade practices (MRTP) act was passed in:', '1970', '1969', '1971', '1968', 'B'),
(37, 'The main rubber producing state in the country is:', 'Kerala', 'Tamil Nadu', 'Karnataka', 'Hyderabad', 'A'),
(38, 'At present, the number of nationalized banks are:', '19', '17', '15', '12', 'D'),
(39, 'During which five year plan was the annual growth rate registered at 2.5%?', 'Second Five Year Plan (1961-66)', 'First Five Year Plan (1961-66)', 'Fourth Five Year Plan (1961-66)', 'Third Five Year Plan (1961-66)', 'D'),
(40, 'The first Apparel Park in India has been established in:', 'Punalur (Kerala)', 'Tirupur (Tamil Nadu)', 'Both A and B', 'None of the above', 'B'),
(41, 'Unit Trust of India (UTI) was bifurcated (into UTI-I and UTI-II) in:', 'the year 2005', 'the year 2000', 'the year 2003', 'the year 2001', 'C'),
(42, 'In India Yellow revolution is associated with:', 'production of tea', 'production of oil seeds.', 'production of flower', 'production of paddy', 'B'),
(43, 'The programme which was launched in 1974-75 with the main objectives of improving the utilization of created irrigation potential is:', 'Command Area Development (CAD)', 'Cordial Area Development', 'Copper Area Development', 'Cop Authority Development', 'A'),
(44, 'The first fully Indian Bank is:', 'Punjab National Bank', 'Central Bank of India', 'Canara Bank', 'State Bank of India', 'A'),
(45, 'Indian state with highest road length is:', 'Maharashtra', 'Uttar Pradesh', 'Rajasthan', 'Andhra Pradesh', 'A'),
(46, 'The total number of national highways in the country is:', '220', '225', '228', '223', 'C'),
(47, 'Unit Trust of India (UTI) was established in:', '1964', '1904', '1968', '1970', 'A'),
(48, 'SEBI which was established in April 1988 stands for:', 'Share and Exchange Board of India', 'Securities and Exchange Board of India', 'Securities and Exchange Bureau of India', 'Security and Economic Board of India', 'B'),
(49, 'As per the 2009-10, data the commodity with highest share in total export value was:', 'Gems and Jewellery.', 'Engineering goods', 'Petroleum products', 'Rice', 'A'),
(50, 'The chairman of 13th finance Commission was:', 'Vijay L. Kelkar.', 'K C Neogy', 'Nand Kishore Singh', 'Y V Reddy', 'A'),
(51, 'The Ex-Officio Secretary of National Development Council is:', 'Secretary of Finance Ministry', 'General Secretary of Lok Sabha', 'Secretary of Planning Commission', 'Vice Chairman of Planning Commission', 'C'),
(52, 'The largest producer of Coffee in the country is:', 'Kerala', 'Tamil Nadu', 'Andhra Pradesh', 'Karnataka', 'D'),
(53, 'The national food for work programme was launched in:', 'November 2004', 'April 2003', 'May 2002', 'April 2000', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE `login_master` (
  `l_ID` int(11) NOT NULL,
  `l_username` varchar(50) NOT NULL,
  `l_password` varchar(10) NOT NULL,
  `l_email` varchar(20) NOT NULL,
  `l_priority` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`l_ID`, `l_username`, `l_password`, `l_email`, `l_priority`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1),
(2, 'priyansh', 'priyansh', 'priyansh@gmail.com', 2),
(3, 'sneha', 'sneha', 'sneha@gmail.com', 2),
(4, 'q', 'w', 'sneha@gmail.com', 2),
(5, 'priyansh', '1234', 'priyansh@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mt_master`
--

CREATE TABLE `mt_master` (
  `mt_ID` int(11) NOT NULL,
  `mt_questions` varchar(160) NOT NULL,
  `mt_option1` varchar(160) NOT NULL,
  `mt_option2` varchar(160) NOT NULL,
  `mt_option3` varchar(160) NOT NULL,
  `mt_option4` varchar(160) NOT NULL,
  `mt_answer` varchar(160) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mt_master`
--

INSERT INTO `mt_master` (`mt_ID`, `mt_questions`, `mt_option1`, `mt_option2`, `mt_option3`, `mt_option4`, `mt_answer`) VALUES
(1, 'What is the sum of 130+125+191?', '456', '457', '446', '454', 'C'),
(2, 'If we minus 712 from 1500, how much do we get?', '788', '777', '787', '732', 'A'),
(3, '50 times of 8 is equal to:', '400', '100', '450', '420', 'A'),
(4, '110 divided by 10 is:', '11', '10', '8', '6', 'A'),
(5, 'The product of 82 and 5 is:', '400', '410', '440', 'None of these', 'B'),
(6, 'Find the missing terms in multiple of 3: 3, 6, 9, __, 15', '10', '11', '12', '13', 'C'),
(7, 'Solve 24÷8+2.', '5', '6', '8', '12', 'A'),
(8, 'Solve: 300 – (150×2)', '150', '100', '0', '50', 'C'),
(9, 'What is the next prime number after 5?', '6', '7', '9', '11', 'B'),
(10, 'The decimal expansion of 22/7  is', 'Terminating', 'Non-terminating and repeating', 'Non-terminating and Non-repeating', 'None of the above', 'B'),
(11, 'For some integer n, the odd integer is represented in the form of:', 'n', 'n+1', '2n+1', '2n', 'C'),
(12, 'HCF of 26 and 91 is:', '15', '13', '19', '11', 'B'),
(13, 'Which of the following is not irrational?', '(3 + √7)', '(3 – √7)', '(3 + √7) (3 – √7)', '3√7', 'C'),
(14, 'The addition of a rational number and an irrational number is equal to:', 'rational number', 'Irrational number', 'Both', 'None of the above', 'B'),
(15, 'The multiplication of two irrational numbers is:', 'irrational number', 'rational number', 'Maybe rational or irrational', 'None', 'C'),
(16, 'If set A = {1, 2, 3, 4, 5,…} is given, then it represents:', 'Whole numbers', 'Rational Numbers', 'Natural numbers', 'Complex numbers', 'C'),
(17, 'If p and q are integers and is represented in the form of p/q, then it is a:', 'Whole number', 'Complex numbers', 'Even Numbers', 'Rational number', 'D'),
(18, 'The largest number that divides 70 and 125, which leaves the remainders 5 and 8, is:', '65', '23', '13', '85', 'C'),
(19, 'The least number that is divisible by all the numbers from 1 to 5 is:', '40', '50', '60', '70', 'C'),
(20, 'Using Euclid’s division algorithm, the HCF of 231 and 396 is', '13', '23', '33', '43', 'C'),
(21, 'The values of the remainder r, when a positive integer a is divided by 3 are', '0, 1, 2', 'Only 1', 'Only 0 or 1', '1, 2', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pt_master`
--

CREATE TABLE `pt_master` (
  `pt_ID` int(11) NOT NULL,
  `pt_question` varchar(160) NOT NULL,
  `pt_option1` varchar(160) NOT NULL,
  `pt_option2` varchar(160) NOT NULL,
  `pt_option3` varchar(160) NOT NULL,
  `pt_option4` varchar(160) NOT NULL,
  `pt_answer` varchar(160) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt_master`
--

INSERT INTO `pt_master` (`pt_ID`, `pt_question`, `pt_option1`, `pt_option2`, `pt_option3`, `pt_option4`, `pt_answer`) VALUES
(1, 'How many element groups are there?', '7', '11', '50', '8', 'D'),
(2, 'The symbol Au stands for what element?', 'Gold', 'Silver', 'Copper', 'Tin', 'A'),
(3, 'What is the atomic number for helium?', '1', '3', '5', '2', 'D'),
(4, 'What is the symbol for tin?', 'Se', 'Sr', 'Sg', 'Sn', 'D'),
(5, 'What is the atomic number for the element tantalum?', '81', '22', '52', '73', 'D'),
(6, 'What is the symbol for Argon?', 'A', 'An', 'Ag', 'Ar', 'D'),
(7, 'What is the atomic number for beryllium?', '83', '4', '35', '5', 'B'),
(8, 'The element germanium is in what element group?', 'Basic-Metal', 'Non-Metal', 'Rare Earth', 'Semi-Metal', 'D'),
(9, 'The element Rubidium is in what element group?', 'Alkaline earth', 'Basic Metal', 'Alkali Metal', 'Transition Metal', 'C'),
(10, 'What is the atomic number for cesium?', '55', '67', '33', '23', 'A'),
(11, 'What is the symbol for ruthenium?', 'Ru', 'Rn', 'Rh', 'Rf', 'A'),
(12, 'What is the symbol for manganese?', 'Mg', 'Mn', 'Mt', 'Me', 'B'),
(13, 'What is the symbol for phosphorus?', 'Po', 'P', 'Ph', 'Pu', 'B'),
(14, 'The symbol Fe stands for which element?', 'Fluorine', 'Lodine', 'Iron', 'Fr', 'C'),
(15, 'The element neon is from what group?', 'Halogen', 'Rare Earth', 'Noble Gas', 'Non-Metal', 'C'),
(16, 'What is the atomic weight of copper?', '63.546', '51.874', '40.349', '67.075', 'A'),
(17, 'What is the atomic mass for Nitrogen?', '14', '22', '7', '28', 'A'),
(18, 'What is the atomic number for Nitrogen?', '3', '7', '22', '14', 'B'),
(19, 'Which element is the most abundant element in the universe?', 'Oxygen', 'Silicon', 'Hydrogen', 'Hellium', 'C'),
(20, 'Hydrogen has 1 proton, 1 electron, 0 neutrons.', 'True', 'False', 'All Of Above', 'None of the above', 'A'),
(21, 'The symbol of Potassium is _________.  ', 'Pt', 'p', 'K', 'Po', 'C'),
(22, 'What is the symbol of Lithium?', 'Li', 'Lh', 'L', 'Lt', 'A'),
(23, 'What is the symbol of Argon?', 'Ar', 'Ag', 'A', 'An', 'A'),
(24, 'What is the symbol of \'magnesium\'?', 'M', 'Ma', 'Mg', 'Mn', 'C'),
(25, 'Which is the symbol of chlorine?', 'C', 'Ch', 'Cl', 'Cn', 'C'),
(26, 'What is the name of this element \'S\'?', 'Sodium', 'Potassium', 'Sulphur', 'Magnesium', 'C'),
(27, 'What is this element called \'Ca\'?', 'Calcium', 'Potasium', 'Carbon', 'None of the above', 'A'),
(28, 'The symbol \"N\" stands for _________. ', 'Sulphur', 'Potasium', 'Nitrogen', 'Carbon', 'C'),
(29, 'What is the symbol for Hydrogen?', 'H', 'He', 'Hy', 'B', 'A'),
(30, 'The symbol \"Na\" stands for ____________. ', 'Nitrogen', 'Sodium', 'Carbon', 'Calcium', 'B'),
(31, 'What is the symbol for Boron?', 'B', 'K', 'H', 'Bo', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `u_ID` int(11) NOT NULL,
  `u_username` varchar(160) NOT NULL,
  `u_password` varchar(160) NOT NULL,
  `u_email` varchar(160) NOT NULL,
  `activate_User` varchar(50) NOT NULL,
  `user_Otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`u_ID`, `u_username`, `u_password`, `u_email`, `activate_User`, `user_Otp`) VALUES
(1, 'priyansh', '1234', 'priyanshspatel2906@gmail.com', '2e49a6d4dba55d3d287ecde4bff44fc2', 727544),
(2, 'ashish', '12345', 'ashishwadhwani7716@gmail.com', 'ada0b6562dc904417b96f1a4e2bab813', 744607),
(3, 'sneha', '1234', 'sanehagor2004@gmail.com', '1e90b0b6241684dc68b5871c5d791ee7', 796475),
(4, 'prakash', '1234', 'priyanshspatel2906@gmail.com', '2e49a6d4dba55d3d287ecde4bff44fc2', 727544),
(5, 'gauri', '1234', 'savymtng@gmail.com', '347cb6a9fe7a820962df9161a9555e1a', 474323),
(6, 'ansh', '1234', 'ansh62a@gmail.com', '8d4167143277d9e034d05007cb7fc3ec', 228544),
(8, 'yash', '12345', 'yashacharya675@gmail.com', '183404f7f441d7dc4468ec55fd027216', 494770),
(9, 'khushi', '12345', 'khushisom1105@gmail.com', '7ff27f84c915f32d2d72fceed782d4e7', 747260);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`a_ID`);

--
-- Indexes for table `gk_master`
--
ALTER TABLE `gk_master`
  ADD PRIMARY KEY (`gk_ID`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
  ADD PRIMARY KEY (`l_ID`);

--
-- Indexes for table `mt_master`
--
ALTER TABLE `mt_master`
  ADD PRIMARY KEY (`mt_ID`);

--
-- Indexes for table `pt_master`
--
ALTER TABLE `pt_master`
  ADD PRIMARY KEY (`pt_ID`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`u_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `a_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gk_master`
--
ALTER TABLE `gk_master`
  MODIFY `gk_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `login_master`
--
ALTER TABLE `login_master`
  MODIFY `l_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mt_master`
--
ALTER TABLE `mt_master`
  MODIFY `mt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pt_master`
--
ALTER TABLE `pt_master`
  MODIFY `pt_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `u_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
