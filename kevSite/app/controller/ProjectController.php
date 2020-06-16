<?php

include_once '../global.php';

$route = $_GET['route'];

/* Project Controller Object */
$pc = new ProjectController();


if ($route == 'list') {
  $pc->list();
}
else if ($route == 'detail') {
  $pc->detail();
}

class ProjectController {

  public function list() {
    $type = $_GET['type'];

    if ($type == 'all') {
      $projects = Project::loadAllProjects();
    }

    $pageTitle = 'Projects';

    $stylesheet = 'projects';

    $script = 'projects';

    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/list.php';
    include_once SYSTEM_PATH.'/view/footer.php';
  }

  public function detail() {
    $projID = $_GET['projectID'];

    $project = Project::loadByID($projID);

    $pageTitle = $project->title;

    $stylesheet = 'projects';

    include_once SYSTEM_PATH.'/view/header.php';
    include_once SYSTEM_PATH.'/view/detail.php';
    include_once SYSTEM_PATH.'/view/footer.php';
  }

  public function sort() {

  }
}
