
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `tbldonor` (
  `ID` int(10) NOT NULL,
  `LastName` int(200) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `State` varchar(200) DEFAULT NULL,
  `Country` varchar(200) DEFAULT NULL,
  `PostalCode` varchar(200) DEFAULT NULL,
  `PhoneNumber` varchar(11) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `FormOfContact` varchar(200) DEFAULT NULL,
  `FormOfPayment` varchar(200) DEFAULT NULL,
  `FrequencyOfDonation` varchar(50) DEFAULT NULL,
  `AmountOfDonation` varchar(50) DEFAULT NULL,
  `Comment` varchar(50) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `tbldonor` (`ID`, `LastName`, `FirstName`, `Address`, `City`, `State`, `Country`, `PostalCode`, `PhoneNumber`, `Email`, `FormOfContact`, `FormOfPayment`, `FrequencyOfDonation`, `AmountOfDonation`, `Comment`) VALUES
(1, 'Udeh', 'Praise', 'Enugu', 'Enugu', 'Enugu State', 'Nigeria', '107 Nigeria', '09028950691', 'mailpraiseudeh@gmail.com', 'Email', 'Euro', 'Yearly', '2000', 'comment'),


ALTER TABLE `tbldonor`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `tbldonor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;



