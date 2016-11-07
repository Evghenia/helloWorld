<?php
/**
 * Created by PhpStorm.
 * User: evghenia
 * Date: 11/4/16
 * Time: 5:12 PM
 */

namespace app\Traits;

use App\World;

trait WorldTrait
{
  /**
   * @return mixed
   */
  public function sayWorld()
  {
    $worldModel = new World();
    $world = $worldModel->getFirstElement();
    return $world;
  }

}