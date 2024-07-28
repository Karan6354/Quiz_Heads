-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 06:04 AM
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
-- Database: `qh_db4`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_master`
--

CREATE TABLE `c_master` (
  `c_ID` int(5) NOT NULL,
  `c_question` varchar(120) NOT NULL,
  `c_answer` varchar(120) NOT NULL,
  `c_option1` varchar(120) NOT NULL,
  `c_option2` varchar(120) NOT NULL,
  `c_option3` varchar(120) NOT NULL,
  `c_option4` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_master`
--

INSERT INTO `c_master` (`c_ID`, `c_question`, `c_answer`, `c_option1`, `c_option2`, `c_option3`, `c_option4`) VALUES
(1, 'C Programming Language is often called as :', 'B', 'High Level Language ', 'Middle Level Language', 'Low Level Language', 'None of these'),
(2, 'Which of the following is true about C programming language ?', 'D', 'C is a structural language.', 'C is a procedural language.', 'C does not supports function within function.', 'All of these'),
(3, 'How many keywords are there in Standard C programming language ?', 'D', '32', '28', '21', '44'),
(4, 'Which is not the extended keyword in C ?', 'D', '_Imaginary', '_Complex', 'inline', 'None of these'),
(5, 'Process in which source code is combined with object code is termed as :', 'C', 'Linker', 'Loading', 'Linking', 'None of these'),
(6, 'An object of type ‘char’ is of :', 'A', '1 byte', '2 byte', '4 byte', '8 byte'),
(7, 'For 32 bits environment, size of ‘int’ data type is :', 'B', '2 bytes', '4 bytes', '8 bytes', 'None of the above'),
(8, 'What is the minimal range of unsigned char data type ?', 'B', '-127 to 127', '0 to 255', '-32767 to 32767', 'None of these'),
(9, 'In C, the names of variables, functions, labels, and various other user-defined items are :', 'C', 'keywords', 'Tokens', 'Identifiers', 'None of these'),
(10, 'Variables that are declared inside a function are :', 'D', 'constants', 'global', 'literals', 'local'),
(11, 'All non-global variables are by default :', 'A', 'auto', 'static', 'extern', 'register'),
(12, 'You can direct the compiler to retail the values of local variables using _____ modifier.', 'B', 'auto', 'static', 'extern', 'register'),
(13, 'main() is :', 'C', 'keyword', 'Constructor', 'Function', 'None of these'),
(14, 'Variables with ____ keyword are only declared not defined.', 'B', 'auto', 'extern', 'static', 'register'),
(15, 'Which operator is used to return the length of the variables in bytes ?', 'D', 'size()', 'length()', 'leng()', 'sizeof()'),
(16, 'The format identifier ‘%i’ is also used for :', 'B', 'char', 'int', 'float', 'double'),
(17, 'Which data type is best for storing a number 65000 in a 32-bit system ?', 'D', 'int', 'long', 'signed short', 'unsigned short'),
(18, 'Which header file can be used to defin e i/o function prototypes and macros?', 'A', 'stdio.h', 'conio.h', 'stdlib.h', 'alloc,h'),
(19, '_ is used to break out of a program ?', 'D', 'break', 'continue', 'terminate', 'exit'),
(20, 'Which is an indirection operator among the following?', 'B', '&', '*', '$', '.'),
(21, 'When a function is called by itself again and again, then it is : ', 'C', 'call by value', 'call by reference', 'recursion', 'system function call');

-- --------------------------------------------------------

--
-- Table structure for table `java_master`
--

