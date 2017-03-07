


<?php
if (isset($_POST['filename']) && isset($_POST['textcontent'])) {

$fh = fopen($_POST['filename'], 'w') or die('result=false' );

fwrite($fh, $_POST['textcontent']);

fclose($fh);
$page = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$page = substr($page,0,strrpos($page,'/'));

//print 'result=true&path='.urlencode('http://'.$page.'/'.$_GET['filename']); // to see it use POST 

} else echo 'result=false';
?>
