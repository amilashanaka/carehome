-- Active: 1738839059223@@127.0.0.1@3306@crhm

--  create DATABASE crhm;
use crhm;

DROP TABLE IF EXISTS admins;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    f1 int NULL DEFAULT 0,
    f2 VARCHAR(250) DEFAULT NULL,
    f3 VARCHAR(250) DEFAULT NULL,
    f4 VARCHAR(50) DEFAULT NULL,
    f5 VARCHAR(50) DEFAULT NULL,
    f6 VARCHAR(50) DEFAULT NULL,
    f7 VARCHAR(50) DEFAULT NULL,
    f8 VARCHAR(50) DEFAULT NULL,
    f9 VARCHAR(50) DEFAULT NULL,
    f10 VARCHAR(50) DEFAULT NULL,
    f11 VARCHAR(50) DEFAULT NULL,
    f12 VARCHAR(50) DEFAULT NULL,
    f13 VARCHAR(50) DEFAULT NULL,
    f14 VARCHAR(50) DEFAULT NULL,
    f15 VARCHAR(50) DEFAULT NULL,
    f16 VARCHAR(50) DEFAULT NULL,
    img1 VARCHAR(250) DEFAULT NULL,
    created_by int NULL DEFAULT NULL,
    updated_by int NULL DEFAULT NULL,
    created_date datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
    updated_date datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
    status int NOT NULL DEFAULT 1,
    UNIQUE (f2)
);

INSERT INTO
    admins (
        id,
        f1,
        f2,
        f3,
        f4,
        f5,
        f6,
        f7,
        f8,
        f9,
        f10,
        f11,
        f12,
        f13,
        f14,
        f15,
        f16,
        img1,
        created_by,
        created_date,
        updated_by,
        updated_date,
        status
    )
VALUES (
        1,
        1,
        'superadmin',
        '$2y$10$MCq3kqg5TpP5rvviemVayuO4Hvfxh3/JJ4mylf6IsX7rhT3gagTee',
        NULL,
        NULL,
        'Super Admin',
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL,
        '2024-05-16 05:44:34',
        NULL,
        '2024-05-16 05:46:09',
        1
    );

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    level INT NOT NULL DEFAULT '1',
    f1 varchar(250) NULL DEFAULT NULL,
    f2 varchar(50) NULL DEFAULT NULL,
    f3 varchar(50) NULL DEFAULT NULL,
    f4 varchar(50) NULL DEFAULT NULL,
    f5 varchar(250) NULL DEFAULT NULL,
    f6 varchar(50) NULL DEFAULT NULL,
    f7 varchar(50) NULL DEFAULT NULL,
    f8 varchar(50) NULL DEFAULT NULL,
    f9 varchar(50) NULL DEFAULT NULL,
    f10 varchar(50) NULL DEFAULT NULL,
    f11 varchar(250) NULL DEFAULT NULL,
    f12 varchar(50) NULL DEFAULT NULL,
    f13 varchar(50) NULL DEFAULT NULL,
    f14 varchar(50) NULL DEFAULT NULL,
    f15 varchar(50) NULL DEFAULT NULL,
    f16 varchar(50) NULL DEFAULT NULL,
    f17 varchar(50) NULL DEFAULT NULL,
    f18 varchar(50) NULL DEFAULT NULL,
    f19 varchar(50) NULL DEFAULT NULL,
    f20 varchar(50) NULL DEFAULT NULL,
    f21 varchar(250) NULL DEFAULT NULL,
    f22 varchar(50) NULL DEFAULT NULL,
    f23 varchar(50) NULL DEFAULT NULL,
    f24 varchar(50) NULL DEFAULT NULL,
    f25 text NULL,
    f26 varchar(50) NULL DEFAULT NULL,
    f27 varchar(50) NULL DEFAULT NULL,
    f28 varchar(50) NULL DEFAULT NULL,
    f29 varchar(50) NULL DEFAULT NULL,
    f30 varchar(50) NULL DEFAULT NULL,
    img1 text DEFAULT NULL,
    created_by int NULL DEFAULT NULL,
    created_date datetime NULL,
    updated_by int NULL DEFAULT NULL,
    updated_date datetime NULL,
    status int DEFAULT 1,
    PRIMARY KEY (id) USING BTREE
);

DROP TABLE IF EXISTS signals;

