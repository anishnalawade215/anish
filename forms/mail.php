<?php
$to = "ayush.tinkhede1722@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "Fromanishnalawade215@gmail.com" . "\r\n" .
"CC: anishnalawade215@gmail.com.com";

mail($to,$subject,$txt,$headers);
?>
