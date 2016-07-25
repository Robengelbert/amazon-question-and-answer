<?php

class Question{
	/**
	 * question Id this is the primary key
	 * @var
	 */
	public $questionId;
	/**
	 * Date and time of question
	 * @var
	 */
	public $questionDateTime;
	/**
	 * Id of product question refers to
	 * @var
	 */
	public $questionProductId;
	/**
	 * Actual question
	 * @var
	 */
	public $questionText;
	/**
	 * Id of user that asked the question.
	 * @var
	 */
	public $questionUserId;

	/**
	 * Accessor method for questionId
	 * @return mixed
	 */

	public function getQuestionId(){
	return($this->questionId);
}

	/**
	 * Mutator method for questionId
	 * @param $newQuestionId
	 */
	public function setQuestionId($newQuestionId){
		$newQuestionId = filter_var($newQuestionId, FILTER_VALIDATE_INT);
		if($newQuestionId === false){
			throw(new UnexpectedValueException("You entered invalid user info"));
		}
		$this->questionId = intval($newQuestionId);
	}

	/**
	 * Accessor for questionDateTime
	 * @return mixed
	 */
	public function getQuestionDateTime(){
		return($this->questionDateTime);
	}

	/**
	 * Mutator method for question date and time.
	 * @param $newQuestionDateTime
	 */
	public function setQuestionDateTime($newQuestionDateTime){
		$newQuestionDateTime = filter_var($newQuestionDateTime, FILTER_VALIDATE_INT);
		if($newQuestionDateTime === false){
			throw(new UnexpectedValueException("That's not todays date"));
		}
		$this->questionDateTime = intval($newQuestionDateTime);
	}

	/**
	 * accessor method for question product Id
	 * @return mixed
	 */
	public function getQuestionProductId(){
		return($this->questionProductId);
	}

	/**
	 * Mutator method for question Product id
	 * @param $newQuestionProductId
	 */
	public function setQuestionProductId($newQuestionProductId){
		$newQuestionProductId = filter_var($newQuestionProductId, FILTER_VALIDATE_INT);
		if($newQuestionProductId === false){
			throw(new UnexpectedValueException("Thiers not a question with that Id"));
		}
		$this->questionProductId = intval($newQuestionProductId);
	}

	/**
	 * Accessor method for question text
	 *
	 * @return mixed
	 */
	public function getQuestionText(){
		return($this->questionId);
	}

	/**
	 * Mutator method for question text
	 *
	 * @param $newQuestionText
	 */
	public function setQuestionText($newQuestionText){
		$newQuestionText = filter_var($newQuestionText, FILTER_SANITIZE_STRING);
		if($newQuestionText === false){
			throw(new UnexpectedValueException("That's not a question."));
		}
		$this->$newQuestionText = strval($newQuestionText);
	}

	/**
	 * Accessor method for question user Id
	 *
	 * @return mixed
	 */
	public function getQuestionUserId(){
		return($this->questionUserId);
	}

	/**
	 * Mutator method for question user Id
	 *
	 * @param $newQuestionUserId
	 */
	public function setQuestionUserId ($newQuestionUserId){ $newQuestionUserId = filter_var($newQuestionUserId, FILTER_VALIDATE_INT);
		if($newQuestionUserId === false){
			throw(new UnexpectedValueException("You entered invalid user info"));
		}
		$this->$newQuestionUserId = intval($newQuestionUserId);
	}
}