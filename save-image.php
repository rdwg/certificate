<?php 
 $data = $_REQUEST['data'];
    $rawImage =$data;
$removeheaders =substr($rawImage,strpos($rawImage,",")+1);
$decode = base64_decode($removeheaders);
    $fopen =fopen('newfile.png','wb');
fwrite($fopen,$decode);


   $arr = array('data' => 'newfile.png','username' => $username );
echo json_encode($arr);


 ?>