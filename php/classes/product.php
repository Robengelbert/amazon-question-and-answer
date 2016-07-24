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
	 */
	public function setProductId($newProductId){
		// verify this is a valid productId
		$newProductId = filter_var($newProductId, FILTER_VALIDATE_INT);
		if($newProductId === false){
			throw(new UnexpectedValueException("Wrong product Id"));
		}
		$this->productId = intval($newProductId);
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
	 */
	public function setProductName($newProductName){
		// verify this is a valid product
		$newProductName = filter_var($newProductName, FILTER_SANITIZE_STRING);
		if($newProductName === false){
			throw(new UnexpectedValueException("Please enter a valid product name"));
		}
		$this->productName = strval($newProductName);
	}
}