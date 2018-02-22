
-- --------------------------------------------------------

--
-- Table structure for table `sh_admin`
--

CREATE TABLE `sh_admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `Qualification` varchar(500) NOT NULL,
  `Gender` varchar(500) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Username` varchar(500) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_admin`
--

INSERT INTO `sh_admin` (`ID`, `Name`, `Qualification`, `Gender`, `Mobile`, `Username`, `Password`) VALUES
(1, '', '', '', '', 'admin', 'admin'),
(2, 'er', 'dfd', 'Female', '9876543210', 's@y.com', '9876543210'),
(6, 'Dr.Nemchand', 'B.H.M.S', 'Male', '9820798584', 'nemchand.agarwal@yahoo.com', '9820798584'),
(5, 'xsd', 'sd', 'Male', '9012345678', 's@y.com', '9012345678');
