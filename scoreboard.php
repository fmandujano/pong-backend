<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Multiplayer Pong</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="scoreboard">
<?php

$server="localhost";
$user="redes_sysop";
$pass="zteP47p3xjZjj67U";
$dbname = "clase_redes";

echo "<h1>TOP SCORES</h1>";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM user ORDER BY xp DESC LIMIT 10";
$result = mysqli_query($conn, $query);

if( mysqli_num_rows($result) > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row["name"]." - ".$row["xp"]."<br>";
    }
}
else
{
    echo "0 resultados.";
}

?>
</div>
<div class="footer">
    <a href="./index.html">HOME/INICIO</a>
</div>
</body>
</html>
