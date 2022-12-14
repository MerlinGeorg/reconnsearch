<?php include('header.php') ?>



	<main id="page-content" class="l-main" itemprop="mainContentOfPage">
	<section id="img12" class="l-section wpb_row height_medium with_slider with_overlay"><div class="l-section-slider"><div class="w-slider style_none"><div class="w-slider-h"><div class="royalSlider"><div class="rsContent"><a class="rsImg" data-rsw="528" data-rsh="333" href="../wp-content/uploads/2020/01/Gulf-map-gray.png"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="1440" data-rsh="900" href="../wp-content/uploads/2020/01/Kuwait.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="739" data-rsh="415" href="../wp-content/uploads/2020/01/images-1.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="1600" data-rsh="600" href="../wp-content/uploads/2020/01/7.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="678" data-rsh="452" href="../wp-content/uploads/2020/01/main-bg.png"><span data-alt="reconnaissanceresearch.com"></span></a></div><div class="rsContent"><a class="rsImg" data-rsw="1600" data-rsh="410" href="../wp-content/uploads/2020/01/inner_banner1.jpg"><span data-alt="reconnaissanceresearch.com"></span></a></div></div><img class="lazy lazy-hidden" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/01/Gulf-map-gray.png" alt="reconnaissanceresearch.com"></div><div class="w-slider-json" onclick='return {&quot;loop&quot;:true,&quot;fadeInLoadedSlide&quot;:false,&quot;slidesSpacing&quot;:0,&quot;imageScalePadding&quot;:0,&quot;numImagesToPreload&quot;:2,&quot;arrowsNav&quot;:false,&quot;arrowsNavAutoHide&quot;:false,&quot;transitionType&quot;:&quot;fade&quot;,&quot;transitionSpeed&quot;:1000,&quot;block&quot;:{&quot;moveEffect&quot;:&quot;none&quot;,&quot;speed&quot;:300},&quot;controlNavigation&quot;:&quot;none&quot;,&quot;autoplay&quot;:{&quot;enabled&quot;:true,&quot;pauseOnHover&quot;:false,&quot;delay&quot;:6000},&quot;imageScaleMode&quot;:&quot;fill&quot;,&quot;autoScaleSlider&quot;:true,&quot;autoScaleSliderWidth&quot;:528,&quot;autoScaleSliderHeight&quot;:333,&quot;fitInViewport&quot;:false}'></div></div></div><div class="l-section-overlay" style="background: rgba(33,35,76,0.9)"></div><div class="l-section-h i-cf"><div class="g-cols vc_row type_default valign_top"><div class="vc_col-sm-12 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><h1 style="text-align: left" class="vc_custom_heading us_custom_6df4bc3a" >Kuwait Advisory Board</h1><ol class="g-breadcrumbs us_custom_6df4bc3a separator_icon align_left" itemscope itemtype="http://schema.org/BreadcrumbList"><li class="g-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../index.html"><span itemprop="name">Home</span></a><meta itemprop="position" content="1"/></li><li class="g-breadcrumbs-separator"><i class="far fa-angle-right"></i></li><li class="g-breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.html"><span itemprop="name">Kuwait Advisory Board</span></a><meta itemprop="position" content="2"/></li></ol></div></div></div></div></div></section>

	<section class="l-section wpb_row height_small"><div class="l-section-h i-cf"><div class="g-cols vc_row type_default valign_top"><div class="vc_col-sm-12 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-separator us_custom_95ebd667 size_medium has_text_color with_line width_default thick_1 style_solid color_border align_center with_content"><div class="w-separator-h"><h2 class="w-separator-text"><span>Kuwait Advisory Board</span></h2></div></div></div></div></div></div></div></section>


	<section class="l-section wpb_row height_small"><div class="l-section-h i-cf"><div class="g-cols vc_row type_default valign_middle">


<?php 

        $s4="SELECT * from about where about_designation='Kuwait Advisory Board' and about_status = '1' order by about_id ASC";
        $sl4=$db->prepare($s4);
        $sl4->execute();

 while($res4=$sl4->fetch(PDO::FETCH_ASSOC))
{
 
 ?>	

<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="admin/uploads/<?php echo $res4['about_pic'] ?>" data-lazy-type="image" data-src="admin/uploads/<?php echo $res4['about_pic'] ?>" class="lazy lazy-hidden attachment-medium size-medium" alt="Adnan Abdulaziz Al-Bahar" srcset="" data-srcset="" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;"><?php echo $res4['about_name'] ?></p>
</div></div></div></div>
</div>

<?php } ?>


