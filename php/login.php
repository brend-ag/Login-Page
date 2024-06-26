<?php
include "../php/loginLib.php";
ini_set('display_errors','On');
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $userNum = 0;
//  writeUsers("../output/users.txt",$userNum);
//  $userFile = fopen("../output/users.txt","r");
//  $line = fgets($userFile); //Obtains each line in the file
//  $lineArr = explode(" ", $line); //Creates elements out of anything between spaces

  $userName= $_POST['uname'];
  $pwd = $_POST['psw'];
  $usersarray = array();
  array_push($usersarray, $userName, $pwd);
  echo $usersarray;

  $jsonuser = json_encode($usersarray);

  if (file_put_contents("../output/users.json", $jsonuser)){
      echo "JSON file created successfully...";
  else
      echo "Oops! Error creating json file...";
}

?>
