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
      <h4>Polityka prywatności</h4>
    </div>
    Polityka Prywatności Serwisu kinoneptun.pl<br>


Niniejszy dokument opisuje zasady przetwarzania danych osobowych Użytkowników gromadzonych w ramach Serwisu, a w tym postępowanie dotyczące posługiwania się z plikami cookies. W sprawach związanych z ochroną danych osobowych w Multikino można kontaktować się z naszym inspektorem ochrony danych, który dostępny jest pod adresem e-mail: iod@multikino.pl lub na adres Multikina, z dopiskiem na kopercie „IOD”.<br>

<br><br>

1.Co jest czym, czyli wyjaśnienie znaczenia niektórych słów, którymi posługujemy się w Polityce Prywatności.<br>

1.1.„Multikino” (albo „My”) – czyli my, właściciele serwisu dostępnego pod adresem multikino.pl, a konkretnie Multikino S.A. z siedzibą w Warszawie, adres: ul. Przeskok 2, 00-032 Warszawa, wpisana do rejestru przedsiębiorców prowadzonego przez Sąd Rejonowy dla m. st. Warszawy w Warszawie, XII Wydział Gospodarczy Krajowego Rejestru Sądowego pod numerem KRS: 0000284604, posiadająca kapitał zakładowy 88.033.230,90 zł (w całości wpłacony), REGON: 013122196, NIP: 521-28-93-057, BDO: 000105901. <br>
1.2.„Użytkownik” (albo „Ty”, albo każda inna forma osobowa, w której zwracamy się do Ciebie) – internauta, który odwiedza stronę multikino.pl (i podstrony), czyli Serwis, bądź Fanpage Multikina w portalach społecznościowych. <br>
1.3.„Polityka Prywatności" - niniejszy dokument.<br>
1.4.„Serwis" - serwis internetowy dostępny pod adresem multikino.pl.<br>
1.5.„Usługi” – funkcjonalności Serwisu, które Ci udostępniamy np. możliwość utworzenia konta, zakup lub rezerwacja biletu. Niektóre usługi są dostępne tylko dla osób, które posiadają utworzone konto np. jest to niezbędne, by zarejestrować kartę „Rodzina do Kina”<br>
1.6.„Cookies, Ciasteczka" - dane informatyczne, w szczególności pliki tekstowe, które przechowywane są w urządzeniu końcowym Użytkownika, ułatwiające korzystanie ze stron internetowych Serwisu. Cookies zazwyczaj zawierają nazwę strony internetowej, z której pochodzą, czas przechowywania ich na urządzeniu końcowym oraz unikalny identyfikator.<br>
1.7.„Dane osobowe” - oznaczają informacje, które samodzielnie lub w powiązaniu z innymi informacjami, pozwalają Cię zidentyfikować, w szczególności poprzez odniesienie do takich danych jak imię i nazwisko, numer identyfikacyjny, dane dotyczące lokalizacji, identyfikator sieciowy.<br>
1.8.„Fanpage Multikina” – strony, konta, kanały prowadzone przez Multikino w portalach społecznościowych takich jak: Facebook, Instagram, YouTube, Twitter.<br>
1.9.„RODO” - Rozporządzenie Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych).<br>
1.10.„Kino” – kina pod szyldem „Multikino” położone na terytorium Rzeczpospolitej Polskiej, których operatorem jest Multikino.<br>
1.11.„Kino Partnerskie” - kina pod szyldem „Multikino” położone na terytorium Rzeczpospolitej Polskiej, których operatorem jest CINEMA 3D S.A. z siedzibą w Warszawie, adres: ul. Przeskok 2, 00-032 Warszawa, wpisana do Rejestru Przedsiębiorców Krajowego Rejestru Sądowego, prowadzonego przez Sąd Rejonowy dla m.st. Warszawy, XII Wydział Gospodarczy pod numerem KRS: 0000372983, o kapitale zakładowym 100.000,00 zł (w całości wpłacony), REGON: 021355103, NIP: 691-24-71-755. <br>
<br><br>
2.Kto jest administratorem Twoich danych osobowych?<br>

