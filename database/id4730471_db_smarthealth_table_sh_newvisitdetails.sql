
-- --------------------------------------------------------

--
-- Table structure for table `sh_newvisitdetails`
--

CREATE TABLE `sh_newvisitdetails` (
  `ID` int(11) NOT NULL,
  `PatientID` varchar(500) NOT NULL,
  `DoctorID` varchar(100) NOT NULL,
  `Symptoms` varchar(500) NOT NULL,
  `MyUnderstanding` varchar(500) NOT NULL,
  `RxClinic` varchar(500) NOT NULL,
  `RxOutside` varchar(500) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_newvisitdetails`
--

INSERT INTO `sh_newvisitdetails` (`ID`, `PatientID`, `DoctorID`, `Symptoms`, `MyUnderstanding`, `RxClinic`, `RxOutside`, `Date`) VALUES
(1, '1', '1', 'fever', 'malaria', 'abc', 'zxc', '0000-00-00'),
(2, '1', '1', 'vb', 'vb', 'vb', 'v', '0000-00-00'),
(3, '1', '2', 'df', 'df', 'df', 'df', '0000-00-00'),
(4, '1', '1', 'fg', 'gy', 'ty', 'io', '2018-01-13'),
(5, '27', '1', 'cough, fever', 'viral fever', 'crocin', 'try', '2018-01-17'),
(6, '27', '1', 'cold,fever', 'viral', 'abc', 'xyz', '2018-01-30'),
(7, '27', '1', 'omiting', 'food poision', 'cvb', 'ada', '2018-01-30'),
(8, '28', '', 'fever', 'fever', 'crocin', 'crocine1', '2018-02-14'),
(9, '31', '1', 'throat', 'tonsil', 'paracetamol', 'crocin', '2018-02-14'),
(10, '31', '1', 'headache', 'crocin', 'crocin', 'crocin', '2018-02-14'),
(11, '31', '1', 'fewfe', 'getthrr', 'rhhyy', 'rrjyjyj', '2018-02-14'),
(12, '33', '1', 'gh', 'fjj', 'fjfh', 'fjfhmfhmn', '2018-02-14'),
(13, '7', '1', 'gtrh', 'hrdhr', 'rhdrh', 'drh', '2018-02-14'),
(14, '7', '1', 'gtrh', 'hrdhr', 'rhdrh', 'drh', '2018-02-14'),
(15, '31', '1', 'vxzbzd', 'zbdz', 'cvbbnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnnnnn', '2018-02-14'),
(16, '35', '1', 'dbbg', 'dbzgggggggggb', 'dbzbbbbbb', 'dbggggggg', '2018-02-14'),
(17, '31', '1', 'fever', 'fever', 'crocin', 'crocin', '2018-02-15'),
(18, '31', '1', 'fever', 'fever', 'crocin', 'crocin', '2018-02-15'),
(19, '31', '1', 'fever', 'food poison', 'crocin', 'paracetamol', '2018-02-15');
