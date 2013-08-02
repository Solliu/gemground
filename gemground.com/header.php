<?php
require_once('include/config.php');

$ptitle = $G_CONF['site_title'];

$navigation = '';
$onclick = '';
foreach ($G_CONF['navigation'] as $name => $link)
{
  $navigation .= '<li><a href="'.$link.'" '.$onclick.'><span class="aname">'.$name.'</span></a></li>'; 
}

?><!DOCTYPE html>
<html lang="cn">
  <head>
    <title><?php echo $ptitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="css/global.css" rel="stylesheet" media="screen">
	<!-- <script src="js/jquery.1.10.2.min.js"></script> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.slides.min.js"></script>
  </head>
  <body>
	<header>
    <!-- Menu style A -->
    <div class="navbar navbar-fixed-top gemnavbar-a">
      <div class="navbar-inner mainnav">
        <div class="container">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".gemnavbar-a .nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="row">
            <!-- Be sure to leave the brand out there if you want it shown -->
            <div class="span2">
              <img class="gemlogo" src="images/gem-logo.png" />
            </div>
            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse span9 offset1">
              <!-- .nav, .navbar-search, .navbar-form, etc -->
              <ul class="nav">
                <?php echo $navigation; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Menu style A End-->
    
    <!-- Menu style B -->
    <div class="navbar navbar-fixed-top gemnavbar-b">
      <div class="navbar-inner mainnav">
        <div class="container">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".gemnavbar-b .nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="row">
            <!-- Be sure to leave the brand out there if you want it shown -->
            <div class="span3">
              <img class="gemlogo" src="images/gem-logo-small.png" />
            </div>
            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse collapse span8">
              <!-- .nav, .navbar-search, .navbar-form, etc -->
              <ul class="nav">
                <?php echo $navigation; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Menu style B End-->
  </header>
