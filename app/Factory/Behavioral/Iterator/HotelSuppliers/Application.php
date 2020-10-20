<?php namespace App\Factory\Behavioral\Iterator\HotelSuppliers;

class Application
{
  public function run()
  {
    $iterator = new \AppendIterator;
    $iterator->append(new DTWSupplierIterator(new DTWSupplier));
    $iterator->append(new HTOSupplierIterator(new HTOSupplier));

    foreach ($iterator as $value) {
      echo '<pre>value: '.  $value;
    }
  }
}
