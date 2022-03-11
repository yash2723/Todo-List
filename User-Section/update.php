<?php

    include "connect_db.php";

    session_start();

    $email = $_SESSION['mail'];
    $t_name = $_SESSION['t_name'];

    $id = $_POST['id'];
    $task = $_POST['task'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    $sql = "UPDATE `to_do_list`.`$t_name` SET `task_name`='$task', `status`='$status', `date`='$date' WHERE `$t_name`.`id`='$id'";
                
    if($con->query($sql) == true)
        header("location: ./index.php");
    else
        echo "Error ";

    $con->close();

?>