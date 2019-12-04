<?php

$server="localhost";
$user="redes_sysop";
$pass="zteP47p3xjZjj67U";
$dbname = "clase_redes";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT last_name, name, xp, id FROM user ORDER BY last_name ";
$result = mysqli_query($conn, $query);

if( mysqli_num_rows($result) > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "ID: ".$row["id"]
            ." ".$row["name"]
            ." ".$row["last_name"]
            ." (XP: ".$row["xp"].")"
            ."<br>";
        //echo $row["last_name"]."<br>";
    }
}
else
{
    echo "0 resultados.";
}

?>
