CREATE TABLE `adi` (
  `contact_id` INT(11) NOT NULL,
  `fname` VARCHAR(100) NOT NULL,
  `lname` VARCHAR(100) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `address2` VARCHAR(255) NOT NULL,
  `country` VARCHAR(255) NOT NULL,
  `state` VARCHAR(255) NOT NULL,
  `cardname` VARCHAR(255) NOT NULL,
  `cardnumber` BIGINT(20) NOT NULL, 
  `zip` INT(11) NOT NULL,
  `checkbox` VARCHAR(18) NOT NULL,
  `date` DATE NOT NULL,  
  `cvv` INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `adi`
  ADD PRIMARY KEY (`contact_id`);


ALTER TABLE `adi`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
