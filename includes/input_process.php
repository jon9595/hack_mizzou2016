<?php
  include 'db.php';
  $verb = $_SERVER['REQUEST_METHOD'];
  $request = file_get_contents('php://input'); //reading in the passed json then decoding it on the next line
  $arr = json_decode($request);

  
?>
