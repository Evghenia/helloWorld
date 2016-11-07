<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
  /**
   * @var string
   */
  protected $table = 'hello';

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
    $firstElement = Hello::findOrFail(1);
    return $firstElement->name;
  }
}
