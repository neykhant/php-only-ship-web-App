<?php
$connect=mysql_connect("localhost","root","");
if($connect){
	echo "connected successfully<br>";
}
else{
	die("could not connect to database".mysql_error());
}

$db='CREATE DATABASE IF NOT EXISTS Peacock';
mysql_query($db,$connect) or die(mysql_error($connect));
echo"create database successfully<br>";
mysql_select_db('Peacock',$connect) or die(mysql_error($connect));

$admin='CREATE TABLE  `Peacock`.`Admin` (
`AdminID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`admin_name` VARCHAR( 255 ) NOT NULL ,
`admin_password` VARCHAR( 255 ) NOT NULL
) ENGINE = INNODB';
mysql_query($admin,$connect) or die(mysql_error($connect));
echo"admin table is created<br>";

$VesselType='CREATE TABLE  `Peacock`.`VesselType` (
`VesselTypeID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`VesselType` VARCHAR( 255 ) NOT NULL ,
`SuitableForEvents` VARCHAR( 255 ) NOT NULL 
) ENGINE = INNODB';
mysql_query($VesselType,$connect) or die(mysql_error($connect));
echo"VesselType table is created<br>";

$Vessel='CREATE TABLE  `Peacock`.`Vessel` (
`VesselID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`VesselName` VARCHAR( 255 ) NOT NULL ,
`VesselTypeID` INT NOT NULL ,
`VesselPrice` VARCHAR(255) NOT NULL ,
`VesselImage` VARCHAR( 255 ) NOT NULL ,
FOREIGN KEY (VesselTypeID) REFERENCES VesselType(VesselTypeID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($Vessel,$connect) or die(mysql_error($connect));
echo"Vessel table is created<br>";

$EventType='CREATE TABLE  `Peacock`.`EventType` (
`EventTypeID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`EventTypeName` VARCHAR( 255 ) NOT NULL ,
`EventPrice` VARCHAR(255) NOT NULL ,
`EventImage` VARCHAR( 255 ) NOT NULL 
) ENGINE = INNODB';
mysql_query($EventType,$connect) or die(mysql_error($connect));
echo"Event Type table is created<br>";

$EventVessel='CREATE TABLE  `Peacock`.`EventVessel` (
`EventTypeID` INT NOT NULL ,
`VesselID` INT NOT NULL ,
FOREIGN KEY (EventTypeID) REFERENCES EventType(EventTypeID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (VesselID) REFERENCES Vessel(VesselID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($EventVessel,$connect) or die(mysql_error($connect));
echo"EventVessel table is created<br>";

$customer='CREATE TABLE  `Peacock`.`Customer` (
`CustomerID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`CustomerName` VARCHAR( 255 ) NOT NULL ,
`Password` VARCHAR( 255 ) NOT NULL ,
`PhNo` VARCHAR( 255 ) NOT NULL ,
`Email` VARCHAR( 255 ) NOT NULL
) ENGINE = INNODB';
mysql_query($customer,$connect) or die(mysql_error($connect));
echo"customer table is created<br>";

$Destination='CREATE TABLE  `Peacock`.`Destination` (
`DestinationID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`DestinationName` VARCHAR( 255 ) NOT NULL ,
`DestinationImage` VARCHAR( 255 ) NOT NULL 
) ENGINE = INNODB';
mysql_query($Destination,$connect) or die(mysql_error($connect));
echo"Destination table is created<br>";

$Booking='CREATE TABLE `peacock`.`Booking` (
`BookingID` INT NULL AUTO_INCREMENT PRIMARY KEY ,
`CustomerID` INT NOT NULL ,
`EventTypeID` INT NOT NULL ,
`DestinationID` INT NOT NULL ,
`VesselName` VARCHAR( 255 ) NOT NULL ,
`DestinationName` VARCHAR( 255 ) NOT NULL ,
`EventTypeName` VARCHAR( 255 ) NOT NULL ,
`ItineraryName` VARCHAR( 255 ) NOT NULL ,
`EventPrice` INT NOT NULL ,
`VesselPrice` INT NOT NULL ,
`ItineraryPrice` INT NOT NULL ,
`SDate` DATE NOT NULL ,
`EDate` DATE NOT NULL ,
`TDay` INT NOT NULL ,
`Amount` INT NOT NULL ,
`TotalAmount` INT NOT NULL,
FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (EventTypeID) REFERENCES EventType(EventTypeID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (DestinationID) REFERENCES Destination(DestinationID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($Booking,$connect) or die(mysql_error($connect));
echo"Booking table is created<br>";

$BookingVessel='CREATE TABLE  `Peacock`.`BookingVessel` (
`BookingID` INT NOT NULL ,
`VesselID` INT NOT NULL ,
FOREIGN KEY (BookingID) REFERENCES Booking(BookingID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (VesselID) REFERENCES Vessel(VesselID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($BookingVessel,$connect) or die(mysql_error($connect));
echo"BookingVessel table is created<br>";

$Itinerary='CREATE TABLE  `Peacock`.`Itinerary` (
`ItineraryID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`ItineraryName` VARCHAR( 255 ) NOT NULL ,
`ItineraryPrice` VARCHAR(255) NOT NULL 
) ENGINE = INNODB';
mysql_query($Itinerary,$connect) or die(mysql_error($connect));
echo"Itinerary table is created<br>";

$BookingItinerary='CREATE TABLE  `Peacock`.`BookingItinerary` (
`BookingID` INT NOT NULL ,
`ItineraryID` INT NOT NULL ,
FOREIGN KEY (BookingID) REFERENCES Booking(BookingID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (ItineraryID) REFERENCES Itinerary(ItineraryID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($BookingItinerary,$connect) or die(mysql_error($connect));
echo"BookingItinerary table is created<br>";

$VesselItinerary='CREATE TABLE  `Peacock`.`VesselItinerary` (
`VesselID` INT NOT NULL ,
`ItineraryID` INT NOT NULL ,
FOREIGN KEY (VesselID) REFERENCES Vessel(VesselID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (ItineraryID) REFERENCES Itinerary(ItineraryID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($VesselItinerary,$connect) or die(mysql_error($connect));
echo"VesselItinerary table is created<br>";
mysql_query("CREATE TABLE `peacock`.`AdminStaff` (
`AdminStaffID` INT NULL AUTO_INCREMENT PRIMARY KEY ,
`AdminStaffName` VARCHAR( 30 ) NOT NULL ,
`Password` VARCHAR( 20 ) NOT NULL ,
`ConPassword` VARCHAR( 20 ) NOT NULL ,
`Post` VARCHAR( 10 ) NOT NULL
) ENGINE = InnoDB;");
echo "Admin staff table is created";
$ItineraryDestination='CREATE TABLE  `Peacock`.`ItineraryDestination` (
`DestinationID` INT NOT NULL ,
`ItineraryID` INT NOT NULL ,
FOREIGN KEY (DestinationID) REFERENCES Destination(DestinationID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (ItineraryID) REFERENCES Itinerary(ItineraryID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($ItineraryDestination,$connect) or die(mysql_error($connect));
echo"ItineraryDestination table is created<br>";

$Invoice='CREATE TABLE  `Peacock`.`Invoice` (
`InvoiceID` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`BookingID` INT NOT NULL ,
`AdminStaffID` INT NOT NULL ,
`DateOfInvoice` DATE NOT NULL,
FOREIGN KEY (BookingID) REFERENCES Booking(BookingID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (AdminStaffID) REFERENCES AdminStaff(AdminStaffID)
ON DELETE CASCADE
ON UPDATE CASCADE
) ENGINE = INNODB';
mysql_query($Invoice,$connect) or die(mysql_error($connect));
echo"Invoice table is created<br>";
mysql_query("INSERT INTO `peacock`.`customer` (
`CustomerID` ,
`CustomerName` ,
`Password` ,
`PhNo` ,
`Email`
)
VALUES (
'1', 'Chue Chue Nge', '12345nge', '09444005212', 'chuechenge@gmail.com'
),(
'2', 'Soe Soe', 'soesoe123', '09442205212', 'soe2@gmail.com'
),(
'3', 'Hnin Hnin Myat', 'hnin2myat', '092011934', 'hninhnin@gmail.com'
),(
'4', 'Chaw Su Nge', 'chawsunge678', '0933037023', 'decemberqueen@gmail.com'
),(
'5', 'U Min Thant', '12345minthant', '0997873456', 'uminthant@gmail.com'
),(
'6', 'Nang Nang', 'nangnang45', '092012956', 'nangnang45@gmail.com'
),(
'7', 'Soe Moe Aung', 'soemoe123aung', '0933036012', 'rockstarlay@gmail.com'
),(
'8', 'Tun Tun Aung', 'tun2aung', '099734567', 'tungyiaung@gmail.com'
),(
'9', 'Kaung Lwin Thant', '789kaung123', '092056789', 'kaunglwinthant@gmail.com'
),
(
'10', 'Yarzar', 'yar5star', '09402507737', 'yar5star@gmail.com'
);");

mysql_query("INSERT INTO `peacock`.`destination` (
`DestinationID` ,
`DestinationName` ,
`DestinationImage`
)
VALUES (
'1', 'London Tower Hill', 'LondonTowerHill.jpg'
),
(
'2', 'Greenwich', 'Greenwich.jpg'
),
(
'3', 'Kingston', 'Kingston.jpg'
),
(
'4', 'Trinidad', 'Trinidad.jpg'
),
(
'5', 'Harty', 'Harty.jpg'
),
(
'6', 'Kefalonia', 'Kefalonia.jpg'
),
(
'7', 'zakinthos', 'zakinthos.jpg'
),
(
'8', 'Ithaca', 'Ithaca.jpg'
),
(
'9', 'Corfu', 'Corfu.jpg'
),
(
'10', 'Tobago', 'Tobago.jpg'
);");

mysql_query("INSERT INTO `peacock`.`eventtype` (
`EventTypeID` ,
`EventTypeName` ,
`EventPrice` ,
`EventImage`
)
VALUES (
'1', 'Full Charter', '500', 'FullCharter.jpg'
),
(
'2', 'Dealer', '800', 'DealerIncentive.jpg'
),
(
'3', 'Board Meeting', '1500', 'BoardMeeting.jpg'
),
(
'4', 'Staff Party', '600', 'staffparty.jpg'
),
(
'5', 'Full Chatter', '700', 'FullCharter1.jpg'
),
(
'6', 'Board Meeting', '550', 'BoardMeeting1.jpg'
),
(
'7', 'Staff Party', '800', 'staffparty1.jpg'
),
(
'8', 'Full Chartter', '500', 'FullCharter2.jpg'
),
(
'9', 'Board Meeting', '500', 'BoardMeeting2.jpg'
),
(
'10', 'Staff Party', '500', 'river9.jpg'
);");

mysql_query("INSERT INTO `peacock`.`admin` (
`AdminID` ,
`admin_name` ,
`admin_password`
)
VALUES (
'1', 'Chue Chue Nge', '12345chue'
);");

mysql_query("INSERT INTO `peacock`.`vesseltype` (
`VesselTypeID` ,
`VesselType` ,
`SuitableForEvents`
)
VALUES (
'1', 'Yacht', 'Food and Drink'
),
('2', 'Yacht1', 'Cake and Coffee'
),
('3', 'Yacht2', 'Wine'
),
('4', 'Yacht3', 'Snack and Drink'
),
('5', 'River', 'Free Gift'
),
('6', 'River1', 'Food and Drink'
),
('7', 'River2', 'Enjoy Party'
),
('8', 'River3', 'Wine'
),
('9', 'Small Ship', 'Free Gift'
),
('10', 'Small Ship1', 'Dinner'
), (
'11', 'Small Ship2', 'Food and Drink'
),
('12', 'Small Ship3', 'Cake and Coffee'
),
('13', 'Mid-Size Ship', 'Wine'
),
('14', 'Mid-Size Ship1', 'Snack and Drink'
),
('15', 'Mid-Size Ship2', 'Free Gift'
),(
'16', 'Mid-Size Ship3', 'Food and Drink'
),
('17', 'Mega-liner ship', 'Cake and Coffee'
),
('18', 'Mega-liner ship1', 'Wine'
),
('19', 'Mega-liner ship2', 'Snack and Drink'
),
('20', 'Mega-liner ship3', 'Free Gift'
);");

mysql_query("INSERT INTO `peacock`.`vessel` (
`VesselID` ,
`VesselName` ,
`VesselTypeID` ,
`VesselPrice` ,
`VesselImage`
)
VALUES (
'1', 'Sailboat', '2', '200', 'sailboat.jpg'
), (
'2', 'Sailboat1', '4', '220', 'sailboat1.jpg'
),(
'3', 'Yacht2', '3', '250', 'Yacht2.jpg'
), (
'4', 'Yacht3', '4', '230', 'yacht3.jpg'
),(
'5', 'Boat', '7', '300', 'boat1.jpg'
), (
'6', 'Boat1', '4', '310', 'boat2.jpg'
),(
'7', 'Boat2', '3', '320', 'boat3.jpg'
), (
'8', 'River3', '4', '330', 'river3.jpg'
),(
'9', 'Small Ship', '1', '400', 'smallship.jpg'
), (
'10', 'Small Ship1', '4', '410', 'smallship1.jpg'
),(
'11', 'Small Ship2', '3', '420', 'smallship2.jpg'
), (
'12', 'Small Ship3', '4', '430', 'smallship3.jpg'
),(
'13', 'Mid-Size Ship', '1', '500', 'mid1.jpg'
), (
'14', 'Mid-Size Ship1', '4', '550', 'mid2.jpg'
),(
'15', 'Mid-Size Ship2', '3', '560', 'mid3.jpg'
), (
'16', 'Mid-Size Ship3', '4', '570', 'mid4.jpg'
),(
'17', 'Mega-liner ship', '1', '800', 'mega.jpg'
), (
'18', 'Mega-liner ship1', '4', '850', 'mega1.jpg'
),(
'19', 'Mega-liner ship2', '1', '900', 'mega2.jpg'
),(
'20', 'Mega-liner ship3', '8', '950', 'mega3.jpg'
);
");

mysql_query("INSERT INTO `peacock`.`booking` (
`BookingID` ,
`CustomerID` ,
`EventTypeID` ,
`DestinationID` ,
`VesselName` ,
`DestinationName` ,
`EventTypeName` ,
`ItineraryName` ,
`EventPrice` ,
`VesselPrice` ,
`ItineraryPrice` ,
`SDate` ,
`EDate` ,
`TDay` ,
`TotalAmount`
)
VALUES (
'1', '1', '1', '1', 'Small Ship', 'London Tower Hill', 'Full Charter', 'Post of London', '500', '400', '2000', '2016-04-05', '2016-04-07', '2', '1200'
),
(
'2', '1', '1', '1', 'Yacht', 'Greenwich', 'Dealer', 'Caribbean 1', '800', '200', '400', '2016-04-08', '2016-04-10', '2', '1400'
),(
'3', '1', '1', '1', 'River', 'Kingston', 'Board Meeting', 'Caribbean 2', '1500', '300', '300', '2016-03-05', '2016-04-07', '2', '1500'
),(
'4', '1', '1', '1', 'Small Ship2', 'Trinidad', 'Staff Party', 'Greek Islands 1', '600', '420', '300', '2016-01-05', '2016-01-07', '2', '1200'
),(
'5', '1', '1', '1', 'Mid-Size Ship3', 'Harty', 'Full Chatter', 'Post of London 1', '700', '430', '300', '2016-04-05', '2016-04-07', '2', '1200'
),(
'6', '1', '1', '1', 'River2', 'Kefalonia', 'Board Meeting', 'Caribbean 3', '550', '320', '300', '2016-02-05', '2016-02-07', '2', '1200'
);
");
mysql_query("INSERT INTO `peacock`.`itinerary` (
`ItineraryID` ,
`ItineraryName` ,
`ItineraryPrice`
)
VALUES (
'1', 'Post of London', '2000'
), (
'2', 'Caribbean 1', '2500'
),
(
'3', 'Caribbean 2', '2300'
), (
'4', 'Caribbean 1', '2500'
),
(
'5', 'Greek Islands 1', '2000'
), (
'6', 'Greek Islands 2', '1500'
),
(
'7', 'Post of London 1', '1200'
), (
'8', 'Caribbean 3', '3200'
),
(
'9', 'Post of London 2', '2000'
), (
'10', 'Caribbean 4', '2700'
);");

mysql_query("CREATE TABLE `peacock`.`SDateEDate` (
`ID` INT NULL AUTO_INCREMENT PRIMARY KEY ,
`SDate` DATE NOT NULL ,
`EDate` DATE NOT NULL
) ENGINE = InnoDB;");
mysql_query("INSERT INTO `peacock`.`adminstaff` (
`AdminStaffID` ,
`AdminStaffName` ,
`Password` ,
`ConPassword` ,
`Post`
)
VALUES (
'1', 'Nay Min Khint', 'nayminkhint', 'nayminkhint', 'Staff'
), (
'2', 'Su Su Mon', 'su2mon', 'su2mon', 'Staff'
);");
mysql_query("INSERT INTO `peacock`.`invoice` (
`InvoiceID` ,
`BookingID` ,
`AdminStaffID` ,
`DateOfInvoice`
)
VALUES (
'1', '3', '1', '2016-04-01'
), (
'2', '4', '2', '2016-04-08'
);
");

?>