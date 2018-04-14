<?php
require "./conexion.php";
require "./assignment.php";

echo '<link rel="stylesheet" href="../index.css">';

if ( isset($_POST['submitB']) )
{
    $sql = 'SELECT * FROM usuraio WHERE '.$ci."=ci";
 
    $register = mysqli_query($conexion, $sql);
    echo '<div class="formI">';
    echo "<h1>Datos del usuario: </h1>" ;
        echo '<div class="group">';
    while( $reg = mysqli_fetch_array($register) )
    {
        echo "Cedula ". $reg['ci']."<br>".PHP_EOL;
        echo "Nombre ". $reg['nombre']."<br>".PHP_EOL;
        echo "Apellido ". $reg['apellido']."<br>".PHP_EOL;
        echo "Usuario ". $reg['usuario']."<br>".PHP_EOL;
        echo "Contrasena ". $reg['contrasena']."<br>".PHP_EOL;
        echo "Correo ". $reg['email']."<br>".PHP_EOL;
    }
    echo "</div>";

    $sql = 'SELECT * FROM materias WHERE '.$ci."=ci";
 
    $register = mysqli_query($conexion, $sql);

    echo "<h2>Materias inscritas:</h2>";
    echo '<div class="group" style="text-align: center">';
    while( $reg = mysqli_fetch_array($register) )
    {
        if($reg['logica'] == 1 ) echo "Logica <br>";
        if($reg['teleprocesos'] == 1 ) echo "Teleprocesos <br>";
        if($reg['c'] == 1 ) echo "Lenguaje C <br>" ;
        if($reg['electiva'] == 1 ) echo "Electiva <br>" ;
        if($reg['estadistica'] == 1 ) echo "Estadistica <br>" ;
        if($reg['matematicas'] == 1 ) echo "Matematicas <br>" ;
    }
    echo "</div>";
    echo "</div>";
}
else if (isset($_POST['submitA']))
{

    $sql = "INSERT INTO usuraio (ci,nombre,apellido,usuario, contrasena, email) 
    VALUES ('$ci','$name','$last','$user','$cont','$email')";
    $register = mysqli_query($conexion, $sql)
    or die ("Error en Usuarios");

    echo "<h2>Se cargo USUARIO con exito </h2><br>";

    $sql = "INSERT INTO materias (ci,logica,teleprocesos,c,electiva,estadistica,matematicas)
    VALUES ('$ci','$logica','$teleprocesos','$c','$electiva','$estadistica','$matematicas')";
    $register = mysqli_query($conexion, $sql)
    or die ("Error en materia");

    echo "<h2>Se cargo MATERIAS con exito</h2> <br>";
}
else if ( isset($_POST['submitE']) )
{
    $sql = "DELETE FROM usuraio WHERE ci = $ci";
    $register = mysqli_query($conexion, $sql)
    or die ("Error!!");

    echo "<h2>Se ha borrado el usuario de cedula $ci</h2>";

    $sql = "DELETE FROM materias WHERE ci = $ci";   
    $register = mysqli_query($conexion, $sql)
    or die ("Error tipo 2!!");
}
else
    echo "Hola mama";

mysqli_close($conexion);

?>
