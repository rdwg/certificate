<?php
$data = json_decode(file_get_contents('data.json'), true);
?>

<style>
    body {
        margin: 0;
    }
    .a4 {
        width: 297mm;
        height: 209.825mm;
        display:block;
        box-sizing:border-box;
        /* border: 1px solid transparent; */
        position: relative;
        background-image:url('bg.png');
        background-size:297mm 209.825mm;
        /* background-color: red; */
    }

    .certno {
        position:absolute;
        right: 55pt;
        top: 49.5pt;
        font-family: "Montserrat ExtraLight";
        text-align:right;
        font-size:12pt;
    }
    .name {
        position:absolute;
        right: 0;
        top: 315pt;
        font-family: "Great Vibes Regular";
        text-align:center;
        font-size: 41.65pt;
        left:-23pt;
        margin-left:auto;
        margin-right:auto;
    }

    .trainingdate {
        position:absolute;
        right: 0;
        top: 440pt;
        font-family: "Montserrat ExtraLight";
        text-align:center;
        font-size: 8.68pt;
        left:-10pt;
        margin-left:auto;
        margin-right:auto;
    }
</style>
<?php
$count = 0;
foreach($data as $row) { $count++; if($count < 20) { ?>
<title>Certificate of <?php echo $row['name']; ?> - World Global
<div class="a4">
    <div class="certno"><?php echo $row['certno']; ?></div>
    <div class="name"><?php echo $row['name']; ?></div>
    <div class="trainingdate"><?php echo $row['trainingdate']; ?></div>
</div>
<?php } } ?>