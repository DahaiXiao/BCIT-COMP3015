<!DOCTYPE html>
<html>

<head>
  <meta charset ="utf-8">
  <title>Form Processing Basics</title>
</head>

<body>
  <h1>LAB 2 </h1>

<?php
  const MINIMUM_NAME_LENGTH =2;
  const DEFAULT_PASSWORD ="bcit";

    $username=" ";
    $password=" ";
    $studentnum=" ";
    $gender=" ";
    $language=" ";


/*
---------------------------------------------------------------------
determine if the data exists: use isset( )
all the fiedls should be filled or selected
*/


if(!isset($_POST['username'])||!isset($_POST['password'])|| !isset($_POST['studentnumber'])  
|| !isset($_POST['gender']) ||!isset($_POST['languages']) ){

 die ("<p>stop processing. Fields must be filled or selected</p>");//if anything not chosen or filled 

}

//normalize data with trim()
$username=trim($_POST['username']);
$password=trim($_POST['password']);
$studentnum=ucfirst(trim($_POST['studentnumber']));//first letter is a capital letter

//username field must be 2 character or more

if(strlen($username)< MINIMUM_NAME_LENGTH){

    die ("<p>username must be greater than 2 character</p>");

}
//password field must match the lower case "bcit"

if($password!=DEFAULT_PASSWORD){
  die("<p>stop processing. password is not correct</p>");

}

//student number must match bcit student number pattern A0nnnnnnn

if(!preg_match("/^[A][0]\d{7}$/", $studentnum)) {
   echo "Student number error! must start with A0, 9 digits, beside the first letter, the rest all digits.";
    }
    else{

     //if choose male or femle
    if($gender =='female'){
      $genderprefix='Ms.';
    }
    else{

        $genderprefix='Mr.';
    }

    // all input valid

        echo "<h1> Welcome $genderprefix $username !</h1>";


    // and chose more than 2 or 5 languages
    
    echo "<h1>Languages you studied are: </h1><?br>";
   
    foreach($_POST['languages'] as $selected){
    echo "<h1>$selected </h1>";
    }
     
    
    $count = count($_POST['languages']);//count how many languages checked
     
    // if language checkbox were not chosen 
    
    if($count==0){

        echo "<p>You are not studying any computer languages</p>";
    }


    if($count>=2&&$count<5){
    echo "<h1>You are multilingual!!</h1>";
    }
    if($count>=5){ 
        echo "<h1>impressive! You have been styding quite a few computing languages</h1>";

    }


    }

 

    


?>


  </body>
</html>