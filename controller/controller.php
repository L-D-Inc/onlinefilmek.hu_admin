<?php
  session_start();
  // include database connect
  include ('../model/model.php');

  // request check
  if (isset ($_GET['required'])) {
    // menu
    if ($_GET['required'] == 'menu') {
      $required = $_GET['required'];
      $menu_value = $_GET['value'];
      $by = $_GET['by'];
      $order = $_GET['order'];
      $page = $_GET['page'];
      $offset = $_GET['offset'];
      $_SESSION['required'] = $required;
      $_SESSION['menu_value'] = $menu_value;
      $_SESSION['by'] = $by;
      $_SESSION['order'] = $order;
      $_SESSION['offset'] = $offset;
      request::menu($menu_value);
    }

    //pagination
    if ($_GET['required'] == 'pagination') {
      $page = $_GET['page'];
      request::pagination($page);
    }
  }

  class request {
    public static function menu($menu_value) {
      if ($menu_value == 'menu-movies') {
        $query = $_SESSION['query'];
        include ('../view/movies.php');
        if ($query->num_rows > 0) {
          echo $all_movies, $pagination_box_start;
          request::pagination();
          echo $pagination_box_end, $movies_table_start;
          while ($key = $query->fetch_assoc()) {
            echo '<tr class="movie-tr-c-tr" id="m-tr-' . $key['hide_name'] . '" onclick="movieTrCollapse(this)">
                    <td>' . $key['id'] . '</td>
                    <td>' . $key['name'] . '</td>
                    <td>' . $key['genre1'] . '</td>
                    <td>' . $key['genre2'] . '</td>
                    <td>' . $key['genre3'] . '</td>
                    <td class="movie-tr-collapse" id="m-d-' . $key['hide_name'] . '">' . $key['description'] . '</td>
                    <td>' . $key['length'] . '</td>
                    <td>' . $key['actor1'] . '</td>
                    <td>' . $key['actor2'] . '</td>
                    <td>' . $key['actor3'] . '</td>
                    <td>' . $key['release_date'] . '</td>
                    <td>' . $key['country'] . '</td>
                    <td>' . $key['hide_name'] . '</td>
                    <td>' . $key['sound'] . '</td>
                    <td>' . $key['uploaded'] . '</td>
                    <td>' . $key['rated'] . '</td>
                    <td>' . $key['views'] . '</td>
                    <td>' . $key['other'] . '</td>
                  </tr>';
          }
          echo $movies_table_end;
        }
      }
    }

    public static function pagination() {
      $query = $_SESSION['query'];
      $rows = $query->fetch_array();
      $rows_c = $rows[8];
      $_SESSION['rows_c'] = $rows_c;
      echo $rows_c
      $page_c = round ($rows_c / 20);
      echo '<ul class="pagination">';
      for ($i = 1; $i <= $page_c; $i++) {
        echo '<li onclick="pagination(this)" value="' . $i . '"><a>' . $i . '</a></li>';
      }
      echo '</ul>';
    }
  }
?>
