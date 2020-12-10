<?php

namespace App\Patterns\Structural\AdapterPattern\Human;

class KidsAdapter implements Human {

    public $kids;
    public function __construct() {
        $this->kids = new Kids;
    }

    public function speak() : string {
      return $this->kids->SmileOrWeep();
    }

    public function walk() : string {
      return $this->kids->move();
    }
}
