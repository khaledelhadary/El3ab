<?php
    session_start();
?>

<html>
    <head>
        <title> Insert Game Page </title>
        <link rel="stylesheet" href="insertGameCSS.css">
    </head>

    <body style="background-image: url(bk.png)">
        <?php
            if ( isset( $_SESSION['user_id'] ) ) {
            } else {
                header("Location: http://localhost/El3ab/browse.php");
            }
        ?>
        <div class="wrapper">
            <?php
            require_once ("class.layout.php");
            $var = new myMenu();
            $var->printMenu();
            ?>

            <form action="insertGame.php" method="POST" name="main" class="_form" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td>
                            <label class="lbl"> Game Name: </label>
                        </td>
                        <td>                            
                            <input class="txt" type="text" name="gameName" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="lbl"> Description: </label>
                        </td>
                        <td>
                            <textarea id="txtarea" class="txt" type="text" name="description" > </textarea>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            <label class="lbl"> Category: </label>
                        </td>
                        <td>
                            <input class="txt" type="number" name="category" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="lbl"> Quantity: </label>
                        </td>
                        <td>
                            <input class="txt" type="number" name="quantity" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="lbl"> Price: </label>
                        </td>
                        <td>
                            <input class="txt" type="number" name="price" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input id="file" class="txt" type="file" name="imagePath" onchange="loadFile(event)" />
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <center>
                            <img id="output"  name="image" src="#" />
                            </center>
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2" >

                            <input id="submitbtn" type="submit" value="Submit"/>
                        </td>
                    </tr>

                    <script src="insertGame.js"></script>
                </table>
            </form>
        </div>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST")
	        {
                require_once ("class.connect.php");

                $con = new mySQL();
                $con->connect();
                $_gameNAME = $_POST["gameName"];
                $_gameCategory = $_POST["category"];
                $_gameDescription = $_POST["description"];
                $_gameQuantity = $_POST["quantity"];
                $_gamePrice = $_POST["price"];
                $_gameImage = $_FILES["imagePath"]["name"];
                
                $stmt = $con->query("INSERT INTO games (UserID, GameName, Category, Description, Quantity, Price, GameImage) VALUES (".$_SESSION['user_id'].",'".$_gameNAME."','".$_gameCategory."','".$_gameDescription."',".$_gameQuantity.", " .$_gamePrice.", '".$_gameImage."' )");
                $con->close();
                
                
                header("Location: /El3ab/manage.php");
            }
         ?>
    </body>
</html>