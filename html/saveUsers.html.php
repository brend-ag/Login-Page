<!DOCTYPE html>
<html>
<body>
  <?php include "../php/myLib.php"; ?>

Welcome <?php echo $_POST['username'] . "<br>";?>
Your password is: <?php echo $_POST["password"]; ?>

<?php
  ini_set('display_errors','On');
  error_reporting(E_ALL);

  $userNum = 0;
  writeUsers("../output/users.txt",$userNum);
?>

<p> Thank you to <a href="https://stackoverflow.com/questions/7578350/fwrite-not-writing">
  this</a> link for help with fwrite and logging issues. </p>
</body>
</html>
