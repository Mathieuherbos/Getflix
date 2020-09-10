<?php

$dbServer = 'sql100.epizy.com';
//$dbServer = "185.27.134.10";
$dbUserName = "epiz_26591763";
$dbPw = "nNU2fD6vzKC";
$port="3306";
$dbName = "epiz_26591763_catflix";

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