  <?php  if($homepageStyle == 'default'): ?>
  <header id="masthead" class="site-header">
    <div id="site-header-wrap" class="header-layout2 header-trans is-sticky">
        <div id="site-header" class="site-header-main">
            <div class="container">
                <div class="row">
                    <div class="site-branding">
                        <a class="logo-light" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $flogo; ?>" alt="<?php echo "";?>"/></a><a class="logo-dark" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $hlogo; ?>" alt="<?php echo "";?>"/></a><a class="logo-mobile" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $hlogo; ?>" alt="<?php echo "" ;?>"/></a>                    </div>

<?php endif; ?>

<?php if($homepageStyle == 'modern'): ?>
  <header id="masthead" class="site-header <?php if( $fixedMenu== 'true'){
															echo 'header-fixed';
														} ?>">
    <div id="site-header-wrap" class="header-layout3 is-sticky">
        <div class="site-header-top">
            <div class="container">
                <div class="row">
                    <div class="header-top-left">
                        <div class="site-branding">
                              <a class="logo-light" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $flogo; ?>" alt="<?php echo "";?>"/></a><a class="logo-dark" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $hlogo; ?>" alt="<?php echo "";?>"/></a><a class="logo-mobile" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $hlogo; ?>" alt="<?php echo "" ;?>"/></a>                         </div>
                    </div>

                    <div class="header-top-right">
                                                    <div class="header-top-item">
                                <i class="fas fac-phone"></i>
                                <div class="header-top-item-inner">
                                    <p>Call Us:</p>     <?php   $numbers =preg_split("/,/",  preg_replace("/ /", "", $scontact));
                            foreach ($numbers as $number) {
                                # code...
                                  echo  '<a href="tel:'.$number.'">'.$number.'</a>';} ?>
                                </div>
                            </div>
                                                                            <div class="header-top-item">
                                <i class="fas fac-envelope"></i>
                                <div class="header-top-item-inner">
                                    <p>Email Us:</p>            <?php   $emails =preg_split("/,/",  preg_replace("/ /", "", $semail));
                            foreach ($emails as $email ){
                                # code...
                                    echo '<a href="mailto:'.$email.'">'.$email.'</a>';
                                } ?>
                                </div>
                            </div>
                                                                            <div class="header-top-item">
                                <i class="fas fac-clock"></i>
                                <div class="header-top-item-inner">
                                    <p>Opening Hours:</p>
                                    <span><?php echo substr($active_hours,0,140); ?></span>
                                </div>
                            </div>
                                                                            <div class="site-header-button">
                                <a class="btn" href="<?php echo $BASEDIR;?>request-quote-2/index.php" target="_blank">Request A Quote</a>
                            </div>
                                            </div>
                </div>
            </div>
        </div>
        <div id="site-header" class="site-header-main">
            <div class="mobile-branding site-branding">
                 <a class="logo-light" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $flogo; ?>" alt="<?php echo "";?>"/></a><a class="logo-dark" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $hlogo; ?>" alt="<?php echo "";?>"/></a><a class="logo-mobile" href="<?php echo $BASEDIR;?>index.php" title="<?php echo "";?>" rel="home"><img src="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $hlogo; ?>" alt="<?php echo "" ;?>"/></a>    </div>
            <div class="container">
                <div class="row">


<?php  endif; ?>
                    <div class="site-navigation">
                        <nav class="main-navigation">
                            <ul id="mastmenu" class="primary-menu clearfix"><li id="menu-item-3556" class="menu-item menu-item-type-custom menu-item-object-custom current-menu menu-item-3556"><a href="<?php echo $BASEDIR;?>index.php">Home</a>
</li>
<li id="menu-item-3545" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3545"><a href="javascript:;">Company</a>
<ul class="sub-menu">
<!-- 	<li id="menu-item-3566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3566"><a href="about-us/index.php">About Us</a></li> -->
	<li id="menu-item-3565" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3565"><a href="<?php echo $BASEDIR;?>core-values/index.php">Core Values</a></li>
	<!-- <li id="menu-item-3564" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3564"><a href="<?php echo $BASEDIR;?>leadership-team/index.php">Leadership Team</a></li> -->
	<li id="menu-item-4557" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4557"><a href="<?php echo $BASEDIR;?>find-location/index.php">Locations</a></li>
	<li id="menu-item-4542" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4542"><a href="<?php echo $BASEDIR;?>our-gallery/index.php">Our Gallery</a></li>
	<!-- <li id="menu-item-4537" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4537"><a href="awards/index.php">Awards</a></li>
	<li id="menu-item-3561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3561"><a href="careers/index.php">Careers</a></li> -->
</ul>
</li>
<!-- <li id="menu-item-3591" class="menu-item menu-item-type-post_type menu-item-object-page megamenu megamenu-style-alt menu-item-has-children menu-item-3591"><a href="services/index.php">Services</a><ul class="sub-menu"><li><div class="container">		<div data-elementor-type="wp-post" data-elementor-id="3601" class="elementor elementor-3601" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
					        <section class="elementor-section elementor-top-section elementor-element elementor-element-214a043 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="214a043" data-element_type="section">

                        <div class="elementor-container elementor-column-gap-no ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2a3380b" data-id="2a3380b" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-fa7a544 elementor-widget elementor-widget-cms_heading" data-id="fa7a544" data-element_type="widget" data-widget_type="cms_heading.default">
				<div class="elementor-widget-container">
			<div class="cms-heading-wrapper cms-heading-layout1">

            <h4 class="custom-heading">
            <span >Transport Services</span>
        </h4>

    </div>		</div>
				</div>
				<div class="elementor-element elementor-element-408c0f5 elementor-widget elementor-widget-cms_navigation_menu" data-id="408c0f5" data-element_type="widget" data-widget_type="cms_navigation_menu.default">
				<div class="elementor-widget-container">
			    <div class="cms-navigation-menu1 default">
                <div class="menu-menu-services-container"><ul id="menu-menu-services" class="menu"><li id="menu-item-3579" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3579"><a href="service/warehousing/index.php">Warehousing</a></li>
