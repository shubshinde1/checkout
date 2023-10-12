CREATE TABLE `addto` (
  `contact_id` INT(11) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  `size` VARCHAR(100) NOT NULL,
  `color` VARCHAR(100) NOT NULL,
  `img` text NOT NULL,
    `price` INT(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `addto`
  ADD PRIMARY KEY (`contact_id`);

ALTER TABLE `addto`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
