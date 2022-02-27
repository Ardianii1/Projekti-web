<?php

    $server = "sql202.epizy.com";
    $username = "epiz_30946575";
    $password = "9Dfg3Rkggdh6bd";
    $dbname = "epiz_30946575_xtreme";

    $conn = mysqli_conncet($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection Falied:".mysqli_conncet_error());
    }



?>