<?php

/**
 * Product classes for Amazon question and answer page
 *
 * Class Product
 *
 * @author Robert Engelbert <rengelbert@cnm.edu>
 */
class Product{
	/**
	 * Id for product this is the primary key
	 */
	public $productId;
	/**
	 * product name for this product
	 */
public $productName;

	/**
	 * accessor method for productId
	 *
	 * @return mixed
	 */

	public function getProductId(){
	return($this->productId);
}

	/**
	 * mutator metnod for productId
	 *
	 * @param $newProductId
	 * @throws \RangeException if productId is not positive
	 * @throws \TypeError if productId is not and interger
	 */
	public function setProductId(int $newProductId){
		//verify the productId is positive
		if($newProductId <=0){
			throw(new \RangeException("Product Id needs to be a positive number"));
		}
		//convert and store productId
		$this->productId = $newProductId;
	}

	/**
	 * accessor method for productName
	 *
	 * @return mixed
	 */
	public function getProductName(){
		return($this->productName);
	}

	/**
	 * mutator method for productName
	 *
	 * @param $newProductName
	 * @throws UnexpectedValueException if productName is not a string
	 */
	public function setProductName(string $newProductName){
		//verify porductName is valid
		if($newProductName === false){
			throw(new UnexpectedValueException("Please enter a valid product name"));
		}
		//convert and store new string
		$this->productName = $newProductName;
	}
}