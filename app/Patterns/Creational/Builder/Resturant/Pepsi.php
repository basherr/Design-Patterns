<?php namespace App\Patterns\Creational\Builder\Resturant;

class Pepsi extends ColdDrink {
	/*
	* Price
	*
	* @param null
	* @return null
	*/
	public function price() : float
	{
		return '30.00';
	}
	/*
	* Name
	*
	* @param null
	* @return null
	*/
	public function name() : string
	{
		return 'Pepsi';
	}
}