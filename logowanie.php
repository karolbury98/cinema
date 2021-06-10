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
      <h4>Zaloguj się</h4>
    </div>
    <?php
    
    if(isset($_POST['user'])){
    $user = $_POST['user'];}
    if(isset($_POST['pass'])){
    $pass = $_POST['pass'];}
             
             
            if(!empty($user) && !empty($pass))
                    {
                      
                        $sql = "SELECT * FROM users WHERE user='$user' AND pass='$pass'";
                        $res = $con->prepare($sql);
                        
                        $res->execute();
                        $row = $res->fetch();
                    
                        if($row>0){
                      
                          $_SESSION['user']=$user;
        print '<div id="zalogowano">';
          print '<a href="panel.php" class="button">Panel administratora</a></br>'.PHP_EOL;
          
          print '<a href="wyloguj.php" class="button">Wyloguj się</a></br>'.PHP_EOL;
          print '<br /><hr />';
          print '</div>';
        }
    }
  else
    {
   
    unset($_SESSION['user']);
    }
  
                ?>
                <form method="post" action="">
Login:  <br />
<input type="text" name="user" required="required"   /><br /> 
Hasło: <br />
<input type="password" name="pass" required="required" /><br />
<input type="submit" value="Zaloguj" class="btn" />
</form>
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