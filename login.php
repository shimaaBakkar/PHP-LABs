<?php
session_start();

$flog= empty(fopen("log.txt","a+"))?"":fopen("log.txt","a+");

fwrite($flog,implode(",",isset($_SESSION["users"])?$_SESSION["users"]:"").PHP_EOL);

fclose($flog);

$lines = file("log.txt");

foreach($lines  as $line)
{

    $wordInLine = explode(",",$line);
 
   foreach( $wordInLine as $key => $value){
  switch ($key){
      case 0:
      $key="Visit Date";
      break;
      case 1:
      $key="Ip Address";
      break;
      case 2:
      $key="Email";
      break;
      case 3 :
      $key ="Name";
        default;
  }

    echo "<strong>$key => $value </strong> </br>";

   }
   echo"<hr>";
}

