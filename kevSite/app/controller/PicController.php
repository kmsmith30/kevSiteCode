<?php

include_once '../global.php';

$route = $_GET['route'];

$pc = new PicController();

if ($route == 'show') {
  $pc->show();
}

class PicController {

  public function show() {
    $pics = Picture::loadAllPictures();

    $pageTitle = 'Pics';

    $stylesheet = 'pics';

    $script = 'pics';

    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/show.php';
    include_once SYSTEM_PATH.'/view/footer.php';
  }
}
