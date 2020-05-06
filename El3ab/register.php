<?php
    session_start();
?>
<html>
    <head>
        <title> Registeration Page </title>
        <link rel="stylesheet" href="insertGameCSS.css">
        <link rel="stylesheet" href="registerCSS.css">
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
            <form action="register.php" method="post" name="main" id="regForm">
                <table>
                    <tr>
                        <td>
                            <h1 id="title"> Registration Page </h1>

                            <br>
                            <label class="lbl"> Full Name </label>
                            <input class="txt" type="text" name="fullName" />

                            <br><br>
                            <label class="lbl"> Email </label>
                            <input class="txt" type="text" name="email" />

                            <br><br>
                            <label class="lbl"> Password </label>
                            <input class="txt" type="password" name="password" />

                            <br><br>
                            <label class="lbl"> Confirm Password </label>
                            <input class="txt" type="password" name="cpassword" />

                            <br><br>
                            <label class="lbl"> Gender </label>
                            <select class="txt" name="gender">
                                <option value="male">   Male    </option>
                                <option value="female"> Female  </option>
                            </select>

                            <br><br>
                            <label class="lbl"> Date of Birth </label>
                            <input class="txt" type="date" name="date" />

                            <br><br>
                            <input id="btn" type="submit" value="Register" onclick="#" />
                        </td>
                        <script src="script.js"></script>
                    </tr>
                </table>
            </form>
        </div>
        
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST")
	        {
                require_once ("class.connect.php");

                $con = new mySQL();
                $con->connect();
                
                $fullName   = $_POST['fullName'];
                $email      = $_POST['email'];
                $password   = $_POST['password'];
                $gender     = $_POST['gender'];
                $date       = $_POST['date'];

                $stmt = $con->query("INSERT INTO users ( Name, email, password, Gender, DOB) VALUES( '" .$fullName."','" .$email."','".$password."','".$gender."','".$date."')");
                $con->close();
                
                
                header("Location: /El3ab/browse.php");
            }
        ?>
        
        
    </body>
</html>