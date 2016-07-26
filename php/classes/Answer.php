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
	 * @param $newAnswerId
	 */
	public function setAnswerId( int $newAnswerId){
		if($newAnswerId === false){
			throw(new UnexpectedValueException("Invalid user Id"));
		}
		$this->answerId = intval($newAnswerId);
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
	 */
	public function setAnswerText( str $newAnswerText){
		if($newAnswerText === false){
			throw(new UnexpectedValueException("That's not a valid answer."));
		}
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
	 * @param $newAnswerUserId
	 */
	public function setAnswerUserId( int $newAnswerUserId){
		if($newAnswerUserId === false){
			throw(new UnexpectedValueException("You entered invalid user info"));
		}
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
		if($newAnswerQuestionId === false){
			throw(new UnexpectedValueException("You entered invalid user info"));
		}
		$this->answerQuestionId = $newAnswerQuestionId;
	}
}