CREATE TABLE signals (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(50) DEFAULT NULL,
    f2 varchar(50) DEFAULT NULL,
    f3 varchar(50) DEFAULT NULL,
    f4 varchar(50) NOT NULL,
    f5 text DEFAULT NULL,
    created_by int NULL DEFAULT NULL,
    created_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
    updated_by int NULL DEFAULT NULL,
    updated_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
    status int NULL DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);

INSERT INTO
    signals (
        id,
        f1,
        f2,
        f3,
        f4,
        f5,
        created_by,
        created_date,
        updated_by,
        updated_date,
        status
    )
VALUES (
        5,
        'December 2018',
        '6,272',
        '135',
        '12',
        NULL,
        1,
        '2024-06-30 09:15:59',
        1,
        '2024-07-01 16:43:39',
        1
    ),
    (
        6,
        'January 2019',
        '5,130',
        '125',
        '13',
        NULL,
        1,
        '2024-07-01 16:37:43',
        1,
        '2024-07-01 16:43:46',
        1
    ),
    (
        7,
        'February 2019',
        '10,007',
        '206',
        '8',
        NULL,
        1,
        '2024-07-01 16:38:03',
        1,
        '2024-07-01 16:41:29',
        1
    ),
    (
        8,
        'March 2019',
        '14,249',
        '268',
        '11',
        NULL,
        1,
        '2024-07-01 16:40:32',
        1,
        '2024-07-01 16:41:13',
        1
    ),
    (
        9,
        'April 2019',
        '7,182',
        '157',
        '14',
        NULL,
        1,
        '2024-07-01 16:44:25',
        1,
        '2024-07-01 16:45:05',
        1
    ),
    (
        10,
        'May 2019',
        '5,642',
        '143',
        '18',
        NULL,
        1,
        '2024-07-01 16:45:27',
        NULL,
        '2024-07-01 16:45:27',
        1
    ),
    (
        11,
        'June 2019',
        '6,236',
        '163',
        '21',
        NULL,
        1,
        '2024-07-01 16:45:53',
        NULL,
        '2024-07-01 16:45:53',
        1
    ),
    (
        12,
        'July 2019',
        '3,581',
        '113',
        '33',
        NULL,
        1,
        '2024-07-01 16:47:03',
        NULL,
        '2024-07-01 16:47:03',
        1
    ),
    (
        13,
        'August 2019',
        '7,368',
        '181',
        '26',
        NULL,
        1,
        '2024-07-01 16:47:36',
        NULL,
        '2024-07-01 16:47:36',
        1
    ),
    (
        14,
        'September 2019',
        '7,862',
        '177',
        '23',
        NULL,
        1,
        '2024-07-01 16:47:58',
        NULL,
        '2024-07-01 16:47:58',
        1
    );

DROP TABLE IF EXISTS blogs;

CREATE TABLE blogs (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(250) DEFAULT NULL,
    f2 varchar(255) DEFAULT NULL,
    f3 varchar(255) DEFAULT NULL,
    f4 varchar(255) DEFAULT NULL,
    f5 longtext DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    created_by int NULL DEFAULT NULL,
    created_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
    updated_by int NULL DEFAULT NULL,
    updated_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
    status int NULL DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);


DROP TABLE IF EXISTS user_devices;

CREATE TABLE IF NOT EXISTS user_devices (
    id int NOT NULL AUTO_INCREMENT,
    user int NOT NULL,
    f1 varchar(250) DEFAULT NULL,
    created_date datetime DEFAULT CURRENT_TIMESTAMP,
    updated_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status int DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);

ALTER TABLE `users` MODIFY `level` int(11) DEFAULT 1;

COMMIT;

DROP TABLE IF EXISTS Projects;

CREATE TABLE projects (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(250) DEFAULT NULL,
    f2 varchar(255) DEFAULT NULL,
    f3 varchar(255) DEFAULT NULL,
    f4 varchar(255) DEFAULT NULL,
    f5 longtext DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    created_by int NULL DEFAULT NULL,
    created_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
    updated_by int NULL DEFAULT NULL,
    updated_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
    status int NULL DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);

DROP TABLE IF EXISTS products;

