
-- --------------------------------------------------------

--
-- Table structure for table `sh_datetimeslot`
--

CREATE TABLE `sh_datetimeslot` (
  `ID` int(11) NOT NULL,
  `DoctorID` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_datetimeslot`
--

INSERT INTO `sh_datetimeslot` (`ID`, `DoctorID`, `Date`, `Time`) VALUES
(172, '', '2018-02-15', '15:30-16:00'),
(171, '', '2018-02-15', '15:00-15:30'),
(177, '', '2018-04-04', '02:30-03:00'),
(176, '', '2018-04-04', '02:00-02:30'),
(175, '', '2018-02-16', '20:00-20:30');
