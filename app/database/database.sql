CREATE DATABASE `guest_book_bptp`;
USE `guest_book_bptp`;

CREATE TABLE `employees_table`(
    employee_id INT NOT NULL AUTO_INCREMENT,
    employee_name VARCHAR(255),
    created_at DATE NOT NULL,
    edited_at DATE NOT NULL,
    PRIMARY KEY(employee_id)
);

CREATE TABLE `guest_table`(
    guest_id INT NOT NULL AUTO_INCREMENT,
    guest_meet_with INT NULL,
    guest_name VARCHAR(255) NOT NULL,
    guest_phone_number VARCHAR(15) NULL,
    guest_visit_timestamp TIMESTAMP NOT NULL,
    guest_address TEXT NULL,
    guest_agency VARCHAR(255) NOT NULL,
    guest_necessity TEXT NOT NULL,
    guest_picture TEXT NULL,
    PRIMARY KEY(guest_id),
    FOREIGN KEY (guest_meet_with) REFERENCES employees_table (employee_id)
);

CREATE VIEW guest_view AS SELECT 
    guest_table.guest_id,
    employees_table.employee_name AS guest_meet_with,
    guest_table.guest_name,
    guest_table.guest_phone_number,
    DATE(guest_table.guest_visit_timestamp) AS guest_visit_date,
    TIME(guest_table.guest_visit_timestamp) AS guest_visit_time,
    guest_table.guest_address,
    guest_table.guest_agency,
    guest_table.guest_necessity,
    guest_table.guest_picture 
    FROM guest_table 
    LEFT JOIN employees_table ON guest_table.guest_meet_with=employees_table.employee_id;

INSERT INTO `employees_table`(
    employee_name,
    created_at, 
    edited_at 
) VALUES 
    ('Eko', CURRENT_DATE(), CURRENT_DATE());

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
    (1, "Andry", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 DAY, 'Martapura', "UNISKA" ,"Berkunjung", NULL),
    (1, "Nurcholis", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Astambul', "UNISKA" ,"Magang", NULL),
    (1, "Daus", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Martapura', "UNISKA" ,"Berkunjung", NULL),
    (1, "Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (1, "Nursahid Arya Suyudi", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL);