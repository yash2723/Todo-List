<?php

    include 'connect_db.php';

    session_start();

    $email = $_SESSION['mail'];
    $t_name = $_SESSION['t_name'];

    $id = $_GET['id'];

    $query = "SELECT * FROM `to_do_list`.`$t_name` WHERE id='$id' ";
    $data = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To - do List</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <nav class="blue"> </nav>

    <div class="container">
        <h2> Edit Task </h2>

        <!-- Take user input -->
        <form action="update.php" method="post" autocomplete="off">
            <div class="row">
                <div class="col s12 m4 l4">
                    <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                    <input type="text" name="task" required placeholder="Task" value="<?php echo $result['task_name'] ?>">
                </div>

                <div class="col s12 m4 l4">
                    <input type="text" name="status" required placeholder="Status" value="<?php echo $result['status'] ?>">
                </div>

                <div class="col s12 m4 l4">
                    <input type="date" name="date" required value="<?php echo $result['date'] ?>">
                </div>
            </div>
            <input type="submit" value="Edit" class="btn blue">
        </form>
    </div>

</body>
</html>