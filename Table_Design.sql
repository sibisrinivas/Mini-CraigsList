--
-- Database: `lamp_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORYNAME` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CATEGORYNAME`) VALUES
(1, 'Housing'),
(2, 'Electronics'),
(3, 'MotoVehicles');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LOCATION_ID` int(11) NOT NULL,
  `REGION_ID` int(11) DEFAULT NULL,
  `LOCATIONNAME` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LOCATION_ID`, `REGION_ID`, `LOCATIONNAME`) VALUES
(1, 1, 'San Francisco'),
(2, 1, 'Sunnyvale'),
(3, 1, 'Santa Clara'),
(4, 2, 'Chennai'),
(5, 2, 'Coimbatore'),
(6, 2, 'Bangalore'),
(7, 3, 'Sydney'),
(8, 3, 'Albury'),
(9, 3, 'Grafton');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `POST_ID` int(11) DEFAULT NULL,
  `TITLE` varchar(40) DEFAULT NULL,
  `PRICE` float DEFAULT NULL,
  `DESCRIPTION` varchar(40) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `AGREEMENT` varchar(40) DEFAULT NULL,
  `TIMESTAMP` varchar(100) DEFAULT NULL,
  `IMAGE_1` varchar(100) DEFAULT NULL,
  `IMAGE_2` varchar(100) DEFAULT NULL,
  `IMAGE_3` varchar(100) DEFAULT NULL,
  `IMAGE_4` varchar(100) DEFAULT NULL,
  `SUBCATEGORY_ID` int(11) DEFAULT NULL,
  `LOCATION_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`POST_ID`, `TITLE`, `PRICE`, `DESCRIPTION`, `EMAIL`, `AGREEMENT`, `TIMESTAMP`, `IMAGE_1`, `IMAGE_2`, `IMAGE_3`, `IMAGE_4`, `SUBCATEGORY_ID`, `LOCATION_ID`) VALUES
(0, '1Bed/1Bath for Rent', 1000, ' 1Bed/1Bath for Rent in Hopkins avenue', 'user1@gmail.com', '1', '2016-01-12 09:23:33', '', '', '', '', 1, 1),
(0, '2Bed/1Bath Near Eaves for RENT', 3000, ' 2Bed/1Bath Near Eaves', 'user1@gmail.com', '1', '2016-01-12 09:24:14', '', '', '', '', 1, 7),
(0, '2Bed/2Bath for Sale', 899000, '2Bed/2Bath for Sale', 'user2@gmail.com', '1', '2016-01-12 09:26:37', '', '', '', '', 1, 5),
(0, 'TownHouse for Sale', 1009570, ' TownHouse for Sale in Mission', 'user1@gmail.com', '1', '2016-01-12 09:42:23', '', '', '', '', 2, 1),
(0, 'TownHouse with Storage for Sale', 800000, 'TownHouse with Storage for Sale', 'user6@gmail.com', '1', '2016-01-12 09:44:46', '', '', '', '', 2, 2),
(0, 'Individual House For Sale', 678345, 'Individual House For Sale near Caltrain ', 'User5@gmail.com', '1', '2016-01-12 09:45:36', '', '', '', '', 2, 3),
(0, 'Samasung S6 for $100', 100, 'Samasung S6 for $100 2 months old', 'user7@gmail.com', '1', '2016-01-12 19:27:18', '', '', '', '', 4, 4),
(0, 'iPhone 6s for $350', 350, 'iPhone 6s for $350', 'user8@gmail.com', '1', '2016-01-12 19:47:31', '', '', '', '', 4, 9),
(0, 'iPhone 6s for $650', 650, 'iPhone 6s for $650 ', 'user8@gmail.com', '1', '2016-01-12 19:52:33', '', '', '', '', 4, 4),
(0, 'Mac Book Pro 15.4', 1799, 'Mac Book Pro 13.3', 'user3@gmail.com', '1', '2016-01-12 19:58:54', '', '', '', '', 6, 8),
(0, 'Mac Book Pro 13.3', 1029, 'Mac Book Pro 13.3', 'user4@gmail.com', '1', '2016-01-12 19:59:11', '', '', '', '', 6, 6),
(0, 'Refurbished Mac Book Air 13.3', 662, 'Mac Book Air 13.3', 'user4@gmail.com', '1', '2016-01-12 19:59:35', '', '', '', '', 6, 2),
(0, 'Ford Mustang', 24145, 'Ford Mustang', 'user9@gmail.com', '1', '2016-01-12 20:02:30', '', '', '', '', 7, 4),
(0, 'Audi A4 2016', 35900, 'Audi A4 2016', 'user7@gmail.com', '1', '2016-01-12 20:02:39', '', '', '', '', 7, 3),
(0, 'Mercedes-Benz CLA-Class', 32050, 'Mercedes-Benz CLA-Class', 'user1@gmail.com', '1', '2016-01-12 20:03:00', '', '', '', '', 7, 1),
(0, 'Yamaha R1 for sale single Owner', 16490, 'Yamaha R1 for sale single Owner', 'user6@gmail.com', '1', '2016-01-12 20:12:03', '', '', '', '', 8, 5),
(0, 'Aprilia RSV4', 14999, 'Brand new Aprilia RSV4 for sale', 'user2@gmail.com', '1', '2016-01-12 20:12:18', '', '', '', '', 8, 2),
(0, 'CBR 600 for Sale', 11490, 'CBR 600 for Sale, free shipping', 'user5@gmail.com', '1', '2016-01-12 20:12:34', '', '', '', '', 8, 7),
(0, 'Cessna Citation CJ4', 350000, 'Cessna Citation CJ4', 'user10@gmail.com', '1', '2016-01-12 20:30:15', '', '', '', '', 9, 9),
(0, 'Learjet 75', 400000, 'Learjet 75', 'user10@gmail.com', '1', '2016-01-12 20:30:21', '', '', '', '', 9, 8),
(0, 'Hawker 400A', 750000, 'Hawker 400A', 'user10@gmail.com', '1', '2016-01-12 20:30:27', '', '', '', '', 9, 9),
(0, 'Canon 6D for Sale', 1269, ' Canon 6D for Sale', 'user3@gmail.com', '1', '2016-01-12 20:35:37', '', '', '', '', 5, 6),
(0, 'Refurbished Canon 600D', 130, 'Refurbished Canon 600D', 'user3@gmail.com', '1', '2016-01-12 20:35:42', '', '', '', '', 5, 6),
(0, 'Canon 5D for Sale', 2699, ' Canon 5D for Sale', 'user3@gmail.com', '1', '2016-01-12 20:35:47', '', '', '', '', 5, 5),
(0, '400 sqft condominium for rent', 1600, '400 sqft condominium for rent', 'user4@gmail.com', '1', '2016-01-12 20:38:28', '', '', '', '', 3, 3),
(0, '400 sqft condominium for rent in Sydney', 1350, '400 sqft condominium for rent in Sydney', 'user7@gmail.com', '1', '2016-01-12 20:38:41', '', '', '', '', 3, 7),
(0, '400 sqft condominium for rent in Albury', 1400, '400 sqft condominium for rent in Albury', 'user9@gmail.com', '1', '2016-01-12 20:38:54', '', '', '', '', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `REGION_ID` int(11) NOT NULL,
  `REGIONNAME` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`REGION_ID`, `REGIONNAME`) VALUES
