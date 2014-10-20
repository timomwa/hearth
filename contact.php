<!DOCTYPE html>
<html lang="en">

<!-----------------------------------
Site	: www.alamacreative.com
Theme	: Hearth Interiors
Author : Eric Njoroge
Company : Alama Creative Ltd, Nairobi Kenya
License : General License 2014
-------------------------------------->
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!-- Meta -->
<title>Hearth Interiors | Contacts </title>
 <meta name="description" content="Welcome to Hearth Interiors, Elegant Ideas for Beautiful Places" />
 <meta name="keywords" content="Kenya interior design, Kenyan Furniture, Beautifl Fabrics" />
<meta name="author" content="Alama Creative" />
        
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/hearth_style.css"/>
<link rel="stylesheet" type="text/css" href="css/flexy-menu.css" >

 <!-- JS --> 
 <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/html5shiv.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/flexy-menu.js"></script>
<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>


<!--[if IE]>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->


<!-- HTML5 and css3 media queries - old IE enabling scripts -->
<!--[if lt IE 8]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
<!-- start sb-search -->
<div id="sb-search" class="sb-search">
  <form>
    <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
    <input class="sb-search-submit" type="submit" value="">
    <span class="sb-icon-search"></span>
  </form>
</div>

<!-- start header -->
<div class="header">
  <div class="wrap">
    <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="" /></a> </div>
    <div class="h_right"> 
      
      <!-- start nav-->
      <ul class="flexy-menu thick orange">
        <li> <a  href="index.php"> Home </a> </li>
          <li> <a  href="about.php"> About </a> </li>
          
        <li> <a href="#">Collections</a>
          <ul>
            <li><a href="#">Living Rooms</a></li>
            <li><a href="#">Sitting Rooms</a></li>
            <li><a href="#">Kitchens</a></li>
            <li><a href="#">Bed Rooms</a></li>
            <li><a href="#">Bath Rooms</a></li>
            <li><a href="#">Offices</a></li>
          </ul>
        </li>
        
        <li> <a href="fabric.php"> Fabric</a> </li>
        <li> <a href="contact.php"> Contacts</a> </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Info --> 
<div class="contact">
<div id="contact">
<h1>Get in Touch</h1>
<p><span>TEL:</span> +254700543510</p>
<p><span>CELL:</span> 020200123</p>
<p><span>EMAIL:</span> vipi@alamacreative.com</p>


<form action="contact.php" method="post" id="contactform">
<ol>
 <li><label for="name">Jina <span class="red">*</span></label><input id="name" name="name" class="text" /></li>

<li><label for="email">Barua Pepe <span class="red">*</span></label><input id="email" name="email" class="text" /></li>

<li><label for="message">Maoni <span class="red">*</span></label><textarea id="message" name="message" rows="6" cols="50"></textarea> </li>

<li class="buttons">
<input type="image" name="imageField" id="imageField" src="images/send.jpg" class="send" />
<div class="clr"></div> </li>
</ol>
</form>
</div>
</div>




<!-- Footer --> 
<footer>
<ul class="endnav">
<li> <a  href="index.php"> Home </a> </li>
<li> <a  href="about.php"> About </a> </li>
<li> <a href="contact.php"> Contacts</a> </li>
</ul>


<section id="social">
<a href="https://www.facebook.com/hearth" target="_blank"><img src="images/fb.png" class="" alt="Social" /> </a>
<a href="https://www.pinietrest.com/hearth" target="_blank"><img src="images/pin.png" class="" alt="Social" /> </a>
<a href="https://www.twitter.com/hearth" target="_blank"><img src="images/tw.png"  class=""  alt="Social" /> </a>
<a href="https://www.linkedin.com/hearth" target="_blank"><img src="images/in.png"  class=""  alt="Social" /> </a>
</section>


<div id="final">
<p>copyright 2015 &copy; all rights reserved </p>
</div>
</footer>

<script src="js/classie.js"></script> 
<script src="js/uisearch.js"></script> 
<script>
		new UISearch( document.getElementById( 'sb-search' ) );
</script> 
</body>
</html>