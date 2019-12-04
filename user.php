<?php

//Retorna el nombre del usuario
//parametros: u=[user_id]
$server="localhost";
$user="redes_sysop";
$pass="zteP47p3xjZjj67U";
$dbname = "clase_redes";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

//obtener id sanitizado (evita inyecciones SQL)
$id = mysqli_real_escape_string($conn, $_GET['u']);

$query = "SELECT name FROM user WHERE id=".$id;
$result = mysqli_query($conn, $query);

if( mysqli_num_rows($result) > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row["name"];
    }
}
else
{
    echo "ERROR: user does not exist";
}

?>
