<?php  
 
  header("Access-Control-Allow-Origin: *");
  
  $localIP = $_SERVER['REMOTE_ADDR'];

  print_r($localIP);

?>
