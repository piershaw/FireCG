<?php
  
  //$content = $_POST[post['content'];
  //$file = $_POST['fileName'];
  
  /* $content = stripslashes($content); */ //for XML
  
  $writeFile = fopen($file, "w");
  
  echo $content;
  
  fclose($writeFile);
  
?>
