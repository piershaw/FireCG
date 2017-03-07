<?php

// grab the text that was POSTed to the saveText.php page
$myText = $_POST['text'];

// name of the file to be written to
$fileName = $_POST['filename'];

// our file handler
$fileHandle = fopen($fileName, 'w') or die("ERROR: cannot open file");

// write the text into the file
fwrite($fileHandle, $myText);

// close the file back up again
fclose($fileHandle);

echo $myText;
echo "its running";

?>