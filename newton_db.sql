
CREATE DATABASE `db_newton`;

CREATE TABLE `db_newton`.`admin`
 (
    `admin_id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `department` VARCHAR(100) NOT NULL,
    
PRIMARY KEY (`admin_id`)
);

CREATE TABLE `db_newton`.`students`
 (
    `student_id` INT NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `name` VARCHAR(100) NOT NULL,
    `course` VARCHAR(100) NOT NULL,
    `section` VARCHAR(100) NOT NULL,
PRIMARY KEY (`student_id`)
);

CREATE TABLE `db_newton`.`modules`
(
	`module_id` INT NOT NULL AUTO_INCREMENT,
	`module_name` VARCHAR(100) NOT NULL,
	`subject` VARCHAR(100) NOT NULL,
	`description` VARCHAR(1000) NOT NULL,
	`date` VARCHAR(100) NOT NULL,
    `status` VARCHAR(100) NOT NULL,
PRIMARY KEY (`module_id`)	 
);

CREATE TABLE `db_newton`.`feedbacks`
(
    `feedback_id` INT NOT NULL AUTO_INCREMENT,
    `content` VARCHAR(100) NOT NULL,
    `recipients` VARCHAR(100) NOT NULL,
    `file_location` VARCHAR(100) NOT NULL,
PRIMARY KEY (`feedback_id`)     
);

CREATE TABLE `db_newton`.`sections`
(
    `section_name` VARCHAR(100) NOT NULL
);

CREATE TABLE `db_newton`.`events`
(
    `events_id` INT NOT NULL AUTO_INCREMENT,
    `events_name` VARCHAR(100) NOT NULL,
    `description` VARCHAR(1000) NOT NULL,
    `date` VARCHAR(100) NOT NULL,
PRIMARY KEY (`events_id`)
);
   	   