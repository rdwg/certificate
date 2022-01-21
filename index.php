<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
    integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
    integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
    crossorigin="anonymous"></script>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        position: relative;
        width: 100%;
        text-align: center;
        font-family: 'Poppins';
    }

    .header {
        display: block;
        margin: 50px 10px;
    }

    .logo {
        display: inline-block;
        vertical-align: middle;
    }

    .text {
        display: inline-block;
        text-align: left;
        padding-left: 15px;
        vertical-align: top;
    }

    .text h1 {
        font-weight: 600 !important;
        margin: 0;
        margin-bottom: 5px;
    }

    .text h3 {
        font-weight: 400 !important;
        margin: 0;
    }

    .image {
        width: 100%;
        display: block;
        padding: 0 10px;
    }

    .image>img {
        padding: 10px;
        width: 100%;
        max-width: 900px;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        border-radius: 20px;
    }

    .share {
        margin: 50px 0 150px 0;
    }

    .share a {
        padding: 5px 10px;
        color: white;
        border-radius: 5px;
        margin-right: 10px;
        text-decoration: none;
        margin-bottom: 15px;
        display: inline-block;
    }

    @media only screen and (max-width: 800px) {
        .text {
            margin-top: 10px;
            display: block;
            text-align: center;
        }

        .text h1 {
            font-weight: 600 !important;
            margin: 0;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .text h3 {
            font-weight: 400 !important;
            margin: 0;
            font-size: 1em;
        }
    }

    .col-md-4 {
        margin-bottom: 30px;
    }

    .row {
        padding: 30px 0;
    }
</style>
<style>
    /* ======================== */
    /*   Syed Sahar Ali Raza   	*/
    /* ========================	*/
    @import url(https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900italic,900);
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);

    #generic_price_table {
        background-color: #f0eded;
    }

    /*PRICE COLOR CODE START*/
    #generic_price_table .generic_content {
        background-color: #fff;
    }

    #generic_price_table .generic_content .generic_head_price {
        background-color: #f6f6f6;
    }

    #generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg {
        border-color: #e4e4e4 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e4e4e4;
    }

    #generic_price_table .generic_content .generic_head_price .generic_head_content .head span {
        color: #525252;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign {
        color: #414141;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency {
        color: #414141;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent {
        color: #414141;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .month {
        color: #414141;
    }

    .generic_feature_list {
        padding-bottom: 20px;
    }

    #generic_price_table .generic_content .generic_feature_list ul li {
        color: #a7a7a7;
    }

    #generic_price_table .generic_content .generic_feature_list ul li span {
        color: #414141;
    }

    #generic_price_table .generic_content .generic_feature_list ul li:hover {
        background-color: #E4E4E4;
        border-left: 5px solid #2ECC71;
    }

    #generic_price_table .generic_content .generic_price_btn a {
        border: 1px solid #2ECC71;
        color: #2ECC71;
    }

    #generic_price_table .generic_content.active .generic_head_price .generic_head_content .head_bg,
    #generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg {
        border-color: #2ECC71 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #2ECC71;
        color: #fff;
    }

    #generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head span,
    #generic_price_table .generic_content.active .generic_head_price .generic_head_content .head span {
        color: #fff;
    }

    .generic_price_btn a:hover {
        background-color: #2ECC71;
        color: #fff !important;
    }

    #generic_price_table {
        margin: 50px 0 50px 0;
        font-family: 'Raleway', sans-serif;
    }

    .row .table {
        padding: 28px 0;
    }

    /*PRICE BODY CODE START*/

    #generic_price_table .generic_content {
        overflow: hidden;
        position: relative;
        text-align: center;
    }

    #generic_price_table .generic_content .generic_head_price {
        margin: 0 0 20px 0;
    }

    #generic_price_table .generic_content .generic_head_price .generic_head_content {
        margin: 0 0 50px 0;
    }

    #generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg {
        border-style: solid;
        border-width: 90px 1411px 23px 399px;
        position: absolute;
    }

    #generic_price_table .generic_content .generic_head_price .generic_head_content .head {
        padding-top: 40px;
        position: relative;
        z-index: 1;
    }

    #generic_price_table .generic_content .generic_head_price .generic_head_content .head span {
        font-family: "Raleway", sans-serif;
        font-size: 28px;
        font-weight: 400;
        letter-spacing: 2px;
        margin: 0;
        padding: 0;
        text-transform: uppercase;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag {
        padding: 0 0 20px;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .price {
        display: block;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign {
        display: inline-block;
        font-family: "Lato", sans-serif;
        font-size: 28px;
        font-weight: 400;
        vertical-align: middle;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency {
        font-family: "Lato", sans-serif;
        font-size: 60px;
        font-weight: 300;
        letter-spacing: -2px;
        line-height: 60px;
        padding: 0;
        vertical-align: middle;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent {
        display: inline-block;
        font-family: "Lato", sans-serif;
        font-size: 24px;
        font-weight: 400;
        vertical-align: bottom;
    }

    #generic_price_table .generic_content .generic_head_price .generic_price_tag .month {
        font-family: "Lato", sans-serif;
        font-size: 18px;
        font-weight: 400;
        letter-spacing: 3px;
        vertical-align: bottom;
    }

    #generic_price_table .generic_content .generic_feature_list ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    #generic_price_table .generic_content .generic_feature_list ul li {
        font-family: "Lato", sans-serif;
        font-size: 18px;
        padding: 15px 0;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table .generic_content .generic_feature_list ul li:hover {
        transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        -ms-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        -webkit-transition: all 0.3s ease-in-out 0s;

    }

    #generic_price_table .generic_content .generic_feature_list ul li .fa {
        padding: 0 10px;
    }

    #generic_price_table .generic_content .generic_price_btn {
        margin: 5px 0;
    }

    #generic_price_table .generic_content .generic_price_btn a {
        border-radius: 50px;
        -moz-border-radius: 50px;
        -ms-border-radius: 50px;
        -o-border-radius: 50px;
        -webkit-border-radius: 50px;
        display: inline-block;
        font-family: "Lato", sans-serif;
        font-size: 18px;
        outline: medium none;
        padding: 5px 10px;
        text-decoration: none;
        text-transform: uppercase;
    }

    #generic_price_table .generic_content,
    #generic_price_table .generic_content:hover,
    #generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg,
    #generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg,
    #generic_price_table .generic_content .generic_head_price .generic_head_content .head h2,
    #generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head h2,
    #generic_price_table .generic_content .price,
    #generic_price_table .generic_content:hover .price,
    #generic_price_table .generic_content .generic_price_btn a,
    #generic_price_table .generic_content:hover .generic_price_btn a {
        transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        -ms-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        -webkit-transition: all 0.3s ease-in-out 0s;
    }

    @media (max-width: 320px) {}

    @media (max-width: 767px) {
        #generic_price_table .generic_content {
            margin-bottom: 75px;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        #generic_price_table .col-md-3 {
            float: left;
            width: 50%;
        }

        #generic_price_table .col-md-4 {
            float: left;
            width: 50%;
        }

        #generic_price_table .generic_content {
            margin-bottom: 75px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {}

    @media (min-width: 1200px) {}

    #generic_price_table_home {
        font-family: 'Raleway', sans-serif;
    }

    .text-center h1,
    .text-center h1 a {
        color: #7885CB;
        font-size: 30px;
        font-weight: 300;
        text-decoration: none;
    }

    .demo-pic {
        margin: 0 auto;
    }

    .demo-pic:hover {
        opacity: 0.7;
    }

    #generic_price_table_home ul {
        margin: 0 auto;
        padding: 0;
        list-style: none;
        display: table;
    }

    #generic_price_table_home li {
        float: left;
    }

    #generic_price_table_home li+li {
        margin-left: 10px;
        padding-bottom: 10px;
    }

    #generic_price_table_home li a {
        display: block;
        width: 50px;
        height: 50px;
        font-size: 0px;
    }

    #generic_price_table_home .blue {
        background: #3498DB;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .emerald {
        background: #2ECC71;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .grey {
        background: #7F8C8D;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .midnight {
        background: #34495E;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .orange {
        background: #E67E22;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .purple {
        background: #9B59B6;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .red {
        background: #E74C3C;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .turquoise {
        background: #1ABC9C;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .blue:hover,
    #generic_price_table_home .emerald:hover,
    #generic_price_table_home .grey:hover,
    #generic_price_table_home .midnight:hover,
    #generic_price_table_home .orange:hover,
    #generic_price_table_home .purple:hover,
    #generic_price_table_home .red:hover,
    #generic_price_table_home .turquoise:hover {
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        transition: all 0.3s ease-in-out 0s;
    }

    #generic_price_table_home .divider {
        border-bottom: 1px solid #ddd;
        margin-bottom: 20px;
        padding: 20px;
    }

    #generic_price_table_home .divider span {
        width: 100%;
        display: table;
        height: 2px;
        background: #ddd;
        margin: 50px auto;
        line-height: 2px;
    }

    #generic_price_table_home .itemname {
        text-align: center;
        font-size: 50px;
        padding: 50px 0 20px;
        border-bottom: 1px solid #ddd;
        margin-bottom: 40px;
        text-decoration: none;
        font-weight: 300;
    }

    #generic_price_table_home .itemnametext {
        text-align: center;
        font-size: 20px;
        padding-top: 5px;
        text-transform: uppercase;
        display: inline-block;
    }

    #generic_price_table_home .footer {
        padding: 40px 0;
    }

    .price-heading {
        text-align: center;
    }

    .price-heading h1 {
        color: #666;
        margin: 0;
        padding: 0 0 50px 0;
    }

    .demo-button {
        background-color: #333333;
        color: #ffffff;
        display: table;
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 50px;
        outline-color: -moz-use-text-color;
        outline-style: none;
        outline-width: medium;
        padding: 10px;
        text-align: center;
        text-transform: uppercase;
    }

    .bottom_btn {
        background-color: #333333;
        color: #ffffff;
        display: table;
        font-size: 28px;
        margin: 60px auto 20px;
        padding: 10px 25px;
        text-align: center;
        text-transform: uppercase;
    }

    .demo-button:hover {
        background-color: #666;
        color: #FFF;
        text-decoration: none;

    }

    .bottom_btn:hover {
        background-color: #666;
        color: #FFF;
        text-decoration: none;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<body>
    <?php
if(isset($_GET['no'])) {
$data = json_decode(file_get_contents('data.json'), true);
#echo var_dump($data);
foreach($data as $row) { 
if("No: ".$_GET['no'] == $row['certno']) { 
?>
<title>Certificate of <?php echo $row['name']; ?> - World Global</title>
    <div class="header">
        <img class="logo" src="https://worldglobal.tv/wp-content/uploads/2021/10/Asset-2.png" />
        <div class="text">
            <h1>Download & share your certificate</h1>
            <h3>Participant : <b>
                    <?php echo $row['name']; ?>
                </b></h3>
        </div>
    </div>
    <div class="image">
        <img src="<?php echo $row['download']; ?>" />
    </div>
    <div class="share">
        <a style="background: #28a745;" href="<?php echo $row['download']; ?>">Download</a>
        <a style="background: #4267B2;" href="http://www.facebook.com/sharer.php?link=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Share on Facebook</a>
        <!-- <a style="background: radial-gradient(circle farthest-corner at 35% 90%, #fec564, transparent 50%), radial-gradient(circle farthest-corner at 0 140%, #fec564, transparent 50%), radial-gradient(ellipse farthest-corner at 0 -25%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 20% -50%, #5258cf, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 0, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 60% -20%, #893dc2, transparent 50%), radial-gradient(ellipse farthest-corner at 100% 100%, #d9317a, transparent), linear-gradient(#6559ca, #bc318f 30%, #e33f5f 50%, #f77638 70%, #fec66d 100%);;"
            href="">Post on Instagram</a> -->
        <a style="background: #00acee;" href="http://twitter.com/share?text=I've successfully complete the training course on Television and Online Journalism from World Global Media Ltd.&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>&hashtags=WG,WorldGlobal,WGNews">Tweet on Twitter</a>
        <a style="background: #0077b5;" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">Share on LinkedIn</a>
    </div>
    <?php }}} else if(isset($_GET['district'])) { ?>
        <title>Participants of <?php echo $_GET['district']; ?> - World Global</title>
    <div class="header">
        <img class="logo" src="https://worldglobal.tv/wp-content/uploads/2021/10/Asset-2.png" />
        <div class="text">
            <h1>Download & share your certificate</h1>
            <h3>Click on your name to get your certificate</h3>
        </div>
    </div>

    <div id="generic_price_table">
        <section>
            <div class="container">

                <!--BLOCK ROW START-->
                <div class="row">
                    <?php
                    $data = json_decode(file_get_contents('data.json'), true);
                    ?>
                    <div class="col-md-12">

                        <!--PRICE CONTENT START-->
                        <div class="generic_content clearfix">

                            <!--HEAD PRICE DETAIL START-->
                            <div class="generic_head_price clearfix">

                                <!--HEAD CONTENT START-->
                                <div class="generic_head_content clearfix">

                                    <!--HEAD START-->
                                    <div class="head_bg"></div>
                                    <div class="head">
                                        <span>
                                            <?php echo $_GET['district']; ?>
                                        </span>
                                    </div>
                                    <!--//HEAD END-->

                                </div>
                                <!--//HEAD CONTENT END-->

                                <!--PRICE START-->
                                <div class="generic_price_tag clearfix">
                                    <span class="price">
                                        <span class="month">
                                            All participants
                                        </span>
                                    </span>
                                </div>
                                <!--//PRICE END-->

                            </div>
                            <!--//HEAD PRICE DETAIL END-->

                            <!--FEATURE LIST START-->
                            <div class="generic_feature_list">
                                <ul>
                                    <?php foreach ($data as $row) { if($_GET['district'] == $row['district']) { ?>
                                    <li>
                                        <div class="generic_price_btn clearfix">
                                            <a style="padding-left: 30px; padding-right:30px; border:0;"
                                                href="?no=<?php echo str_replace("No: ", "", $row['certno']); ?>">
                                                <?php echo $row['name']; ?>
                                            </a>
                                        </div>
                                    </li>
                                    <?php } } ?>
                                </ul>
                            </div>
                            <!--//FEATURE LIST END-->

                        </div>
                        <!--//PRICE CONTENT END-->

                    </div>




                </div>
                <!--//BLOCK ROW END-->

            </div>
        </section>
    </div>
    <?php } else { ?>
        <title>Download & share your certificate - World Global</title>
    <div class="header">
        <img class="logo" src="https://worldglobal.tv/wp-content/uploads/2021/10/Asset-2.png" />
        <div class="text">
            <h1>Download & share your certificate</h1>
            <h3>Click on your district to get your certificate</h3>
        </div>
    </div>

    <div id="generic_price_table">
        <section>
            <div class="container">

                <!--BLOCK ROW START-->
                <div class="row">
                    <?php
                    $venuedata = json_decode(file_get_contents('venue.json'), true);
                    foreach ($venuedata as $venue) { ?>
                    <div class="col-md-4">

                        <!--PRICE CONTENT START-->
                        <div class="generic_content clearfix">

                            <!--HEAD PRICE DETAIL START-->
                            <div class="generic_head_price clearfix">

                                <!--HEAD CONTENT START-->
                                <div class="generic_head_content clearfix">

                                    <!--HEAD START-->
                                    <div class="head_bg"></div>
                                    <div class="head">
                                        <span>
                                            <?php echo $venue['name']; ?> Venue
                                        </span>
                                    </div>
                                    <!--//HEAD END-->

                                </div>
                                <!--//HEAD CONTENT END-->

                                <!--PRICE START-->
                                <div class="generic_price_tag clearfix">
                                    <span class="price">
                                        <span class="month">
                                            <?php echo $venue['division']; ?> Division
                                        </span>
                                    </span>
                                </div>
                                <!--//PRICE END-->

                            </div>
                            <!--//HEAD PRICE DETAIL END-->

                            <!--FEATURE LIST START-->
                            <div class="generic_feature_list">
                                <ul>
                                    <?php foreach ($venue['districts'] as $district) { ?>
                                    <li>
                                        <div class="generic_price_btn clearfix">
                                            <a href="?district=<?php echo $district['name']; ?>">
                                                <?php echo $district['name']; ?>
                                            </a>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!--//FEATURE LIST END-->

                        </div>
                        <!--//PRICE CONTENT END-->

                    </div>

                    <?php } ?>


                </div>
                <!--//BLOCK ROW END-->

            </div>
        </section>
    </div>

    <?php } ?>
</body>