<!-- <div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Ali-alTarrah-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="Ali alTarrah" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Ali-alTarrah-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Ali-alTarrah-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Ali-alTarrah.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Dr. Ali Al-Tarrah</p>
</div></div></div></div></div> -->



<!-- <div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Ali-Al-Zalzalah-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="Ali Al Zalzalah" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Ali-Al-Zalzalah-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Ali-Al-Zalzalah-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Ali-Al-Zalzalah.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Ali Al Zalzalah</p>
</div></div></div></div></div> -->


<!-- <div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Hussam-Ali-Marafi-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="Hussam Ali Marafi" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Hussam-Ali-Marafi-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Hussam-Ali-Marafi-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Hussam-Ali-Marafi.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Hussam Ali Marafi</p>
</div></div></div></div></div> -->



</div></div></section>



<!-- <section class="l-section wpb_row height_small"><div class="l-section-h i-cf"><div class="g-cols vc_row type_default valign_middle">

<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Sheikh-Khalifa-Bin-Hamad-Bin-Khalifa-1-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Sheikh-Khalifa-Bin-Hamad-Bin-Khalifa-1-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Sheikh-Khalifa-Bin-Hamad-Bin-Khalifa-1-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Sheikh-Khalifa-Bin-Hamad-Bin-Khalifa-1.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Sheikh / Khalifa bin Hamad Al Khalifa</p>
</div></div></div></div></div>

<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Madi-Al-Khamees-1-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Madi-Al-Khamees-1-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Madi-Al-Khamees-1-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Madi-Al-Khamees-1.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Madi Al Khamees</p>
</div></div></div></div></div>

<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Marzouq-Khaled-Boodai-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="Marzouq Khaled Boodai" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Marzouq-Khaled-Boodai-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Marzouq-Khaled-Boodai-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Marzouq-Khaled-Boodai.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Marzouq Khaled Boodai</p>
</div></div></div></div></div>


<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Qais-Abdullah-AlJoan-1-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Qais-Abdullah-AlJoan-1-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Qais-Abdullah-AlJoan-1-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Qais-Abdullah-AlJoan-1.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Qais Abdullah AlJoan</p>
</div></div></div></div></div>

</div></div></section> -->

<!-- <section class="l-section wpb_row height_small"><div class="l-section-h i-cf"><div class="g-cols vc_row type_default valign_middle">

<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Talal-Khalid-alNisf-2-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Talal-Khalid-alNisf-2-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Talal-Khalid-alNisf-2-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Talal-Khalid-alNisf-2.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Talal Khalid AlNisf</p>
</div></div></div></div></div>

<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="w-image us_custom_90f172c7 style_shadow-1 align_center"><div class="w-image-h"><img width="300" height="300" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-lazy-type="image" data-src="https://reconnresearch.com/wp-content/uploads/2020/02/Yousef-Abdulaziz-AlQatami-1-300x300.jpg" class="lazy lazy-hidden attachment-medium size-medium" alt="Yousef Abdulaziz AlQatami" srcset="" data-srcset="https://reconnresearch.com/wp-content/uploads/2020/02/Yousef-Abdulaziz-AlQatami-1-300x300.jpg 300w, https://reconnresearch.com/wp-content/uploads/2020/02/Yousef-Abdulaziz-AlQatami-1-150x150.jpg 150w, https://reconnresearch.com/wp-content/uploads/2020/02/Yousef-Abdulaziz-AlQatami-1.jpg 1024w" sizes="(max-width: 300px) 100vw, 300px" /></div></div><div class="wpb_text_column"><div class="wpb_wrapper"><p style="text-align: center;">Yousef Abdulaziz AlQatami</p>
</div></div></div></div></div>


<div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="vc_col-sm-3 wpb_column vc_column_container"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div></div></section> -->



</main>


<?php include('footer.php') ?>