<li id="menu-item-3578" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3578"><a href="service/air-freight/index.php">Air Freight</a></li>
<li id="menu-item-3581" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3581"><a href="service/ocean-freight/index.php">Ocean Freight</a></li>
<li id="menu-item-3577" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3577"><a href="service/road-freight/index.php">Road Freight</a></li>
<li id="menu-item-3580" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3580"><a href="service/supply-chain/index.php">Supply Chain</a></li>
<li id="menu-item-3582" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3582"><a href="service/packaging/index.php">Packaging</a></li>
</ul></div>    </div>
		</div>
				</div>
		                </div>
                    </div>
        </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c0fe0b9" data-id="c0fe0b9" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-bffaba5 elementor-widget elementor-widget-cms_heading" data-id="bffaba5" data-element_type="widget" data-widget_type="cms_heading.default">
				<div class="elementor-widget-container">
			<div class="cms-heading-wrapper cms-heading-layout1">

            <h4 class="custom-heading">
            <span >Industry Solutions</span>
        </h4>

    </div>		</div>
				</div>
				<div class="elementor-element elementor-element-550774d elementor-widget elementor-widget-cms_navigation_menu" data-id="550774d" data-element_type="widget" data-widget_type="cms_navigation_menu.default">
				<div class="elementor-widget-container">
			    <div class="cms-navigation-menu1 default">
                <div class="menu-menu-industries-container"><ul id="menu-menu-industries" class="menu"><li id="menu-item-3808" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3808"><a href="retail-consumer/index.php">Retail &#038; Consumer</a></li>
<li id="menu-item-3809" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3809"><a href="sciences-healthcare/index.php">Sciences &#038; Healthcare</a></li>
<li id="menu-item-3810" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3810"><a href="industrial-chemical/index.php">Industrial &#038; Chemical</a></li>
<li id="menu-item-3811" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3811"><a href="power-generation/index.php">Power Generation</a></li>
<li id="menu-item-3812" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3812"><a href="food-beverage/index.php">Food &#038; Beverage</a></li>
<li id="menu-item-3813" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3813"><a href="oil-gas/index.php">Oil &#038; Gas</a></li>
</ul></div>    </div>
		</div>
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
		</div></li></ul></li> -->

<li id="menu-item-3555" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3555"><a href="#">Features</a>
<ul class="sub-menu">
	<li id="menu-item-4430" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4430"><a href="<?php echo $BASEDIR;?>request-quote-2/index.php">Request Quote</a></li>
	<li id="menu-item-4419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4419"><a href="<?php echo $BASEDIR;?>track-trace/index.php">Track &#038; Trace</a></li>
	<li id="menu-item-4407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4407"><a href="<?php echo $BASEDIR;?>find-location/index.php">Find Location</a></li>
	<li id="menu-item-3562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3562"><a href="<?php echo $BASEDIR;?>faqs/index.php">FAQs</a></li>
</ul>
</li>
<li id="menu-item-3561" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3561"><a href="<?php echo $BASEDIR;?>about-us/index.php">About Us</a></li>
<li id="menu-item-3560" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3560"><a href="<?php echo $BASEDIR;?>contact-us/index.php">Contact Us</a></li>
<?php if(isset($_SESSION['user_id'])){

    echo '<li id="menu-item-3566" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3566"><a href="'.$BASEDIR.'admin/profile.php">Profile</a>';
}?>
</ul>                        </nav>
 <?php if($homepageStyle == 'default'): ?>
                                                    <div class="site-tool">
                                   <!--                                  <div class="site-header-item site-header-search">
                                        <span class="h-btn-search"><i class="fa fa-search"></i></span>
                                    </div>
                                              -->                                                       <div class="site-header-item site-header-button">
                                        <a class="btn" href="<?php echo $BASEDIR;?>request-quote-2/index.php" target="_blank">Request A Quote</a>
                                    </div>

                                                                </div>
                                                                     <?php endif; ?>
                                                </div>
                                                <?php if($homepageStyle == 'modern'): ?>
 <div class="site-header-right">
                        <div class="site-header-social">
                            <a href="<?php echo $facebooklink ;?>" target="_blank"><i class="fab fac-facebook-f"></i></a><a href="<?php echo $twitterhandle ;?>" target="_blank"><i class="fab fa-twitter"></i></a><a href="<?php echo $instagrampage;?>" target="_blank"><i class="fab fa-instagram"></i></a>                        </div>
                                                   <!--  <form role="search" method="get" class="search-form-popup" action="">
                                <div class="searchform-wrap">
                                    <input type="text" placeholder="Search..." id="h-search" name="s" class="search-field" />
                                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form> -->
                                            </div>

                                                <?php endif; ?>
                </div>
            </div>
            <div id="main-menu-mobile">
                <span class="btn-nav-mobile open-menu">
                    <span></span>
                </span>
            </div>
        </div>
    </div>
</header>

<!-- Modal -->
<div class="modal-container"></div>