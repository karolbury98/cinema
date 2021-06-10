<?php
session_start();
include 'dbconnect.php';


if(isset($_GET['id_reservation'])) 
  {
    $id_res=intval($_GET['id_reservation']);
   if($id_res>0) 
    { 
        $sql="DELETE FROM reservations WHERE id_reservation=$id_res"; 
       
      $res = $con->prepare($sql);
      $res->execute();
    
        header("location: edytrezerwacje.php");
    }
    else 
    {
      print "Wybrana rezerwacja nie istnieje w bazie.";
        header("location: edytrezerwacje.php");
    }
  }

?>