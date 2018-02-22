
-- --------------------------------------------------------

--
-- Table structure for table `SHC_Doctor_Msg`
--

CREATE TABLE `SHC_Doctor_Msg` (
  `ID` int(11) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Reply` varchar(800) NOT NULL,
  `PatientID` varchar(500) NOT NULL,
  `DoctorID` varchar(200) NOT NULL,
  `CreatedDate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SHC_Doctor_Msg`
--

INSERT INTO `SHC_Doctor_Msg` (`ID`, `Message`, `Reply`, `PatientID`, `DoctorID`, `CreatedDate`) VALUES
(21, 'hello doctor...wassup...this will be a long msg because it is written during the testing phase of software development', 'hello doctor...wassup...this will be a long msg because it is written during the testing phase of software development', '35', 'NULL', '2018-02-18 11:59:11'),
(17, 'hi doc', 'hi', '31', '', '2018-02-15 02:48:24'),
(18, 'hi doc can I visit you', 'yes', '31', '', '2018-02-15 05:47:39');
