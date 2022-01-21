<?php
$data = json_decode(file_get_contents('data.json'), true);
$error = 0;

foreach($data as $row) {
if($error == 0) {
    $certno = $row['certno'];
    $name = $row['name'];
    $trainingdate = $row['trainingdate'];
$html = <<<EOD
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@200&display=swap" rel="stylesheet">
<div class="a4">
    <div class="certno">{$certno}</div>
    <div class="name">{$name}</div>
    <div class="trainingdate">{$trainingdate}</div>
</div>
EOD;

$css = <<<EOD
body {
    margin: 0;
}
.a4 {
    width: 297mm;
    height: 210mm;
    display:block;
    box-sizing:border-box;
    /* border: 1px solid transparent; */
    position: relative;
    background-image:url('https://worldglobal.tv/wp-content/uploads/2022/01/bg.png');
    background-size:297mm 209.825mm;
    /* background-color: red; */
}

.certno {
    position:absolute;
    right: 55pt;
    top: 49.5pt;
    font-family: 'Montserrat', sans-serif;
    font-weight:200;
    text-align:right;
    font-size:12pt;
}
.name {
    position:absolute;
    right: 0;
    top: 312pt;
    font-family: 'Great Vibes', cursive;
    text-align:center;
    font-size: 41.65pt;
    left:-23pt;
    margin-left:auto;
    margin-right:auto;
}

.trainingdate {
    position:absolute;
    right: 0;
    top: 438pt;
    font-family: 'Montserrat', sans-serif;
    font-weight:200;
    text-align:center;
    font-size: 8.68pt;
    left:-10pt;
    margin-left:auto;
    margin-right:auto;
}
EOD;

$google_fonts = "Roboto";

$data = array('html'=>$html,
              'css'=>$css,
              'google_fonts'=>$google_fonts);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://hcti.io/v1/image");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

curl_setopt($ch, CURLOPT_POST, 1);
// Retrieve your user_id and api_key from https://htmlcsstoimage.com/dashboard
curl_setopt($ch, CURLOPT_USERPWD, "89a54225-d1e7-4611-92f1-0637d3f1826a" . ":" . "8136684c-b86e-4326-af58-4ace46a9ac66");

$headers = array();
$headers[] = "Content-Type: application/x-www-form-urlencoded";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$res = json_decode($result,true);
if(isset($res['url'])) {
echo $certno."&#9;".$res['url']."<br/>";
} else {
    $error = 1;
}
// https://hcti.io/v1/image/202dc04d-5efc-482e-8f92-bb51612c84cf
}
}
?>