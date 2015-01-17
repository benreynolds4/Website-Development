-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2014 at 12:21 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Date` date NOT NULL,
  `Summary` mediumtext NOT NULL,
  `Content` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `Title`, `Date`, `Summary`, `Content`) VALUES
(1, 'Title One', '2014-04-12', 'Summary 1', 'Content 1'),
(2, 'Title 2', '2014-04-11', 'Summary Two', 'Content Two'),
(3, 'Reynolds Wins For Fifth Time In Augusta, Title 3', '2014-04-13', 'Winner Winner Chicken Dinner', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `ID` int(11) NOT NULL,
  `Title` mediumtext NOT NULL,
  `Date` date NOT NULL,
  `Link` mediumtext NOT NULL,
  `Sumary` longtext NOT NULL,
  `Content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `Title`, `Date`, `Link`, `Sumary`, `Content`) VALUES
(1, 'Reynolds Wins his first tournament 5th', '2014-04-05', 'article.php', 'Augusta national is the home to his first win blah blah blah blah', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'),
(2, 'Reynolds Wins his second tournament 8th', '2014-04-08', 'article2.php', 'Augusta national is the home to his first win blah blah blah blah\r\nAugusta national is the home to his first win blah blah blah blah', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'),
(3, 'reynolds wins his 0th tournie 1st', '2014-04-01', 'article3.php', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam ', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'),
(4, 'Reynolds Wins Fourth Tournament', '2014-04-18', '', 'On a cold and blustery day in Co.Meath, Reynolds prevailed by a single shot to win his fouth tournament in succesion.', 'The Radisson Blu sponsored West of Ireland Amateur Open gets underway at County Sligo on Friday. But while the bookies have installed defending champion Rory McNamara as the 10/1 favourite ahead of Ballymena''s Dermot McElroy, it looks wide open this year.\r\n\r\nWith top college players Gavin Moynihan, Paul Dunne and Chris Selfridge all in the US, there are more than a dozen worthy candidates in the 132-man field with genuine hopes of winning the coveted title.\r\n\r\nThe Top 64-after 36 holes of strokeplay combat will make the draw for the first round of matchplay on Sunday.\r\n\r\nMcNamara is certainly a worthy candidate given his record and may well become the first player since Rory McIlroy in 2006 to retain the title. As for McElroy, called up with Jack Hume, Moynihan and Gary Hurley to the GB&I St Andrews Trophy squad yesterday, the 21-year old is a sensational golfer but his record at Rosses Point is modest.\r\n\r\nHe''s has failed to make it past the third round in four appearances and admits his putting has been spotty this year despite finishing second in the South African Amateur Strokeplay and helping Europe to victory in the recent Bonallack Trophy in India.\r\n\r\nThat said, he''s determined to win an amateur "major" and has shelved plans to join the pro ranks in mid-season despite earning some status on the Challenge Tour by making it to the final stage of European Tour Qualifying School last year.\r\n\r\n“It’s all going to depend on how the putter is working,” McElroy said of his hopes. “I’ve a habit of missing four three-footers a round and that’s just giving holes away so that’s going to be key, especially if it’s very windy. Hopefully this year it will be a bit different for me on the greens but to be honest, my putting’s been very poor this year.\r\n\r\n“I just want to win one of the big amateur events, so it would be nice to win a ‘West’ or the North of Ireland, or any of them to be honest. I’ve no idea when I will turn professional, but I don''t think it will be this year. I’m going to finish the amateur season. I had thought about going after the British Amateur at Royal Portrush and Portstewart but I think I’d just like to wait.\r\n\r\n“Matchplay is a tough format and I’d have tough matches in every single year at the West since I first went in 2010. I’ve never managed to get past the third round and I’ve just gifted people holes by missing short putts.  But that’s all in the past. All I’m thinking about now is having a good run here for a change.”\r\n\r\nHume, Hurley, Reeve Whitson, local man Gary McDermott, 2012 winner Harry Diamond, Irish Amateur Open champion Robbie Cannon and Massereene''s Tiarnan McLarnon will all have their backers.\r\n\r\nBut there''s also Claremorris'' Stephen Healy, who reached the quarter-finals of the South last year. He fell in the first round of last year''s West having reached the final in 2012 but will certainly be dangerous in matchplay.\r\n\r\nDefending champion has been working hard on his game at his Spanish base and having claimed the 36-hole Lee Valley Senior Scratch Cup last weekend, he’s playing well enough to pull it off.\r\n\r\n“My game is getting a lot better all round and what I am looking for now is consistency, which is what is needed for the pro ranks,” said McNamara, who will turn professional later this year.\r\n\r\n“The last four years have been great at Rosses Point, reaching two semis and losing to Paul Cutler in 2012 before winning it last year.  It’s been a good place for me and I am looking forward to getting back into tournament mode.”'),
(5, 'Test Database input from form', '2014-04-17', '', 'test input test input test input test input', 'testvtesttesttesttesttesttesttesttesttesttesttesttesttesttesthello testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest'),
(6, 'Brady leads the field at The West', '2014-04-15', '', 'brady ', 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` text NOT NULL,
  `RoundOne` int(11) DEFAULT '0',
  `RoundTwo` int(11) DEFAULT '0',
  `RoundThree` int(11) DEFAULT '0',
  `RoundFour` int(11) DEFAULT '0',
  `Total` int(11) DEFAULT NULL,
  `Par` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Total` (`Total`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ID`, `Name`, `RoundOne`, `RoundTwo`, `RoundThree`, `RoundFour`, `Total`, `Par`) VALUES
(0, 'Ben Reynolds', 70, 71, 69, 72, NULL, -6),
(1, 'Conor Nolan', 71, 70, 69, 0, NULL, -6),
(2, 'Conor Whyte', 70, 70, 71, 71, NULL, -6),
(3, 'John McGee', 67, 74, 74, 74, NULL, 1),
(4, 'Frank McGowan', 76, 67, 71, 0, NULL, -2),
(5, 'Cillian O''Hara', 67, 76, 77, 71, NULL, 3),
(6, 'Aidan Frank', 72, 72, 72, 72, NULL, 0),
(7, 'Jimmy O''Dowd', 67, 70, 71, 0, NULL, -8),
(8, 'Eoin Falconer', 77, 84, 82, 62, NULL, 17),
(9, 'BenJamen Reynolds', 67, 65, 74, 0, NULL, -10),
(10, 'John Joe Nevin', 67, 69, 73, 72, NULL, -7),
(11, 'Ben Daniel Reynolds', 72, 72, 72, 72, NULL, 0),
(12, 'Jack Beegan', 70, 87, 94, 62, NULL, 25),
(13, 'Ben', 76, 0, 0, 0, NULL, -140),
(14, 'Conor Daniels', 72, 73, 72, 70, NULL, -1),
(15, 'Stuart Grehan', 80, 79, 72, 63, NULL, 6),
(16, 'Carla Reynolds', 71, 75, 73, 70, NULL, 1),
(17, 'robert', 65, 81, 69, 74, NULL, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
