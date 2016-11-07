<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{

  public function test_count_hello()
  {
    $helloModel = factory(App\Hello::class)->make();
    $this->assertEquals(1, $helloModel->count());
  }

  public function test_hello()
  {
    $hello = factory(App\Hello::class)->create();

    $this->visit('/')
      ->see($hello->name);
  }
}
