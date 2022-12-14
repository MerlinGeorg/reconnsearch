<?php include('header.php') ?>


	<main id="page-content" class="l-main" itemprop="mainContentOfPage">
	<section id="img12"  class="l-section wpb_row height_medium with_slider with_overlay"><div class="l-section-slider"><div class="w-slider style_none"><div class="w-slider-h"><div class="royalSlider"><div class="rsContent"><a class="rsImg" data-rsw="528" data-rsh="333" href="../wp-content/uploads/2020/01/Gulf-map-gray.png"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="1440" data-rsh="900" href="../wp-content/uploads/2020/01/Kuwait.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="739" data-rsh="415" href="../wp-content/uploads/2020/01/images-1.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="1600" data-rsh="600" href="../wp-content/uploads/2020/01/7.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="678" data-rsh="452" href="../wp-content/uploads/2020/01/main-bg.png"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="1600" data-rsh="410" href="../wp-content/uploads/2020/01/inner_banner1.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div></div><img class="lazy lazy-hidden" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/01/Gulf-map-gray.png" alt="reconnaissanceresearch.com"></div><div class="w-slider-json" onclick='return {&quot;loop&quot;:true,&quot;fadeInLoadedSlide&quot;:false,&quot;slidesSpacing&quot;:0,&quot;imageScalePadding&quot;:0,&quot;numImagesToPreload&quot;:2,&quot;arrowsNav&quot;:false,&quot;arrowsNavAutoHide&quot;:false,&quot;transitionType&quot;:&quot;fade&quot;,&quot;transitionSpeed&quot;:1000,&quot;block&quot;:{&quot;moveEffect&quot;:&quot;none&quot;,&quot;speed&quot;:300},&quot;controlNavigation&quot;:&quot;none&quot;,&quot;autoplay&quot;:{&quot;enabled&quot;:true,&quot;pauseOnHover&quot;:false,&quot;delay&quot;:6000},&quot;imageScaleMode&quot;:&quot;fill&quot;,&quot;autoScaleSlider&quot;:true,&quot;autoScaleSliderWidth&quot;:528,&quot;autoScaleSliderHeight&quot;:333,&quot;fitInViewport&quot;:false}'></div></div></div><div class="l-section-overlay" style="background: rgba(33,35,76,0.9)"></div><div class="l-section-h i-cf"><div class="g-cols vc_row type_default valign_top"><div class="vc_col-sm-12 wpb_column vc_column_container"><div class="vc_column-inner">
	<div class="wpb_wrapper">
	<h1 style="text-align: left;color: white" class="vc_custom_heading us_custom_6df4bc3a" >What We Do</h1>

	<ol class="g-breadcrumbs us_custom_6df4bc3a separator_icon align_left" itemscope itemtype="http://schema.org/BreadcrumbList"><li class="g-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../index.html"><span itemprop="name">Home</span></a><meta itemprop="position" content="1"/></li><li class="g-breadcrumbs-separator"><i class="far fa-angle-right"></i></li><li class="g-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.html"><span itemprop="name">What We Do</span></a><meta itemprop="position" content="2"/></li></ol></div></div></div></div></div></section><section class="l-section wpb_row height_small"><div class="l-section-h i-cf"><div class="g-cols vc_row type_default valign_top"><div class="vc_col-sm-12 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="wpb_text_column"><div class="wpb_wrapper"><h3 style="font-weight: 400;"><strong>VISION &amp; MISSION</strong></h3>
<div class="widget">

<?php 

        $s4="SELECT * from about_whatwedo limit 1";
        $sl4=$db->prepare($s4);
        $sl4->execute();

 $res4=$sl4->fetch(PDO::FETCH_ASSOC);

 
 ?>	

<p><?php echo $res4['whatwedo_vision'] ?></p>
</div>
</div></div><div class="wpb_text_column"><div class="wpb_wrapper"><h3><b>Know how:</b></h3>
<p><?php echo $res4['whatwedo_knowhow'] ?></p>
</div></div></div></div></div></div></div></section>
</main>

<?php include('footer.php') ?>
