<?php
    $c = mysqli_connect("localhost", "root", "", "");

    if (mysqli_connect_errno() != 0) {
        $msg = mysqli_connect_error();
        echo "Erro". $msg;
    }
?>