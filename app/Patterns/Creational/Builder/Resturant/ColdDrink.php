<?php namespace App\Patterns\Creational\Builder\Resturant;

abstract class ColdDrink implements Item {
	/*
	* Packing
	*
	* @param null
	* @return null
	*/
	public function packing() : Packing
	{
		return new Bottle;
	}
}