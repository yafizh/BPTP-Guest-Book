CREATE DATABASE `guest_book_bptp`;
USE `guest_book_bptp`;

CREATE TABLE `employee_table`(
    employee_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    employee_name VARCHAR(255) NOT NULL,
    employee_nip VARCHAR(20) NOT NULL UNIQUE,
    employee_sex ENUM('MALE','FEMALE') NOT NULL,
    employee_position VARCHAR(255) NOT NULL,
    employee_mastery VARCHAR(255),
    PRIMARY KEY(employee_id)
);

CREATE TABLE `guest_table`(
    guest_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    guest_meet_with INT UNSIGNED NULL,
    guest_name VARCHAR(255) NOT NULL,
    guest_phone_number VARCHAR(15) NULL,
    guest_sex ENUM('MALE', 'FEMALE') NOT NULL,
    guest_visit_timestamp TIMESTAMP NOT NULL,
    guest_address TEXT NULL,
    guest_agency VARCHAR(255) NOT NULL,
    guest_necessity TEXT NOT NULL,
    guest_picture TEXT NULL,
    PRIMARY KEY(guest_id),
    FOREIGN KEY (guest_meet_with) REFERENCES employee_table (employee_id)
);

CREATE VIEW `guest_view` AS SELECT 
    guest_table.guest_id,
    employee_table.employee_id,
    employee_table.employee_name AS guest_meet_with,
    guest_table.guest_name,
    guest_table.guest_phone_number,
    guest_table.guest_sex,
    DATE(guest_table.guest_visit_timestamp) AS guest_visit_date,
    TIME(guest_table.guest_visit_timestamp) AS guest_visit_time,
    guest_table.guest_address,
    guest_table.guest_agency,
    guest_table.guest_necessity,
    guest_table.guest_picture 
    FROM guest_table 
    LEFT JOIN employee_table ON guest_table.guest_meet_with=employee_table.employee_id;

-- CREATE VIEW `employee_visitor_count_view` AS 

