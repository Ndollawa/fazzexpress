<?php include '../web-components/header.php'; ?>
   <?php if(!(isset($_GET['service']))){
header('Location:../404/index.php');
}elseif(isset($_GET['service'])){
$id =$database->escape_value($_GET['service']);                      
$sql="SELECT * FROM service WHERE id = $id";
$query = $database->query($sql);
 $row = mysqli_fetch_array($query);
 if($row == 0){
header('Location:../404/index.php');
 }else{

  foreach ($query as $row) {
 $id = $row['id'];
      $title = $row['title'];
      $ser_description = $row['description'];
      $highlight = $row['highlights'];
      $date_created = date('l,d-m-Y',strtotime($row['date_created']));
      $page_content =$row['page_content'];
      $cimage = $row['cover_image'];
      $service_video = $row['service_video'];
      }

   } }



  ?> 
<link rel='stylesheet' id='elementor-post-4999-css'  href='<?php echo $BASEDIR; ?>assets/css/post-4999b021.css?ver=1620910244' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='<?php echo $BASEDIR; ?>assets/css/globalb861.css?ver=1620910245' type='text/css' media='all' /><style type="text/css">.elementor-442 .elementor-element.elementor-element-530f9f84:not(.elementor-motion-effects-element-type-background), .elementor-442 .elementor-element.elementor-element-530f9f84 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../uploads/service/<?php echo $cimage;?>");background-position:center center;background-repeat:no-repeat;background-size:cover;}</style>
<link rel='stylesheet' id='elementor-post-442-css'  href='<?php echo $BASEDIR; ?>assets/css/post-4429264.php?ver=1620920490' type='text/css' media='all' />



</head>


<body class="service-template-default single single-service postid-442 redux-page body-default-font heading-default-font header-sticky elementor-default elementor-kit-4999 elementor-page elementor-page-442">
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
        <div id="primary" class="col-12">
            <main id="main" class="site-main">
                <article id="post-442" class="post-442 service type-service status-publish has-post-thumbnail hentry service-category-100-satisfaction-guarantee service-category-highly-professional-staff service-category-quality-control-system">
    <div class="entry-body">
        <div class="entry-content clearfix">
                    <div data-elementor-type="wp-post" data-elementor-id="442" class="elementor elementor-442" data-elementor-settings="[]">
                        <div class="elementor-inner">
                            <div class="elementor-section-wrap">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-530f9f84 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="530f9f84" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-background-overlay"></div>
                
                        <div class="elementor-container elementor-column-gap-default ">
                            <div class="elementor-row">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-add8b7" data-id="add8b7" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-6571e486 elementor-widget elementor-widget-cms_heading" data-id="6571e486" data-element_type="widget" data-widget_type="cms_heading.default">
                <div class="elementor-widget-container">
            <div class="cms-heading-wrapper cms-heading-layout1">
    
            <h2 class="custom-heading">
            <span ><?php echo $title;?></span>
        </h2>
        
    </div>      </div>
                </div>
                <div class="elementor-element elementor-element-36838cec elementor-widget elementor-widget-cms_breadcrumb" data-id="36838cec" data-element_type="widget" data-widget_type="cms_breadcrumb.default">
                <div class="elementor-widget-container">
            <ul class="cms-breadcrumb"><li><a class="breadcrumb-entry" href="<?php echo $BASEDIR; ?>index.php">Home</a></li><li><a class="breadcrumb-entry" href="../index.php">Services</a></li><li><span class="breadcrumb-entry"><?php echo $title;?></span></li></ul>        </div>
                </div>
                        </div>
                    </div>
        </div>
                                </div>
                    </div>
        </section>
                <section class="elementor-section elementor-top-section elementor-element elementor-element-198d3262 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="198d3262" data-element_type="section">
            
                        <div class="elementor-container elementor-column-gap-extended ">
                            <div class="elementor-row">
                   <?php include '../web-components/sidebar.php'; ?>
                <div class="elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-561480b3" data-id="561480b3" data-element_type="column">
            <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                




                <?php echo $page_content;?>
               <div class="elementor-element elementor-element-2dd3a01e elementor-widget elementor-widget-spacer" data-id="2dd3a01e" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
            <div class="elementor-spacer-inner"></div>
        </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-49e3268a elementor-widget elementor-widget-cms_heading" data-id="49e3268a" data-element_type="widget" data-widget_type="cms_heading.default">
                <div class="elementor-widget-container">
            <div class="cms-heading-wrapper cms-heading-layout1">
    
            <h4 class="custom-heading">
            <span >Key Benifits</span>
        </h4>
        
    </div>      </div>
                </div>
                <div class="elementor-element elementor-element-67a7b6e1 elementor-widget elementor-widget-spacer" data-id="67a7b6e1" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
            <div class="elementor-spacer-inner"></div>
        </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-b744747 elementor-widget elementor-widget-cms_accordion" data-id="b744747" data-element_type="widget" data-widget_type="cms_accordion.default">
                <div class="elementor-widget-container">
                <div id="cms_accordion-b744747" class="cms-accordion layout1 style1">
            <?php
                                        $sql=" SELECT * FROM faq WHERE status != 'Deleted' AND answer != '' AND answer <> '' AND status = 'Active' ORDER BY id";
                                                 $result= $database->query ($sql);
                                                 $row = $database->fetch_array($result);
                                                 $count = 1;
                                                    foreach ($result as $row) {
                                      $id = $row['id'];
                                      $question = $row['question'];
                                      $answer = $row['answer'];
                                      // $author = $row['user_id'];
                                      $date =$row['date_created'];
                                       $status = $row['status'];
echo '<div class="cms-accordion-item ">
                <div class="cms-ac-title " data-target="#'.$count.'cms_accordion-039b314"">
                    <a class="cms-ac-title-text">'.$question.'</a>
                </div>
                <div id="'.$count.'cms_accordion-039b314" class="cms-ac-content">
                 '.$answer.' </div>
            </div>';


$count++;
                                    }


                                        ?>
        </div>
                </div>
                <div class="elementor-element elementor-element-6ebfecb4 elementor-widget elementor-widget-spacer" data-id="6ebfecb4" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
            <div class="elementor-spacer-inner"></div>
        </div>
                </div>
                </div>
                
                <div class="elementor-element elementor-element-1f89d24a elementor-widget elementor-widget-spacer" data-id="1f89d24a" data-element_type="widget" data-widget_type="spacer.default">
                <div class="elementor-widget-container">
                    <div class="elementor-spacer">
            <div class="elementor-spacer-inner"></div>
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
    </div>
</article><!-- #post -->            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</div>
    </div><!-- #content inner -->
</div><!-- #content -->

  
   <?php include '../web-components/footer.php'; ?>

</div> <!-- #page -->
<?php include '../web-components/javascripts.php'; ?>

</body>
</html>