2.1.Administratorem danych osobowych jest Multikino S.A. z siedzibą w Warszawie, adres: ul. Przeskok 2, 00-032 Warszawa, wpisana do rejestru przedsiębiorców prowadzonego przez Sąd Rejonowy dla m. st. Warszawy w Warszawie, XII Wydział Gospodarczy Krajowego Rejestru Sądowego pod numerem KRS: 0000284604, posiadająca kapitał zakładowy 88.033.230,90 zł (w całości wpłacony), REGON: 013122196, NIP: 521-28-93-057, BDO: 000105901. Jeśli chcesz skontaktować się z nami mailowo, skorzystaj z formularza dostępnego tutaj: https://multikino.pl/kontakt.
2.2.Tak jak wspominaliśmy na wstępie, dla bezpieczeństwa Twoich danych osobowych wyznaczyliśmy inspektora ochrony danych, z którym najszybciej skontaktujesz się pod adresem – e-mail: iod@multikino.pl
2.3.Multikino stosuje środki techniczne i organizacyjne mające na celu zabezpieczenie przekazywanych nam danych osobowych zgodnie z wymogami wynikającymi z powszechnie obowiązujących przepisów prawa.
2.4.Każda osoba, którą zatrudniamy lub z którą współpracujemy, zanim zostanie dopuszczona do przetwarzania danych osobowych, zobowiązywana jest do zachowania danych osobowych w tajemnicy. Tajemnica ta obejmuje również wszelkie informacje dotyczące sposobów zabezpieczenia powierzonych do przetwarzania danych osobowych.
<br><br>
3.Do jakich celów wykorzystujemy Twoje dane osobowe?<br>

