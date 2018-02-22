
-- --------------------------------------------------------

--
-- Table structure for table `sh_patientdetails`
--

CREATE TABLE `sh_patientdetails` (
  `ID` int(11) NOT NULL,
  `DoctorID` varchar(100) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `MobileNo` varchar(500) NOT NULL,
  `Age` varchar(500) NOT NULL,
  `Gender` varchar(500) NOT NULL,
  `BloodGroup` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_patientdetails`
--

INSERT INTO `sh_patientdetails` (`ID`, `DoctorID`, `Name`, `Email`, `Address`, `MobileNo`, `Age`, `Gender`, `BloodGroup`, `Password`) VALUES
(49, '', 'dveg', 'fg@gh.com', 'evdv', '1234567890', '3', 'Male', 'd', '1234567890'),
(47, '', 'gstr', 'vs@gm.com', 'strstr', '1234567890', '4', 'Male', 's', '1234567890'),
(31, '', 'Pranay', 'lobopranayk9@gmail.com', 'dahisar', '9892571956', '18', 'Male', 'A+', '9892571956'),
(38, '', 'Pranilpranil', 'pranil@gmail.com', 'dahisar', '9892571956', '18', 'Female', 'a', '9892571956'),
(37, 'NULL', 'gum', 'gum@gmail.com', 'gum', '9892557196', '18', 'Male', 'A+', 'admin'),
(35, 'NULL', 'Khem', 'khemagarwal1@gmail.com', 'dahisar', '9892366845', '18', 'Male', 'A+', 'REDcherry');
