<?php include '../web-components/header.php'; ?>
<head><link rel='stylesheet' id='elementor-post-4540-css'  href='../assets/css/post-4540d19d.php?ver=1620973923' type='text/css' media='all' /> </head>
<body class="page-template-default page page-id-4540 redux-page body-default-font heading-default-font header-sticky elementor-default elementor-kit-4999 elementor-page elementor-page-4540">
<div id="page" class="site">
            <div id="cms-loadding" class="cms-loader">
            <div class="loading-spinner">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    <?php include '../web-components/nav.php'; ?>

       <div id="content" class="site-content">
    	<div class="content-inner">
    <div class="container content-container">
        <div class="row content-row">
            <div id="primary"  class="content-area content-full-width col-12">
                <main id="main" class="site-main">
                    
<article id="post-4540" class="post-4540 page type-page status-publish hentry">
    <div class="entry-content clearfix">
        		<div data-elementor-type="wp-page" data-elementor-id="4540" class="elementor elementor-4540" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
					        <section class="elementor-section elementor-top-section elementor-element elementor-element-41307198 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="41307198" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                
                        <div class="elementor-container elementor-column-gap-default ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4c6cbb69" data-id="4c6cbb69" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-42f49c81 elementor-widget elementor-widget-cms_heading" data-id="42f49c81" data-element_type="widget" data-widget_type="cms_heading.default">
				<div class="elementor-widget-container">
			<div class="cms-heading-wrapper cms-heading-layout1">
    
            <h2 class="custom-heading">
            <span >Our Gallery</span>
        </h2>
        
    </div>		</div>
				</div>
		                </div>
                    </div>
        </div>
                                </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-fc79946 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fc79946" data-element_type="section">
            
                        <div class="elementor-container elementor-column-gap-default ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-693a700" data-id="693a700" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-258d7ab elementor-widget elementor-widget-cms_image_gallery" data-id="258d7ab" data-element_type="widget" data-widget_type="cms_image_gallery.default">
				<div class="elementor-widget-container">
			
<div id="cms_image_gallery-258d7ab" class="cms-grid cms-image-gallery images-light-box clearfix" data-layout="masonry">

    <div class="cms-grid-inner cms-grid-masonry row" data-gutter="15">
        <div class="grid-sizer col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"></div>


        <?php 
        $sql =$database->query("SELECT * FROM gallery");
        $send = $database->fetch_array($sql);
     
$imageTypes =array(
          'image/jpeg',
          'image/pjpeg',
          'image/gif',
          'image/png',
          'image/webp');
$videoTypes =array(
          'video/3gp',
          'video/mp4',
          'video/avi',
          'video/mpg',
          'video/mpeg',
        'video/webm');

  foreach ($sql as $send) {
            $id = $send['id'];
            $caption = $send['caption'];
            $file_name = $send['file_name'];
            $file_type = $send['file_type'];
            $date_created = $send['date_created'];
 
            echo ' <div class="grid-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="grid-item-inner">
                    <span class="hover-effect cms-over">';
     if (in_array($file_type,$imageTypes)){
        echo ' <img width="768" height="768" src="../uploads/gallery/'.$file_name.'" class="attachment-equita-medium" alt="'.$file_name.'" loading="lazy" />';
 }
 elseif (in_array($file_type,$videoTypes)) {
      echo '<div class="embed-responsive embed-responsive-16by9"><video width="768" height="768" class="embed-responsive-item" controls="controls" preload="none" poster=""  src="../uploads/gallery/'.$file_name.'" ></video></div>';   }

                                                                                              
                    echo '</span><div class="grid-item-content">
                        <div class="up-icon">
                            <a class="light-box" data-elementor-open-lightbox="no" href="../uploads/gallery/'.$file_name.'" title="'.$file_name.'">
                                <i class="zmdi zmdi-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="image-caption">
                '.$caption.'
                                    </div>
            </div>
               ';


        }
               
               ?>    


            </div>
</div>		</div>
				</div>
		                </div>
                    </div>
        </div>
                                </div>
                    </div>
        </section>
        				</div>
						</div>
					</div>
		    </div><!-- .entry-content -->

    </article><!-- #post-4540 -->
                </main><!-- #main -->
            </div><!-- #primary -->

            
        </div>
    </div>
	</div><!-- #content inner -->
</div><!-- #content -->
<?php include '../web-components/footer.php'; ?>

</div><!-- #page -->

<?php include '../web-components/javascripts.php'; ?>
</body>
</html>
