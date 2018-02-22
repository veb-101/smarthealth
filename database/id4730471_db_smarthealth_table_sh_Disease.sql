
-- --------------------------------------------------------

--
-- Table structure for table `sh_Disease`
--

CREATE TABLE `sh_Disease` (
  `ID` int(11) NOT NULL,
  `Symptoms` varchar(500) NOT NULL,
  `Disease` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sh_Disease`
--

INSERT INTO `sh_Disease` (`ID`, `Symptoms`, `Disease`) VALUES
(1, 'headache,heaviness of head', 'sinusitis'),
(2, 'headache,fullness of head,vomiting', 'acidity'),
(3, 'giddiness,headache,burning in chest,vomiting,acidity', 'hyper acidity'),
(4, 'headache,giddiness', 'hypertension'),
(5, 'headache,vertigo', 'cervical spondylosis'),
(6, 'fever,running nose,headache', 'cold'),
(7, 'headache,left/right both', 'migrane'),
(8, '', ''),
(9, 'cough with expectorent,chest pain,cold', 'bronchitis'),
(10, 'difficulty in breathing,cough', 'bronchial asthma'),
(11, 'difficulty in breathing,palpitation,anxiety,blood pressure', 'cardial problem'),
(12, 'low diet,loss in short priod,cough/without cough', 'tuberclosis'),
(13, 'pain in throat,difficulty in swallowing,fewer with chills', 'tonsillitis'),
(14, 'burning in bussal cavity(mouth)', 'apthous ulcers'),
(15, '', ''),
(16, 'pain and watering of ears', 'CSOM'),
(17, 'extreme pain in ears and heavyness of same', 'fungal inection of ears'),
(18, 'pain,redness,watering and itching of eyes', 'conjunctivites'),
(19, 'white layer of black of the eyes,low vision', 'cataract'),
(20, 'pain in abdomen,watery stools', 'dysentery'),
(21, 'fever, pain in abdomen, vomiting', 'food poisoning'),
(22, 'pain in abdomen(urine area)', 'kydney stones'),
(23, 'burning in urine', 'urinary tract infection'),
(24, 'swelling pain in knees', 'osteoarthritis'),
(25, 'low backache extending to legs,tingling and numness of legs and feet', 'lumbar spondylosis'),
(26, 'Itching all over the body', 'allergy of some kind'),
(27, 'high urination in day/night,high thirst,itching all over ', 'diabetis mellitis[dm]');
