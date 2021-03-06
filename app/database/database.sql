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
    guest_id,
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
    (1, 1, "Lia Fitriani", "", 'FEMALE',CURRENT_TIMESTAMP(), 'Martapura', "Faperta Unlam" ,"Mencari bahan", NULL),
    (2, 2, "Husna Norhidayati", "", 'FEMALE',CURRENT_TIMESTAMP(), 'Martapura', "Sma 1 Banjarbaru" ,"Berkunjung", NULL),
    (3, 3, "Azzahra Luthfiah", "", 'FEMALE',CURRENT_TIMESTAMP(), 'Astambul', "Uniska" ,"Magang", NULL),
    (4, 4, "Sari", "", 'FEMALE',CURRENT_TIMESTAMP(), 'Martapura', "UNISKA" ,"Unlam", NULL),
    (5, 5, "Sumanto", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (6, 6, "Hendrawati", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (7, 7, "Suteng Promono", "", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (8, 8, "Edy Sukono", "", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (9, 9, "Nove Arisandi", "", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (10, 10, "Amalia Anida", "", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (11, 12,"Audyta Salwa", "", 'FEMALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Astambul', "UNISKA" ,"Berkunjung", NULL),
    (12, 12,"Desy Helena", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (13, 12,"Nisa Norma", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (14, 13,"Move Arisandi", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (15, 14,"Mardiah", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (16, 15,"Muhammad Indera", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (17, 15,"Ira Oktovia", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (18, 15,"Iis Idaningsih", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (19, 16,"Ayudiani Safitri", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (20, 17,"Ervinira Noor", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (21, 17,"Hartini", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (22, 17,"Lisa", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (23, 18,"Yuliati", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (24, 18,"Pringgo Pantu", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (25, 18,"Erik Kurniawan", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (26, 18,"Jumena Adijaya", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (27, 18,"Helmi", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (28, 18,"Novita Dwe", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (29, 18,"Faridah", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (30, 19,"Ayu Permatasari", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (31, 19,"Nanik Kharisma", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (32, 19,"Ayu Permatasari", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (33, 19,"Nanik Kharisma", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (34, 10,"Khairatun Nafisah", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (35, 10,"Muhammad Zaini", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (36, 10,"Ringgo Pandu", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (37, 21,"M. Khoirul Anwar", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (38, 21,"Jumena Adijaya", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (39, 21,"Ismawati", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (40, 23,"Rahmawati Rabiah", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 2 MONTH, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (41, 24,"Henry", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (42, 24,"Hasna", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (43, 25,"M Rizki", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (44, 30,"Fauzi", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (45, 29,"Bagus Satriyo", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (46, 23,"Dian", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (47, 28,"Afina", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (48, 28,"Aulia", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (49, 27,"Kahfi", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL),
    (50, 27,"Latipah", "", 'MALE',CURRENT_TIMESTAMP() - INTERVAL 1 YEAR, 'Binaung', "UNISKA" ,"Berkunjung", NULL);