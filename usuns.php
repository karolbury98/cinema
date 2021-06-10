<?php
session_start();
include 'dbconnect.php';


if(isset($_GET['id_movie'])) 
  {
    $id_movie=intval($_GET['id_movie']);
   if($id_movie>0) 
    { 
        $sql="DELETE FROM movies WHERE id_movie=$id_movie"; 
        $res = $con->prepare($sql);
        $res->execute();
    
        header("location: dodajseans.php");
    }
    else 
    {
      print "Wybrany seans nie istnieje w bazie.";
        header("location: dodajseans.php");
    }
  }

?>