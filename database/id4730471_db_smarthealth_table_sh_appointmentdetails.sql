
-- --------------------------------------------------------

--
-- Table structure for table `sh_appointmentdetails`
--

CREATE TABLE `sh_appointmentdetails` (
  `ID` int(11) NOT NULL,
  `Name` varchar(500) NOT NULL,
  `PatientID` varchar(500) NOT NULL,
  `MobileNo` varchar(500) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_appointmentdetails`
--

INSERT INTO `sh_appointmentdetails` (`ID`, `Name`, `PatientID`, `MobileNo`, `Date`, `Time`) VALUES
(1, 'Sameen', '1', '9167251721', '2018-02-08', '23:00-23:30'),
(2, 'pranay', '16', '9865142325', '2018-02-08', '23:30-00:00'),
(3, 'pranay', '16', '9865142325', '2018-02-08', '23:30-00:00'),
(4, 'pranay', '16', '9865142325', '2018-02-08', '23:30-00:00'),
(18, 'Bikul', '13', '9820799151', '2018-02-08', '23:30-00:00'),
(19, 'Bikul', '13', '9820799151', '2018-02-08', '23:30-00:00'),
(20, 'Bikul', '13', '9820799151', '2018-02-08', '23:30-00:00'),
(21, 'sameen', '27', '1234567890', '2018-02-08', '23:30-00:00'),
(22, '', '', '', '2018-02-08', '23:30-00:00'),
(23, 'nikul', '29', '9876542151', '2018-02-06', '17:00-17:30'),
(25, 'Pranay', '31', '9892571956', '2018-02-16', '19:00-19:30'),
(27, 'Pranay', '31', '9892571956', '2018-02-16', '20:00-20:30');
