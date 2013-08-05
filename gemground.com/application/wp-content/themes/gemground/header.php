<?php
define('GEM_WORK_CATEGORY_ID' , 18);
$G_CONF = array(
	'site_title' => '聚广传播｜品牌数字营销',
	'navigation' => array(
		'首页' => $homeurl . '#home',
    '观点与方法' => $homeurl . '#point',
		'服务与流程' => $homeurl . '#services',
		'客户与案例' => $homeurl . '#clients',
		'关于我们' => $homeurl . '#about',
	),

  // Use wordpress category instead
	'pages' => array(
		'services' => $homeurl . 'services',
		'works' => $homeurl . 'works',
		'about' => $homeurl . 'about',
		'clients' => $homeurl . 'clients',
		'point'  => $homeurl . 'point',
	),
);

$homeurl = esc_url( home_url( '/' ) );



$ptitle = $G_CONF['site_title'];

$navigation = '';
$onclick = '';
foreach ($G_CONF['navigation'] as $name => $link)
{
  $navigation .= '<li><a href="'.$homeurl.$link.'" '.$onclick.'><span class="aname">'.$name.'</span></a></li>'; 
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" rel="icon">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<!-- <script src="js/jquery.1.10.2.min.js"></script> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
	<!-- <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slides.min.js"></script> -->
  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.scrollto.js"></script>

  </head>
  <body <?php body_class(); ?>>
	<header class="navigation">
	<hgroup style="display:none;">
		<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
		<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
	</hgroup>
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
              <img class="gemlogo" src="<?php echo esc_url( home_url( '/' ) ); ?>/data/images/gem-logo.png" />
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
              <img class="gemlogo" src="<?php echo esc_url( home_url( '/' ) ); ?>/data/images/gem-logo-small.png" />
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
  <div class="header-expand" name="home"></div>
