<?php

/* Class to hold Projects */
class Project {

  /* Project Variables */
  public $id;
  public $title;
  public $img_name;
  public $date_created;

  /* Project Database */
  const DB_TABLE = 'projects';

  const PROJECT_TYPE = array(
    'Cpp' => 100
  );

  public static function loadAllProjects() {
    $projects = array();

    $query = "SELECT id FROM ".self::DB_TABLE." ORDER BY id DESC";

    $result = $GLOBALS['conn']->query($query);

    if ($result->num_rows) {
      while ($row = $result->fetch_assoc()) {
        $proj = self::loadByID($row['id']);

        $projects[$row['id']] = $proj;
      }
    }

    return $projects;
  }

  public static function loadProjectsByType($type) {
    $projects = array();

    $query = "SELECT id FROM ".self::DB_TABLE." ORDER BY id DESC";

    $result = $GLOBALS['conn']->query($query);

    if ($result->num_rows) {
      while ($row = $result->fetch_assoc()) {
        $proj = self::loadByID($row['id']);

        switch ($type) {
          case PROJECT_TYPE["cpp"]:
            if ($proj->type == 'CPP') {
              $projects[$row['id']] = $proj;
            }
            break;
        }
      }
    }

    return $projects;
  }

  public static function loadByID($projectID) {
    $query = sprintf("SELECT * FROM %s WHERE id = %d",
      self::DB_TABLE,
      $GLOBALS['conn']->real_escape_string($projectID)
      );

    $result = $GLOBALS['conn']->query($query);

    if ($result->num_rows) {
      $row = $result->fetch_assoc();
      $proj = new Project();
      $proj->id = $row['id'];
      $proj->title = $row['title'];
      $proj->img_name = $row['img_name'];
      $proj->date_created = $row['date_created'];

      return $proj;
    }
    else {
      return null;
    }
  }
}