3.1.rejestracji Konta zgodnie z zapisami Regulaminu – w związku z realizacją umowy o świadczenie usług drogą elektroniczną (na podstawie art. 6 ust. 1 lit. b RODO),<br>
3.2.jeśli kupowany jest bilet – dla celów związanych z obsłużeniem takiej transakcji (realizacja umowy zakupu biletu – art. 6 ust. 1 lit. b RODO) i dopełnieniem wymogów prawa w tym zakresie – konieczność przechowywania informacji o transakcji (art. 6 ust. 1 lit. c RODO w zw. z ustawą z dnia 29 września 1994 r. o rachunkowości),
3.3.jeśli rezerwowany jest bilet – dla celów związanych z obsługą takiej rezerwacji (realizacja umowy rezerwacji biletu) – na podstawie art. 6 ust. 1 lit. b RODO,<br>
3.4.w przypadku wyrażenia odrębnej zgody (art. 6 ust. 1 lit. a RODO):<br>
3.4.1.otrzymywania informacji o filmach i wydarzeniach na podany e-mail, a także wysyłania zapytań dotyczących opinii lub badań satysfakcji,<br>
3.4.2.otrzymywania informacji o filmach i wydarzeniach na podany nr telefonu (w formie SMS),<br>
3.4.3.otrzymywania informacji dotyczących ofert wspólnych Multikina S.A. i partnerów (na podany e-mail),<br>
3.4.4.przetwarzania informacji dotyczących geolokalizacji w związku z prezentacją oferty na komputerze i/lub urządzeniu mobilnym,<br>
3.4.5.profilowania dla celów dostosowania oferty,<br>
3.4.6.zapisania się na jednorazowy e-mailing w ramach usługi „Chcę zobaczyć”,<br>
3.5.rozpatrywania reklamacji – możliwość ustosunkowania się do reklamacji i jej obsługa stanowią uzasadniony interes Multikina (art. 6 ust. 1 lit. f RODO),<br>
3.6.zabezpieczenia ewentualnych roszczeń – co stanowi, w przypadku sytuacji spornych, nasz uzasadniony interes (art. 6 ust. 1 lit. f RODO).<br>
3.7.analizowania sesji użytkowników na potrzeby identyfikowania błędów w działaniu serwisu multikino.pl – co stanowi uzasadniony interes Multikina (art. 6 ust. 1 lit. f RODO),<br>
3.8.analizowania sesji użytkowników na potrzeby budowania profili zachowań klientów np. jakiego rodzaju filmy oglądasz w Serwisie (jeśli robisz to jako gość, a nie jako zalogowany użytkownik, profil budowany jest wyłącznie w oparciu o pliki cookies, natomiast jeśli jesteś zalogowany albo po jakimś czasie utworzyłeś konto, to informacje te zostaną połączone z tym kontem, co stanowi uzasadniony interes administratora rozumiany jako marketing bezpośredni (art. 6 ust. 1 lit. f RODO)
3.9.w przypadku uczestnictwa w programie lojalnościowym - na potrzeby tego programu lojalnościowego (czyli zawarcia z nami umowy) – na podstawie art. 6 ust. 1 lit. b RODO.<br>
3.10.Poniżej informujemy także o dodatkowych celach w jakich przetwarzamy dane osobowe, takie jak przetwarzanie danych w ramach Fanpage Multikina, korzystania z Asystenta Multikina, korzystania z botów na Facebooku oraz wykorzystywania plików cookies. 

<br><br>
4.Jak długo przechowujemy Twoje dane osobowe?<br>

4.1.rejestracja Konta użytkownika w serwisie multikino.pl – do czasu wniesienia sprzeciwu na przetwarzanie danych lub żądania usunięcia danych,<br>
4.2.zakup biletu i sprawozdawczość finansowa – przez okres 5 lat od zakończenia roku obrachunkowego,<br>
4.3.rezerwacja biletów – jeśli rezerwujesz jako gość (bez tworzenia konta w Serwisie) dane w tym zakresie przechowywane są przez 2 lata liczone od daty seansu, na który została zrobiona rezerwacja (dane te są niezbędne do realizacji celu wskazanego w pkt. 3.8.), natomiast jeśli rezerwujesz poprzez utworzone w Serwisie konto – dane są przechowywane przez okres do 5 lat. Okresy te mogą być krótsze, jeżeli konto zostanie usunięte 
4.4.informacje o filmach i wydarzeniach, a także ankiety dotyczące opinii i badań satysfakcji przesyłane na podany e-mail – do czasu wycofania zgody,<br>
4.5.informacje o filmach i wydarzeniach przesyłane na podany nr telefonu (w formie SMS) – do czasu wycofania zgody,<br>
4.6.informacje dotyczące ofert wspólnych Multikina i partnerów na podany e-mail – do czasu wycofania zgody,<br>
4.7.wykorzystywanie geolokalizacji w związku z prezentacją oferty na komputerze i/lub urządzeniu mobilnym – do czasu wycofania zgody,<br>
4.8.profilowania dla celów dostosowania oferty – do czasu wycofania zgody,<br>
4.9.rozpatrywania reklamacji – do 30 dni od daty złożenia reklamacji,<br>
4.10.zabezpieczenia ewentualnych roszczeń – do czasu przedawnienia tych roszczeń zgodnie z terminami określonymi w kodeksie cywilnym,<br>
4.11.analizowania sesji użytkowników na potrzeby identyfikowania błędów w działaniu serwisu multikino.pl – przez czas 90 dni,<br>
4.12.analizowania sesji użytkowników na potrzeby budowania profili zachowań klientów np. jakiego rodzaju filmy oglądasz w Serwisie – przez okres 1 roku,<br>
4.13.otrzymania jednorazowego e-mailingu w ramach usługi „Chcę zobaczyć” – jeśli dopisałeś maila nie mając konta w Serwisie albo zrobiłeś to nie będąc zalogowanym na swoje konto – wówczas adres e-mail przechowujemy do czasu zrealizowania e-mailingu, natomiast jeśli byłeś zalogowany do swojego konta w Serwisie, wówczas informacja o tym, ze zapisałeś się na „Chcę zobaczyć” zostanie dodana do Twojego profilu i będzie przechowywana aż do usunięcia konta lub zgłoszenia sprzeciwu w tym zakresie, przy czym adres ten nie będzie wykorzystywany do wysyłania mailingów o ile nie wyraziłeś w tym zakresie stosownych zgód.
4.14.uczestnictwa w programie lojalnościowym (na potrzeby tego programu lojalnościowego) - do czasu wniesienia sprzeciwu na przetwarzanie danych lub żądania usunięcia danych lub zakończenia programu lojalnościowego
<br><br>
5.Komu udostępniamy Twoje dane osobowe?<br>

5.1.Dane osobowe są ujawniane podmiotom udzielającym wsparcia - na zasadzie zleconych usług i zgodnie z zawartymi umowami powierzenia. Wśród takich podmiotów znajdują się firmy zapewniające nam niektóre usługi w obszarze IT, archiwizujące i niszczące nośniki danych, wspierające nas w obszarze prawnym, firmy kurierskie. <br>
5.2.Dane transakcyjne, w tym dane osobowe, podane przez Ciebie w trakcie dokonywania płatności przetwarzane są PayU S.A. z siedzibą w Poznaniu (KRS: 0000274399) adres: ul. Grunwaldzka 182, 60-166 Poznań jako instytucja płatnicza pośrednicząca w realizacji płatności zgodnie z zasadami określonymi przez wskazany wyżej podmiot.<br>
5.3.W przypadkach wymaganych przez powszechnie obowiązujące przepisy prawa, zastrzegamy sobie prawo udostępniania danych urzędom i organom uprawnionym do przetwarzania danych np. organom ścigania, sądom.<br>
5.4.W zakresie, w jakim świadczymy dla klientów Kin Partnerskich usługi sprzedaży, bądź rezerwacji biletów za pośrednictwem Serwisu, odrębnym administratorem danych osobowych jest CINEMA 3D S.A. z siedzibą w Warszawie, adres: ul. Przeskok 2, 00-032 Warszawa, wpisana do Rejestru Przedsiębiorców Krajowego Rejestru Sądowego, prowadzonego przez Sąd Rejonowy dla m. st. Warszawy, XII Wydział Gospodarczy pod numerem KRS: 0000372983, o kapitale zakładowym 100.000,00 zł  (w całości wpłacony), REGON: 021355103, NIP: 691-24-71-755. Więcej informacji na temat przetwarzania danych osobowych w Kinach Partnerskich znajduje się w miejscach, gdzie na rzecz Kin Partnerskich zbierane są Twoje dane, o czym zawsze jesteś informowany (np. formularz zamówienia/ rezerwacji biletu w Kinie Partnerskim).  <br>
5.5.Multikino przetwarzając dane osobowe w celach analizy ruchu w Serwisie, targetowania i retargetowania reklam, budowania profili look alike przekazuje je do Stanów Zjednoczonych Ameryki (czyli poza Europejski Obszar Gospodarczy), ale tylko wtedy, gdy jest to konieczne i z zapewnieniem odpowiedniego stopnia ochrony. W przypadku podmiotów z siedzibą w Stanach Zjednoczonych Ameryki transfer taki następuje tylko wówczas, gdy podmiot uczestniczy w programie Tarcza Prywatności (Privacy Shield), zatwierdzonym decyzją wykonawczą Komisji (UE) 2016/1250 z dnia 12 lipca 2016 r. w sprawie adekwatności ochrony zapewnianej przez Tarczę Prywatności UE-USA (lista podmiotów z USA uczestniczących w tym programie dostępna jest pod adresem: https://www.privacyshield.gov/list, natomiast informacje o porozumieniu EU-USA tutaj: www.privacyshield.gov/EU-US-Framework).<br>
5.6.Informujemy również, że przekazujemy Twoje dane osobowe innym odbiorcom, z których listą można zapoznać się tutaj. Podmioty te posiadają własne regulacje dotyczące przetwarzania danych osobowych.
<br><br>
6.Jakie prawa Ci przysługują w kontekście Twoich danych osobowych?

6.1.Przysługuje Ci prawo dostępu do Twoich danych oraz prawo żądania ich sprostowania, usunięcia, ograniczenia przetwarzania. W zakresie, w jakim podstawą przetwarzania Twoich danych osobowych jest przesłanka prawnie uzasadnionego interesu administratora, przysługuje Ci prawo wniesienia sprzeciwu wobec przetwarzania Twoich danych osobowych.<br>
6.2.W zakresie, w jakim podstawą przetwarzania Twoich danych osobowych jest zgoda, masz prawo wycofania zgody. Wycofanie zgody nie ma wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej wycofaniem.<br>
6.3.W zakresie, w jakim Twoje dane są przetwarzane w celu zawarcia i wykonywania umowy lub przetwarzane na podstawie zgody – przysługuje Ci także prawo do przenoszenia danych osobowych, tj. do otrzymania od administratora Twoich danych osobowych, w ustrukturyzowanym, powszechnie używanym formacie nadającym się do odczytu maszynowego. Możesz przesłać te dane innemu administratorowi danych.<br>
6.4.Z powyższych uprawnień, a także wszystkich innych przewidzianych w RODO, możesz skorzystać poprzez kontakt z inspektorem ochrony danych – drogą mailową: iod@multikino.pl albo tradycyjną: pisząc na adres Multikina z dopiskiem „IOD”.<br>
6.5.Przysługuje Ci również prawo wniesienia skargi do organu nadzorczego zajmującego się ochroną danych osobowych (obecnie jest to Prezes Urzędu Ochrony Danych Osobowych z siedzibą przy ul. Stawki 2, 00-193 Warszawa).<br>
6.6.Multikino prowadzi strony profilowe:<br>
6.6.1.na Facebooku: www.facebook.com/MultikinoPolska/, <br>
6.6.2.Instagramie https://www.instagram.com/multikino_polska/ oraz <br>
6.6.3.Kanał Youtube https://www.youtube.com/user/MultikinoTV, <br>
co może wiązać się z przetwarzaniem przez nas Twoich danych osobowych, gdy odwiedzasz wskazane profile, strony i kanały, bądź wchodzisz w interakcje z tymi profilami, stronami i kanałami (polubienia, subskrypcje, komentarze, przesyłane wiadomości). Jeżeli odwiedzasz nasze profile społecznościowe na portalach typu Facebook, Instagram oraz YouTube, gromadzone są dane dotyczące Twojej aktywności na tym profilu, w tym polubień, przesyłanych nam wiadomości, treści komentarzy i postów zamieszczanych na tym profilu. Pamiętaj, że jako użytkownicy portalu społecznościowego i Ty i my jesteśmy związani także polityką prywatności i regulaminami zaakceptowanymi w ramach tego portalu społecznościowego. Dane związane z Twoją aktywnością w ramach prowadzonych przez Multikino profili na portalach społecznościowych będą przechowywane, dopóki ich nie usuniesz albo nie zostaną usunięte przez nas albo właściciela danego portalu społecznościowego. Pamiętaj, że jako użytkownik każdego z portali społecznościowych, gdzie mamy swój profil, możesz także zarządzać swoim kontem i zamieszczanymi treściami zgodnie z regulacjami tego portalu społecznościowego. <br>
Podanie danych jest dobrowolne, ale może być niezbędne dla świadczenia określonej usługi oferowanej przez Multikino. <br>
6.7.Jeśli wrazisz stosowną zgodę na profilowanie, to wówczas na podstawie informacji historycznych tj. wybieranych przez Ciebie filmów i wydarzeń, na które rezerwowałeś/aś lub kupowałeś/aś bilety, przeglądanych materiałów w Serwisie, informacji które zamieściłeś/aś w swoim profilu Multikino będzie w sposób zautomatyzowany prezentowało Ci spersonalizowaną ofertę np. informacje o filmach, które mogą Cię zainteresować w przyszłości, spersonalizowaną treść serwisu, itd.<br>
<br><br>
7.Pliki cookies

7.1.Jeśli Użytkownik wyrazi stosowną zgodę, pliki cookies zamieszczane w urządzeniu końcowym Użytkownika mogą być wykorzystywane przez współpracujących z nami reklamodawców oraz partnerów biznesowych w celu wyświetlania reklam dostosowanych do preferencji Użytkownika także na innych stronach internetowych. Ci reklamodawcy i partnerzy biznesowi to nasi Zaufani Partnerzy, a ich listę możesz zobaczyć tutaj. Zaufani Partnerzy chcą mieć dostęp do Twoich danych, by móc zaoferować Ci na innych stronach internetowych ofertę naszych filmów, którymi możesz być zainteresowany, Twoje dane posłużą także do analizy, by móc zaprezentować takie oferty osobom podobnym do Ciebie. Pliki cookies mogą być wykorzystywane m.in. do następujących celów:<br>
7.1.1.targetowania Użytkowników, czyli ich selekcji przez Multikino albo Zaufanych Partnerów w celu określenia docelowej grupy odbiorczej, która w największym stopniu jest zainteresowana reklamą danego filmu lub wydarzenia i przekierowywania ich na stronę internetową Multikina, 
7.1.2.retargetowania Użytkowników, czyli emisja reklamy Multikina albo Zaufanych Partnerów tylko tym Użytkownikom, którzy odwiedzili wcześniej stronę docelową (Serwis albo stronę Zaufanego Partnera)<br>
7.1.3.tworzenia profili look alike, czyli poszukiwanie Użytkowników podobnych do naszej grupy Użytkowników poprzez wykorzystanie informacji i wiedzy o nich z zastosowaniem odpowiednich algorytmów, aby znaleźć ich „bliźniaków”, tj. poszukać takich Użytkowników, którzy są najbardziej do nich podobni pod względem zainteresowań, zachowań, intencji (w oparciu o zintegrowane dane z innych kampanii),<br>
7.1.4.po wykonaniu działań z pkt. 7.1.2 i 7.1.3 - kierowanie Użytkowników na stronę internetową Multikina, <br>
7.1.5.analizowania / raportowania efektywności kampanii reklamowych oraz do analizowania przy wykorzystaniu innych danych (np. przez nałożenie danych Netsprint).<br>
7.2.Informujemy, że Serwis zbiera wyłącznie informacje zawarte w plikach cookies, które mogą być łączone z danymi osobowymi np. danymi podawanymi w trakcie rejestracji konta w serwisie multikino.pl.<br>
7.3.Multikino informuje, że pliki cookies wykorzystywane są, poza celami wskazanymi powyżej, w następujących celach:<br>
7.3.1.Dostosowania zawartości Serwisu do Twoich preferencji oraz optymalizacji korzystania ze stron internetowych. W szczególności pliki te pozwalają rozpoznać urządzenie Użytkownika i odpowiednio wyświetlić stronę internetową, dostosowaną do jego indywidualnych potrzeb.<br>
7.3.2.Utrzymania sesji Użytkownika (jeśli jest załogowany), co oznacza, że Użytkownik nie musi na każdej podstronie Serwisu ponownie dokonywać logowania.<br>
7.3.3.Do przechowywania informacji o zaznaczonym (wybranym) kinie.<br>
7.3.4.Logowania poprzez konto Google / Facebook.<br>
7.3.5.Tworzenia statystyk, które stanowią podstawę do analizy, w jaki sposób Użytkownicy korzystają ze stron internetowych.<br>
7.3.6.Wyświetlania reklam Multikina także na innych stronach internetowych poza Serwisem.<br>
7.3.7.Budowanie profilu Użytkownika w oparciu o jego decyzje i aktywność (dotyczy Użytkownika mającego Konto w Serwisie). <br>
7.3.8.Analizowania statusu anonimowego Użytkownika poprzez porównywanie jego adresu e-mail podanego przy kupowaniu lub rezerwowaniu biletu z wcześniej wykorzystywanym adresem e-mail osób, które dokonywały zakupów lub rezerwacji biletów w celu mierzenia efektywności reklamy (poprzez sprawdzenie czy jest to klient nowy czy powracający). 
7.4.Informujemy, że w ramach Serwisu stosowane są dwa rodzaje plików cookies:<br>
7.4.1.Session cookies, czyli pliki tymczasowe, które przechowywane są w urządzeniu końcowym Użytkownika do czasu wylogowania, opuszczenia strony internetowej lub wyłączenia przeglądarki internetowej.<br>
7.4.2.Persistent cookies, czyli pliki, które przechowywane są w urządzeniu końcowym Użytkownika przez czas określony w parametrach plików cookies lub do czasu ich usunięcia przez Użytkownika.<br>
7.5.Multikino informuje, że w ramach Serwisu – ze względu na cel zastosowania - stosowane są następujące typy plików cookies:<br>
7.5.1.Takie, które umożliwiają korzystanie z usług dostępnych w ramach Serwisu, np. uwierzytelniające pliki cookies wykorzystywane do usług wymagających uwierzytelniania w ramach Serwisu.<br>
7.5.2.Takie, które mają na celu zapewnienie bezpieczeństwa np. wykorzystywane do wykrywania nadużyć w zakresie uwierzytelniania w ramach Serwisu.
7.5.3.Takie, które umożliwiają zbieranie informacji o sposobie korzystania ze stron internetowych Serwisu.<br>
7.5.4.Takie, które umożliwiają zapamiętywanie wybranych przez Użytkownika ustawień i personalizację interfejsu Użytkownika np. w zakresie wybranego języka lub regionu, z którego pochodzi Użytkownik.<br>
7.5.5.Takie, które umożliwiają dostarczanie Użytkownikom treści reklamowych bardziej dostosowanych do ich zainteresowań (reklamowe pliki cookies).<br>

7.6.Multikino wskazuje, że oprogramowanie służące do przeglądania stron internetowych (przeglądarka internetowa) może domyślnie dopuszczać przechowywanie plików cookies w urządzeniu końcowym Użytkownika. Użytkownicy mogą w każdym czasie dokonać zmiany ustawień dotyczących plików cookies np. w taki sposób, by blokować automatyczną obsługę plików cookies w ustawieniach przeglądarki internetowej bądź informować Użytkownika o ich każdorazowym zamieszczeniu w jego urządzeniu końcowym.
7.7.Szczegółowe informacje o możliwości i sposobach obsługi plików cookies dostępne są w ustawieniach przeglądarki internetowej. Poniżej podajemy linki do informacji na temat zarządzania plikami cookies udostępnionymi przez następujących producentów przeglądarek internetowych:


Firefox (Mozilla)<br>

Internet Explorer<br>

Chrome<br>

Safari<br>

Opera<br>
<br><br>

7.8.Gdyby któryś z powyższych linków nie działał np. producent przeglądarki przeniósł informacje o cookies na inną podstronę, zawsze możesz skorzystać z wyszukiwarki, by znaleźć stosowne informacje np. wpisując „Safari czyszczenie cookies”.
7.9.Multikino informuje, że stosowanie przez Ciebie ograniczeń w zamieszczaniu plików cookies może wpłynąć na niektóre funkcjonalności dostępne w Serwisie.
<br><br>
8.Korzystanie z Asystenta Multikina/ Asystenta Google

8.1.Jeśli korzystasz z Asystenta Multikina / Asystenta Google, to wówczas Google zbiera i zapisuje informacje o tym, czy korzystałeś już z Asystenta Multikina. W trakcie konwersacji z Asystentem, Google może zebrać dodatkowe dane, takie jak pozwolenie na udostępnienie lokalizacji, informacje, które umożliwią znalezienie interesującej Cię oferty naszego Kina a w tym Kina Partnerskiego. Informacje, które zbiera podczas konwersacji są używane do dostosowania odpowiedzi udzielanych przez Asystenta Multikino.
8.2.Informujemy, że nie przekazujemy danych zbieranych w związku z korzystaniem przez Ciebie z Asystenta Multikina innym podmiotom z wyjątkiem Google świadczącym tę usługę. 
8.3.Informacje na temat usługi Google Asystent znajdziesz tutaj. 
<br><br>
9.Google Analitics

9.1.Nasz Serwis korzysta z Google Analytics, czyli usługi analizowania usług internetowych, oferowanej przez Google. Google Analytics wykorzystuje pliki cookies, które są zapisywane na Twoim komputerze i umożliwiają analizę korzystania przez Ciebie z Serwisu. Uzyskane przez plik cookie informacje dotyczące sposobu korzystania przez Ciebie z Serwisu są zwykle przekazywane na serwery Google i tam zapisywane.
9.2.Możesz zapobiec zapisywaniu plików cookies przez odpowiednie ustawienia w oprogramowaniu przeglądarki (patrz: linki, które podaliśmy powyżej). Zwracamy jednak uwagę, że w takim przypadku nie będziesz mógł w pełni korzystać ze wszystkich funkcji Serwisu. Ponadto możesz zapobiec pobieraniu danych uzyskanych przez plik cookie i odnoszących się do Twojego sposobu korzystania z Serwisu (łącznie z adresem IP) przez Google, a także przetwarzaniu tych danych przez Google, jeśli pobierzesz i zainstalują wtyczkę do przeglądarki, dostępną pod następującym linkiem: tools.google.com/dlpage/gaoptout.<br>
9.3.Nasz Serwis korzysta z funkcji anonymizeIP w Google Analytics. Oznacza to, że adresy IP są przetwarzane dalej po skróceniu, aby wykluczyć możliwość odniesienia ich do konkretnych osób. Jeśli w przypadku danych osobowych zebranych na Twój temat możliwe jest odniesienie ich do konkretnej osoby, takie odniesienie jest od razu wykluczane, a dane osobowe są niezwłocznie usuwane.
9.4.Korzystamy z Google Analytics w celu analizowania korzystania z Serwisu oraz jej regularnego usprawniania. Dzięki uzyskanym statystykom możemy poprawiać naszą ofertę i uczynić ją bardziej interesującą dla Ciebie. Podstawę prawną dla korzystania z Google Analytics stanowi art. 6 ust. 1 lit. f RODO.
9.5.Politykę prywatności firmy Google znajdziesz pod tym linkiem: https://policies.google.com/privacy?hl=pl. Pamiętaj, że Google co jakiś czas zmienia tę politykę, dlatego każdorazowo upewnij się, że jest to aktualna wersja.
<br><br>
10.Boty Messengera (Facebooka)

10.1.Bot Messenger na Facebooku to program, który w naszym imieniu odpowiada na wiadomości wysyłane do profilu Multikina na Facebooku. Nie są to automatyczne odpowiedzi, ponieważ z botem można porozmawiać – albo wybierając dostępne opcje z menu, albo po prostu zadając swoje pytanie.
10.2.Wykorzystywany przez nas bot wyśle Tobie przypomnienie o filmie, ale tylko wtedy, jeśli zrobiłeś rezerwację na stronie www multikina zaznaczając taką opcje w procesie rezerwacji.<br>
10.3.Dane, które pozostawiłeś korzystając z bota, przetwarzane są przez Facebook zgodnie z polityką prywatności tego portalu społecznościowego.<br>
<br><br>
11.Aplikacja mobilna Multikino<br>

11.1.Aplikacja mobilna Multikino (dalej jako „Aplikacja”) jest dostępna dla Użytkowników posiadających telefon komórkowy (lub inne urządzenie mobilne) z dostępem do Internetu z zainstalowanym jednym z oprogramowani: system operacyjny Android albo iOS, w aktualnie wspieranej wersji systemu określonej we właściwym dla systemu sklepie internetowym z aplikacjami: AppStore lub Google Play. Aplikacja jest instalowana na urządzeniach mobilnych, w szczególności na telefonach komórkowych i tabletach i po uprzednim pobraniu Aplikacji przez użytkownika za pośrednictwem sklepu Google Play Store (Android) lub sklepu Apple Appstore (iOS).<br>
11.2.Korzystanie z Aplikacji wymaga posiadania urządzenia mobilnego z systemem iOS lub  Android, o których mowa w pkt. 11.1 oraz połączenia z Internetem w postaci włączonego pakietu transmisji danych lub włączonego połączenia wi-fi.
11.3.W przypadku braku akceptacji na zasady niniejszej Polityki prywatności prosimy nie instalować Aplikacji lub ją odinstalować. Trwałe usunięcie Aplikacji z urządzenia mobilnego jest równoznaczne z zakończeniem korzystania z Aplikacji.
11.4.Aplikacja umożliwia dokonywanie zakupu  biletu do kin działających pod szyldem Multikino. Zakup biletu nie jest możliwy w trybie gościa (bez tworzenia konta) lub poprzez utworzenie konta (jeśli posiadasz już konto w Serwisie, wystarczy użyć tych samych danych do logowania).
11.5.Dane osobowe Użytkownika będą przesyłane pomiędzy kontem utworzonym w Aplikacji a kontem utworzonym (istniejącym) w Serwisie. Będą to, oprócz danych niezbędnych do utworzenia konta, także informacje o historii zakupów. Komunikacja między Aplikacją a Serwisem odbywa się z użyciem mechanizmów szyfrujących.<br>
11.6.Podczas instalacji Aplikacji Użytkownik zostanie poproszony o wyrażenie następujących dobrowolnych zgód: na ustalenie lokalizacji w celu wskazania najbliższego kina oraz na wysyłkę powiadomień typu push, które będą informowały Użytkownika o najnowszych premierach filmowych, promocjach i zniżkach. <br>
11.7.Tworząc konto Użytkownik podaje dane osobowe takie jak adres e-mail, nr telefonu, hasło. Dane te są niezbędne do zawarcia umowy o świadczenie usług drogą elektroniczną polegającą na możliwości korzystania z Aplikacji. Następnie ma możliwość wyrazić zgody, o których mowa w pkt. 3.4.1. – 3.4.5. Wszystkie te zgody mają w pełni dobrowolny charakter.<br>
11.8.Administratorem danych osobowych podanych w Aplikacji jest Multikino S.A. Dane osobowe są udostępniane podmiotom wskazanym na liście Zaufanych Partnerów przy których znajduje się informacja „aplikacja mobilna”. Przy każdym z tych podmiotów znajduje się link do polityki prywatności tego podmiotu.<br>
11.9.Wszystkie pozostałe informacje dotyczące celów i okresów przetwarzania danych, przysługujących Ci uprawnieniach znajdziesz we wcześniejszych rozdziałach niniejszej Polityki prywatności.
11.10.Postanowienia pkt. 11 niniejszej Polityki prywatności mają charakter uzupełniający w stosunku do polityki prywatności Google Play Store i Apple Appstore. Multikino S.A. nie ponosi jakiejkolwiek odpowiedzialności za politykę prywatności realizowaną przez podmioty zarządzające aplikacjami Google Play Store i Apple Appstore oraz przestrzeganie przez nie przepisów RODO w ramach Google Play Store oraz Apple Appstore.<br>
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