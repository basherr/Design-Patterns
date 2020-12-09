<?php

namespace App\Controller;

use App\Patterns\Creational\Pool\Worker\WorkerPool;
use App\Patterns\Creational\SimpleFactory\SimpleFactory;

class CreationalController
{
	/*
	* Index
	*
	* @param null
	* @return null
	*/
	public function abstractTvFactory()
	{
		(new \App\Patterns\Creational\AbstractPattern\TvManufacturer\Application)->render();
	}
	/*
	* Builder
	*
	* @param null
	* @return null
	*/
	public function resturantBuilder()
	{
		(new \App\Patterns\Creational\BuilderFactory\Resturant\Application)->render();
	}
	/*
	* Builder
	*
	* @param null
	* @return null
	*/
	public function databaseBuilder()
	{
		(new \App\Patterns\Creational\BuilderFactory\Database\Application)->render();
	}
	/*
	* simple factory or factory method
	*
	* @param null
	* @return null
	*/
	public function carManufactureFactoryMethod()
	{
		(new \App\Patterns\Creational\FactoryMethod\CarManufacturer\Application)->render();
	}
	/*
	* simple factory or factory method
	*
	* @param null
	* @return null
	*/
	public function loggerFactoryMethod()
	{
		(new \App\Patterns\Creational\FactoryMethod\Logger\Application)->render();
	}
	/*
	* reverse string
	*
	* @param null
	* @return null
	*/
	public function reverseString()
	{
		$pool = new WorkerPool;
		$worker = $pool->get();

		echo ' Reverse the following string by worker: do some job = ' . $worker->run('do some job');
	}
	/*
	* Prototype
	*
	* @param null
	* @return null
	*/
	public function acmePrototype()
	{
		(new \App\Patterns\Creational\Prototype\AcmePrototype\Application)->render();	
	}

	public function simpleFactory()
	{
		$factory = new SimpleFactory;
		$bicycle = $factory->createBicycle();
		echo $bicycle->driveTo('Austin Texas');
	}

	public function staticFactory()
	{
		$supplier = \App\Patterns\Creational\StaticFactory\Suppliers\FlightSupplierFactory::get(1);
		echo $supplier->request('My booking was cancelled without prior notification') . "<br/><br/>";
		
		$supplier = \App\Patterns\Creational\StaticFactory\Suppliers\FlightSupplierFactory::get(2);
		echo $supplier->request('Please book a ticket for me');
	}
}
