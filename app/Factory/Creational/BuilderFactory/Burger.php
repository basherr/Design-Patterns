<?php namespace App\Factory\Creational\BuilderFactory;

abstract class Burger implements Item {
	/*
	* Packing
	*
	* @param null
	* @return null
	*/
	public function packing() : Packing
	{
		return new Wrapper;
	}
}