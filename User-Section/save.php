<?php

    include "connect_db.php";

    session_start();

    $email = $_SESSION['mail'];
    $t_name = $_SESSION['t_name'];

    $task = $_POST['task'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    $sql = "INSERT INTO `to_do_list`.`$t_name` (`task_name`, `status`, `date`) VALUES ('$task', '$status', '$date')";

    if($con->query($sql) == true)
    { 
        header("location: ./index.php");
        // echo "Success";
    }
    else
    {
        echo "Error";
    }

    $con->close();

?>