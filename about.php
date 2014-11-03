<?php
/**
 * Copyright (c) 2011 http://www.pixelandtag.com
 * "Original Images Project"
 * Date: 2011-06-10
 * Ver 1.0
 * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT,
 * STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF
 * THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * http://www.opensource.org/licenses/bsd-license.php
 */
include_once 'configuration/configuration.php';
include_once 'classes/security.php';
include_once 'classes/cms.php';
include 'includes/header.php';
?>
<?php include 'includes/header.php';?>
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
<title>Hearth Interiors | About </title>
 <meta name="description" content="Welcome to Hearth Interiors, Elegant Ideas for Beautiful Places" />
 <meta name="keywords" content="Kenya interior design, Kenyan Furniture, Beautifl Fabrics" />
<meta name="author" content="Alama Creative" />
        
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/hearth_style.css"/>
<link rel="stylesheet" type="text/css" href="css/flexy-menu.css" >

 <!-- JS --> 
 <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/html5shiv.js"></script>
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


<!-- content & information --> 
<section class="intro">
<h1  id="first_line"> 
	<?php
			Security::showEditor();
			CMS::getContent("first_line",false,null);
	?>
<!--We have a passion for Interior Design--></h1>

</section>

<!-- Team-->
<div class="container">

<section id="about">
<h1>
Interior Design Services</h1>
<p> 
<div id="this_km">
<?php
	Security::showEditor();
	CMS::getContent("this_km",false,null);
?>
</div>
</p>
</section>

<section id="about">
<h1>Interior Furnishing Services</h1>
<p> 
<div id="this_about2">
<?php
	Security::showEditor();
	CMS::getContent("this_about2",false,null);
?>
</div>
</p>
</section>
</div>


<div class="container">
<section class="about">
<img src="images/dir-1.jpg" alt="Director" />
</section>

<section class="about">
<div id="this_about4">
<?php
	Security::showEditor();
	CMS::getContent("this_about4",false,null);
?>
</div>
</section>
</div>

<div class="container">

<section class="about">
<div id="this_about5">
<?php
	Security::showEditor();
	CMS::getContent("this_about5",false,null);
?>
</div>
</section>

<section class="about">
<img src="images/dir-2.jpg" alt="Director" />
</section>
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