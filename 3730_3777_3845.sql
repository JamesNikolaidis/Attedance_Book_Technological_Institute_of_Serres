-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for attendanceproject
CREATE DATABASE IF NOT EXISTS `attendanceproject` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `attendanceproject`;

-- Dumping structure for table attendanceproject.connection_between_professor_and_labs
CREATE TABLE IF NOT EXISTS `connection_between_professor_and_labs` (
  `Professor_key` varchar(50) NOT NULL,
  `Lab_key` int(11) NOT NULL,
  PRIMARY KEY (`Professor_key`,`Lab_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table attendanceproject.connection_between_students_and_labs
CREATE TABLE IF NOT EXISTS `connection_between_students_and_labs` (
  `Lab_key` int(11) NOT NULL,
  `AEM` varchar(50) NOT NULL,
  `absence` int(11) NOT NULL,
  PRIMARY KEY (`Lab_key`,`AEM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table attendanceproject.labs
CREATE TABLE IF NOT EXISTS `labs` (
  `Lab_key` int(11) NOT NULL AUTO_INCREMENT,
  `lesson_name` varchar(50) NOT NULL,
  `lesson_hour` varchar(50) NOT NULL,
  PRIMARY KEY (`Lab_key`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table attendanceproject.professors
CREATE TABLE IF NOT EXISTS `professors` (
  `Professor_key` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT '0',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`Professor_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table attendanceproject.students
CREATE TABLE IF NOT EXISTS `students` (
  `AEM` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`AEM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into professors (Professor_key , password ,  firstname , lastname , mail) values ('teacher1', 'teacher1' , 'teacher1Name', 'teacher1LastName' , 'teacher1@teiser.gr');
insert into professors (Professor_key , password ,  firstname , lastname , mail) values ('teacher2', 'teacher2' , 'teacher2Name', 'teacher2LastName' , 'teacher2@teiser.gr');
insert into professors (Professor_key , password ,  firstname , lastname , mail) values ('teacher3', 'teacher3' , 'teacher3Name', 'teacher3LastName' , 'teacher3@teiser.gr');


insert into students (AEM , password ,  firstname , lastname , mail) values ('user1', 'user1' , 'user1Name', 'user1LastName' , 'user1@teiser.gr');
insert into students (AEM , password ,  firstname , lastname , mail) values ('user2', 'user2' , 'user2Name', 'user2LastName' , 'user2@teiser.gr');
insert into students (AEM , password ,  firstname , lastname , mail) values ('user3', 'user3' , 'user3Name', 'user3LastName' , 'user3r@teiser.gr');
insert into students (AEM , password ,  firstname , lastname , mail) values ('user4', 'user4' , 'user4Name', 'user4LastName' , 'user4r@teiser.gr');
insert into students (AEM , password ,  firstname , lastname , mail) values ('user5', 'user5' , 'user5Name', 'user5LastName' , 'user5r@teiser.gr');



insert into labs (Lab_key , lesson_name ,  lesson_hour)  values ('1', 'Physics' , '11-01-2017 : 13:00:00 - 15:00:00 ');
insert into labs (Lab_key , lesson_name ,  lesson_hour)  values ('2', 'Pattern Recognition' , '12-01-2017 : 13:00:00 - 14:00:00');
insert into labs (Lab_key , lesson_name ,  lesson_hour)  values ('3', 'Differential Equations' , '12-01-2017 : 17:00:00 - 19:00:00 ');


insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (1 , 'user1', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (1 , 'user2', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (1 , 'user3', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (1 , 'user4', 0 );

insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (2 , 'user1', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (2 , 'user2', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (2 , 'user3', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (2 , 'user4', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (2 , 'user5', 0 );


insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (3 , 'user1', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (3 , 'user2', 0 );
insert into connection_between_students_and_labs (Lab_key, AEM , absence ) values (3 , 'user3', 0 );


insert into connection_between_professor_and_labs (Professor_key , Lab_key ) values ('teacher1', 1);
insert into connection_between_professor_and_labs (Professor_key , Lab_key ) values ('teacher2', 3);
insert into connection_between_professor_and_labs (Professor_key , Lab_key ) values ('teacher3', 2);


-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
