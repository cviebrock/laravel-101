<?php

class HelloController extends BaseController {

  public function showWelcome($name='stranger')
  {
    return View::make('hello', compact('name') );
  }

}