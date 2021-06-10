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
                if(isset($_POST['id_movie'])){
                    $id_movie = $_POST['id_movie'];
                }

                if(isset($_POST['s']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['phone'])) 
                {
                  $name = $_POST['name'];
                  $surname = $_POST['surname'];
                  $email = $_POST['email'];
                  $phone = $_POST['phone'];
                  $dobrze = true;
                  $flaga = true;
                    if(!preg_match('/^[a-ząęźżśóćńłA-ZĄĘŹŻŚÓĆŃŁ]*$/', $name)) {$dobrze = false;}
                    if(!preg_match('/^[a-ząęźżśóćńłA-ZĄSĘŹŻŚÓĆŃŁ\-]+[a-ząęźżśóćńłA-ZAĘŹŻŚÓĆŃŁ]*$/', $surname)) {$dobrze = false;}
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match('/^[a-z0-9\-]+(\.?[a-z0-9\-]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)+$/i',$email)) {$dobrze = false;}
                    if(!preg_match('/^[0-9]{9}$/', $phone)) {$dobrze = false;}

                    foreach ($_POST['s'] as $c) {
                        $seat = explode("v",$c);
                        $query = "SELECT row, seat FROM reservations WHERE id_movie=$id_movie AND row=$seat[0] AND seat=$seat[1]";
                        $seat_check = $con->query($query)->fetch_array();
                          if($seat_check != NULL){
                            $flaga = false;
                          }
                      }

                      if($flaga == true && $dobrze == true) {
                     $query2 = "SELECT number FROM reservations ORDER BY id_reservation DESC LIMIT 1";
                     $a = $con->query($query2)->fetch_array();
                     if($a == NULL) {
                        $a[0] = 1;
                       }
                         else{
                       $a[0] += 1;
                         }

                         print '<div id="confirm_header">Numer rezerwacji: <b>'.$a[0].'</b> </div>';
 
                         print '<div id="confirm_body">';
                           foreach($_POST['s'] as $c){
                             $seat = explode("v",$c);
                             print 'Rząd: <b>'.$seat[0].'</b> Miejsce: <b>'.$seat[1]. '</b></br>';
                             $query3 = "SELECT id_reservation FROM reservations ORDER BY id_reservation DESC LIMIT 1";
                             $array = $con->query($query3)->fetch_array();
                               if($array == NULL){
                                 $array[0] = 1;
                               }
                               else{
                                 $array[0] += 1;
                               }
                               
                               $date = date("Y-m-d H:i:s");
                             
                              $sql = "INSERT INTO reservations(id_movie, row, seat, number, name, surname, phone, email) VALUES ($id_movie, $seat[0], $seat[1], $a[0], '$name', '$surname', $phone, '$email')";
                              $res = $con->prepare($sql);
                               $res->execute();
                             }
                           print '</br>';

                           $query4 = "SELECT * FROM movies WHERE id_movie = $id_movie";
                           $inf_query = $con->query($query4)->fetch_array();
                                   print ' Sala: <b>'.$inf_query['id_room'].'</b>';
                                   print ' | Film: <b>'.$inf_query['title'].'</b>';
                                   $day_array = array(1=>'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela');
                                       $day_string = $day_array[$inf_query['day']];  
                                   print ' | <b>'.$day_string.'</b>';
                                   print ' <b>'.$inf_query['time'].'</b></br></br>';
                           print 'Twoje dane: </br></br>';      
                           print 'Imię: <b>'.$name.'</b></br>';
                           print 'Nazwisko: <b>'.$surname.'</b></br>';
                           print 'E-mail: <b>'.$email.'</b></br>';
                           print 'Numer telefonu: <b>'.$phone.'</b></br></br>';
                           print '</div>';
                           print '<div id="confirm_footer"><a href="index.php" class="button">STRONA GŁÓWNA</a></div>';

                           //SMTP
                           require 'PHPMailerAutoload.php';

                           $mail = new PHPMailer;
                           $mail->CharSet = 'UTF-8';

                           $mail->isSMTP();                                      // Set mailer to use SMTP
                           $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                           $mail->SMTPAuth = true;                               // Enable SMTP authentication
                           $mail->Username = 'kinoneptunprojekt@gmail.com';                 // SMTP username
                           $mail->Password = 'aplikacjeinternetowe';                           // SMTP password
                           $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                           $mail->Port = 587;                                    // TCP port to connect to
                   
                           $mail->setFrom('kinoneptunprojekt@gmail.com', 'Kino');
                           
                           $mail->addAddress($email);
                           
                           $mail->isHTML(true);                                  // Set email format to HTML
                   
                           $mail->Subject = 'Kino Neptun - potwierdzenie rezerwacji';
                           $mail->Body    = '<p style="text-algin:center;">Witaj '.$name.' '.$surname.'! </br>Potwierdzenie rezerwacji o numerze: <b style="color:green">' . $a[0] . '</br></b></p>
                           Rząd: <b>'.$seat[0].'</b> Miejsce: <b>'.$seat[1]. '</b></br> 
                           <p style="color: green;"><b>Film:</b></p><p>' . $inf_query['title'] . ' </br>Dzień: '.$inf_query['day']. ' Godzina: '.$inf_query['time'].'<br /> <b style="color: green";>Dziękujemy za wybór naszego kina!</b>';

                   
                           if (!$mail->send()) {
                             echo 'Message could not be sent.</br>';
                             echo 'Mailer Error: ' . $mail->ErrorInfo;
                           }
                           //SMTP END
                         }
                         else {
                            if($dobrze == false){ print '<p>Błednie wypełniony formularz!</p>'; }
                            if($flaga == false){ print '<p>Wybrane miejsca nie są już dostępne!</p>'; }

                            print '<p>Aby wrócić do formularza rezerwacji - <u><a href="rezerwacja.php?id_movie='.$id_movie.'" title="kliknij, aby wrócić">kliknij tutaj...</a></u></p>';
                        }
                    }
                    else {
                      print '<p><b>Błąd! Nie zaznaczyłeś/aś miejsc!</b></p>';
                      print '<p>Aby wrócić do formularza rezerwacji - <u><a href="rezerwacja.php?id_movie='.$id_movie.'" title="kliknij, aby wrócić">kliknij tutaj...</a></u></p>';
                    }    

              ?>
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