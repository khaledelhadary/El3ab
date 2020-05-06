<?php
    session_start();
    if ( !isset( $_SESSION['user_id'] ) ) {
    } else {
        header("Location: /El3ab/browse.php");
    }
?>


<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<body>
 <nav class="w3-bar w3-black">
  <a href="http://127.0.0.1:8080/El3ab/register.php" class="w3-button w3-bar-item">Register</a>
  <a href="http://127.0.0.1:8080/El3ab/login.php" class="w3-button w3-bar-item">Login</a>
 </nav>
  <section>
  <img class="ima" src="batl.jpg" style="width:100% ; height:50%" >
  <img class="ima" src="batl2.jpg" style="width:100% ; height:50%">
  <img class="ima" src="cod3.jpg" style="width:100%; height:50%">
  <img class="ima" src="fifa.jpg" style="width:100%; height:50%">
  </section>
  
  <script>
   var myIndex = 0;
   carousel();

  function carousel() {
  var i;
  var x = document.getElementsByClassName("ima");
  for (i = 0; i < x.length; i++) {
  x[i].style.display = "none";
   }
   myIndex++;
   if (myIndex > x.length) {myIndex = 1}
   x[myIndex-1].style.display = "block";
   setTimeout(carousel, 3000);
}
  </script>
    <section class="w3-container w3-center" style="max-width:600px">
  <h2 class="w3-wide">El3b</h2>
  </section>
  
  <section class="w3-container w3-content w3-center" style="max-width:600px">
  <p class="w3-justify">
   We have created a games Store website you can now buy any used games you want by on click .</p>
  </section>
  <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="#"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-pinterest-p"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-flickr"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>

  </footer>


</body>
</html>