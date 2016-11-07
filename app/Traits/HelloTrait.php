<?php
/**
 * Created by PhpStorm.
 * User: evghenia
 * Date: 11/4/16
 * Time: 5:12 PM
 */

namespace app\Traits;

use App\Hello;

trait HelloTrait
{
  /**
   * @return mixed
   */
  public function sayHello()
  {
    $helloModel = new Hello();
    $hello = $helloModel->getFirstElement();
    return $hello;
  }

}