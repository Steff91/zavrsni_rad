<?php
require "config.php";
Db::getConn();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online prodavnica fotoaparata i opreme</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div id="wrapper" class="container">
    <header id="header" class="row">
        <a href="index.php?page=1">
            <img id='logo' src="images/logo.png" width="400" height="100" alt="Online Movie Store"/>
        </a>
        <a href="index.php?page=5">
            <img id='korpa' src="images/preview-xl.jpg" width="100" height="100" alt="Online Movie Store"/>
        </a>
<div class="clear"></div>
	 </header>

	 <!-- navigacija!!!-->


    <nav id="nav" class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="index.php?page=1">Home</a></li>
                <li><a href="index.php?page=2">Products</a></li>
                <li><a href="index.php?page=4">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php?page=8"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

      <!-- end nav -->

    <!-- end header -->

    <div id="body">
	<?php
	$page = (isset($_GET['page']))?$_GET['page']:1;
	$pages = array(
        "1"=>"home_page.php",
        "2"=>"Products.php",
        "3"=>"Company.php",
        "4"=>"Contact.php",
        "5"=>"card.php",
        "6"=>"buy_now.php",
        "7"=>"checkout.php",
        "8" => "admin/index.html"
	);
	if(isset($pages[$page])) {
		include "modules/" . $pages[$page];
	}
	?>
    </div>
	
	
	
    <!-- end body -->
    <div class="clear"></div>
	
	
   
    <!-- end footer -->

  

 <div id="footer">
     <ul id="footer-nav">
         <li><a href="index.php?page=1">Home</a></li>
         <li><a href="index.php?page=2">Products</a></li>
         <li><a href="index.php?page=4">Contact</a></li>
     </ul>
    </div>
</div>
<!-- end wrapper -->
</body>
</html>
