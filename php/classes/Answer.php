<?php
require_once'ValidateDate.php';

class Answer{
	/**
	 * Answer Id for answer class this is the primary key
	 *
	 * @var
	 */
	public $answerId;
	/**
	 * Answer date and time for answer class
	 * @var
	 */
	public $answerDateTime;
	/**
	 * Answer Text for answer class
	 * @var
	 */
	public $answerText;
	/**
	 * Answer user Id for answer class
	 * @var
	 */
	public $ansewrUserId;
	/**
	 * Answer question Id for answer class
	 * @var
	 */
	public $answerQuestionId;

	/**
	 * Accessor method for answer Id
	 * @return mixed
	 */
	public function getAnswerId(){
		return($this->answerId);
	}

	/**
	 * Mutator method for answer Id
	 *
	 * @param $newAnswerId
	 * @throws \RangeException if answerId is not positive
	 * @throws TypeError if value is not an integer
	 */
	public function setAnswerId( int $newAnswerId){
		//verify the value is a integer
		if($newAnswerId <= 0){
			throw(new \RangeException("Value needs to be a positive number"));
		}
		//Convert and store the new value
		$this->answerId = $newAnswerId;
	}

	/**
	 * Accessor method for answer date time
	 * @return mixed
	 */
	public function getAnswerDateTime(){
		return($this->answerDateTime);
	}

	/**
	 * Mutator method for answer date and time
	 * @param $newAnswerDateTime
	 */
	public function setAnswerDateTime( int $newAnswerDateTime){
		if($newAnswerDateTime === false){
			throw(new UnexpectedValueException("Invalid date"));
		}
		$this->answerDateTime = $newAnswerDateTime;
	}

	/**
	 * Accessor method for answer text
	 * @return mixed
	 */
	public function getAnswerText(){
		return($this->answerText);
	}

	/**
	 * Mutator function for answer text
	 * @param $newAnswerText
	 * @throws \UnexpectedValueException if value is not a string
	 * @throws TypeError if value is not a string
	 */
	public function setAnswerText( str $newAnswerText){
		//Verify the value input is a string
		if($newAnswerText !== $newAnswerText){
			throw(new UnexpectedValueException("Please use sentences."));
		}
		//Convert and store the value returned
		$this->answerText = $newAnswerText;
	}

	/**
	 * Accessor method for answer user Id
	 * @return mixed
	 */
	public function getAnswerUserId(){
		return($this->answerUserId);
	}

	/**
	 * Mutator method for answer user Id
	 *
	 * @param $newAnswerUserId
	 */
	public function setAnswerUserId( int $newAnswerUserId){
		//Verify the value is an integer
		if($newAnswerUserId <= 0){
			throw(new \RangeException("Value needs to be a positive number"));
		}
		//Convert and store the value
		$this->answerUserId = $newAnswerUserId;
	}

	/**
	 * Accessor method for answer question Id
	 * @return mixed
	 */
	public function getAnswerQuestionId(){
		return($this->answerQuestionId);
	}

	/**
	 * Mutator method for answer Question Id
	 * @param $newAnswerQuestionId
	 */
	public function setAnswerQuestionId( int $newAnswerQuestionId){
		//Verify value is an positive integer
		if($newAnswerQuestionId <= 0){
			throw(new \RangeException("Value has to be a positive integer"));
		}
		//Convert and store the value
		$this->answerQuestionId = $newAnswerQuestionId;
	}
}