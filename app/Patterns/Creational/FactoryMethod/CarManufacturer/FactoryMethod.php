<?php namespace App\Patterns\Creational\FactoryMethod\CarManufacturer;

abstract class FactoryMethod {
	const FAST = 'fast';
	const CHEAP = 'cheap';

	abstract public function create(string $type, string $color) : VehicleInterface;
}