<?php

namespace App\Controller;

use App\Factory\Creational\AbstractFactory\JsonFactory;
use App\Factory\Creational\AbstractFactory\HtmlFactory;

class CreationalController
{
	/*
	* Index
	*
	* @param null
	* @return null
	*/
	public function abstractFactory()
	{
		$factory = new HtmlFactory();
		$p = '<p style="display: inline;">A quick brown fox jumps over the lazy dog</p>';
		$obj = $factory->createText($p);
		echo '<b>html string</b>: ' . $obj->render() . '<br/>';
		$p  = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
		$factory = new JsonFactory();
		$obj = $factory->createText($p);
		echo '<b>json string</b>: ' . $obj->render();
	}
}