CREATE TABLE products (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(50) DEFAULT NULL,
    f2 varchar(50) DEFAULT NULL,
    f3 longtext DEFAULT NULL,
    f4 varchar(255) NOT NULL,
    f5 longtext DEFAULT NULL,
    f6 varchar(255) NOT NULL,
    f7 longtext DEFAULT NULL,
    f8 varchar(255) NOT NULL,
    f9 longtext DEFAULT NULL,
    f10 varchar(255) NOT NULL,
    f11 longtext DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    img2 varchar(255) DEFAULT NULL, -- Column for the second image
    img3 varchar(255) DEFAULT NULL, -- Column for the third image
    created_by int DEFAULT NULL,
    created_date datetime DEFAULT CURRENT_TIMESTAMP,
    updated_by int DEFAULT NULL,
    updated_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status int DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);

DROP TABLE IF EXISTS vedios;

CREATE TABLE vedios (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(50) DEFAULT NULL,
    f2 varchar(255) DEFAULT NULL,
    f3 varchar(255) DEFAULT NULL,
    f4 varchar(255) NOT NULL,
    f5 longtext,
    created_by int NULL DEFAULT NULL,
    created_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
    updated_by int NULL DEFAULT NULL,
    updated_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
    status int NULL DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);

ALTER TABLE products
ADD COLUMN img4 varchar(255) DEFAULT NULL, -- Column for the fourth image
ADD COLUMN img5 varchar(255) DEFAULT NULL, -- Column for the fifth image
ADD COLUMN img6 varchar(255) DEFAULT NULL, -- Column for the sixth image
ADD COLUMN img7 varchar(255) DEFAULT NULL;
-- Column for the seventh image

ALTER TABLE products
ADD COLUMN f12 varchar(255) DEFAULT NULL,
ADD COLUMN f13 longtext DEFAULT NULL,
ADD COLUMN f14 varchar(255) DEFAULT NULL,
ADD COLUMN f15 longtext DEFAULT NULL;

DROP TABLE IF EXISTS work;

CREATE TABLE work (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(50) DEFAULT NULL,
    f2 longtext DEFAULT NULL,
    f3 varchar(50) DEFAULT NULL,
    f4 longtext DEFAULT NULL,
    f5 varchar(50) DEFAULT NULL,
    f6 longtext DEFAULT NULL,
    f7 varchar(50) DEFAULT NULL,
    f8 longtext DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    img2 varchar(255) DEFAULT NULL, -- Column for the second image
    img3 varchar(255) DEFAULT NULL, -- Column for the third image
    img4 varchar(255) DEFAULT NULL, -- Column for the fourth image
    img5 varchar(255) DEFAULT NULL, -- Column for the fifth image
    img6 varchar(255) DEFAULT NULL, -- Column for the sixth image
    created_by int DEFAULT NULL,
    created_date datetime DEFAULT CURRENT_TIMESTAMP,
    updated_by int DEFAULT NULL,
    updated_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status int DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);

DROP TABLE IF EXISTS settings;

CREATE TABLE settings (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(50) DEFAULT NULL,
    f2 varchar(50) DEFAULT NULL,
    f3 varchar(50) DEFAULT NULL,
    f4 varchar(50) DEFAULT NULL,
    f5 varchar(50) DEFAULT NULL,
    f6 varchar(50) DEFAULT NULL,
    f7 text DEFAULT NULL,
    f8 text DEFAULT NULL,
    f9 text DEFAULT NULL,
    f10 text DEFAULT NULL,
    f11 text DEFAULT NULL,
    f12 text DEFAULT NULL,
    f13 text DEFAULT NULL,
    f14 varchar(50) DEFAULT NULL,
    f15 varchar(50) DEFAULT NULL,
    f16 text DEFAULT NULL,
    f17 varchar(250) DEFAULT NULL,
    f18 varchar(250) DEFAULT NULL,
    f19 varchar(250) DEFAULT NULL,
    f20 varchar(250) DEFAULT NULL,
    f21 varchar(250) DEFAULT NULL,
    f22 varchar(250) DEFAULT NULL,
    f23 varchar(250) DEFAULT NULL,
    f24 varchar(250) DEFAULT NULL,
    f25 varchar(250) DEFAULT NULL,
    f26 varchar(250) DEFAULT NULL,
    f27 varchar(250) DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    img2 varchar(255) DEFAULT NULL, -- Column for the second image
    img3 varchar(255) DEFAULT NULL, -- Column for the third image
    created_by int DEFAULT NULL,
    created_date datetime DEFAULT CURRENT_TIMESTAMP,
    updated_by int DEFAULT NULL,
    updated_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status int DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);


