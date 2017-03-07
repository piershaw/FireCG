


<?php
 if (isset($_POST['filename']) && isset($_POST['textcontent'])) {

$fh = fopen($_POST['filename'], 'w') or die('result=false' );

fwrite($fh, $_POST['textcontent']);

fclose($fh);

$page = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$page = substr($page,0,strrpos($page,'/'));

echo 'result = true & path='.urlencode('http://'.$page.'/'.$_POST['filename']); // to see it use POST 
 
} else echo 'result=false'; 

/* 
$entry=$_POST["textcontent"] 
$file="data.txt"; 
$open=fopen($file,"a"); 

if($open){         
    fwrite($open,$entry); 
        fclose($open); 
}  */

/* $myFile = "testFile.txt";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = "Floppy Jalopy\n";
fwrite($fh, $_POST['textcontent']);
$stringData = "Pointy Pinto\n";
fwrite($fh, $stringData);
fclose($fh);
 */


//new 

/* //#1st POST variable
$fileName = $_POST["filename"];
//#2nd POST variable
$textcontent = $_POST["textcontent"];
//#remove backslashes from xml string (skip this for plain text)
$lastBackslashPos = strpos ($xmlContents, “\\”);
while($lastBackslashPos >0){
$textcontent = substr($textcontent,0,$lastBackslashPos)
.substr($textcontent,$lastBackslashPos+1,strlen($textcontent));
$lastBackslashPos = strpos ($textcontent, “\\”);
}
//#write xml data to file on server
$fh = fopen($fileName, “w”);
fwrite($fh, $textcontent);
fclose($fh); */


?> 
