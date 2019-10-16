<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Sboost Framework   
# ---------------------------------------------------------------
# Author - mixwebtemplates http://www.mixwebtemplates.com
# Copyright (C) 2008 - 2019 mixwebtemplates.com. All Rights Reserved.
# Websites: http://www.mixwebtemplates.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/sboost.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$sboost->loadHead();
$sboost->addCSS('template.css,joomla.css,menu.css,override.css,modules.css,social.css');
if ($sboost->isRTL()) $sboost->addCSS('template_rtl.css');
$slides          = $this->params->get('slides');
?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/custom.js"></script>
<?php if($this->params->get('show_awesome')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/font-awesome.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<?php if($this->params->get('social_api_type', '1') == '1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/social.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet"> 
<?php if($this->params->get('float')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/slide.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/slide.js"></script> 
<?php endif; ?>
</head>
<?php $sboost->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $sboost->direction ?> clearfix">
<div id="mx-top-header">
<div class="mx-base">
<?php $sboost->addFeatures('social'); //social ?>	
<?php 
$sboost->addFeatures('logo');//Logo
?>
</div>
</div>
<div id="header">
<div id="mx-header" class="mx-header">
<div class="mx-base">
<div class="main_menu">
<?php 
$sboost->addModules("mainmenu"); //position mainmenu
?>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php if ($sboost->showSlideItem()): ?>
<div id="slides" class="scrollme">
<?php include 'slider/slider.php'; ?> 
</div>
<?php endif; ?>
<?php if ($this->countModules( 'top' )) : ?>
<div class="mx-base clearfix">
<?php 
$sboost->addModules('top', 'mx_xhtml'); //top 
?>	
</div>
<?php endif; ?>
<?php if ($this->countModules( 'top1 or top2 or top3 or top4 or top5 or top6' )) : ?>
<div id="mx-coce">
<div class="mx-base clearfix">
<?php
$sboost->addModules('top1, top2, top3, top4, top5, top6', 'mx_block', 'mx-userpos'); //positions top1-top6 
?>
</div>
</div>
<?php endif; ?> 
<?php $sboost->addModules('section', 'mx_xhtml'); //section  ?>
<?php if ($this->countModules( 'header1 or header2' )) : ?>
<div id="botmap">
<div class="mx-base clearfix">
<?php
$sboost->addModules('header1, header2', 'mx_block', 'mx-hed'); //position header
?>
</div>
</div>
<?php endif; ?> 
<div id="mx-basebody">	
<div class="mx-base main-bg clearfix">
<?php 
$sboost->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">
<?php $sboost->loadLayout(); //mainbody ?>
</div>
</div>
</div>
<?php if ($this->countModules( 'pricing' )) : ?>
<div id="mx-coceb">
<?php $sboost->addModules('pricing', 'mx_xhtml'); //pricing  ?>
</div>
<?php endif; ?> 
<?php if ($this->countModules( 'map' )) : ?>
<div id="botmap">
<div class="mx-base clearfix">
<?php $sboost->addModules('map', 'mx_xhtml'); //map  ?>
</div>
</div>
<?php endif; ?> 
<?php if($this->countModules ( 'gallery1 or gallery2' )) : ?>
<div id="setbottom" class="mx-base clearfix">
<?php if($this->countModules ( 'gallery2' )) : ?><div class="col-md-8"><?php else: ?><div class="col-md-12"><?php endif; ?>
<?php $sboost->addModules("gallery1", 'mx_block'); //position page1 ?>
<br></div>
<?php if($this->countModules ( 'gallery1' )) : ?><div class="col-md-4"><?php else: ?><div class="col-md-12"><?php endif; ?>
<?php $sboost->addModules("gallery2", 'mx_block'); //position page ?>
</div>
</div>
<?php endif; ?>
<?php if ($this->countModules( 'news' )) : ?>
<div id="botmap">
<div class="mx-base clearfix">
<?php 
$sboost->addModules('news', 'mx_xhtml'); //top 
?> 
</div>
</div>
<?php endif; ?>
<?php $sboost->addModules('bottom', 'mx_xhtml'); //bottom  ?>
<?php if ($this->countModules( 'bottom1 or bottom2 or bottom3 or bottom4 or bottom5 or bottom6' )) : ?>
<div id="bottsite" class="clearfix">
<?php
$sboost->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'mx_block', 'mx-bottoms', '', false, true); //positions bottom1-bottom6 
?>
</div>
<?php endif; ?> 

<!--Start Footer-->
<div id="mx-footer" class="mx-base">
<div id="mx-bft" class="clearfix">
<?php $sboost->addFeatures('colors');//Template colors ?>
<div class="cp">
<?php $sboost->addFeatures('copyright,designed')  ?>					
</div>
<?php
$sboost->addFeatures('gotop');		
$sboost->addModules("footer-nav"); 
?>
</div>
</div>
<!--End Footer-->
<?php 
$sboost->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />
</body>
</html>