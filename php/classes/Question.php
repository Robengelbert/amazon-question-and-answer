<?php



/**
 * Small section of Amazon customer question and answer
 *
 * Class Question
 * @author Robert Engelbert <rengelbert@cnm.edu>
 */
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
	 *
	 * @param $newQuestionId
	 * @throws \RangeException if productId is not positive
	 * @throws TypeError if questionId is not an integer
	 */
	public function setQuestionId(int $newQuestionId){
		//verify that productId is a positive number
		if($newQuestionId <= 0){
			throw(new \RangeException("questionId must be a positive number"));
		}
		//convert and store new value
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
	 *
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
	 *
	 * @param $newQuestionProductId
	 * @throws \RangeException if questionProductId is not a positive number
	 * @throws TypeError if questionProductId is not an integer
	 */
	public function setQuestionProductId(int $newQuestionProductId){
		//verify the value is a integer
		if($newQuestionProductId <= 0){
			throw(new \RangeException("questionProductId needs to be a positive number"));
		}
		//convert and store the new value
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
	 * @throws \UnexpectedValueException if value is not a string
	 * @throws \TypeError if value is not a string
	 */
	public function setQuestionText(str $newQuestionText){
		//verify value is a string
		if($newQuestionText !== string){
			throw(new UnexpectedValueException("Please enter a question"));
		}
		//convert and store question
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
	 * @throws \RangeException if questionUserId is not a positive number
	 * @throws TypeError if questionUserId is not an integer
	 */
	public function setQuestionUserId (int $newQuestionUserId){
		//verify value is an integer
		if($newQuestionUserId <= 0){
			throw(new \RangeException("Value needs to be a positive number"));
		}
		//Convert and store value
		$this->questionUserId = $newQuestionUserId;
	}
}