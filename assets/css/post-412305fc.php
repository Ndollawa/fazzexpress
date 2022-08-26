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



?>.elementor-4123 .elementor-element.elementor-element-4317eb38 > .elementor-element-populated{margin:0px 15px 0px 0px;}.elementor-4123 .elementor-element.elementor-element-19a6e63e > .elementor-element-populated{margin:0px 0px 0px 15px;}.elementor-4123 .elementor-element.elementor-element-46daaf4e:not(.elementor-motion-effects-element-type-background), .elementor-4123 .elementor-element.elementor-element-46daaf4e > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $about_image;?>");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-4123 .elementor-element.elementor-element-46daaf4e > .elementor-background-overlay{background-color:<?php echo $theme_colour; ?>;opacity:0.9;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-4123 .elementor-element.elementor-element-46daaf4e, .elementor-4123 .elementor-element.elementor-element-46daaf4e > .elementor-background-overlay{border-radius:3px 3px 3px 3px;}.elementor-4123 .elementor-element.elementor-element-46daaf4e{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:40px;margin-bottom:0px;padding:22px 40px 30px 40px;}.elementor-4123 .elementor-element.elementor-element-1b48bb63 .custom-heading{color:#FFFFFF;font-size:21px;line-height:32px;letter-spacing:0px;}.elementor-4123 .elementor-element.elementor-element-1b48bb63 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-4123 .elementor-element.elementor-element-1b48bb63 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-4123 .elementor-element.elementor-element-16d8a896{color:#F4F4F4;font-size:14px;line-height:24px;}.elementor-4123 .elementor-element.elementor-element-16d8a896 > .elementor-widget-container{margin:10px 0px 0px 0px;}.elementor-4123 .elementor-element.elementor-element-64767fe6 > .elementor-widget-container{margin:62px 0px 0px 0px;}@media(max-width:1024px){.elementor-4123 .elementor-element.elementor-element-4317eb38 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-4123 .elementor-element.elementor-element-19a6e63e > .elementor-element-populated{margin:0px 0px 0px 0px;}}@media(min-width:768px){.elementor-4123 .elementor-element.elementor-element-4317eb38{width:72%;}.elementor-4123 .elementor-element.elementor-element-19a6e63e{width:28%;}}@media(max-width:1024px) and (min-width:768px){.elementor-4123 .elementor-element.elementor-element-4317eb38{width:100%;}.elementor-4123 .elementor-element.elementor-element-19a6e63e{width:100%;}}