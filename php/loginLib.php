<?php
/**
* @param pathStr An input string that provides a path to some folder
*/
function extractFolderNumber($pathStr){
    /*Extracts the last two characters of the basename and stores it in labNrString*/
    $labNrString = substr($pathStr, -2);

    /*Contains the length of labNrString and declares areInts as a counter of
      each character in labNrString that are ints*/
    $labNrLength = strlen($labNrString);
    $areInts = 0;

    /*Loops through labNrString to check if both characters are digits by incrementing
    the counter for the length of the string. */
    for($i = 0; $i < $labNrLength; $i++){
      if(is_numeric($labNrString[$i])){
        $areInts++;
      }
      else {
        echo "Sorry, this is not an int. <br>";
      }
    }

    /*Converts the string to an integer if both characters are digits, saving
      the string in labNr*/
    if ($areInts == 2){
      $labNr = (int)$labNrString;
    }
    return $labNr;
}

/**
* @param txtFile An input string that provides a path to the text file that will be written into with user information
* @param userNumber The initial number of users
*/
function writeUsers($txtFile, $userNumber){
  $file = fopen($txtFile,"ab");
  if (false==$file){
    throw new RuntimeException("Unable to open log file for writing");
  }

  $userName= $_POST['uname'];
  $pwd = $_POST['psw'];

  fwrite($file, $userName . " ");
  fwrite($file, $pwd . "\n");
  $userNumber++;
}

/* Displays the current users and their passwords by reading the users.txt file
and outputting to admin.html.php
*/
function displayUsers(){
    $userFile = fopen("../output/users.txt","r");
    if(isset($_POST['submit'])){
      //Output lines until EOF is reached
      while(! feof($userFile)) {
        $line = fgets($userFile); //Obtains each line in the file

        //Checks if the line is empty. If it is, it continues so as not to print the empty line
        if (trim($line) == ""){
          continue;
        }
        //If the line is not empty, then the line will be printed
        else{ echo $line. "<br>"; }
      }
    }

}

function checkUsers(){
  /*Retreiving information from within the file*/
    $userFile = fopen("../output/users.txt","r");
    $returnStr = '';
    if(isset($_POST['submit'])){
      //Output lines until EOF is reached
    //  while(! feof($userFile)) {
        $line = fgets($userFile); //Obtains each line in the file
        $lineArr = explode(" ", $line);
        echo var_dump($lineArr);
    //    $lineArrLength = count($lineArr); //broke code!!!!!

      //  else{
    /*      for($i = 0; $i < $lineArrLength); $i++){
            if (empty($lineArr[$i])){
                continue;
            }
            elseif (($_POST['uname']) == ($lineArr[$i])){
              $returnStr .="Usernames match!";
            }
            elseif (($_POST['psw']) == ($lineArr[$i])){
              $returnStr .="Passwords match!";
            }
            else{ $returnStr .= "No match :("; }
          }
          //echo $line. "<br>";
    //    }*/
    //  }
    }
  //  return $returnStr;
}
?>
