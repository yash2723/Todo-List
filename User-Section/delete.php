<?php

    include 'connect_db.php';

    session_start();

    $email = $_SESSION['mail'];
    $t_name = $_SESSION['t_name'];

    $id = $_GET['id'];

    $sql = "DELETE FROM `to_do_list`.`$t_name` WHERE `$t_name`.`id`='$id'";
                
    if($con->query($sql) == true)
        header("location: ./index.php");
    else
        echo "Error ";

        $con->close();

?>