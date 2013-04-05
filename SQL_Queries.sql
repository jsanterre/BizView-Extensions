-- BizView's Clients table queries

-- Creation of the table 
CREATE TABLE %PREFIX%_bizview_clients (

    id int(11) NOT NULL auto_increment,

    name varchar(255),

    address varchar(255),
	
	city varchar(255),
	
	province varchar(255),

    postal_code varchar(255),
	
	phone_number varchar(20),
	
	email_address varchar(255),
	
	video_id varchar(255),

    PRIMARY KEY (id)

)

-- Adding entries into the table
INSERT INTO %PREFIX%_bizview_clients
(name, address, city, province, postal_code, phone_number, email_address, video_id)
VALUES ('Crock A Doodle', '519 Osborne Street', 'Winnipeg', 'Manitoba', 'R3L 2A9', '(204) 284 1736', 'AR4MPkxxrhg')

INSERT INTO %PREFIX%_bizview_clients
(name, address, city, province, postal_code, phone_number, email_address, video_id)
VALUES ('Fox and Hounds', '1719 Portage Avenue', 'Winnipeg', 'Manitoba', 'R3J 0E4', '(204) 888 2341', '6TpWmGhEzrk')

INSERT INTO %PREFIX%_bizview_clients
(name, address, city, province, postal_code, phone_number, email_address, video_id)
VALUES ('3 Fathoms', '163 Henderson Hwy', 'Winnipeg', 'Manitoba', 'R2L 1L5', '(204) 668 2816', 'u8qNru84pC4')




ALTER TABLE `sxi32_bizview_clients` ADD `video_id` VARCHAR( 255 ) NOT NULL 