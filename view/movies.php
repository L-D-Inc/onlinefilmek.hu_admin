<?php
  $all_movies = '<span id="count">Összesen:' . $_SESSION['rows_c'] . '</span>';
  $pagination_box_start = '<div id="pagination-movies">';
  $pagination_box_end = '</div>';
  $movies_table_start = '<div class="table-responsive">
          <table class="table table-condensed table-striped table-hover">
            <thead>
              <tr>
                <th>Azonosító</th>
                <th>Filmnév</th>
                <th>Műfaj 1</th>
                <th>Műfaj 2</th>
                <th>Műfaj 3</th>
                <th>Leírás</th>
                <th>Hossz</th>
                <th>Színész 1</th>
                <th>Színész 2</th>
                <th>Színész 3</th>
                <th>Kiadás dátuma</th>
                <th>Ország</th>
                <th>Rejtett név</th>
                <th>Hang</th>
                <th>Feltöltve az adatbázisba</th>
                <th>Értékelés</th>
                <th>Megtekintve</th>
                <th>Egyéb</th>
              </tr>
            </thead>
            <tbody>';
              $movies_table_end = '</tbody>
          </table>
        </div>';
?>
