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
      <h4>Seanse</h4>
    </div>
    <?php
              
               $sql="CREATE TABLE IF NOT EXISTS movies(id_movie INTEGER PRIMARY KEY, title TEXT,
                day INTEGER, time TEXT, id_room INTEGER, image TEXT, description TEXT, length TEXT)";
              // $con->exec($sql);
                $cre = $con->prepare($sql);
                 $cre->execute();
               if(isset($_POST['title'])) 
                 { 
                   $id_movie = intval($_POST['id_movie']);
                   $title=strip_tags($_POST['title']);
                   $day = intval($_POST['day']);
                   $time=strip_tags($_POST['time']);
                   $id_room = intval($_POST['id_room']);
                   $image=strip_tags($_POST['image']);
                   $description=strip_tags($_POST['description']);
                   $length=strip_tags($_POST['length']);
               
               
               
                 if($id_movie==0) //nowy seans
                 {

                    if(!empty($title) || !empty($day) || !empty($time) || !empty($id_room) || !empty($image) || !empty($description) || !empty($length))
                    {
                    $flaga=true;
                    $flaga1=true;
                    $flaga2=true;
                    $flaga3=true;
                    $flaga4=true;
                    if(empty($title) || !preg_match('/^[0-9A-ZĄĆĘŁŃÓŚŻŹa-ząćęłńóśżź ]+$/',$title))
                      
                      {print('<p class="error">Niepoprawny tytuł</p>'.PHP_EOL); $flaga = false;}
                    if(empty($day) || !preg_match('/^[0-7]{1}+$/',$day))
                      {print('<p class="error">Niepoprawny dzien</p>'.PHP_EOL);$flaga1 = false;}
                    if(empty($time) || !preg_match('/^[0-9\:]{3}[0-9]{2}$/',$time))
                     { print('<p class="error">Niepoprawna godzina</p>'.PHP_EOL);$flaga2 = false;}
                    if(empty($id_room) || !preg_match('/^[1-9]{1}[0-9]*$/',$id_room))
                      {print('<p class="error">Niepoprawne id sali</p>'.PHP_EOL);$flaga3 = false;}
                      if(empty($image) || !preg_match('/^[a-zA-Z0-9\-\.\/]+$/',$image))    
                      {print('<p class="error">Niepoprawna ściezka do pliku z plakatem</p>'.PHP_EOL);$flaga4 = false;}
                       
                    } 
                    if ($flaga=true || $flaga1=true || $flaga2=true || $flaga3=true || $flaga4=true) 
                    {
                
                          $sq = "select * from movies where title='$title' and day=$day and time='$time' and id_room=$id_room and image='$image' and description='$description' and length='$length'";
                         $a = $con->prepare($sq); 
                     
                
                        $a->execute(); //wykonanie polecenia SQL po wstawieniu parametrow

                        if (!($ble = $a->fetch())) {
                            $sql="INSERT INTO movies(title,day, time, id_room, image, description,length) 
                               VALUES('$title', $day, '$time', $id_room, '$image', '$description', '$length')";
                          print 'Seans został dodany do bazy.</br>';
                         }
                         else
                         {
                          print 'Podany seans już istnieje w bazie.</br>';
                         
                         }
                   }else { print 'błednie wypełniony formularz</br>';}
                 }
                 else //edycja danych starego uzytkownika
                   $sql="UPDATE movies SET title='$title', day=$day, time='$time', id_room=$id_room, image='$image', description='$description', length='$length' WHERE id_movie=$id_movie";  
                 $res=$con->prepare($sql); //kompilacja polecenia SQL
               
               
                 $res->execute()>0; //wykonanie polecenia SQL po wstawieniu parametrow
                 }
               ?>
                <!-- formularz edycji danych -->
<?php

if(isset($_GET['id_movie'])) //jesli 'kliknieto' jakis seans
  { //pobranie danych 'kliknietego' seansu
    $id_movie=intval($_GET['id_movie']);
    $sql="SELECT * FROM movies WHERE id_movie=$id_movie";
    $res=$con->query($sql);
    $row=$res->fetch_array();
  }
else $row=array('id_movie'=>0,'title'=>'','day'=>'','time'=>'','id_room'=>'','image'=>'','description'=>'','length'=>''); 
                ?>

<form method="post" action="?">
<input type="hidden" name="id_movie" value="<?php print $row['id_movie']; ?>" />
Tytuł filmu: <input type="text" name="title" required="required" 
                 value="<?php print $row['title']; ?>" /><br /> 
Dzień wyświetlania(1-7) : <input type="text" name="day" required="required" placeholder="Nr od 1 do 7"
                      value="<?php print $row['day']; ?>" /><br />
Godzina seansu: <input type="text" name="time" required="required" placeholder="xx:xx"
              value="<?php print $row['time']; ?>" /><br />
Nr sali: <input type="text" name="id_room" required="required" placeholder="x"
              value="<?php print $row['id_room']; ?>" /><br />
Plakat(ścieżka do pliku): <input type="text" name="image" required="required" placeholder="img/repertuar/movie1.jpg" value="<?php print $row['image']; ?>" /><br />
Opis: <input type="text" name="description" required="required" 
              value="<?php print $row['description']; ?>" /><br />                            
Czas trwania: <input type="text" name="length" required="required" placeholder="x godz. x min."
                 value="<?php print $row['length']; ?>" /><br />
<input type="submit" value="Zapisz" />

</form>   

<hr />
<!-- tabela seansow -->
<table>
 <thead>
  <tr><th>#id</th><th>usuń</th><th>Tytuł</th><th>Dzień (nr)</th><th>Godzina</th><th>Sala</th><th>Plakat</th><th>Opis</th><th>Czas trwania</th></tr>
 </thead>
 <tbody>
<?php
$sql="SELECT * FROM movies ORDER BY id_movie";
$res=$con->query($sql); //pobranie danych wszystkich filmow
if($res) while($row=$res->fetch_array())
  { //wypisanie danych - klikniecie w id pozwala edytowac dane
    
  print '<tr><td><a href="?id_movie='.$row['id_movie'].'">'.$row['id_movie'].'</a></td>'; 
  print '<td><a href="usuns.php?id_movie='.$row['id_movie'].'">X</a></td>';
  print '<td>'.$row['title'].'</td>'; 
  print '<td>'.$row['day'].'</td>'; 
  print '<td>'.$row['time'].'</td>'; 
  print '<td>'.$row['id_room'].'</td>'; 
  print '<td>'.$row['image'].'</td>'; 
  print '<td>'.$row['description'].'</td>'; 
  print '<td>'.$row['length'].'</td></tr>'.PHP_EOL; 
  }
?>
 </tbody>
</table>

<?php
        print '<div id="adm">';
        print '<br /><a href="panel.php">Powrót do panelu</a></br>'.PHP_EOL;
        print '<a href="index.php">Powrót do strony głównej</a></br>'.PHP_EOL;        
          print '<a href="wyloguj.php">Wyloguj się</a>'.PHP_EOL;
          print '</div>';
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