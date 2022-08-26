<?php include '../web-components/header.php'; ?>
<head><link rel='stylesheet' id='elementor-post-10-css'  href='../assets/css/post-1014a0.php?ver=1620913785' type='text/css' media='all' /> </head>

<body class="page-template-default page page-id-10 redux-page body-default-font heading-default-font header-sticky elementor-default elementor-kit-4999 elementor-page elementor-page-10">
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

<article id="post-10" class="post-10 page type-page status-publish hentry">
    <div class="entry-content clearfix">
        		<div data-elementor-type="wp-page" data-elementor-id="10" class="elementor elementor-10" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
					        <section class="elementor-section elementor-top-section elementor-element elementor-element-3d1a3ef elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3d1a3ef" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">

                        <div class="elementor-container elementor-column-gap-no ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b7530ab" data-id="b7530ab" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-a389fdf elementor-widget elementor-widget-google_maps" data-id="a389fdf" data-element_type="widget" data-widget_type="google_maps.default">
				<div class="elementor-widget-container">
			<div class="elementor-custom-embed"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $address; ?>" title="Pioneer Works" aria-label="Map View"></iframe></div>		</div>
				</div>
		                </div>
                    </div>
        </div>
                                </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-be641a1 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="be641a1" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">

                        <div class="elementor-container elementor-column-gap-default ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-a42fd91" data-id="a42fd91" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-f2e72d5 elementor-widget elementor-widget-cms_heading" data-id="f2e72d5" data-element_type="widget" data-widget_type="cms_heading.default">
				<div class="elementor-widget-container">
			<div class="cms-heading-wrapper cms-heading-layout1">

            <h4 class="custom-heading">
            <span >Contact Details
</span>
        </h4>

    </div>		</div>
				</div>
				<div class="elementor-element elementor-element-fc37ff3 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="fc37ff3" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
					<a href="javascript:;" target="_blank" rel="nofollow">						<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-map-marker-alt"></i>						</span>
										<span class="elementor-icon-list-text"><?php echo $address; ?></span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
									<?php
									$emails =preg_split("/,/",  preg_replace("/ /", "", $semail));
				foreach ($emails as $email) {
					# code...
					echo '<a href="mailto:'.$email.'" target="_blank" rel="nofollow">						<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-envelope"></i>						</span>

										<span class="elementor-icon-list-text">'.$email.'</span>
											</a>';}?>
									</li>

								<li class="elementor-icon-list-item">
												<?php	$numbers =preg_split("/,/",  preg_replace("/ /", "", $scontact));
							foreach ($numbers as $number) {
								# code...
				echo '<a href="tel:'.$number.'" target="_blank" rel="nofollow">						<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-phone-alt"></i>						</span>
										<span class="elementor-icon-list-text">'.$number.'</span>
											</a>'; }?>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-3dac86b elementor-widget elementor-widget-spacer" data-id="3dac86b" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-b8ee415 elementor-widget elementor-widget-cms_heading" data-id="b8ee415" data-element_type="widget" data-widget_type="cms_heading.default">
				<div class="elementor-widget-container">
			<div class="cms-heading-wrapper cms-heading-layout1">

            <h4 class="custom-heading">
            <span >Opening Hours
</span>
        </h4>

    </div>		</div>
				</div>
			<?php echo $active_hours; ?>
		                </div>
                    </div>
        </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-78b788c" >
            <div class="elementor-column-wrap">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-5ab54964 elementor-widget elementor-widget-cms_ctf7" >
				<div class="elementor-widget-container">
			    <div id="" class="style1">
        <div class="cms-contact-form-inner">
<form action="" method="post" id="requestForm" class="wpcf7-form" >

<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="input-filled"><span class="wpcf7-form-control-wrap your-name"><input type="text" id="user_name" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required="true"placeholder="Name" /></span></div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="input-filled"><span class="form-control-wrap your-email"><input type="email" id="user_email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="true" invalid="false" placeholder="Email" /></span></div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="input-filled"><span class="wpcf7-form-control-wrap your-website"><input type="url" id="user_website" name="your-website" value="" size="40" class="wpcf7-form-control wpcf7-text"  placeholder="@example:<?php echo $website_link; ?>" /></span></div>
    </div>
</div>

<div class="row">
	<div class="col-sm-12 col-md-12">
        <div class="input-filled"><span class="wpcf7-form-control-wrap your-heading"><input type="url" id="user_heading" name="your-heading" value="" size="40" class="wpcf7-form-control wpcf7-text"  placeholder="Heading / Title" /></span></div>
    </div>
    <div class="col-12">
        <div class="input-filled"><span class="wpcf7-form-control-wrap your-message"><textarea id="user_message" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" required="true"  placeholder="Additional Details!"></textarea></span></div>
    </div>
</div>

<div class="row">
    <div class="col-12" style="margin-top:-9px;">
        <button type="submit" id="sendRequest" class="btn">Submit Request</button>
    </div>
</div></form></div>
    </div>
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
		    </div><!-- .entry-content -->

    </article><!-- #post-10 -->
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