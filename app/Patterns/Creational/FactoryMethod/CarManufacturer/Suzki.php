<?php namespace App\Patterns\Creational\FactoryMethod\CarManufacturer;


class Suzki implements VehicleInterface {
	/**
	 * string $color
	 */
	private $color;
	/*
	* Constructor
	*
	* @param null
	* @return null
	*/
	public function __construct($color = 'white')
	{
		$this->setColor($color);
	}
	/*
	* Set Color
	*
	* @param null
	* @return null
	*/
	public function setColor(string $color)
	{
		$this->color = $color;
	}
	/*
	* Get color
	*
	* @param null
	* @return null
	*/
	public function getColor() : string
	{
		return $this->color;
	}
}