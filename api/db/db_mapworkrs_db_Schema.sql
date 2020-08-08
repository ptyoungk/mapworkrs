--
-- Database: `mapworkrs_db`
--

CREATE DATABASE IF NOT EXISTS `mapworkrs_db`;
USE `mapworkrs_db`;


-- ENTITIES

--
-- Struttura della tabella `user`
--

CREATE TABLE IF NOT EXISTS `user` (
	`mail` varchar(130) ,
	`name` varchar(130) ,
	`password` varchar(130)  NOT NULL,
	`roles` varchar(130) ,
	`surname` varchar(130) ,
	`username` varchar(130)  NOT NULL,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


-- Security

ALTER TABLE `user` MODIFY COLUMN `password` varchar(128)  NOT NULL;

INSERT INTO `mapworkrs_db`.`user` (`username`, `password`, `_id`) VALUES ('admin', '62f264d7ad826f02a8af714c0a54b197935b717656b80461686d450f7b3abde4c553541515de2052b9af70f710f0cd8a1a2d3f4d60aa72608d71a63a9a93c0f5', 1);

CREATE TABLE IF NOT EXISTS `roles` (
	`role` varchar(30) ,
	
	-- RELAZIONI

	`_user` int(11)  NOT NULL REFERENCES user(_id),
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);
INSERT INTO `mapworkrs_db`.`roles` (`role`, `_user`, `_id`) VALUES ('ADMIN', '1', 1);


--
-- Struttura della tabella `map_detail`
--

CREATE TABLE IF NOT EXISTS `map_detail` (
	`add_layer1` varchar(130) ,
	`add_layer2` varchar(130) ,
	`add_layer3` varchar(130) ,
	`base_file` varchar(130) ,
	`base_map` varchar(130) ,
	`input_user` varchar(130) ,
	`map_box` varchar(130) ,
	`map_id` varchar(130) ,
	`map_line` varchar(130) ,
	`map_name` varchar(130) ,
	`map_txt` varchar(130) ,
	`map_type` varchar(130) ,
	`update_date` date ,
	`update_res` varchar(130) ,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);


--
-- Struttura della tabella `map_info`
--

CREATE TABLE IF NOT EXISTS `map_info` (
	`c_lang` varchar(130) ,
	`c_long` varchar(130) ,
	`cre_date` date ,
	`cre_user` varchar(130) ,
	`e_lang` varchar(130) ,
	`e_long` varchar(130) ,
	`map_base` varchar(130) ,
	`map_bld_co` varchar(130) ,
	`map_dist` varchar(130) ,
	`map_input_date` date ,
	`map_memo` varchar(130) ,
	`map_name` varchar(130) ,
	`map_sppy_user` varchar(130) ,
	`mapid` varchar(130) ,
	`mobile_table` varchar(130) ,
	`s_lang` varchar(130) ,
	`s_long` varchar(130) ,
	`url` varchar(130) ,
	`ver` varchar(130) ,
	
	`_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT 

);





-- relation 1:m mar_rel map_info - map_detail
ALTER TABLE `map_info` ADD COLUMN `mar_rel` int(11)  REFERENCES map_detail(_id);


