<?php
    $servername = "localhost";/* since using xampp, if hosted elsewhere then hostname or ipaddress */
    $username ="root";/* local like xampp usually root, if not then username ambot sa bagtak sa lamok */
    $password ="";/*for local empty if not then yaay password */
    $db_name = "database1";
    $conn = new mysqli($servername, $username, $password, $db_name,3306);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }else{
        echo "Connnect Successful";
    }

?>