DROP TABLE IF EXISTS testimonials;

CREATE TABLE testimonials (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(50) DEFAULT NULL,
    f2 varchar(255) DEFAULT NULL,
    f3 varchar(255) DEFAULT NULL,
    f4 varchar(255) DEFAULT NULL,
    f5 text DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    created_by int NULL DEFAULT NULL,
    created_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
    updated_by int NULL DEFAULT NULL,
    updated_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
    status int NULL DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);

DROP TABLE IF EXISTS about;

CREATE TABLE about (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(50) DEFAULT NULL,
    f2 longtext DEFAULT NULL,
    f3 varchar(50) DEFAULT NULL,
    f4 longtext DEFAULT NULL,
    f5 varchar(50) DEFAULT NULL,
    f6 longtext DEFAULT NULL,
    f7 varchar(50) DEFAULT NULL,
    f8 longtext DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    img2 varchar(255) DEFAULT NULL, -- Column for the second image
    img3 varchar(255) DEFAULT NULL, -- Column for the third image
    img4 varchar(255) DEFAULT NULL, -- Column for the fourth image
    img5 varchar(255) DEFAULT NULL, -- Column for the fifth image
    img6 varchar(255) DEFAULT NULL, -- Column for the sixth image
    created_by int DEFAULT NULL,
    created_date datetime DEFAULT CURRENT_TIMESTAMP,
    updated_by int DEFAULT NULL,
    updated_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status int DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);


DROP TABLE IF EXISTS news;

CREATE TABLE news (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(250) DEFAULT NULL,
    f2 varchar(255) DEFAULT NULL,
    f3 varchar(255) DEFAULT NULL,
    f4 varchar(255) DEFAULT NULL,
    f5 longtext DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    created_by int NULL DEFAULT NULL,
    created_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0),
    updated_by int NULL DEFAULT NULL,
    updated_date datetime(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
    status int NULL DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);
INSERT INTO
    news (
        id,
        f1,           -- News title (e.g., Elder Care Home - New Beginnings)
        f2,           -- Some kind of subtitle or description
        f3,           -- Additional info like category or topic
        f4,           -- Another field for additional categorization or description
        f5,           -- Main content (news article or information)
        img1,         -- Image (URL or file path)
        created_by,   -- User who created the entry
        created_date, -- Date the entry was created
        updated_by,   -- User who last updated the entry
        updated_date, -- Date of the last update
        status        -- Status of the news (active, inactive)
    )
VALUES
    (
        1,
        'New Beginnings - Elder Care Home Opening',
        'A new chapter begins with compassionate care',
        'Elder Care Home',
        'Opening Ceremony',
        'We are excited to announce the grand opening of New Beginnings Elder Care Home. This home will provide high-quality care for the elderly, offering a comfortable and safe environment. With state-of-the-art facilities and a dedicated team, we aim to create a nurturing and supportive space for all residents.',
        'assets/images/1.jpg',
        1,
        '2024-03-01 09:00:00',
        1,
        '2024-03-01 09:00:00',
        1
    ),
    (
        2,
        'February 2024 - Elder Care Home News',
        'Keeping our elderly residents comfortable and safe',
        'Monthly Update',
        'Health & Wellness',
        'In our February update, we highlight the steps we have taken to ensure the safety and well-being of our residents. From introducing new health protocols to enhancing our facilities, we are committed to providing the best care possible.',
        'assets/images/2.jpg', 
        1,
        '2024-02-28 10:15:59',
        1,
        '2024-02-28 10:15:59',
        1
    ),
    (
        3,
        'March 2024 - Our Residents Celebrate Together',
        'Community spirit at New Beginnings Elder Care Home',
        'Elder Care Events',
        'Resident Activities',
        'The residents of New Beginnings Elder Care Home came together to celebrate the arrival of spring with a beautiful community event. Our activities team organized various fun and engaging events, ensuring that everyone felt a part of the family.',
        'assets/images/3.jpg',
        1,
        '2024-03-10 11:25:00',
        1,
        '2024-03-10 11:25:00',
        1
    ),
    (
        4,
        'New Beginnings: A Focus on Dementia Care',
        'Specialized services for residents with dementia',
        'Care Services',
        'Dementia Care',
        'New Beginnings Elder Care Home is proud to offer specialized dementia care services. Our trained staff are equipped to provide tailored care for residents suffering from dementia, ensuring that they live comfortably and with dignity.',
        'assets/images/4.jpg',
        1,
        '2024-03-12 14:45:00',
        1,
        '2024-03-12 14:45:00',
        1
    ),
    (
        5,
        'April 2024 - Spring Health Tips for Seniors',
        'Ensuring our elderly residents stay healthy during spring',
        'Health & Wellness',
        'Spring Care Tips',
        'As spring arrives, we focus on tips for elderly health, including keeping warm, hydration, and maintaining a healthy diet. Our expert team provides residents with regular checkups and personalized health guidance.',
        'assets/images/5.jpg',  
        1,
        '2024-04-01 08:30:00',
        1,
        '2024-04-01 08:30:00',
        1
    );

