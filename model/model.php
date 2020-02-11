<?php
  if (isset ($_SESSION['required'])) {
    if ($_SESSION['required'] == 'menu') {
      $menu_value = $_SESSION['menu_value'];
      $order = $_SESSION['order'];
      $by = $_SESSION['by'];
      $offset = $_SESSION['offset'];
      database::menu($menu_value, $order, $by, $offset);
    }
  }

  class database {
    //create/close database connection
    public static function conn($sql) {
      $server = 'localhost';
      $username = 'movie_database';
      $password = 'a3ThKfp2FTXn7yA';
      $dbname = 'onlinefilmek.hu';
      $dbconn = new mysqli($server, $username, $password, $dbname);
      $query = $dbconn->query($sql);
      $_SESSION['query'] = $query;
      $dbconn->close();
    }

    public static function menu($menu_value, $order, $by, $offset) {
      switch ($menu_value) {
        case 'menu-movies':
          $sql = 'SELECT * FROM movies ORDER BY ' . $by . ' ' . $order . ' LIMIT 20 OFFSET ' . $offset;
          break;

        default:
          break;
      }
      database::conn($sql);
    }

    public static function pagination() {
      $sql = 'EXPLAIN SELECT * FROM movies';
      database::conn($sql);
    }
  }
?>
