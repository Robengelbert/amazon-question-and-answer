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
	 * accessor method for userId
	 * @return int value of userId
	 */
	public function getUserId(){
		return($this->userId);
}

	/**
	 * mutator method for user id
	 *
	 * @param $newUserId new value of user id
	 */
	public function setUserId($newUserId){
		// verify userId is valid
		$newUserId = filter_var($newUserId, FILTER_VALIDATE_INT);
		if($newUserId === false){
			throw(new UnexpectedValueException("You entered the wrong user info"));
		}
		/**
		 * Convert and store the userId
		 */
		$this->userId = intval=($newUserId);
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
	 * mutator method for userEmail
	 *
	 * @param $newUserEmail
	 */
	public function setUserEmail($newUserEmail){
		$newUserEmail = filter_input($newUserEmail, FILTER_VALIDATE_EMAIL);
		if($newUserEmail === false){
			throw(new UnexpectedValueException("You entered the wrong user info"));
		}
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
	 * mutator method for userName
	 *
	 * @param $newUserName
	 */
	public function setUserName($newUserName){
		$newUserName = filter_var($newUserName, FILTER_VALIDATE_STRING);
		if($newUserName === false){
			throw(new UnexpectedValueException("You entered the wrong info"));
		}
	}
}