CREATE TABLE `java_master` (
  `j_ID` int(5) NOT NULL,
  `j_question` varchar(120) NOT NULL,
  `j_answer` varchar(120) NOT NULL,
  `j_option1` varchar(120) NOT NULL,
  `j_option2` varchar(120) NOT NULL,
  `j_option3` varchar(120) NOT NULL,
  `j_option4` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `java_master`
--

INSERT INTO `java_master` (`j_ID`, `j_question`, `j_answer`, `j_option1`, `j_option2`, `j_option3`, `j_option4`) VALUES
(1, 'Which of the following option leads to the portability and security of Java?', 'A', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects'),
(2, 'Which of the following is not a Java features?', 'C', 'Dynamic', 'Architecture Neutral', 'Use of pointers', 'Object-oriented'),
(3, 'The \\u0021 article referred to as a', 'A', 'Unicode escape sequence', 'Octal escape', 'Hexadecimal', 'Line feed'),
(4, '_____ is used to find and fix bugs in the Java programs.', 'D', 'JVM', 'JRE', 'JDK', 'JDB'),
(5, 'Which of the following is a valid declaration of a char?', 'A', 'char ch = \'\\utea\';', 'char ca = \'tea\';', 'char cr = \\u0223;', 'char cc = \'\\itea\';'),
(6, 'What is the return type of the hashCode() method in the Object class?', 'B', 'Object', 'int', 'long', 'void'),
(7, 'Which of the following is a valid long literal?', 'D', 'L990023', 'ABH8097', '904423', '0xnf029L'),
(8, 'What does the expression float a = 35 / 0 return?', 'C', '0', 'Not Null', 'Infinity', 'Run time exception'),
(9, 'Evaluate the following Java expression, if x=3, y=5, and z=10: ( ++z + y - y + z + x++)', 'D', '24', '23', '20', '25'),
(10, 'Which of the following creates a List of 3 visible items and multiple selections abled?', 'D', 'new List(false, 3) ', 'new List(true, 3)', 'new List(3, false)', 'new List(3, true) '),
(11, 'In which process, a local variable has the same name as one of the instance variables?', 'B', 'Serialization ', 'Variable Shadowing', 'Abstraction ', 'Multi-threading'),
(12, 'Which of the following is true about the anonymous inner class?', 'D', 'It has only methods', 'Objects can\'t be created', 'It has a fixed class name', 'It has no class name'),
(13, 'Which package contains the Random class?', 'A', 'java.util package ', 'java.lang package', 'java.awt package', 'java.io package'),
(14, 'What do you mean by nameless objects?', 'D', 'An object created by using the new keyword. ', 'An object of a superclass created in the subclass. ', 'An object without having any name but having a reference.', 'An object that has no reference.'),
(15, 'An interface with no fields or methods is known as a ______.', 'B', 'Runnable Interface', 'Marker Interface', 'Abstract Interface', 'CharSequence Interface'),
(16, 'Which of the following is an immediate subclass of the Panel class?', 'A', 'Applet class', 'Window class', 'Frame class', 'Dialog class'),
(17, 'In which memory a String is stored, when we create a string using new operator?', 'C', 'Stack', 'String memory', 'Heap memory', 'Random storage space'),
(18, 'What is the use of the intern() method?', 'A', 'It returns the existing string from memory', 'It creates a new string in the database', 'It modifies the existing string in the database', 'None of the above'),
(19, 'Which of the following is a reserved keyword in Java?', 'B', 'object', 'strictfp', 'main', 'system'),
(20, 'Which keyword is used for accessing the features of a package?', 'B', 'package', 'import', 'extends', 'export'),
(21, 'In java, jar stands for_____.', 'D', 'Java Archive Runner', 'Java Application Resource', 'Java Application Runner', 'None of the above');

-- --------------------------------------------------------

--
-- Table structure for table `vb_master`
--

CREATE TABLE `vb_master` (
  `vb_ID` int(5) NOT NULL,
  `vb_question` varchar(120) NOT NULL,
  `vb_answer` varchar(120) NOT NULL,
  `vb_option1` varchar(120) NOT NULL,
  `vb_option2` varchar(120) NOT NULL,
  `vb_option3` varchar(120) NOT NULL,
  `vb_option4` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vb_master`
--

INSERT INTO `vb_master` (`vb_ID`, `vb_question`, `vb_answer`, `vb_option1`, `vb_option2`, `vb_option3`, `vb_option4`) VALUES
(1, 'Visual Basic responds to events using __________.', 'C', 'a code procedure', 'a property', 'an event procedure', 'All of the above'),
(2, 'Keywords are also referred to as _________ .', 'B', 'permanent words', 'reserved words', 'Both A and B', 'None of the above'),
(3, 'Visual Basic is used to develop application in ________.', 'B', 'Audio visuals only', 'Graphical User Interface', 'Both A and B', 'None of the above'),
(4, 'IDE stands for_______.', 'C', 'Internal Development Environment', 'Integrated Development Engine', 'Integrated Development Environment', 'None of the above'),
(5, 'In which year Visual Basic 1.0 was introduced?', 'B', '1987', '1991', '1993', '1999'),
(6, 'Visual Basic for Applications is developed by __________.', 'B', 'Google', 'Microsoft', 'Oracle', 'Twitter'),
(7, 'VBA macros can be used for ________.', 'D', 'Data Related Tasks', 'Workbook Tasks', 'Pivot Table Tasks', 'All of the above'),
(8, 'A text box can hold maximum _________ characters for a single line text.', 'B', '2043', '2048', '2056', '2050'),
(9, 'A text box can hold maximum _________ characters for a multi-line text.', 'C', '25620', '22000', '32000', '31050'),
(10, 'The default datatype for Visual Basic is __________.', 'B', 'Integer', 'Variant', 'Character', 'Boolean'),
(11, 'In Visual Basic, a variable name can\'t exceed ________characters.', 'A', '255', '265', '270', '251'),
(12, 'By default, the textbox control can hold text as ________.', 'B', 'Multi-line', 'Single line', 'Both A and B', 'None of the above'),
(13, '________ contains shortcuts to frequently performed actions.', 'A', 'Context menu', 'Tool Bar', 'Context Bar', 'None of the above '),
(14, 'Advantages of Visual Basic are ________.', 'C', 'The structure of the Basic programming language is very simple', 'It is an integrated, interactive development environment', 'Both A and B', 'None of the above'),
(15, 'Disadvantages of Visual Basic are ________.', 'D', 'It is much slower than other languages', 'The programs written in Visual basic cannot easily be transferred to other operating systems', 'More memory space is required to install and work', 'All of the above'),
(16, 'The programming features of VB.Net are _________.', 'D', 'Boolean Conditions', 'Assembly Versioning', 'Easy-to-use Generics', 'All of the above'),
(17, 'BASIC stands for __________.', 'C', 'Beginner\'s All-Purpose System Instruction Code', 'Beginner\'s All-Purpose Symbolic Internet Code', 'Beginner\'s All-Purpose Symbolic Instruction Code', 'All of the above'),
(18, 'Who is the father of Visual Basic?', 'C', 'James Gosling', 'Ilya Piatetski-Shapiro', 'Alan Cooper', 'None of the above'),
(19, 'RTF stands for _________.', 'B', 'Rich Text File', 'Rich Text Format', 'Rich Test Format', 'Rich Test File'),
(20, 'Visual Basic is a successor to________ language.', 'A', 'BASIC', 'COBOL', 'C', 'FORTRAN'),
(21, 'The actions such as click, double-click, scrolling etc. are __________ .', 'D', 'Functions', 'Actions', 'Tasks', 'Events');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_master`
--
ALTER TABLE `c_master`
  ADD PRIMARY KEY (`c_ID`);

--
-- Indexes for table `java_master`
--
ALTER TABLE `java_master`
  ADD PRIMARY KEY (`j_ID`);

--
-- Indexes for table `vb_master`
--
ALTER TABLE `vb_master`
  ADD PRIMARY KEY (`vb_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_master`
--
ALTER TABLE `c_master`
  MODIFY `c_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `java_master`
--
ALTER TABLE `java_master`
  MODIFY `j_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vb_master`
--
ALTER TABLE `vb_master`
  MODIFY `vb_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
