<?php
    include "connect_db.php";

    session_start();

    $email = $_SESSION['mail'];
    $t_name = $_SESSION['t_name'];

    if (!isset($_SESSION['mail'])) {
        header("Location: ../index.php");
    }
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

    <div class="navbar-fixed">
        <nav class="blue-grey darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="../index.php" class="brand-logo">Creative</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down"> 
                        <li>
                            <a class="waves-effect waves-light deep-purple accent-3 btn" href="logout.php"><i class="material-icons left">logout</i>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li>
            <a class="waves-effect waves-light deep-purple accent-3 btn" href="Login/login.php"><i class="material-icons left">login</i>Login</a>
        </li>
    </ul>

    <div class="container">
        <h2> My Tasks </h2>

        <!-- Take user input -->
        <form action="save.php" method="post" autocomplete="off">
            <div class="row">
                <div class="col s12 m4 l4">
                    <input type="text" name="task" required placeholder="Task">
                </div>

                <div class="col s12 m4 l4">
                    <input type="text" name="status" required placeholder="Status">
                </div>

                <div class="col s12 m4 l4">
                    <input type="date" name="date" required>
                </div>
            </div>
            <input type="submit" value="Save" class="btn blue">
        </form>

        <!-- Displays the inserted to-do lists -->
        <table>
            <th> Task </th>
            <th> Status </th>
            <th> Date </th>
            <th> Edit </th>
            <th> Delete </th>
            <?php
                $query = "SELECT * FROM `to_do_list`.`$t_name`";
                $data = mysqli_query($con,$query);
                $total = mysqli_num_rows($data);
          
                if ($total != 0) {                                        
                  while ($result = mysqli_fetch_assoc($data)) { 
                    echo "
                        <tr>
                            <td> ".$result['task_name']."</td>
                            <td> ".$result['status']."</td>
                            <td> ".$result['date']."</td>
                            <td> <a href='edit.php?id=".$result['id']."'><i class='material-icons'>edit</i></a> </td>
                            <td> <a href='delete.php?id=".$result['id']."' onclick='return alert()'><i class='material-icons red-text'>delete</i></a> </td>
                        </tr>
                    ";
                  }
                }
            ?>
        </table>
    </div>

    <script>
        function alert()
        {
            return confirm("Do you want to delete this task?")
        }
    </script>

</body>

</html>

