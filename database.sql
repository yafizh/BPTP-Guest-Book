CREATE DATABASE `guest_book_bptp`;
USE `guest_book_bptp`;

CREATE TABLE `employees_table`(
    employee_id INT NOT NULL AUTO_INCREMENT,
    employee_name VARCHAR(255),
    PRIMARY KEY(employee_id)
);

CREATE TABLE `guest_table`(
    guest_id INT NOT NULL AUTO_INCREMENT,
    guest_name VARCHAR(255) NOT NULL,
    guest_phone_number VARCHAR(15) NOT NULL,
    guest_visit_timestampt TIMESTAMP NOT NULL,
    guest_address TEXT NOT NULL,
    guest_necessity TEXT NOT NULL,
    guest_meet_with INT NOT NULL,
    PRIMARY KEY(guest_id),
    FOREIGN KEY (guest_meet_with) REFERENCES employees_table (employee_id)
);

INSERT INTO `employees_table`(
    employee_name
) VALUES 
    ('Eko');

INSERT INTO `guest_table`(
    guest_name,
    guest_phone_number,
    guest_visit_timestampt,
    guest_address,
    guest_necessity,
    guest_meet_with
) VALUES 
    ("Diki Suti Prasetya", "089712321284", CURRENT_TIMESTAMP(), 'Martapura', "Magang", 1),
    ("Andry", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 DAY, 'Martapura', "Berkunjung", 1),
    ("Nurcholis", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Astambul', "Magang", 1),
    ("Daus", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Martapura', "Berkunjung", 1),
    ("Rania Nor Aida", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "Berkunjung", 1),
    ("Nursahid Arya Suyudi", "089712321284", CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "Berkunjung", 1);