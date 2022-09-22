USE `id16654734_catalog`;	

CREATE TABLE `members` (
    `UserID` INT(5) NOT NULL AUTO_INCREMENT,
    `Username` VARCHAR(20) NOT NULL,
    `Password` BINARY(60) NOT NULL,
    PRIMARY KEY (`UserID`),
    KEY(`Username`)
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE `dover` (
    `Name` VARCHAR(50) NOT NULL,
    `Description` TINYTEXT,
    `Castle` VARCHAR(50) NOT NULL,
    `Image` VARCHAR(500) NOT NULL,
    `ID` INT(3) NOT NULL AUTO_INCREMENT,
    `UserID` INT(5) NOT NULL,
    PRIMARY KEY (`ID`),
    KEY `FK_dover_user_id` (`UserID`),
    CONSTRAINT `FK_dover_user_id` FOREIGN KEY (`UserID`) REFERENCES `members` (`UserID`)
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE `edinburgh`  (
    `Name` VARCHAR(50) NOT NULL,
    `Description` TINYTEXT,
    `Castle` VARCHAR(50) NOT NULL,
    `Image` VARCHAR(500) NOT NULL,
    `ID` INT(3) NOT NULL AUTO_INCREMENT,
    `UserID` INT(5) NOT NULL,
    PRIMARY KEY (`ID`),
    KEY `FK_edinburgh_user_id` (`UserID`),
    CONSTRAINT `FK_edinburgh_user_id` FOREIGN KEY (`UserID`) REFERENCES `members` (`UserID`)
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE `neuschwanstein` (
    `Name` VARCHAR(50) NOT NULL,
    `Description` TINYTEXT,
    `Castle` VARCHAR(50) NOT NULL,
    `Image` VARCHAR(500) NOT NULL,
    `ID` INT(3) NOT NULL AUTO_INCREMENT,
    `UserID` INT(5) NOT NULL,
    PRIMARY KEY (`ID`),
    KEY `FK_neuschwanstein_user_id` (`UserID`),
    CONSTRAINT `FK_neuschwanstein_user_id` FOREIGN KEY (`UserID`) REFERENCES `members` (`UserID`)
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE `versailles` (
    `Name` VARCHAR(50) NOT NULL,
    `Description` TINYTEXT,
    `Castle` VARCHAR(50) NOT NULL,
    `Image` VARCHAR(500) NOT NULL,
    `ID` INT(3) NOT NULL AUTO_INCREMENT,
    `UserID` INT(5) NOT NULL,
    PRIMARY KEY (`ID`),
    KEY `FK_versailles_user_id` (`UserID`),
    CONSTRAINT `FK_versailles_user_id` FOREIGN KEY (`UserID`) REFERENCES `members` (`UserID`)
) DEFAULT CHARSET=utf8mb4;

CREATE TABLE `vianden` (
    `Name` VARCHAR(50) NOT NULL,
    `Description` TINYTEXT,
    `Castle` VARCHAR(50) NOT NULL,
    `Image` VARCHAR(500) NOT NULL,
    `ID` INT(3) NOT NULL AUTO_INCREMENT,
    `UserID` INT(5) NOT NULL,
    PRIMARY KEY (`ID`),
    KEY `FK_vianden_user_id` (`UserID`),
    CONSTRAINT `FK_vianden_user_id` FOREIGN KEY (`UserID`) REFERENCES `members` (`UserID`)
) DEFAULT CHARSET=utf8mb4;

SET autocommit=1;

LOCK TABLES `members` WRITE;
INSERT INTO `members` VALUES ('1', 'admin', '$2y$10$pvsUye9su1QdOy78xIolHeX5xqN.31Vyvn7PdBNOP/NOiQQiGf152');
UNLOCK TABLES;

LOCK TABLES `dover` WRITE;
INSERT INTO `dover` VALUES ('Dover Castle', 'An overview of Dover Castle', 'Dover Castle', 'images/Dover-Castle.webp', '1', '1');
INSERT INTO `dover` VALUES ('Medieval Tunnels', '', 'Dover Castle', 'images/Medieval-Tunnels.webp', '2', '1');
INSERT INTO `dover` VALUES ('Underground Hospital', 'A hospital complex underneath the castle, built in the 1940s', 'Dover Castle', 'images/Underground-Hospital.webp', '3', '1');
INSERT INTO `dover` VALUES ('King Henry II Bedroom', 'A small but extravagant bedroom', 'Dover Castle', 'images/King-Henry-II-Bedroom.webp', '4', '1');
INSERT INTO `dover` VALUES ('Great Tower', 'Extending over three levels, The Great Tower is the star attraction of Dover Castle ', 'Dover Castle', 'images/Great-Tower.jpg', '5', '1');
INSERT INTO `dover` VALUES ('Guard Room', '', 'Dover Castle', 'images/Guard-Room.jpg', '6', '1');
INSERT INTO `dover` VALUES ('Dover Castle Overview', 'Another overview of Dover Castle', 'Dover Castle', 'images/Dover-Castle-Overview.jpg', '7', '1');
INSERT INTO `dover` VALUES ('Restroom', '', 'Dover Castle', 'images/Restroom.jpg', '8', '1');
INSERT INTO `dover` VALUES ('Dover Kitchen', 'The kitchen in the Great Tower.', 'Dover Castle', 'images/D-Kitchen.jpg', '9', '1');
INSERT INTO `dover` VALUES ('Throne Room', '', 'Dover Castle', 'images/Throne-Room.jpg', '10', '1');
INSERT INTO `dover` VALUES ('Grand Shaft', 'A 180 ft deep stairwell.', 'Dover Castle', 'images/Grand-Shaft.jpg', '11', '1');
INSERT INTO `dover` VALUES ('Grand Shaft 2', 'The base of the 180 ft Grand Shaft stairwell.', 'Dover Castle', 'images/Grand-Shaft-2.jpg', '12', '1');
INSERT INTO `dover` VALUES ('St. Mary de Castro', 'A Saxon church built on the grounds of Dover Castle in the 10th century.', 'Dover Castle', 'images/St.-Mary-de-Castro.jpg', '13', '1');
UNLOCK TABLES;

LOCK TABLES `edinburgh` WRITE;
INSERT INTO `edinburgh` VALUES ('Edinburgh Castle', 'An overview of Edinburgh Castle', 'Edinburgh Castle', 'images/Edinburgh-Castle.jpg', '1', '1');
INSERT INTO `edinburgh` VALUES ('Inside Royal Palace', '', 'Edinburgh Castle', 'images/Inside-Royal-Palace.jpg', '2', '1');
INSERT INTO `edinburgh` VALUES ('Mons Meg', 'One of the largest cannons in the world by calibre. Barrel diameter of 20 inches.', 'Edinburgh Castle', 'images/Mons-Meg.jpg', '3', '1');
INSERT INTO `edinburgh` VALUES ('Half Moon Cannons', 'Known as The Seven Sisters are these bronze guns which defend the Half Moon Battery.', 'Edinburgh Castle', 'images/Half-Moon-Cannons.jpg', '4', '1');
INSERT INTO `edinburgh` VALUES ('Napoleonic Wars Bunks', '', 'Edinburgh Castle', 'images/Napoleonic-Wars-Bunks.jpg', '5', '1');
INSERT INTO `edinburgh` VALUES ('Great Hall', 'Completed in 1511 for King James IV', 'Edinburgh Castle', 'images/Great-Hall.jpg', '6', '1');
INSERT INTO `edinburgh` VALUES ('Foog''s Gate', 'Principal Gate to the Upper Ward.', 'Edinburgh Castle', 'images/Foogs-Gate.jpg', '7', '1');
INSERT INTO `edinburgh` VALUES ('St. Margaret''s Chapel', 'Constructed in the 12th Century, it is the oldest surviving building in Edinburgh, Scotland.', 'Edinburgh Castle', 'images/St.-Margarets-Chapel.jpg', '8', '1');
INSERT INTO `edinburgh` VALUES ('War Memorial', 'Memorial to those who died in both world wars.', 'Edinburgh Castle', 'images/War-Memorial.jpg', '9', '1');
INSERT INTO `edinburgh` VALUES ('Edinburgh Cliff Site', '', 'Edinburgh Castle', 'images/Edinburgh-Cliff-Site.jpg', '10', '1');
UNLOCK TABLES;

LOCK TABLES `neuschwanstein` WRITE;
INSERT INTO `neuschwanstein` VALUES ('Neuschwanstein Castle', 'An overview of Neuschwanstein Castle', 'Neuschwanstein Castle', 'images/Neuschwanstein-Castle.jpg', '1', '1');
INSERT INTO `neuschwanstein` VALUES ('Singers'' Hall', 'King Ludwig''s favorite project, was designed for large banquets or musical performances.', 'Neuschwanstein Castle', 'images/Singers-Hall.jpg', '2', '1');
INSERT INTO `neuschwanstein` VALUES ('King Ludwig II Bedroom', 'The swan-themed bedroom for King Ludwig II.', 'Neuschwanstein Castle', 'images/King-Ludwig-II-Bedroom.jpg', '3', '1');
INSERT INTO `neuschwanstein` VALUES ('King''s Dressing Room', '', 'Neuschwanstein Castle', 'images/Kings-Dressing-Room.jpg', '4', '1');
INSERT INTO `neuschwanstein` VALUES ('Salon', '', 'Neuschwanstein Castle', 'images/Salon.jpg', '5', '1');
INSERT INTO `neuschwanstein` VALUES ('Study', 'Where King Ludwig II would work. The center of the room featured his writing desk.', 'Neuschwanstein Castle', 'images/Study.jpg', '6', '1');
INSERT INTO `neuschwanstein` VALUES ('Anteroom', 'i.e. Adjutant''s Room, was used for the servant waiting on the King at night.', 'Neuschwanstein Castle', 'images/Anteroom.jpg', '7', '1');
INSERT INTO `neuschwanstein` VALUES ("Singers' Hall 2", 'King Ludwig''s favorite project, was designed for large banquets or musical performances.', 'Neuschwanstein Castle', 'images/Singers-Hall-2.jpg', '8', '1');
INSERT INTO `neuschwanstein` VALUES ('Neuschwanstein Kitchen', 'Equipped with the latest technology of the day.', 'Neuschwanstein Castle', 'images/N-Kitchen.jpg', '9', '1');
INSERT INTO `neuschwanstein` VALUES ('Throne Hall', 'This hall never contained a throne, Ludwig II died before the construction of the room was complete.', 'Neuschwanstein Castle', 'images/Throne-Hall.jpg', '10', '1');
INSERT INTO `neuschwanstein` VALUES ('Dining Room', 'Had an electric bell system installed in 1885 so that servants on duty could be summoned from any other room.', 'Neuschwanstein Castle', 'images/Dining-Room.jpg', '11', '1');
INSERT INTO `neuschwanstein` VALUES ('Oratory', 'A room for prayer, adjacent to the bedroom, the room contains glass family murals.', 'Neuschwanstein Castle', 'images/Oratory.png', '12', '1');
UNLOCK TABLES;

LOCK TABLES `versailles` WRITE;
INSERT INTO `versailles` VALUES ('Palace of Versailles', 'An overview of the Palace of Versailles', 'Palace of Versailles', 'images/Palace-of-Versailles.jpg', '1', '1');
INSERT INTO `versailles` VALUES ('Marble Court', 'Original courtyard of the palace, built in 1623 by Louis XIII.', 'Palace of Versailles', 'images/Marble-Court.jpg', '2', '1');
INSERT INTO `versailles` VALUES ('Hall of Mirrors', 'The central gallery of the Palace of Versailles, as its name suggest, the hall is filled with mirrors.', 'Palace of Versailles', 'images/Hall-of-Mirrors.jpg', '3', '1');
INSERT INTO `versailles` VALUES ('Chapel Grounds', 'Dedicated to Saint Louis an ancestor of the royal house.', 'Palace of Versailles', 'images/Chapel-Grounds.jpg', '4', '1');
INSERT INTO `versailles` VALUES ('Fountain', 'Fountain of Apollo, designed by Jean-Baptiste Tuby', 'Palace of Versailles', 'images/Fountain.jpg', '5', '1');
INSERT INTO `versailles` VALUES ('Palace Gardens', 'Nothing short of breath-taking, the Palace Garden is filled with elaborate fountains and statues.', 'Palace of Versaillaes', 'images/Palace-Gardens.jpg', '6', '1');
INSERT INTO `versailles` VALUES ('Palace Railguard', '', 'Palace of Versailles', 'images/Palace-Railguard.jpg', '7', '1');
INSERT INTO `versailles` VALUES ('Royal Opera House', 'Known as one of the largest surviving court opera houses.', 'Palace of Versailles', 'images/Royal-Opera-House.jpg', '8', '1');
INSERT INTO `versailles` VALUES ('King''s Desk - Louis XV', '', 'Palace of Versailles', 'images/Kings-Desk-Louis-XV.jpg', '9', '1');
INSERT INTO `versailles` VALUES ('Royal Chapel', 'Built in 1710, the last structure built in the Palace commissioned by Louis XIV.', 'Palace of Versailles', 'images/Royal-Chapel.jpg', '10', '1');
INSERT INTO `versailles` VALUES ('King''s Apartment', 'Built in 1701, King Louis XIV made this room the focal point of the entire palace.', 'Palace of Versailles', 'images/Kings-Apartment.jpg', '11', '1');
INSERT INTO `versailles` VALUES ('Queen''s Grand Apartment', 'Built in 1682, this was where the late Queen Maria Theresa resided until death in 1683.', 'Palace of Versailles', 'images/Queens-Grand-Apartment.jpg', '12', '1');
INSERT INTO `versailles` VALUES ('Library - Louis XVI', 'The room to this day remains exactly as it was in 1781.', 'Palace of Versailles', 'images/Library-Louis-XVI.jpg', '13', '1');
UNLOCK TABLES;

LOCK TABLES `vianden` WRITE;
INSERT INTO `vianden` VALUES ('Vianden Castle', 'An overview of Vianden Castle', 'Vianden Castle', 'images/Vianden-Castle.jpg', '1', '1');
INSERT INTO `vianden` VALUES ('Vianden Castle 2', 'This castle once auctioned piece by piece was rebuilt in 1850s by Prince Henry of the Netherlands.', 'Vianden Castle', 'images/Vianden-Castle-2.jpg', '2', '1');
INSERT INTO `vianden` VALUES ('Banqueting Hall', 'Within the Nassau Mansion, The Banqueting Hall was once the location of a dungeon.', 'Vianden Castle', 'images/Banqueting-Hall.jpg', '3', '1');
INSERT INTO `vianden` VALUES ('Upper Chapel', 'A room of prayer, the upper floor was intended for the Count and his family, the lower floor for commoners and servants.', 'Vianden Castle', 'images/Upper-Chapel.jpg', '4', '1');
INSERT INTO `vianden` VALUES ('Arms Hall', 'A room which is currently filled with armor worn by soldiers who onced defended the castle.', 'Vianden Castle', 'images/Arms-Hall.jpg', '5', '1');
INSERT INTO `vianden` VALUES ('Wine Cellar', '', 'Vianden Castle', 'images/Wine-Cellar.jpg', '6', '1');
INSERT INTO `vianden` VALUES ('Vianden Kitchen', 'Located near the Nassau Mansion, this kitchen features a 53 meter deep well confined within the castle.', 'Vianden Castle', 'images/V-Kitchen.jpg', '7', '1');
INSERT INTO `vianden` VALUES ('Archeological Crypt', 'Excavations discovered the remains of Roman walls from the 3rd Century.', 'Vianden Castle', 'images/Archeological-Crypt.jpg', '8', '1');
UNLOCK TABLES;