USE amazon;
CREATE TABLE user (
	userEmail VARCHAR(128) NOT NULL,
	userId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	userName VARCHAR(128) NOT NULL,
	userPassHash VARCHAR(128) NOT NULL,
	userPassSalt VARCHAR(128) NOT NULL,
	UNIQUE(userEmail),
	UNIQUE(userPassHash),
	UNIQUE(userPassSalt),
	PRIMARY KEY(userId)
);

CREATE TABLE answer (
	answerDateTime VARCHAR(128) NOT NULL,
	answerId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	answerText VARCHAR(1000) NOT NULL,
	answerUserId VARCHAR(128) NOT NULL,
	answerQuestionId VARCHAR(128) NOT NULL,
	PRIMARY KEY(answerId)
);

CREATE TABLE question (
	questionDateTime VARCHAR(128) NOT NULL,
	questionId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	questionProductId VARCHAR(128) NOT NULL,
	questionText VARCHAR(1000) NOT NULL,
	questionUserId VARCHAR(128) NOT NULL,
	PRIMARY KEY(questionId)
);

CREATE TABLE product (
	productId VARCHAR(1000),
	productName VARCHAR(128)
);
