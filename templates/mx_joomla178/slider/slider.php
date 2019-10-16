<?php

defined('_JEXEC') or die;
$slide = $this->params->get('slides');
$tempPath = JURI::base(true).'/templates/mx_joomla178/slider/';
$document = JFactory::getDocument(); 
$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$bannerTime	     = $this->params->get('bannerTime');
$socialCode         = $this->params->get ('socialCode');
$slider_items    = $this->params->get('slider_items'); 
$headHeigh	     = $this->params->get('headHeigh');
$socialCode         = $this->params->get ('socialCode');
$ol_title            = $this->params->get('ol_title');
$ol_text            = $this->params->get('ol_text');
$ol_text1            = $this->params->get('ol_text1');
$ol_image            = $this->params->get('ol_image');
$ol_target_url       = $this->params->get('ol_target_url');
$ol_target           = $this->params->get('ol_target');

$document->addStyleSheet($tempPath.'css/style.css');
$document->addScript($tempPath.'js/swiper-4.js');
$document->addScript($tempPath.'js/custom.js');

?>

<div class="swiper-container home_slider main-slider swiper-container-horizontal" style="cursor: grab;">
<div class="swiper-wrapper" style="transition-duration: 0ms;">
<?php foreach ($slider_items as $item) : ?>
<div class="swiper-slide" data-swiper-slide-index="<?php echo $item->ol_title; ?>">
<figure class="slide-bgimg" style="transform: translate3d(3840px, 0px, 0px); transition: all 0ms ease 0s;">
<img src="<?php echo $item->ol_image; ?>" class="img-fluid" alt="<?php echo $item->ol_title; ?>">
</figure>
<div class="content container content-center text-center">
<div class="mt-4">
<p class="caption"></p>
</div>
</div>
</div>

<?php endforeach; ?>
</div>
<div class="swiper-button-prev swiper-button-white" tabindex="0" role="button" aria-label="Previous slide"></div>
<div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Next slide"></div>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div>


<div class="clear"></div>       