INSERT INTO `employee_table`(
    employee_name,
    employee_nip,
    employee_sex,
    employee_position,
    employee_mastery 
) VALUES 
    ('Ida Faridatul Alawiyah, S.ST', '198609262015051001', 'FEMALE', 'Penyuluh Pertanian Pertama', 'Informasi dan Komunikasi Pertanian'),
    ('Awanis, S.TP., M.Si', '198609262015051002', 'FEMALE', 'Pascapanen', ''),
    ('Muhammad Syarif, S.ST', '198609262015051003', 'MALE', 'Penyuluh Pertanian Pertama', 'Ekonomi Pertanian'),
    ('Ahmad Isa Anshari, SE.', '198609262015051004', 'MALE', 'Petugas SAIBA', 'Akuntansi'),
    ('Fiqy Hilmawan, S.Pt., M.Si', '198609262015051005', 'MALE', 'Peneliti Pertama', 'Peternakan dan Ilmu ternak'),
    ('Shinta Anggreany, M.Si', '198609262015051006', 'FEMALE', 'Peyuluh Pertanian Pertama', 'IPeyuluh Pertanian Pertama'),
    ('Puspita Harum Maharani, M.Sc', '198609262015051007', 'FEMALE', 'Peneliti Pertama', 'Ilmu Tanah'),
    ('Pagiyanto, S.ST', '198609262015051008', 'MALE', 'Penyuluh Pertanian Pertama', 'Peternakan'),
    ('Sumari', '198609262015051009', 'MALE', 'Pengadministrasi Keuangan', 'Sistem Pengelolaan Anggaran'),
    ('Agus Setiati', '197608122007012010', 'FEMALE', 'Verifikator Keuangan', ''),
    ('Ari Hastanto', '198609262015051331', 'MALE', 'Staf Administrasi', 'KOMSI'),
    ('Dr. Ir. Aidi Noor, M.P', '198609262015051391', 'MALE', 'Peneliti Madya', 'Ilmu Tanah'),
    ('Ir. Retna Qomariah, M.Si', '198609262015051332', 'FEMALE', 'Peneliti Madya', ''),
    ('Ir. Rina Dirgahayu Ningsih, M.Si', '198609262015051333', 'FEMALE', 'Peneliti Madya', 'Budidaya Tanaman'),
    ('Dr. Akhmad Hamdan, S.Pt., M.P.', '198609262015051334', 'MALE', 'Peneliti Muda', 'Perternakan dan Ilmu Ternak'),
    ('Abdul Sabur, M.Si', '198609262015051335', 'MALE', 'Pembina', 'Agronomi'),
    ('Lelya Pramudyani, S.P., M.P', '198609262015051336', 'FEMALE', 'Peneliti Muda', 'Budidaya tanaman'),
    ('Susi Lesmayati', '198609262015051337', 'FEMALE', 'Peneliti Muda', 'Pascapanen'),
    ('Khairatun Nafisah, S.P., M.Sc', '198609262015051338', 'FEMALE', 'Peneliti Pertama', 'Ilmu Tanah, hidrologi dan Klimatologi'),
    ('Nurmili Yuliani, SP., M.Sc', '198609262015051339', 'FEMALE', 'Peneliti Muda', 'Ilmu Tanah'),
    ('Ir. Sri Hartati, M.P', '198609262015051340', 'FEMALE', 'Penyuluh Pertanian Madya', 'HPT, Agronomi, SL-PHT'),
    ('Ir. Yanuar Pribadi, M.Si', '198609262015051341', 'MALE', 'Penyuluh Pertanian Madya', 'Ekonomi Pertanian'),
    ('Ir. Fakhrina, M.Si', '198609262015051342', 'FEMALE', 'Penghimpun dan Pengolah Data', 'Komunikasi Pertanian dan Budidaya Pertanian'),
    ('Ir. Fatma Dewi, M.Si', '198609262015051343', 'FEMALE', 'Penyuluh Pertanian Madya', ''),
    ('Ir. Barnuwati', '198609262015051344', 'FEMALE', 'Penyuluh Pertanian Madya', 'Sosek / Manajemen SD Perairan'),
    ('Siti Nurawaliah, S.Pt., M.Sc', '198609262015051345', 'FEMALE', 'Penyuluh Pertanian Muda', 'Produksi Ternak'),
    ('M. Isya Ansari, SP.', '198609262015051346', 'MALE', 'Kepala Subbagian Tata Usaha BPTP Kalsel', 'SUT'),
    ('Susanto, SST.', '198609262015051347', 'MALE', 'Penyuluh Pertanian Muda', 'Peternakan'),
    ('Eko Sutiyoso, SAP', '198609262015051348', 'MALE', 'Penyuluh Pertanian Muda', 'Peternakan'),
    ('Syarifah Kamelia Fitry, SE', '198609262015051349', 'FEMALE', 'Bendahara Pengeluaran', '');

INSERT INTO `guest_table`(
    guest_meet_with,
    guest_name,
    guest_phone_number,
    guest_sex,
    guest_visit_timestamp,
    guest_address,
    guest_agency,
    guest_necessity,
    guest_picture
) VALUES 
    (1, "Diki Suti Prasetya", "089712321284", 'MALE',CURRENT_TIMESTAMP(), 'Martapura', "UNISKA" ,"Magang", NULL),
    (2, "Andry", "089712321284", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 DAY, 'Martapura', "UNISKA" ,"Berkunjung", NULL),
    (3, "Nurcholis", "089712321284", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Astambul', "UNISKA" ,"Magang", NULL),
    (4, "Daus", "089712321284", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 DAY, 'Martapura', "UNISKA" ,"Berkunjung", NULL),
    (5, "Rania Nor Aida", "089712321284", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (6, "Rania Nor Aida", "089712321284", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (7, "Rania Nor Aida", "089712321284", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (8, "Rania Nor Aida", "089712321284", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (9, "Rania Nor Aida", "089712321284", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (10, "Rania Nor Aida", "089712321284", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (NULL, "Rania Nor Aida", "089712321284", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (NULL, "Nursahid Arya Suyudi", "089712321284", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL);