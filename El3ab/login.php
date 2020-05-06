<?php
    session_start();
?>

<html>
    <head>
        <title>login </title>
        <link rel="stylesheet" href="insertGameCSS.css">
    </head>
    <body style="background-image: url(bk.png)">
        <?php
            if ( !isset( $_SESSION['user_id'] ) ) {
            } else {
                header("Location: /El3ab/browse.php");
            }
        ?>
        
        <div class="wrapper">
            <?php
                require_once ("class.layout.php");
                $var = new myMenu();
                $var->printMenu();
            ?>
            <form action="" method="post" class='games'>
                <input type="text" name="email" placeholder="Email: " required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Submit">
            </form>
        </div>
        
        <?php
        if ( ! empty( $_POST ) ) {
            if ( isset( $_POST['email'] ) && isset( $_POST['password'] ) ) {
                // Getting submitted user data from database
                require_once ("class.connect.php");

                $con = new mySQL();
                $con->connect();
                $stmt = $con->query("SELECT * FROM users WHERE email = '" . $_POST['email'] ."'");

                $array = $con->fetch($stmt);

                $textPassword = $_POST['password'];
                $dbPassword = $array[2];

                if ( $textPassword == $dbPassword ){
                    $_SESSION['user_id'] = $array[0];
                    header("Location: http://127.0.0.1:8080/El3ab/browse.php");
                }
                else{
                    echo ("<center><h3>Wrong Password!</h3></center>");
                }
            }
        }
        ?>
    </body>

</html>