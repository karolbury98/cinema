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
      <h4>Regulamin</h4>
    </div>
    1. Niniejszy regulamin określa zasady zakupu towarów i realizacji usług w kinie
pod nazwą „Kino Neptun” znajdujących się na terytorium Rzeczpospolitej Polskiej,
których operatorem jest Neptun S.A. z siedzibą w Warszawie, przy ul. Przeskok 2
(00-032 Warszawa), wpisana do rejestru przedsiębiorców prowadzonego przez
Sąd Rejonowy dla m. st. Warszawy w Warszawie, XII Wydział Gospodarczy
Krajowego Rejestru Sądowego pod numerem KRS: 123123123, posiadająca
kapitał zakładowy 88.033.230,90 zł (w całości wpłacony), REGON: 1111111,
NIP:111-11-11-1111, BDO: 11111111, zwana dalej: „Neptun”.</br>
2. Zakup biletu jest równoznaczny z wyrażeniem zgody na przestrzeganie niniejszego
Regulaminu.</br>
3. Bilety możliwe są do nabycia w kasach kin za pomocą strony internetowej
www.multikino.pl oraz za pomocą tzw. Aplikacji Mobilnej Neptun, a także
poprzez zamianę na bilet kuponu, kodu lub zaproszenia otrzymanego
od Neptun.</br>
4. Szczegółowe zasady zamiany kuponów, kodów i zaproszeń na bilety oraz zasady
nabywania biletów w ramach programów lojalnościowych Payback i Citibanku
określone są odpowiednio w Załączniku nr 1, Załączniku nr 2 i Załączniku nr 3
do niniejszego Regulaminu. Zasady nabywania biletów na filmy 3D określone
są w Załączniku nr 4 do niniejszego Regulaminu. Zasady przechowywania rzeczy
w depozycie określone zostały w Załączniku nr 5 do niniejszego Regulaminu.
Zasady udzielania rabatów dla posiadaczy kart Getin Noble Bank S.A. określone
zostały w Załączniku nr 6 do niniejszego Regulaminu. Zasady związane
z monitoringiem na terenie kina określone zostały w Załączniku nr 7.</br>
5. Kasy biletowe otwierane są 15 minut przed rozpoczęciem pierwszego seansu,
a zamykane 15 minut po rozpoczęciu ostatniego seansu.</br>
6. Wejście do sal kinowych możliwe jest jedynie po okazaniu obsłudze kina ważnego
biletu.</br>
7. Bilet jest ważny jedynie na wyznaczony seans filmowy albo na wskazane
wydarzenie specjalne, w określonej sali oraz w dniu i o wyznaczonej godzinie.
Godzina rozpoczęcia seansu, określona w repertuarze kina, cenniku lub innym
przekazie, wskazuje moment udostępnienia sali kinowej osobie posiadającej
ważny bilet.</br>
8. Jeden bilet uprawnia do udziału w seansie tylko jedną osobę.</br>
9. Bilet należy zachować do ewentualnej ponownej kontroli przez cały czas trwania
seansu, na jaki jest zakupiony.</br>
10. Miejsce na sali należy zajmować zgodnie ze wskazaniami na bilecie.</br>
11. Bilety ulgowe, w cenie obniżonej w stosunku do ceny biletu normalnego,
przeznaczone są dla określonych kategorii wiekowych lub określonych kategorii
osób mogą nabyć tylko osoby spełniające kryteria, a w szczególności po okazaniu
odpowiedniego dokumentu, w tym dokumentu tożsamości. W przypadku
nie okazania odpowiedniego dokumentu w kasie kina lub podczas kontroli biletu,
klient jest zobowiązany do dokonania w kasie kina dopłaty do ceny biletu
normalnego.</br>
12. Bilety na seanse filmowe przeznaczone dla określonych kategorii wiekowych mogą
nabyć tylko osoby spełniające wymagania związane z wiekiem po okazaniu
odpowiedniego dokumentu tożsamości. Powyższe zasady obowiązują
odpowiednio przy wpuszczaniu na seans filmowy.</br>
13. Bilety dziecięce przysługują dzieciom poniżej 12 lat.</br>
14. Bilety seniorskie przysługują osobom powyżej 60 lat oraz weteranom (tj. osobom
posiadającym legitymację weterana i weterana poszkodowanego).</br>
15. Bilety grupowe przysługują grupom zorganizowanym liczącym co najmniej
15 osób.</br>
16. Bilety uczniowskie lub studenckie przysługują uczniom i studentom za okazaniem
ważnej legitymacji.</br>
17. Legitymacje studenckie, uczniowskie, dowody osobiste, inne dokumenty
uprawniające do zakupu biletów w obniżonej cenie sprawdzone są wraz z biletami
przy wejściu na salę lub przy kasie w momencie zakupu biletu.</br>
18. Przy zakupie biletów studenckich oraz uczniowskich nie są honorowane karty
Euro 26, ITIC i legitymacje doktoranckie.</br>
19. Bilety rodzinne możliwe są do nabycia zgodnie z postanowieniami Regulaminu
Programu Lojalnościowego „Karta Rodzina do Kina” dostępnym w kinach
Organizatora oraz pod adresem: https://multikino.pl/informacje/regulaminy.</br>
20. Dziecko w wieku do 3 lat, o ile nie zajmuje oddzielnego miejsca, może przebywać
na sali kinowej pod opieką rodzica lub pełnoletniego opiekuna w ramach jego
biletu. Powyższa zasada nie dotyczy seansów, które są przeznaczone dla dzieci,
w szczególności seansów w ramach „Poranków Filmowych” dla dzieci. Weryfikacja
wieku odbywa się podczas zakupu biletu oraz przy wejściu na salę kinową.
Dokument potwierdzający, że dziecko nie skończyło trzech lat, należy okazać
na wezwanie pracownika kina. </br>
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