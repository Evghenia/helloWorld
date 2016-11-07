<?php

namespace App\Http\Controllers;

use app\Traits\HelloTrait;
use app\Traits\WorldTrait;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  use HelloTrait, WorldTrait;

  /**
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index()
  {
    $hello = $this->sayHello();
    $world = $this->sayWorld();
    return view('welcome.index', ['message' => implode(',', [$hello, $world])]);
  }
}
