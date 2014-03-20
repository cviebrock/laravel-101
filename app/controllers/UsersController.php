<?php

class UsersController extends BaseController {

  public function getIndex() {
      return <<< EOB
This is the GET index route.
<form method="post" action="/users/profile">
	<input type="submit">
</form>
EOB;
  }

  public function postProfile() {
      return 'This is the POST profile route.';
  }

}