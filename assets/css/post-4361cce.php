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



?>.elementor-436 .elementor-element.elementor-element-249bd1c:not(.elementor-motion-effects-element-type-background), .elementor-436 .elementor-element.elementor-element-249bd1c > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $gallery_image;?>");background-position:bottom center;background-repeat:no-repeat;background-size:cover;}.elementor-436 .elementor-element.elementor-element-249bd1c > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(180deg, rgba(27, 26, 26, 0.95) 0%, rgba(27,26,26,0) 100%);opacity:0.75;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-436 .elementor-element.elementor-element-249bd1c .elementor-background-overlay{filter:brightness( 100% ) contrast( 100% ) saturate( 100% ) blur( 0px ) hue-rotate( 0deg );}.elementor-436 .elementor-element.elementor-element-249bd1c{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:260px 0px 172px 0px;}.elementor-436 .elementor-element.elementor-element-798d9885 .cms-heading-wrapper{text-align:center;}.elementor-436 .elementor-element.elementor-element-798d9885 .custom-heading{color:#ffffff;font-size:63px;letter-spacing:-1.26px;}.elementor-436 .elementor-element.elementor-element-798d9885 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:0px;}.elementor-436 .elementor-element.elementor-element-798d9885 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-436 .elementor-element.elementor-element-2194d7f3 .cms-breadcrumb{text-align:center;}.elementor-436 .elementor-element.elementor-element-40dbbede{padding:110px 0px 15px 0px;}.elementor-436 .elementor-element.elementor-element-642ce423 > .elementor-element-populated{margin:0px 8px 0px 0px;}.elementor-436 .elementor-element.elementor-element-3b1a1cdf > .elementor-widget-container{margin:5px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-3a0fe6c0 .elementor-spacer-inner{height:40px;}.elementor-436 .elementor-element.elementor-element-520e3ac3 .elementor-spacer-inner{height:40px;}.elementor-436 .elementor-element.elementor-element-50d4a84c > .elementor-element-populated{margin:0px 0px 0px 5px;}.elementor-436 .elementor-element.elementor-element-4fc8ee24 .custom-heading{font-size:24px;line-height:29px;}.elementor-436 .elementor-element.elementor-element-4fc8ee24 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-436 .elementor-element.elementor-element-4fc8ee24 .custom-heading-description{font-size:16px;line-height:26px;}.elementor-436 .elementor-element.elementor-element-7b856dd6 > .elementor-widget-container{margin:17px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-68d49743{margin-top:22px;margin-bottom:0px;}.elementor-436 .elementor-element.elementor-element-3cb4d389 > .elementor-element-populated{margin:0px 10px 0px 0px;}.elementor-436 .elementor-element.elementor-element-77ea09d8 .custom-heading{font-size:24px;line-height:29px;}.elementor-436 .elementor-element.elementor-element-77ea09d8 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-436 .elementor-element.elementor-element-77ea09d8 .custom-heading-description{font-size:16px;line-height:26px;}.elementor-436 .elementor-element.elementor-element-6ae10afd > .elementor-widget-container{margin:17px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-68352af1 .elementor-spacer-inner{height:53px;}.elementor-436 .elementor-element.elementor-element-296210ba .elementor-spacer-inner{height:22px;}.elementor-436 .elementor-element.elementor-element-341dd827 .custom-heading{font-size:24px;line-height:29px;}.elementor-436 .elementor-element.elementor-element-341dd827 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-436 .elementor-element.elementor-element-341dd827 .custom-heading-description{font-size:16px;line-height:26px;}.elementor-436 .elementor-element.elementor-element-6548674e > .elementor-widget-container{margin:17px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-6284083a > .elementor-widget-container{margin:7px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-7fea900f .elementor-spacer-inner{height:55px;}.elementor-436 .elementor-element.elementor-element-521a720a .custom-heading{font-size:24px;line-height:29px;}.elementor-436 .elementor-element.elementor-element-521a720a .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-436 .elementor-element.elementor-element-521a720a .custom-heading-description{font-size:16px;line-height:26px;}.elementor-436 .elementor-element.elementor-element-c913745 > .elementor-widget-container{margin:17px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-6650a033.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-6650a033.elementor-view-framed .elementor-icon, .elementor-436 .elementor-element.elementor-element-6650a033.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-6650a033.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-436 .elementor-element.elementor-element-6650a033.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-436 .elementor-element.elementor-element-6650a033.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-436 .elementor-element.elementor-element-6650a033 .elementor-icon{font-size:18px;}.elementor-436 .elementor-element.elementor-element-6650a033 .elementor-icon i{transform:rotate(0deg);}.elementor-436 .elementor-element.elementor-element-6650a033 .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-436 .elementor-element.elementor-element-6650a033 .elementor-icon-box-title, .elementor-436 .elementor-element.elementor-element-6650a033 .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-436 .elementor-element.elementor-element-6650a033 .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-436 .elementor-element.elementor-element-6650a033 > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EAEAEA;border-radius:3px 3px 3px 3px;}.elementor-436 .elementor-element.elementor-element-6650a033:hover .elementor-widget-container{border-style:solid;border-width:2px 2px 2px 2px;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-1fc0198c.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-1fc0198c.elementor-view-framed .elementor-icon, .elementor-436 .elementor-element.elementor-element-1fc0198c.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-1fc0198c.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-436 .elementor-element.elementor-element-1fc0198c.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-436 .elementor-element.elementor-element-1fc0198c.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-436 .elementor-element.elementor-element-1fc0198c .elementor-icon{font-size:18px;}.elementor-436 .elementor-element.elementor-element-1fc0198c .elementor-icon i{transform:rotate(0deg);}.elementor-436 .elementor-element.elementor-element-1fc0198c .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-436 .elementor-element.elementor-element-1fc0198c .elementor-icon-box-title, .elementor-436 .elementor-element.elementor-element-1fc0198c .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-436 .elementor-element.elementor-element-1fc0198c .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-436 .elementor-element.elementor-element-1fc0198c > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EAEAEA;border-radius:3px 3px 3px 3px;}.elementor-436 .elementor-element.elementor-element-1fc0198c:hover .elementor-widget-container{border-style:solid;border-width:2px 2px 2px 2px;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-6143a151.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-6143a151.elementor-view-framed .elementor-icon, .elementor-436 .elementor-element.elementor-element-6143a151.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-6143a151.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-436 .elementor-element.elementor-element-6143a151.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-436 .elementor-element.elementor-element-6143a151.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-436 .elementor-element.elementor-element-6143a151 .elementor-icon{font-size:18px;}.elementor-436 .elementor-element.elementor-element-6143a151 .elementor-icon i{transform:rotate(0deg);}.elementor-436 .elementor-element.elementor-element-6143a151 .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-436 .elementor-element.elementor-element-6143a151 .elementor-icon-box-title, .elementor-436 .elementor-element.elementor-element-6143a151 .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-436 .elementor-element.elementor-element-6143a151 .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-436 .elementor-element.elementor-element-6143a151 > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EAEAEA;border-radius:3px 3px 3px 3px;}.elementor-436 .elementor-element.elementor-element-6143a151:hover .elementor-widget-container{border-style:solid;border-width:2px 2px 2px 2px;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-24c375c1.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-24c375c1.elementor-view-framed .elementor-icon, .elementor-436 .elementor-element.elementor-element-24c375c1.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-24c375c1.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-436 .elementor-element.elementor-element-24c375c1.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-436 .elementor-element.elementor-element-24c375c1.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-436 .elementor-element.elementor-element-24c375c1 .elementor-icon{font-size:18px;}.elementor-436 .elementor-element.elementor-element-24c375c1 .elementor-icon i{transform:rotate(0deg);}.elementor-436 .elementor-element.elementor-element-24c375c1 .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-436 .elementor-element.elementor-element-24c375c1 .elementor-icon-box-title, .elementor-436 .elementor-element.elementor-element-24c375c1 .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-436 .elementor-element.elementor-element-24c375c1 .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-436 .elementor-element.elementor-element-24c375c1 > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EAEAEA;border-radius:3px 3px 3px 3px;}.elementor-436 .elementor-element.elementor-element-24c375c1:hover .elementor-widget-container{border-style:solid;border-width:2px 2px 2px 2px;border-color:<?php echo $theme_colour; ?>;}.elementor-436 .elementor-element.elementor-element-3ae00ede .elementor-spacer-inner{height:40px;}.elementor-436 .elementor-element.elementor-element-7582a5be .custom-heading{font-size:24px;line-height:29px;}.elementor-436 .elementor-element.elementor-element-7582a5be .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-436 .elementor-element.elementor-element-7582a5be .custom-heading-description{font-size:16px;line-height:26px;}.elementor-436 .elementor-element.elementor-element-539a5943 .elementor-spacer-inner{height:23px;}.elementor-436 .elementor-element.elementor-element-3c8c4b56 .elementor-spacer-inner{height:55px;}.elementor-436 .elementor-element.elementor-element-2c7e5e4f .custom-heading{font-size:24px;line-height:29px;}.elementor-436 .elementor-element.elementor-element-2c7e5e4f .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-436 .elementor-element.elementor-element-2c7e5e4f .custom-heading-description{font-size:16px;line-height:26px;}.elementor-436 .elementor-element.elementor-element-6ed8fbf2 .elementor-spacer-inner{height:23px;}.elementor-436 .elementor-element.elementor-element-23f9b679 .cms-slick-carousel .slick-list .slick-slide{padding:0 15px;}.elementor-436 .elementor-element.elementor-element-23f9b679 .cms-slick-carousel .slick-list{margin:0 -15px;}@media(max-width:1024px){.elementor-436 .elementor-element.elementor-element-642ce423 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-50d4a84c > .elementor-element-populated{margin:0px 0px 0px 0px;}}@media(min-width:768px){.elementor-436 .elementor-element.elementor-element-642ce423{width:30.665%;}.elementor-436 .elementor-element.elementor-element-50d4a84c{width:69%;}.elementor-436 .elementor-element.elementor-element-3cb4d389{width:49.018%;}.elementor-436 .elementor-element.elementor-element-7b0e6e3b{width:51%;}}@media(max-width:1024px) and (min-width:768px){.elementor-436 .elementor-element.elementor-element-642ce423{width:40%;}.elementor-436 .elementor-element.elementor-element-50d4a84c{width:60%;}.elementor-436 .elementor-element.elementor-element-3cb4d389{width:100%;}.elementor-436 .elementor-element.elementor-element-7b0e6e3b{width:100%;}.elementor-436 .elementor-element.elementor-element-193ddf87{width:100%;}.elementor-436 .elementor-element.elementor-element-1b843798{width:100%;}.elementor-436 .elementor-element.elementor-element-b4f6039{width:100%;}.elementor-436 .elementor-element.elementor-element-5cea0ea2{width:100%;}}@media(max-width:767px){.elementor-436 .elementor-element.elementor-element-798d9885 .custom-heading{font-size:45px;}.elementor-436 .elementor-element.elementor-element-642ce423 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-50d4a84c > .elementor-element-populated{margin:60px 0px 0px 0px;}.elementor-436 .elementor-element.elementor-element-6650a033 .elementor-icon-box-icon{margin-bottom:20px;}.elementor-436 .elementor-element.elementor-element-1fc0198c .elementor-icon-box-icon{margin-bottom:20px;}.elementor-436 .elementor-element.elementor-element-6143a151 .elementor-icon-box-icon{margin-bottom:20px;}.elementor-436 .elementor-element.elementor-element-24c375c1 .elementor-icon-box-icon{margin-bottom:20px;}}