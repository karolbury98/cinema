<?php
    session_start();
    include 'dbconnect.php';
?>
<html>
<head>
<title>Kino Neptun</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a79ff52c1c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/style.css">
  </head>

<body>
  <!-- Navbar -->   
  <nav class="navbar navbar-dark bg-dark navbar-expand-md">

  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
<span class="navbar-toggler-icon"></span>
</button>

  <a class="navbar-brand" href="#">Kino Neptun</a>
  <div class="collapse navbar-collapse" id="collapse_target">
    <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Strona główna</a>
</li>
      <li class="nav-item">
    <a class="nav-link" href="repertuar.php">Repertuar</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="cennik.php">Ceny biletów</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="kontakt.php">Kontakt</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="<?php if(!isset($_SESSION['user'])){ print 'logowanie.php">Zaloguj się</a></li>';} else {print 'panel.php">Panel admina</a></li>';} ?>"
    </li>
  </ul>
  </div>    
</nav>

  <!-- Main -->
  <div class="main bg-secondary text-white">
    <div class="container">
      <div class="row">
      <div class="col-sm-12">
      <h4>Rezerwacja</h4>
    </div>
    <?php
                    $query = "SELECT max(id_movie) from movies";
                    $max = $con->query($query)->fetch_array();

                   
                        $id_movie = $_GET['id_movie'];
                        $query2 = "SELECT * FROM movies WHERE id_movie = $id_movie";
                        $inf_query = $con->query($query2)->fetch_array();
                        $query3 = "SELECT * FROM rooms WHERE id_room = (SELECT id_room FROM movies WHERE id_movie = $id_movie)";
                        $s_query = $con->query($query3)->fetch_array();
                        $day = $inf_query['day'];
                        $day_array = array(1=>'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela');
                      $day_string = $day_array[$day]; 
                   
                ?>
                
                <div id="info-sala">
                <?php
                 
                  print ' Sala: <b>'.$inf_query['id_room'].'</b>';
                  print ' | Film: <b>'.$inf_query['title'].'</b>';
                  print ' | <b>'.$day_string.'</b>';
                  print ' <b>'.$inf_query['time'].'</b>';
                ?>
                </div>
                </div>

                <div class ="form">

                        <div class="sala">
                            <div id="ekran">EKRAN</div>
                            
                        <?php
                            print '<form action="rezerwuj.php" method="post"><input type="hidden" name="go" value="res"><input type="hidden" name="id_movie" value="'.$id_movie.'">';
                             //petla wyswietlajaca miejsca na sali
                            for ($i = 1; $i <= $s_query['rows_number']; $i++){
                            print '<div id="lp">'.$i.'</div>';
                            for ($l = 1; $l <= $s_query['seats_per_row']; $l++){
                                $q = "SELECT id_reservation from reservations where row = $i and seat = $l and id_movie = $id_movie";
                                $qu = $con->query($q);
                                $qq = $qu->fetch_array();
                                if ($qq != NULL){

                                    print '<input type="checkbox" id="'.$i.$l.'" name="s[]" value="'.$i.'v'.$l.'" disabled><label for="'.$i.$l.'"><span>'.$l.'</span></label>';
                                  }
                                   else{
                                     print '<input type="checkbox" id="'.$i.$l.'" name="s[]" value="'.$i.'v'.$l.'" /><label for="'.$i.$l.'"><span>'.$l.'</span></label>';
                                   }
                            }
                           print '</br>';
                        }
                        ?>
                        </div>

                        <div class="dane">
                        <?php
                            if(isset($_POST['name'])) $imie = $_POST['name'];
                            if(isset($_POST['surname'])) $naz = $_POST['surname'];
                            if(isset($_POST['email'])) $email = $_POST['email'];
                            if(isset($_POST['phone'])) $phone = $_POST['phone'];
                            if(!empty($name) || !empty($surname) || !empty($email) || !empty($phone))
              {
              if(empty($name) || !preg_match('/^[A-ZĄĘŹŻŚÓĆŃŁ][a-ząęźżśóćńł]+$/',$name))
                print('<p class="error">Niepoprawne imię</p>'.PHP_EOL);
              if(empty($surname) || !preg_match('/^[A-ZĄĘŹŻŚÓĆŃŁ][a-ząęźżśóćńł\-]+$/',$surname))
                print('<p class="error">Niepoprawne nazwisko</p>'.PHP_EOL);
                if(empty($email) || !preg_match('/^[a-z0-9\-]+(\.?[a-z0-9\-]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)+$/i',$email))   
                print('<p class="error">Niepoprawny email</p>'.PHP_EOL);
                if(empty($phone) || !preg_match('/^\+?[0-9]+$/',$phone))
                print('<p class="error">Niepoprawny numer telefonu</p>'.PHP_EOL);  
                               
                }
                        ?>
                        <h3>Aby zarezerwować wybrane miejsca, proszę podać swoje dane.</h3><br>
                <input type="text" name="name" required placeholder="Imię" pattern="[A-ZĄĘŹŻŚÓĆŃŁ ]{1}[a-ząęźżśóćńł]*" title="Imię musi rozpoczynać się wielką literą"><br /><br />
                <input type="text" name="surname" required placeholder="Nazwisko" pattern="[A-ZĄĘŹŻŚÓĆŃŁ]{1}[a-ząęźżśóćńł\-]*[A-ZĄĘŹŻŚÓĆŃŁa-ząęźżśóćńł]*" title="Nazwisko musi rozpoczynać się wielką literą"><br /><br />
                 <input type="email" name="email" required placeholder="login@serwer.domena" pattern="[a-z0-9\._%+-]+@[a-z0-9]+\.[a-z]{2,4}$" /><br />
                <br /> <input type="text" name="phone" required  maxlength="9" placeholder="Nr tel:xxxxxxxxx" pattern="[0-9]{9}"/><br />
                        </div>
                        <div id="footer_sala">
                <a href="repertuar.php" class="buttonpowrot">Powrót</a>
                <input class="btn" type="submit" value="Rezerwuj"></form></div>
            </div>
      </div>


    </div>
  </div>
  <!-- Footer -->  
  <footer class="page-footer font-small blue pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase">Kino Neptun</h5>
      <p>Zapraszamy do odwiedzenia naszego kina, u nas możesz obejrzeć najlepsze filmy.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Warto odwiedzić</h5>

      <ul class="list-unstyled">
        <li>
        <a href="https://www.filmweb.pl/">Filmweb</a>
        </li>
        <li>
          <a href="https://filmaster.com/recenzje/">Filmaster</a>
        </li>
        <li>
          <a href="https://film.org.pl/">Film</a>
        </li>
        <li>
          <a href="https://fdb.pl/#">FDB</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Informacje</h5>

      <ul class="list-unstyled">
        <li>
          <a href="regulamin.php">Regulamin</a>
        </li>
        <li>
          <a href="polpryw.php">Polityka prywatności</a>
        </li>
        <li>
          <a href="onas.php">O nas</a>
        </li>
        <li>
          <a href="kontakt.php">Kontakt</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  Karol Bury, Informatyka 2 rok, lab1
</div>
<!-- Copyright -->

</footer>
</body>

</html>