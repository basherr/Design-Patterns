<?php namespace App\Factory\Creational\BuilderFactory\BuilderFactoryExample2;

class PostgresQueryBuilder extends MysqlQueryBuilder {
  protected $offset = 0;
  protected $limit = 0;
  
  public function limit($offset, $limit)
  {
    $this->offset = $offset;
    $this->limit = $limit;
    return $this;
  }

  public function get()
  {
    $query = parent::get();

    if($this->limit !== 0) {
      $query .= " LIMIT {$this->offset},{$this->limit}";
    }
    return $query;
  }
}