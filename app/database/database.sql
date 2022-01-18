CREATE DATABASE `guest_book_bptp`;
USE `guest_book_bptp`;

CREATE TABLE `employee_table`(
    employee_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    employee_name VARCHAR(255) NOT NULL,
    employee_nip VARCHAR(20) NOT NULL UNIQUE,
    employee_sex ENUM('MALE','FEMALE') NOT NULL,
    employee_phone_number VARCHAR(15) UNIQUE,
    PRIMARY KEY(employee_id)
);

CREATE TABLE `guest_table`(
    guest_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    guest_meet_with INT UNSIGNED NULL,
    guest_name VARCHAR(255) NOT NULL,
    guest_phone_number VARCHAR(15) NULL,
    guest_visit_timestamp TIMESTAMP NOT NULL,
    guest_address TEXT NULL,
    guest_agency VARCHAR(255) NOT NULL,
    guest_necessity TEXT NOT NULL,
    guest_picture TEXT NULL,
    PRIMARY KEY(guest_id),
    FOREIGN KEY (guest_meet_with) REFERENCES employee_table (employee_id)
);

CREATE TABLE `user_table`(
    user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(255) NOT NULL,
    user_username VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_status ENUM('ADMIN','OPERATOR') NOT NULL,
    PRIMARY KEY (user_id) 
);

CREATE VIEW `guest_view` AS SELECT 
    guest_table.guest_id,
    employee_table.employee_id,
    employee_table.employee_name AS guest_meet_with,
    guest_table.guest_name,
    guest_table.guest_phone_number,
    DATE(guest_table.guest_visit_timestamp) AS guest_visit_date,
    TIME(guest_table.guest_visit_timestamp) AS guest_visit_time,
    guest_table.guest_address,
    guest_table.guest_agency,
    guest_table.guest_necessity,
    guest_table.guest_picture 
    FROM guest_table 
    LEFT JOIN employee_table ON guest_table.guest_meet_with=employee_table.employee_id;

-- CREATE VIEW `employee_visitor_count_view` AS 


INSERT INTO `position_table`(
    position_name 
) VALUES 
    ('KEPALA PERPUSTAKAAN'),
    ('SUPERVISOR SENIO BIDANG LAYANAN');

INSERT INTO `employee_table`(
    employee_name,
    employee_nip,
    employee_sex,
    employee_phone_number 
) VALUES 
    ('Eko1', '198609262015051001', 'MALE', '087866778822'),
    ('Eko2', '198609262015051002', 'MALE', '087866778823'),
    ('Eko3', '198609262015051003', 'MALE', '087866778824'),
    ('Eko4', '198609262015051004', 'MALE', '087866778825'),
    ('Eko5', '198609262015051005', 'MALE', '087866778826'),
    ('Eko6', '198609262015051006', 'MALE', '087866778827'),
    ('Eko7', '198609262015051007', 'MALE', '087866778828'),
    ('Eko8', '198609262015051008', 'MALE', '087866778829'),
    ('Eko9', '198609262015051009', 'MALE', '0878667788210'),
    ('Eko10', '1986092620150510010', 'MALE', '0878667788211'),
    ('Tya', '198609262015051331', 'FEMALE', '087866776655');

INSERT INTO `guest_table`(
    guest_meet_with,
    guest_name,
    guest_phone_number,
    guest_visit_timestamp,
    guest_address,
    guest_agency,
    guest_necessity,
    guest_picture
) VALUES 
    (1, "Diki Suti Prasetya", "089712321284", CURRENT_TIMESTAMP(), 'Martapura', "UNISKA" ,"Magang", NULL),
    (2, "Andry", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 DAY, 'Martapura', "UNISKA" ,"Berkunjung", NULL),
    (3, "Nurcholis", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Astambul', "UNISKA" ,"Magang", NULL),
    (4, "Daus", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Martapura', "UNISKA" ,"Berkunjung", NULL),
    (5, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (6, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (7, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (8, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (9, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (10, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (NULL, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (NULL, "Nursahid Arya Suyudi", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL);