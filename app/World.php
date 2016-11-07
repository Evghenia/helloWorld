<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class World extends Model
{
  /**
   * @var string
   */
  protected $table = 'world';

  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = false;

  /**
   * @return mixed
   */
  public function getFirstElement()
  {
    $firstElement = World::findOrFail(1);
    return $firstElement->name;
  }
}
