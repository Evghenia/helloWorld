<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WorldTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function test_count_world()
  {
    $worldModel = factory(App\World::class)->make();
    $this->assertEquals(1, $worldModel->count());
  }

  public function test_world()
  {
    $hello = factory(App\World::class)->create();

    $this->visit('/')
      ->see($hello->name);
  }
}
