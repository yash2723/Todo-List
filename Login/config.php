<?php 

    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "to_do_list";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn) {
        die("<script>alert('Connection Failed.')</script>");
    }

?>