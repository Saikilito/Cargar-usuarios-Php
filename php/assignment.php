<?php
if(isset($_POST["submitA"]))
{
    $ci    = $_POST['ciA'];
    $name  = $_POST['name'];
    $last  = $_POST['last'];
    $user  = $_POST['user'];
    $cont  = $_POST['cont'];
    $email = $_POST['email'];

    $logica       = (isset($_POST["logica"])) ? 1 : 0 ;
    $teleprocesos = (isset($_POST["tele"]))   ? 1 : 0 ;
    $c            = (isset($_POST["c"] ))     ? 1 : 0 ;
    $electiva     = (isset($_POST["elect"] )) ? 1 : 0 ;
    $estadistica  = (isset($_POST["estad"] )) ? 1 : 0 ;
    $matematicas  = (isset($_POST["mat"] ))   ? 1 : 0 ;
}
else if ( isset($_POST["submitB"]) )
{
    $ci = $_POST["ciB"];
}
else if ( isset($_POST["submitE"]) )
{
    $ci = $_POST["ciE"];
}
?>