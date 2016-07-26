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
	public function setQuestionId(int $newQuestionId){
		if($newQuestionId === false){
			throw(new UnexpectedValueException("You entered invalid user info"));
		}
		$this->questionId = $newQuestionId;
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
	public function setQuestionDateTime(int $newQuestionDateTime){
		if($newQuestionDateTime === false){
			throw(new UnexpectedValueException("That's not todays date"));
		}
		$this->questionDateTime = $newQuestionDateTime;
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
	public function setQuestionProductId(int $newQuestionProductId){
		if($newQuestionProductId === false){
			throw(new UnexpectedValueException("Thiers not a question with that Id"));
		}
		$this->questionProductId = $newQuestionProductId;
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
	public function setQuestionText(str $newQuestionText){
		if($newQuestionText === false){
			throw(new UnexpectedValueException("That's not a question."));
		}
		$this->questionText = $newQuestionText;
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
	public function setQuestionUserId (int $newQuestionUserId){
		if($newQuestionUserId === false){
			throw(new UnexpectedValueException("You entered invalid user info"));
		}
		$this->questionUserId = $newQuestionUserId;
	}
}