DROP TABLE IF EXISTS faq;

CREATE TABLE faq (
    id int NOT NULL AUTO_INCREMENT,
    f1 text DEFAULT NULL,
    f2 text DEFAULT NULL,
    f3 text DEFAULT NULL,
    f4 text DEFAULT NULL,
    f5 text DEFAULT NULL,
    f6 text DEFAULT NULL,
    f7 text DEFAULT NULL,
    f8 text DEFAULT NULL,
    f9 text DEFAULT NULL,
    f10 text DEFAULT NULL,
    f11 text DEFAULT NULL,
    f12 text DEFAULT NULL,
    f13 text DEFAULT NULL,
    f14 text DEFAULT NULL,
    f15 text DEFAULT NULL,
    f16 text DEFAULT NULL,
    f17 text DEFAULT NULL,
    f18 text DEFAULT NULL,
    f19 text DEFAULT NULL,
    f20 text DEFAULT NULL,
    f21 text DEFAULT NULL,
    f22 text DEFAULT NULL,
    f23 text DEFAULT NULL,
    f24 text DEFAULT NULL,
    f25 text DEFAULT NULL,
    f26 text DEFAULT NULL,
    f27 text DEFAULT NULL,
    f28 text DEFAULT NULL,
    f29 text DEFAULT NULL,
    f30 text DEFAULT NULL,
    created_by int DEFAULT NULL,
    created_date datetime DEFAULT CURRENT_TIMESTAMP,
    updated_by int DEFAULT NULL,
    updated_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status int DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);


DROP TABLE IF EXISTS gallery;

CREATE TABLE gallery (
    id int NOT NULL AUTO_INCREMENT,
    f1 varchar(250) DEFAULT NULL,
    f2 varchar(50) DEFAULT NULL,
    f3 varchar(50) DEFAULT NULL,
    f4 varchar(50) DEFAULT NULL,
    f5 varchar(50) DEFAULT NULL,
    f6 varchar(50) DEFAULT NULL,
    f7 varchar(50) DEFAULT NULL,
    f8 varchar(50) DEFAULT NULL,
    f9 varchar(50) DEFAULT NULL,
    f10 varchar(50) DEFAULT NULL,
    f11 varchar(50) DEFAULT NULL,
    img1 varchar(255) DEFAULT NULL, -- Column for the first image
    img2 varchar(255) DEFAULT NULL, -- Column for the second image
    img3 varchar(255) DEFAULT NULL, -- Column for the third image
    img4 varchar(255) DEFAULT NULL, -- Column for the fourth image
    img5 varchar(255) DEFAULT NULL, -- Column for the fifth image
    img6 varchar(255) DEFAULT NULL, -- Column for the sixth image
    img7 varchar(255) DEFAULT NULL, -- Column for the seventh image
    img8 varchar(255) DEFAULT NULL, -- Column for the eighth image
    img9 varchar(255) DEFAULT NULL, -- Column for the ninth image
    img10 varchar(255) DEFAULT NULL, -- Column for the tenth image
    created_by int DEFAULT NULL,
    created_date datetime DEFAULT CURRENT_TIMESTAMP,
    updated_by int DEFAULT NULL,
    updated_date datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    status int DEFAULT 0,
    PRIMARY KEY (id) USING BTREE
);