(1, 'United States'),
(2, 'India'),
(3, 'Australia');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `SUBCATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_ID` int(11) DEFAULT NULL,
  `SUBCATEGORYNAME` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`SUBCATEGORY_ID`, `CATEGORY_ID`, `SUBCATEGORYNAME`) VALUES
(1, 1, 'apts'),
(2, 1, 'individual'),
(3, 1, 'Condominium'),
(4, 2, 'Mobiles'),
(5, 2, 'Camera'),
(6, 2, 'Laptops'),
(7, 3, 'Car'),
(8, 3, 'Bike'),
(9, 3, 'PrivateJet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userrole` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `userrole`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(2, 'user1', 'user1', 'user'),
(3, 'user2@gmail.com', 'user2', 'user'),
(4, 'user4@gmail.com', 'user4', 'user'),
(5, 'user5@gmail.com', 'user5', 'user'),
(6, 'user6@gmail.com', 'user6', 'user'),
(7, 'user7@gmail.com', 'user7', 'user'),
(8, 'user8@gmail.com', 'user8', 'user'),
(9, 'user9@gmail.com', 'user9', 'user'),
(10, 'user10@gmail.com', 'user10', 'user'),
(11, 'user3@gmail.com', 'user3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LOCATION_ID`),
  ADD KEY `REGION_ID` (`REGION_ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD KEY `SUBCATEGORY_ID` (`SUBCATEGORY_ID`),
  ADD KEY `LOCATION_ID` (`LOCATION_ID`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`REGION_ID`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`SUBCATEGORY_ID`),
  ADD KEY `CATEGORY_ID` (`CATEGORY_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`REGION_ID`) REFERENCES `region` (`REGION_ID`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`SUBCATEGORY_ID`) REFERENCES `subcategory` (`SUBCATEGORY_ID`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`LOCATION_ID`) REFERENCES `location` (`LOCATION_ID`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`CATEGORY_ID`);

