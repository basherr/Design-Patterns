<?php namespace App\Factory\Creational\BuilderFactory;

class VegitableBurger extends Burger {
	/*
	* Price
	*
	* @param null
	* @return null
	*/
	public function price() : float
	{
		return '100.20';
	}
	/*
	* Item name
	*
	* @param null
	* @return null
	*/
	public function name() : string
	{
		return 'Vegitable Burger';
	}
}