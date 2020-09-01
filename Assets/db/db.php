<?php

$dbServer = 'localhost';
$dbUserName = "root";
$dbPw = "oomMsuEtWw7uevMZ";
$dbName = "userdb_2";

$connection = mysqli_connect($dbServer, $dbUserName, $dbPw, $dbName);

//check connection

if ($connection === false){
    echo "Connection error";
}
// else {
//     echo "connected to database";
//     echo "<br><br>";
// }



?>