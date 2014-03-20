<?php

class HelloController extends BaseController {

  public function showWelcome($name='stranger')
  {
    return 'Hello, '. e($name) . '!';
  }

}