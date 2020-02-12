<!DOCTYPE html>
<html lang="hu" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <title></title>
  </head>
  <body>
    <div class="container-fluid navbar navbar-inverse navbar-fixed-top" id="header">
      <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-2">
        </div>
        <div class="col-xs-6">

        </div>
        <div class="col-xs-2">

        </div>
        <div class="col-xs-1"></div>
      </div>
    </div>
    <div class="container-fluid" id="center">
      <div class="row">
        <div class="col-xs-2" id="left">
          <img src="images/icons/menu_admin.png" alt="" class="menu-img"/>
          <span>Admin</span>
          <hr/>
          <ul id="ul-admin">
            <li id="menu-movies" onclick="menu(this)">Filmek</li>
            <ul id="ul-sub-admin">
              <li id="menu-movies-edit" onclick="menu(this)">Filmek módosítása</li>
              <li id="menu-movie-upload" onclick="menu(this)">Film feltöltése</li>
              <li id="menu-movies-request" onclick="menu(this)">Feltöltési kérelmek</li>
              <li id="menu-categories" onclick="menu(this)">Kategóriák</li>
              <li id="menu-users" onclick="menu(this)">Felhasználók</li>
              <li id="menu-notifications" onclick="menu(this)">Értesítések</li>
              <li id="menu-messages" onclick="menu(this)">Üzenetek</li>
            </ul>
          </ul>
          <img src="images/icons/menu_game.png" alt="" class="menu-img"/>
          <span>Játékszekció</span>
          <hr/>
          <ul>
            <li id="menu-levels" onclick="menu(this)">Szintek, pontrendszer</li>
            <li id="menu-game-rules" onclick="menu(this)">Játékszabályzat</li>
          </ul>
          <img src="images/icons/menu_recommendation.png" alt="" class="menu-img"/>
          <span>Filmajánló</span>
          <hr/>
          <ul id="ul-recommendation">
            <li id="menu-current-marketing" onclick="menu(this)">Aktuális marketing</li>
            <li id="menu-log-recommendation" onclick="menu(this)">Napló</li>
          </ul>
          <img src="images/icons/menu_prize.png" alt="" class="menu-img"/>
          <span>Nyereménykáték</span>
          <hr/>
          <ul id="ul-prize">
            <li id="menu-current-prize" onclick="menu(this)">Aktuális nyereményjáték</li>
            <li id="menu-log-prize" onclick="menu(this)">Napló</li>
          </ul>
          <img src="images/icons/menu_statistics.png" alt="" class="menu-img"/>
          <span>Statisztika</span>
          <hr/>
          <ul>
            <li></li>
          </ul>
          <hr/>
          <img src="images/icons/menu_server.png" alt="" class="menu-img"/>
          <span>Szerver</span>
            <ul id="ul-server">
              <li id="menu-server-status" onclick="menu(this)">Szerver státusz</li>
              <li id="menu-power-status" onclick="menu(this)">Tápegység státusz</li>
              <li id="menu-database-status" onclick="menu(this)">Adatbázis státusz</li>
            </ul>
          <hr/>
          <img src="images/icons/menu_other.png" alt="" class="menu-img"/>
          <span>Egyéb</span>
          <hr/>
          <ul id="ul-other">
            <li id="menu-email" onclick="menu(this)">E-mail</li>
            <li id="menu-team" onclick="menu(this)">Csapat</li>
            <li id="menu-development" onclick="menu(this)">Fejlesztés</li>
            <li id="menu-maintenance" onclick="menu(this)">Karbantartás</li>
            <li id="menu-marketing" onclick="menu(this)">Marketing</li>
            <li id="menu-finance" onclick="menu(this)">Pénzügy, business</li>
            <li id="menu-content-management" onclick="menu(this)">Tartalomkezelés</li>
            <ul id="ul-sub-other">
              <li id="menu-administrators" onclick="menu(this)">Adminisztrátor(ok)</li>
              <li id="menu-moderators" onclick="menu(this)">Moderátor(ok)</li>
            </ul>
            <li id="menu-imprint" onclick="menu(this)">Impresszum</li>
            <li id="menu-terms" onclick="menu(this)">ÁSZF</li>
            <li id="menu-policy" onclick="menu(this)">Adatvédelmi irányelvek</li>
            <li id="menu-profession-info" onclick="menu(this)">Szakmai infók :)</li>
          </ul>
        </div>
        <div class="col-xs-10" id="right">
          <h4>Áttekintés</h4>
          <div id="content">

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
