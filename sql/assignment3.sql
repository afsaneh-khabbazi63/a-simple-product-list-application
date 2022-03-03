--
-- Database: php web application user
-- CREATE DATABASE 
-- Table structure for table `products`
--
CREATE TABLE IF NOT EXISTS `products` (
    `productId` int(11) NOT NULL AUTO_INCREMENT,
	`productName` VARCHAR(50) NOT NULL,
	`productColor` VARCHAR(50) NOT NULL,
	`productCategory` VARCHAR(50) NOT NULL,
	`productPrice` DECIMAL(10,2) NOT NULL,
	PRIMARY KEY (`productId`)
	) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

--
-- Dumping data for table `products`
--
INSERT INTO `products` (`productId`,`productName` , `productColor`,`productCategory`, `productPrice`) VALUES
(1, 'Bedframe', 'Black', 'Bedroom', 1500),
(2, 'Bedframe', 'Brown', 'Bedroom', 1500),
(3, 'Nightstand', 'Black', 'Bedroom', 300),
(4, 'Nightstand', 'Brown', 'Bedroom', 300),
(5, 'Dresser', 'Black', 'Bedroom', 1000),
(6, 'Sofa', 'Grey', 'Livingroom', 3000),
(7, 'loveseat', 'Grey', 'Livingroom', 2000),
(8, 'Accent chair', 'Grey', 'Livingroom', 1000),
(9, 'Coffee table', 'Gold', 'Livingroom', 800),
(10, 'Side table', 'Silver', 'Livingroom', 400),
(11, 'Dining chair', 'Dark Brown', 'Diningroom',300),
(12, 'Dining table', 'White', 'Diningroom',1500),
(13, 'Dining chair', 'White', 'Diningroom',300),
(14, 'Dining Bench', 'Dark Brown', 'Diningroom',700),
(15, 'Bar stool', 'Dark Brown', 'Diningroom',200);

