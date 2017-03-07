<?php
  
  $content = $_POST[post['content'];
  $filename = $_POST['filename'];
  
  /* $content = stripslashes($content); */ //for XML
  
  $writeFile = fopen($file, "w");
  
  echo $content;
  
  fclose($writeFile);
  
?>
