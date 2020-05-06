<?php
    class myMenu{
        public function printMenu()
        {

            echo("<div class='siteHeader'>
            <img id='logo' src='lgo.png'/>
            <form id ='search' action='http://127.0.0.1:8080/El3ab/search.php' method='GET'>
                <input type='text' name='gameName'>
                <input type='submit' value='Search'>
            </form>
            </div>
            <div class='menu'>
            <a href='http://127.0.0.1:8080/El3ab/index.php'>Home</a>");
        
                if ( isset( $_SESSION['user_id'] ) ) {
                    echo("<a href='http://127.0.0.1:8080/El3ab/manage.php'>Manage</a>");
                    echo("<a href='http://127.0.0.1:8080/El3ab/purchases.php'>Purchases</a>");
                    echo("<a href='http://127.0.0.1:8080/El3ab/logout.php'> Logout </a>");
                } else {
                    echo("<a href='http://127.0.0.1:8080/El3ab/register.php'>Register</a>");
                    echo("<a href='http://127.0.0.1:8080/El3ab/login.php'>Login</a>");
                }
            echo("<a>Contact us</a></div>");
        }
        public function printMenuManage(){
            echo("<div class='siteHeader'>
            <img id='logo' src='lgo.png'/>
            <form id ='search' action='http://127.0.0.1:8080/El3ab/search.php' method='GET'>
                <input type='text' name='gameName'>
                <input type='submit' value='Search'>
            </form>
            </div>
            <div class='menu'>
            <a href='http://127.0.0.1:8080/El3ab/index.php'>Home</a>");
            echo("<a href='http://127.0.0.1:8080/El3ab/manage.php'>Manage</a>");
            echo("<a href='http://127.0.0.1:8080/El3ab/insertGame.php'>Sell Game </a>");
            echo("<a href='http://127.0.0.1:8080/El3ab/purchases.php'>Purchases</a>");
            echo("<a href='http://127.0.0.1:8080/El3ab/logout.php'> Logout </a>");
            echo("<a>Contact us</a></div>");
        }
    }
?>