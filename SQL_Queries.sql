-- BizView's Clients table queries

-- Creation of the table 
CREATE TABLE %PREFIX%_bizview_clients (

    id int(11) NOT NULL auto_increment,

    name varchar(255),

    address varchar(255),
	
	city varchar(255),

    postal_code varchar(255),

    PRIMARY KEY (id)

)

-- Adding entries into the table
INSERT INTO %PREFIX%_bizview_clients
(name, address, city, postal_code)
VALUES ('Crock A Doodle', '519 Osborne Street', 'Winnipeg', 'R3L 2A9')

INSERT INTO %PREFIX%_bizview_clients
(name, address, city, postal_code)
VALUES ('Fox and Hounds', '1719 Portage Avenue', 'Winnipeg', 'R3J 0E4')

INSERT INTO %PREFIX%_bizview_clients
(name, address, city, postal_code)
VALUES ('3 Fathoms', '163 Henderson Hwy', 'Winnipeg', 'R2L 1L5')