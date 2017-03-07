<?php
//this line picks up the POST variable from our editor. The variable name is"message":
$message = stripslashes($_POST["message"]);

//here we filter the message for all custom tags that use the tilde and replace it
$tilde="~";
$chang="'";
$message = str_replace ($tilde, $chang, $message);

//these lines below are your swear filter..adjust as needed

$badwords = Array ("damn", "crap", "fuck", "shit", "fucker", "motherfucker", "asshole", "asswipe", "bastard", "cunt", "fucker", "sod", "whore", "nigger", "bitch", "cockface", "assface", "cock", "suck", "sucking");
$changeto = '****';
$message = str_replace ($badwords, $changeto, $message);
//this looks for our custom quote tag and constructs it's contents as a quote
$quotea="[quote]";
$changea="<font color=\"#336600\"><br><b>................................</b><br></font><font color=\"#336600\">Quoted:</font><b><font color=\"#990000\"><br>";
$message = str_replace ($quotea, $changea, $message);
$quoteb="[/quote]";
$changeb="<br></font><font color=\"#336600\">................................</font></b><br>";
$message = str_replace ($quoteb, $changeb, $message);
//this looks for our custom right justification tags and replaces them with actual tags 
$pr="[pr]";
$change11="<p align='right'>";
$message = str_replace ($pr, $change11, $message);
$prb="[/pr]";
$change12="</p>";
$message = str_replace ($prb, $change12, $message);
//this looks for our custom center justification tags and replaces them with actual tags 
$pc="[pc]";
$change13="<p align='center'>";
$message = str_replace ($pc, $change13, $message);
$pcb="[/pc]";
$change14="</p>";
$message = str_replace ($pcb, $change14, $message);
//this looks for our custom left justification tags and replaces them with actual tags 
$pl="[pl]";
$change15="<p align='left'>";
$message = str_replace ($pl, $change15, $message);
$plb="[/pl]";
$change16="</p>";
$message = str_replace ($plb, $change16, $message);

//this converts any http links to clickable links 

$message = preg_replace( "/(?<!<a href=\")((http|ftp)+(s)?:\/\/[^<>\s]+)/i",
"<a href=\"\\0\" target=\"_blank\"><font color=\"#FF9966\"><u>\\0</u></a></font>", $message );
$message=stripslashes($message);
//this packs it all up for the inbound display
print "&returnMe=$message";


?>