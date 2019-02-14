<?php

$sql = "CREATE TABLE Users
		(
		id int NOT NULL AUTO_INCREMENT,
		username varchar(255) NOT NULL UNIQUE,
		password varchar(255) NOT NULL,
		email varchar(255) NOT NULL UNIQUE,
		birthday varchar(255) NOT NULL,
		PRIMARY KEY(id)
		);";

$sql = "CREATE TABLE Votes
			(
			user_id int NOT NULL,
			answer_id int NOT NULL,
			value int NOT NULL
			);";


$sql = "CREATE TABLE Questions
              (
              id int NOT NULL AUTO_INCREMENT,
              user_id int NOT NULL,
              question_text varchar(500) NOT NULL,
              num_answers int NOT NULL,
              time_asked timestamp NOT NULL,
              top_answer_id int,
              PRIMARY KEY(id)
              );";

$sql = "CREATE TABLE Answers
              (
              id int NOT NULL AUTO_INCREMENT,
              user_id int NOT NULL,
              answer_text varchar(500) NOT NULL,
              question_id int NOT NULL,
              upvotes int NOT NULL,
              downvotes int NOT NULL,
              PRIMARY KEY(id)
              );";

			?>