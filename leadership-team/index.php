<?php include '../web-components/header.php'; ?>
<head><link rel='stylesheet' id='elementor-post-32-css'  href='../assets/css/post-324d15.php?ver=1621073271' type='text/css' media='all' /> </head>
<body class="page-template-default page page-id-32 redux-page body-default-font heading-default-font header-sticky elementor-default elementor-kit-4999 elementor-page elementor-page-32">
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
                    
<article id="post-32" class="post-32 page type-page status-publish hentry">
    <div class="entry-content clearfix">
        		<div data-elementor-type="wp-page" data-elementor-id="32" class="elementor elementor-32" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
					        <section class="elementor-section elementor-top-section elementor-element elementor-element-4bc2b9d3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4bc2b9d3" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                
                        <div class="elementor-container elementor-column-gap-default ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6c3e3278" data-id="6c3e3278" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-277980b3 elementor-widget elementor-widget-cms_heading" data-id="277980b3" data-element_type="widget" data-widget_type="cms_heading.default">
				<div class="elementor-widget-container">
			<div class="cms-heading-wrapper cms-heading-layout1">
    
            <h2 class="custom-heading">
            <span >Leadership Team </span>
        </h2>
        
    </div>		</div>
				</div>
				<div class="elementor-element elementor-element-7dc331b6 elementor-widget elementor-widget-cms_breadcrumb" data-id="7dc331b6" data-element_type="widget" data-widget_type="cms_breadcrumb.default">
				<div class="elementor-widget-container">
			<ul class="cms-breadcrumb"><li><a class="breadcrumb-entry" href="../index.php">Home</a></li><li><span class="breadcrumb-entry">Leadership Team</span></li></ul>		</div>
				</div>
		                </div>
                    </div>
        </div>
                                </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-60691b5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="60691b5" data-element_type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b5ef078" data-id="b5ef078" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                		<div class="elementor-element elementor-element-86540dd elementor-widget elementor-widget-cms_team_grid" data-id="86540dd" data-element_type="widget" data-widget_type="cms_team_grid.default">
				<div class="elementor-widget-container">
			    <div class="cms-grid cms-team-grid1">
        <div class="cms-grid-inner cms-grid-masonry row" data-gutter="7">
            <?php 
            $sql  = "SELECT * FROM users WHERE status ='active'";
            $query = $database->query($sql);
            $row = $database->fetch_array($query);
            foreach($query as $row){
                $userID =  $row['id'];
                    $firstname = $row['first_name'];
                    $middlename = $row['middle_name'];
                    $lastname = $row['last_name'];
                    $branch = $row['branch'];
                    $country= $row['country'];
                    $address = $row['address'];
                    $role = $row['user_role'];
                    $contact = $row['contact_no'];
                    $email = $row['email'];
                    $account_type = $row['account_type'];
                    $status = $row['status'];


                        echo ' <div class="grid-item col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="item--inner">
                    	                            <div class="item--image">
                                <img width="370" height="370" src="../uploads/profile-pictures/'.fetchUserpic($userID).'" class="attachment-full" alt="team_1" loading="lazy" />                             <!--   <div class="item--social">
                                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                        </div> -->
                            </div>
                                            	<h3 class="item--title">	
        	            	<a href="#" target="_blank" rel="nofollow">
        		            	'$firstname." ".$middlename." ".$lastname ' </a>
        		        </h3>
        		        <div class="item--position">'.$role.'</div>
                   </div>
                </div>';
            }
            ?>
                
                        <div class="grid-sizer col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12"></div>
        </div>
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

    </article><!-- #post-32 -->
                </main><!-- #main -->
            </div><!-- #primary -->

            
        </div>
    </div>
	</div><!-- #content inner -->
</div><!-- #content -->

<?php include '../web-components/footer.php'; ?>

</div><!-- #page -->

<link rel='stylesheet' id='elementor-post-3601-css'  href='../assets/css/post-3601b021.css?ver=1620910244' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-3670-css'  href='../assets/css/post-3670ba79.php?ver=1620913657' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-2-css'  href='https://fonts.googleapis.com/css?family=Rubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='../assets/lib/font-awesome/css/fontawesome.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-brands-css'  href='../assets/lib/font-awesome/css/brands.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='../assets/lib/font-awesome/css/solid.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/dist/vendor/wp-polyfill.min89b1.js?ver=7.4.4' id='wp-polyfill-js'></script>
<?php include '../web-components/javascripts.php'; ?>
</body>
</html>
