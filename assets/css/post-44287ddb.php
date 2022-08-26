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



?>.elementor-4428 .elementor-element.elementor-element-476523a1:not(.elementor-motion-effects-element-type-background), .elementor-4428 .elementor-element.elementor-element-476523a1 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $quote_image;?>");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-4428 .elementor-element.elementor-element-476523a1 > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(180deg, #1B1A1A 0%, rgba(27,26,26,0) 90%);opacity:0.75;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-4428 .elementor-element.elementor-element-476523a1 .elementor-background-overlay{filter:brightness( 100% ) contrast( 100% ) saturate( 100% ) blur( 0px ) hue-rotate( 0deg );}.elementor-4428 .elementor-element.elementor-element-476523a1{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:260px 0px 172px 0px;}.elementor-4428 .elementor-element.elementor-element-52eb63d8 .cms-heading-wrapper{text-align:left;}.elementor-4428 .elementor-element.elementor-element-52eb63d8 .custom-heading{color:#ffffff;font-size:63px;letter-spacing:-1.26px;}.elementor-4428 .elementor-element.elementor-element-52eb63d8 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:0px;}.elementor-4428 .elementor-element.elementor-element-52eb63d8 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-4428 .elementor-element.elementor-element-60260dcd .cms-breadcrumb{text-align:left;}.elementor-4428 .elementor-element.elementor-element-6f9fbe66{padding:110px 0px 15px 0px;}.elementor-4428 .elementor-element.elementor-element-264131ac > .elementor-element-populated{margin:0px 8px 0px 0px;}.elementor-4428 .elementor-element.elementor-element-1b693d39 > .elementor-widget-container{margin:5px 0px 0px 0px;}.elementor-4428 .elementor-element.elementor-element-211e8556 .elementor-spacer-inner{height:40px;}.elementor-4428 .elementor-element.elementor-element-7783a6e5 .elementor-spacer-inner{height:40px;}.elementor-4428 .elementor-element.elementor-element-315083b0 > .elementor-element-populated{margin:0px 0px 0px 5px;}@media(max-width:1024px){.elementor-4428 .elementor-element.elementor-element-264131ac > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-4428 .elementor-element.elementor-element-315083b0 > .elementor-element-populated{margin:0px 0px 0px 0px;}}@media(min-width:768px){.elementor-4428 .elementor-element.elementor-element-264131ac{width:30.665%;}.elementor-4428 .elementor-element.elementor-element-315083b0{width:69%;}}@media(max-width:1024px) and (min-width:768px){.elementor-4428 .elementor-element.elementor-element-264131ac{width:40%;}.elementor-4428 .elementor-element.elementor-element-315083b0{width:60%;}}@media(max-width:767px){.elementor-4428 .elementor-element.elementor-element-52eb63d8 .custom-heading{font-size:45px;}.elementor-4428 .elementor-element.elementor-element-264131ac > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-4428 .elementor-element.elementor-element-315083b0 > .elementor-element-populated{margin:60px 0px 0px 0px;}}