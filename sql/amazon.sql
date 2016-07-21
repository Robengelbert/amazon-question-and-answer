DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS question;
DROP TABLE IF EXISTS answer;
DROP TABLE IF EXISTS user;

USE amazon;
CREATE TABLE user (
	userEmail VARCHAR(128) NOT NULL,
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userName VARCHAR(128) NOT NULL,
	userPassHash CHAR(128) NOT NULL,
	userPassSalt CHAR(64) NOT NULL,
	UNIQUE(userEmail),
	UNIQUE(userPassHash),
	UNIQUE(userPassSalt),
	PRIMARY KEY(userId)
);

CREATE TABLE answer (
	answerDateTime VARCHAR(128) NOT NULL,
	answerId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	answerText VARCHAR(140) NOT NULL,
	answerUserId VARCHAR(128) NOT NULL,
	answerQuestionId VARCHAR(128) NOT NULL,
	PRIMARY KEY(answerId)
);

CREATE TABLE question (
	questionDateTime VARCHAR(128) NOT NULL,
	questionId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	questionProductId VARCHAR(128) NOT NULL,
	questionText VARCHAR(140) NOT NULL,
	questionUserId VARCHAR(128) NOT NULL,
	PRIMARY KEY(questionId)
);

CREATE TABLE product (
	productId VARCHAR(140),
	productName VARCHAR(128),
	PRIMARY KEY(productId)
);
