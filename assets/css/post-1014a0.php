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



?>
.elementor-10 .elementor-element.elementor-element-a389fdf iframe{height:520px;filter:brightness( 104% ) contrast( 99% ) saturate( 0% ) blur( 0px ) hue-rotate( 0deg );}.elementor-10 .elementor-element.elementor-element-be641a1{margin-top:113px;margin-bottom:120px;}.elementor-10 .elementor-element.elementor-element-f2e72d5 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-10 .elementor-element.elementor-element-f2e72d5 .custom-heading{font-size:18px;}.elementor-10 .elementor-element.elementor-element-f2e72d5 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(8px/2);}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(8px/2);}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(8px/2);margin-left:calc(8px/2);}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-8px/2);margin-left:calc(-8px/2);}body.rtl .elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-8px/2);}body:not(.rtl) .elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-8px/2);}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-icon i{color:<?php echo $theme_colour; ?>;font-size:14px;}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-icon svg{fill:<?php echo $theme_colour; ?>;width:14px;}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-text{color:#9B9B9B;}.elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-item, .elementor-10 .elementor-element.elementor-element-fc37ff3 .elementor-icon-list-item a{font-size:14px;}.elementor-10 .elementor-element.elementor-element-fc37ff3 > .elementor-widget-container{margin:2px 0px 0px 0px;}.elementor-10 .elementor-element.elementor-element-3dac86b .elementor-spacer-inner{height:30px;}.elementor-10 .elementor-element.elementor-element-b8ee415 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-10 .elementor-element.elementor-element-b8ee415 .custom-heading{font-size:18px;}.elementor-10 .elementor-element.elementor-element-b8ee415 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-10 .elementor-element.elementor-element-e638caa{columns:2;text-align:justify;font-size:14px;}.elementor-10 .elementor-element.elementor-element-03460bc{columns:2;font-size:14px;}.elementor-10 .elementor-element.elementor-element-03460bc > .elementor-widget-container{margin:-7px 0px 0px 0px;}.elementor-10 .elementor-element.elementor-element-b1839d8{columns:2;font-size:14px;}.elementor-10 .elementor-element.elementor-element-b1839d8 > .elementor-widget-container{margin:-7px 0px 0px 0px;}.elementor-10 .elementor-element.elementor-element-5ab54964 .wpcf7-form textarea.wpcf7-textarea{height:150px;}.elementor-10 .elementor-element.elementor-element-5ab54964 > .elementor-widget-container{margin:6px 0px 0px 0px;}@media(min-width:768px){.elementor-10 .elementor-element.elementor-element-a42fd91{width:30%;}.elementor-10 .elementor-element.elementor-element-78b788c{width:70%;}}@media(max-width:1024px) and (min-width:768px){.elementor-10 .elementor-element.elementor-element-a42fd91{width:40%;}.elementor-10 .elementor-element.elementor-element-78b788c{width:60%;}}