<?php

/**
 * small section of Amazon customer question and answer.
 *
 * This is the customer question and answer section of the Amazon page for a Nexus 6 data phone.
 * @author Robert Engelbert<rengelbert@cnm.edu>
 */

class Amazon {
	/**
	 * Id for this user, this is the primary key.
	 * @var int $userId
	 */
	private $userId;
	/**
	 * Email for this user
	 * @var string $userEmail
	 */
	private $userEmail;
	/**
	 * Name of this user.
	 * @var string $userName
	 */
	public $userName;
	/**
	 * Password hash for this user
	 * @var int $userPassHash
	 */
	private $userPassHash;
	/**
	 * Password salt for this user
	 * @var int $userPassSalt
	 */
	private $userPassSalt;

	/**
	 * @param int $newUserId Id of this user
	 * @param string $newUserEmail email of this user
	 * @param string $newUserName userName of this user
	 * @throws \RangeException if value is not with in a specified range.
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \Exception if exception occurs
	 * @throws \TypeError if data types violate type hints
	 */
	public function _construct(int $newUserId, string $newUserEmail, string $newUserName){
		try{
			$this->setUserId($newUserId);
			$this->setUserEmail($newUserEmail);
			$this->setUserName($newUserName);
		} catch(\InvalidArgumentException $invalidArgument) {
			//rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		}catch(\RangeException $range){
				//rethrow the exception to the caller
				throw(new \RangeException($range->getMessage(),0,$range));
		}catch(\TypeError $typeError){
			//rethrow the exception to the caller
			throw(new \TypeError($typeError->getMessage(),0,$typeError));
		}catch(\Exception $exception){
			//rethrow the exception to the caller
			throw(new \Exception($exception->getMessage(),0,$exception));
		}

	}
	/**
	 * accessor method for userId
	 * @return int value of userId
	 */
	public function getUserId(){
		return($this->userId);
}

	/**
	 * mutator method for user id
	 *
	 * @param $newUserId
	 * @throws \RangeException if userId is not positive
	 * @throws TypeError if userId is not an integer
	 */
	public function setUserId(int $newUserId){
		// verify userId is valid
		if($newUserId <= 0){
			throw(new \RangeException("User Id must be a positive integer"));
		}

		 // Convert and store the userId

		$this->userId = $newUserId;
	}

	/**
	 * accessor method for userEmail
	 *
	 * @return string for userEmail
	 */
	public function getUserEmail(){
		return($this ->userEmail);
	}

	/**
	 * Mutator method for userEmail
	 *
	 * @param $newUserEmail
	 * @throws InvalidArgumentException if no email
	 * @throws TypeError if value is not a string
	 */
	public function setUserEmail( string $newUserEmail){
		//Verify email
		$newUserEmail = filter_var($newUserEmail, FILTER_SANITIZE_EMAIL);
		if(empty($newUserEmail) === true){
			throw(new \InvalidArgumentException(" Enter your email"));
		}
		$this->userEmail = $newUserEmail;
	}

	/**
	 * accessor method for userName
	 *
	 * @return string
	 */
	public function getUserName(){
		return($this->userName);
	}

	/**
	 * Mutator method for userName
	 *
	 * @param $newUserName
	 * @throws Exception if userName is missing
	 * @throws TypeError if value is not a string
	 */
	public function setUserName(string $newUserName){
		$newUserName = filter_var($newUserName, FILTER_SANITIZE_STRING);
		//verify userName is valid
		if(empty($newUserName) === true){
			throw(new \Exception("Enter your user name"));
		}
		$this->userName = $newUserName;
	}

	/**
	 * Accessor method for userPassHash
	 *
	 * @return int
	 */
	public function getUserPassHash() {
		return $this->userPassHash;
	}

	/**
	 * Mutator method for userPassHash
	 *
	 * @param int $userPassHash
	 * @throws UnexpectedValueException if userPassHash is not a string or under 128 characters
	 * @throws TypeError if value is not a string
	 */
	public function setUserPassHash(string $userPassHash) {
		//verify hash is hex
		if(ctype_xdigit($userPassHash)=== false){
			throw(new \InvalidArgumentException("The hash is invalid or insecure."));
		}
		//verify hash is 128 characters
		if(strlen($userPassHash)!== 128){
			throw(new RangeException("hash is not 128 characters"));
		}
		$this->userPassHash = $userPassHash;
	}
	/**
	 * Accessor method for userPassSalt
	 *
	 * @return int
	 */
	public function getUserPassSalt() {
		return $this->userPassSalt;
	}

	/**
	 * Mutator method for userPassSalt
	 *
	 * @param int $userPassSalt
	 * @throws UnexpectedValueException if the value is not a string or <=64 characters
	 * @throws TypeError if value entered is not a string.
	 */
	public function setUserPassSalt(string $userPassSalt) {
		//verify salt is hex
		if(ctype_xdigit($userPassSalt) === false){
			throw(new \InvalidArgumentException("The salt is invalid or insecure"));
		}
		//verify salt is 64 characters
		if(strlen($userPassSalt) !== 64){
			throw(new RangeException("Salt is not 64 characters"));
		}
		$this->userPassSalt = $userPassSalt;
	}

	/**
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */
	public function insert(\PDO $pdo){
		if($this->userId !== null) {
			throw(new \PDOException("I don't know you"));
		}
	   //create query template
	$query = "INSERT INTO user(userEmail, userName, userPassHash, userPassSalt) VALUES(:userEmail, :userName, :userPassHash, :userPassSalt)";
		$statement = $pdo->prepare($query);

		//bind the number variables to the place holders in the template
		$parameters = ["userEmail" => $this->userEmail, "userName" => $this->userName, "userPassHash" => $this->userPassHash, "userPassSalt" => $this->userPassSalt];
		$statement->execute($parameters);
		// update the null userId with what mySQL just gave us
		$this->tweetId = intval($pdo->lastInsertId());
	}
	/**
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */
	public function delete(\PDO $pdo){
		// enforce the user Id is not null
		if($this->userId === null){
			throw(new \PDOException("unable to delete"));
		}
		//create query template
		$query = "DELETE FROM user WHERE userId = :userId";
		$statement = $pdo->prepare($query);

		//bind the member variables to the place holder in the
		$parameters = ["userId" => $this->userId];
		$statement->execute($parameters);
	}

	/**
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 */
	public function update(\PDO $pdo){
		if($this->userId === null){
			throw(new \PDOException("Unable to update"));
		}
		//create query template
		$query = "UPDATE user SET userEmail= :userEmail, userName = :userName, userPassHash = :userPassHash, userPassSalt = :userPassSalt WHERE userId = :userId";
		$statement = $pdo->prepare($query);

		//bind member variables to the place holders in the template
		$parameters = ["userId" => $this->userId, "userEmail" => $this->userEmail, "userName" => $this->userName, "userPassHash" => $this->userPassHash, "userPassSalt" => $this->userPassSalt];
		$statement->execute($parameters);
	}
	
}