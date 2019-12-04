<?php

//Altera el score para el usuario dado
//parametros: u=[user_id] s=[new_score]
$server="localhost";
$user="redes_sysop";
$pass="zteP47p3xjZjj67U";
$dbname = "clase_redes";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

//obtener id y new score sanitizado (evita inyecciones SQL)
$id = mysqli_real_escape_string($conn, $_GET['u']);
$new_score = mysqli_real_escape_string($conn, $_GET['s']);


$query = "UPDATE user SET xp=".$new_score." WHERE id=".$id  ;
$result = mysqli_query($conn, $query);

if( $result )
{
        echo "Score actualizado";
}
else
{
    echo "ERROR: ". mysqli_error($conn);
}

?>
