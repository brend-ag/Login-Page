<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login.css">
  <?php include "../php/loginLib.php"; ?>
</head>
<body>

  <h2>Modal Login Form</h2>

  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

  <div id="id01" class="modal">

<!--    <form class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> -->
    <form class="modal-content animate" action="../php/login.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="images/icon.jpg" alt="Avatar" class="avatar">
      </div>

      <!--Div for username, password, and submit -->
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

      <!--  <button type="submit">Login</button>-->
        <input type="submit" value="Submit">

        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>


<!--<?php
  ini_set('display_errors','On');
  error_reporting(E_ALL);

  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $userNum = 0;
    writeUsers("../output/users.txt",$userNum);
    $userFile = fopen("../output/users.txt","r");
    $line = fgets($userFile); //Obtains each line in the file
    $lineArr = explode(" ", $line); //Creates elements out of anything between spaces

    echo var_dump($lineArr);
  }
?> -->

<script src="../js/login.js"></script>
<script>
  // Get the modal
  var modal = document.getElementById('id01');
  outsideClick();

</script>


</body>
</html>
