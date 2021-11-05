<?php
    $host = "localhost";
    $user = "id17823243_admin";
    $pass = "}n>3NrE[V\dHs1GC";
    $name = "id17823243_uts";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_error()){
        echo "failed to connect to MySQL : " .mysqli_connect_error();
    }
?>