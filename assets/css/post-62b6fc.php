<?php 
header("Content-type: text/css; charset:UTF-8");
include '../../backend/database.php';
$sql = "SELECT * FROM site_settings WHERE id =1"; 
$query = $database->query($sql);
$row = $database->fetch_array($query);
foreach($query as $key => $row) {
$theme_colour = $row["theme_colour"];
$theme_footer_colour = $row["theme_footer_colour"];
$theme_links_colour = $row["theme_link_colour"];
$theme_buttons_colour = $row["theme_colour"];  
$sidenav_image = $row['sidenav_image'];
$quote_image = $row['quote_image'];
$location_image = $row['location_image'];
$gallery_image= $row['gallery_image'];
$corevalue_image = $row['corevalue_image'];
$company_image = $row['company_image'];
$about_image = $row['about_image'];
$home_slider1 = $row['home_slider1'];
$home_slider2 = $row['home_slider2'];
$home_slider3 = $row['home_slider3'];            
              }              



?>.elementor-62 .elementor-element.elementor-element-6e0722a0:not(.elementor-motion-effects-element-type-background), .elementor-62 .elementor-element.elementor-element-6e0722a0 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $corevalue_image;?>");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-62 .elementor-element.elementor-element-6e0722a0 > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(180deg, rgba(27, 26, 26, 0.95) 0%, rgba(27,26,26,0) 100%);opacity:0.75;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-62 .elementor-element.elementor-element-6e0722a0 .elementor-background-overlay{filter:brightness( 100% ) contrast( 100% ) saturate( 100% ) blur( 0px ) hue-rotate( 0deg );}.elementor-62 .elementor-element.elementor-element-6e0722a0{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:260px 0px 172px 0px;}.elementor-62 .elementor-element.elementor-element-51ad961f .cms-heading-wrapper{text-align:center;}.elementor-62 .elementor-element.elementor-element-51ad961f .custom-heading{color:#ffffff;font-size:63px;letter-spacing:-1.26px;}.elementor-62 .elementor-element.elementor-element-51ad961f .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:0px;}.elementor-62 .elementor-element.elementor-element-51ad961f .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-62 .elementor-element.elementor-element-6d03f241 .cms-breadcrumb{text-align:center;}.elementor-62 .elementor-element.elementor-element-cddb579{padding:86px 0px 100px 0px;}.elementor-62 .elementor-element.elementor-element-87ab25a .cms-grid .cms-grid-inner{margin-left:-15px;margin-right:-15px;}.elementor-62 .elementor-element.elementor-element-87ab25a .cms-grid .grid-item{padding-left:15px;padding-right:15px;}.elementor-62 .elementor-element.elementor-element-87ab25a .cms-grid .grid-sizer{padding-left:15px;padding-right:15px;}@media(max-width:767px){.elementor-62 .elementor-element.elementor-element-51ad961f .custom-heading{font-size:45px;}}