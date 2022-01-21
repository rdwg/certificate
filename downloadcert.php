<?php
//Get the file
$content = file_get_contents($_GET['certificate']);


//Store in the filesystem.
$fp = fopen("/location/to/save/image.jpg", "w");
fwrite($fp, $content);
fclose($fp);
?>