<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomeController extends TestCase
{
  /**
   * A basic functional test example.
   *
   * @return void
   */
  public function testIndex()
  {
    $response = $this->action('GET', 'WelcomeController@index');
    $view = $response->original;
    $this->assertEquals(implode(',', ['Hello', 'World']), $view['message']);
  }
}
