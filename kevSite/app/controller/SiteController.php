<?php

include_once '../global.php';

$route = $_GET['route'];

/* Site Controller Object */
$sc = new SiteController();


if ($route == 'home') {
  $sc->home();
}
else if ($route == 'about') {
  $sc->about();
}

class SiteController {

  public function home() {
    $pageTitle = 'Home';

    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/home.php';
    include_once SYSTEM_PATH.'/view/footer.php';
  }

  public function about() {
    $pageTitle = 'About Kevin';

    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/about.php';
    include_once SYSTEM_PATH.'/view/footer.php';
  }
}
