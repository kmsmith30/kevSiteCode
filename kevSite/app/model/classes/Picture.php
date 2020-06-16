<?php

class Picture {

  public $id;
  public $title;
  public $caption;
  public $img_name;
  public $location;
  public $date_created;

  const DB_TABLE = 'pics';

  public static function loadAllPictures() {
    $pictures = array();

    $query = "SELECT id FROM ".self::DB_TABLE." ORDER BY id DESC";

    $result = $GLOBALS['conn']->query($query);

    if ($result->num_rows) {
      while ($row = $result->fetch_assoc()) {
        $pic = self::loadByID($row['id']);

        $pics[$row['id']] = $pic;
      }
    }

    return $pics;
  }

  public static function loadByID($projectID) {
    $query = sprintf("SELECT * FROM %s WHERE id = %d",
      self::DB_TABLE,
      $GLOBALS['conn']->real_escape_string($projectID)
      );

    $result = $GLOBALS['conn']->query($query);

    if ($result->num_rows) {
      $row = $result->fetch_assoc();
      $pic = new Project();
      $pic->id = $row['id'];
      $pic->title = $row['title'];
      $pic->caption = $row['caption'];
      $pic->img_name = $row['img_name'];
      $pic->location = $row['location'];
      $pic->date_created = $row['date_created'];

      return $pic;
    }
    else {
      return null;
    }
  }
}
