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



?>.elementor-3802 .elementor-element.elementor-element-340fc39a:not(.elementor-motion-effects-element-type-background), .elementor-3802 .elementor-element.elementor-element-340fc39a > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $gallery_image;?>");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-3802 .elementor-element.elementor-element-340fc39a > .elementor-background-overlay{background-color:transparent;background-image:linear-gradient(180deg, #1B1A1A 0%, rgba(27,26,26,0) 90%);opacity:0.75;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3802 .elementor-element.elementor-element-340fc39a .elementor-background-overlay{filter:brightness( 100% ) contrast( 100% ) saturate( 100% ) blur( 0px ) hue-rotate( 0deg );}.elementor-3802 .elementor-element.elementor-element-340fc39a{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:260px 0px 172px 0px;}.elementor-3802 .elementor-element.elementor-element-2d3fbd8 .cms-heading-wrapper{text-align:center;}.elementor-3802 .elementor-element.elementor-element-2d3fbd8 .custom-heading{color:#ffffff;font-size:63px;letter-spacing:-1.26px;}.elementor-3802 .elementor-element.elementor-element-2d3fbd8 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:0px;}.elementor-3802 .elementor-element.elementor-element-2d3fbd8 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3802 .elementor-element.elementor-element-225c6657 .cms-breadcrumb{text-align:center;}.elementor-3802 .elementor-element.elementor-element-761e5dfd{padding:110px 0px 15px 0px;}.elementor-3802 .elementor-element.elementor-element-3c045122 > .elementor-element-populated{margin:0px 8px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-31591d2b > .elementor-widget-container{margin:5px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-7154caeb .elementor-spacer-inner{height:40px;}.elementor-3802 .elementor-element.elementor-element-70340eef .elementor-spacer-inner{height:40px;}.elementor-3802 .elementor-element.elementor-element-1e433cbd > .elementor-element-populated{margin:0px 0px 0px 5px;}.elementor-3802 .elementor-element.elementor-element-1fa8cfc2 .custom-heading{font-size:24px;line-height:29px;}.elementor-3802 .elementor-element.elementor-element-1fa8cfc2 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3802 .elementor-element.elementor-element-1fa8cfc2 .custom-heading-description{font-size:16px;line-height:26px;}.elementor-3802 .elementor-element.elementor-element-abe574a > .elementor-widget-container{margin:17px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-1ecc1668 > .elementor-widget-container{margin:7px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-303f29b .custom-heading{font-size:24px;line-height:29px;}.elementor-3802 .elementor-element.elementor-element-303f29b .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3802 .elementor-element.elementor-element-303f29b .custom-heading-description{font-size:16px;line-height:26px;}.elementor-3802 .elementor-element.elementor-element-303f29b > .elementor-widget-container{margin:55px 0px 16px 0px;}.elementor-3802 .elementor-element.elementor-element-6b6eebfb{margin-top:0px;margin-bottom:-3px;}.elementor-3802 .elementor-element.elementor-element-7e72768 > .elementor-element-populated{margin:0px 15px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-de7c761 .custom-heading{font-size:18px;line-height:29px;}.elementor-3802 .elementor-element.elementor-element-de7c761 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3802 .elementor-element.elementor-element-de7c761 .custom-heading-description{font-size:16px;line-height:26px;}.elementor-3802 .elementor-element.elementor-element-de7c761 > .elementor-widget-container{margin:0px 0px 15px 0px;}.elementor-3802 .elementor-element.elementor-element-35a294bc > .elementor-element-populated{margin:0px 0px 0px 15px;}.elementor-3802 .elementor-element.elementor-element-bef704b .custom-heading{font-size:18px;line-height:29px;}.elementor-3802 .elementor-element.elementor-element-bef704b .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3802 .elementor-element.elementor-element-bef704b .custom-heading-description{font-size:16px;line-height:26px;}.elementor-3802 .elementor-element.elementor-element-bef704b > .elementor-widget-container{margin:0px 0px 15px 0px;}.elementor-3802 .elementor-element.elementor-element-31e0b02 .custom-heading{font-size:24px;line-height:29px;}.elementor-3802 .elementor-element.elementor-element-31e0b02 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3802 .elementor-element.elementor-element-31e0b02 .custom-heading-description{font-size:16px;line-height:26px;}.elementor-3802 .elementor-element.elementor-element-31e0b02 > .elementor-widget-container{margin:55px 0px 16px 0px;}.elementor-3802 .elementor-element.elementor-element-8692a5c{margin-top:2px;margin-bottom:0px;}.elementor-3802 .elementor-element.elementor-element-3d90c035.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-3d90c035.elementor-view-framed .elementor-icon, .elementor-3802 .elementor-element.elementor-element-3d90c035.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-3d90c035.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-3802 .elementor-element.elementor-element-3d90c035.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-3802 .elementor-element.elementor-element-3d90c035.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-3802 .elementor-element.elementor-element-3d90c035 .elementor-icon{font-size:18px;}.elementor-3802 .elementor-element.elementor-element-3d90c035 .elementor-icon i{transform:rotate(0deg);}.elementor-3802 .elementor-element.elementor-element-3d90c035 .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-3802 .elementor-element.elementor-element-3d90c035 .elementor-icon-box-title, .elementor-3802 .elementor-element.elementor-element-3d90c035 .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-3802 .elementor-element.elementor-element-3d90c035 .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-3802 .elementor-element.elementor-element-3d90c035 > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:<?php echo $theme_colour; ?>;border-radius:3px 3px 3px 3px;}.elementor-3802 .elementor-element.elementor-element-31e5e685.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-31e5e685.elementor-view-framed .elementor-icon, .elementor-3802 .elementor-element.elementor-element-31e5e685.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-31e5e685.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-3802 .elementor-element.elementor-element-31e5e685.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-3802 .elementor-element.elementor-element-31e5e685.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-3802 .elementor-element.elementor-element-31e5e685 .elementor-icon{font-size:18px;}.elementor-3802 .elementor-element.elementor-element-31e5e685 .elementor-icon i{transform:rotate(0deg);}.elementor-3802 .elementor-element.elementor-element-31e5e685 .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-3802 .elementor-element.elementor-element-31e5e685 .elementor-icon-box-title, .elementor-3802 .elementor-element.elementor-element-31e5e685 .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-3802 .elementor-element.elementor-element-31e5e685 .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-3802 .elementor-element.elementor-element-31e5e685 > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EAEAEA;border-radius:3px 3px 3px 3px;}.elementor-3802 .elementor-element.elementor-element-828854c.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-828854c.elementor-view-framed .elementor-icon, .elementor-3802 .elementor-element.elementor-element-828854c.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-828854c.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-3802 .elementor-element.elementor-element-828854c.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-3802 .elementor-element.elementor-element-828854c.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-3802 .elementor-element.elementor-element-828854c .elementor-icon{font-size:18px;}.elementor-3802 .elementor-element.elementor-element-828854c .elementor-icon i{transform:rotate(0deg);}.elementor-3802 .elementor-element.elementor-element-828854c .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-3802 .elementor-element.elementor-element-828854c .elementor-icon-box-title, .elementor-3802 .elementor-element.elementor-element-828854c .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-3802 .elementor-element.elementor-element-828854c .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-3802 .elementor-element.elementor-element-828854c > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EAEAEA;border-radius:3px 3px 3px 3px;}.elementor-3802 .elementor-element.elementor-element-c4bdd3.elementor-view-stacked .elementor-icon{background-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-c4bdd3.elementor-view-framed .elementor-icon, .elementor-3802 .elementor-element.elementor-element-c4bdd3.elementor-view-default .elementor-icon{fill:<?php echo $theme_colour; ?>;color:<?php echo $theme_colour; ?>;border-color:<?php echo $theme_colour; ?>;}.elementor-3802 .elementor-element.elementor-element-c4bdd3.elementor-position-right .elementor-icon-box-icon{margin-left:20px;}.elementor-3802 .elementor-element.elementor-element-c4bdd3.elementor-position-left .elementor-icon-box-icon{margin-right:20px;}.elementor-3802 .elementor-element.elementor-element-c4bdd3.elementor-position-top .elementor-icon-box-icon{margin-bottom:20px;}.elementor-3802 .elementor-element.elementor-element-c4bdd3 .elementor-icon{font-size:18px;}.elementor-3802 .elementor-element.elementor-element-c4bdd3 .elementor-icon i{transform:rotate(0deg);}.elementor-3802 .elementor-element.elementor-element-c4bdd3 .elementor-icon-box-title{margin-bottom:18px;color:#282828;}.elementor-3802 .elementor-element.elementor-element-c4bdd3 .elementor-icon-box-title, .elementor-3802 .elementor-element.elementor-element-c4bdd3 .elementor-icon-box-title a{font-family:"Rubik", Sans-serif;font-size:20px;font-weight:500;}.elementor-3802 .elementor-element.elementor-element-c4bdd3 .elementor-icon-box-description{color:#9B9B9B;font-size:14px;line-height:24px;}.elementor-3802 .elementor-element.elementor-element-c4bdd3 > .elementor-widget-container{padding:23px 25px 23px 30px;border-style:solid;border-width:2px 2px 2px 2px;border-color:#EAEAEA;border-radius:3px 3px 3px 3px;}.elementor-3802 .elementor-element.elementor-element-61cfda0d .elementor-spacer-inner{height:40px;}.elementor-3802 .elementor-element.elementor-element-7ef98d84 .custom-heading{font-size:24px;line-height:29px;}.elementor-3802 .elementor-element.elementor-element-7ef98d84 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3802 .elementor-element.elementor-element-7ef98d84 .custom-heading-description{font-size:16px;line-height:26px;}.elementor-3802 .elementor-element.elementor-element-516bb70f .elementor-spacer-inner{height:23px;}.elementor-3802 .elementor-element.elementor-element-3cfc2b36:not(.elementor-motion-effects-element-type-background), .elementor-3802 .elementor-element.elementor-element-3cfc2b36 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $about_image;?>");background-repeat:no-repeat;background-size:cover;}.elementor-3802 .elementor-element.elementor-element-3cfc2b36 > .elementor-background-overlay{background-color:<?php echo $theme_colour; ?>;opacity:0.95;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3802 .elementor-element.elementor-element-3cfc2b36{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:100px;margin-bottom:0px;padding:113px 0px 193px 0px;}.elementor-3802 .elementor-element.elementor-element-7efc45c0 .custom-heading{color:#FFFFFF;font-size:43px;}.elementor-3802 .elementor-element.elementor-element-7efc45c0 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3802 .elementor-element.elementor-element-7efc45c0 .custom-subheading{color:#F9F9F9;}.elementor-3802 .elementor-element.elementor-element-7efc45c0 .custom-subheading.line-before:before{background-color:#F9F9F9;}.elementor-3802 .elementor-element.elementor-element-7efc45c0 .cms-heading-wrapper .custom-subheading{margin-bottom:9px;}.elementor-3802 .elementor-element.elementor-element-b206096{color:#F9F9F9;font-size:17px;font-weight:500;line-height:27px;}.elementor-3802 .elementor-element.elementor-element-7072b11{margin-top:25px;margin-bottom:0px;}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(10px/2);}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(10px/2);}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(10px/2);margin-left:calc(10px/2);}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-10px/2);margin-left:calc(-10px/2);}body.rtl .elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-10px/2);}body:not(.rtl) .elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-10px/2);}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-icon i{color:#F9F9F9;font-size:18px;}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-icon svg{fill:#F9F9F9;width:18px;}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-text{color:#F9F9F9;}.elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-item, .elementor-3802 .elementor-element.elementor-element-33fd2d7 .elementor-icon-list-item a{font-size:15px;font-weight:700;}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(10px/2);}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(10px/2);}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(10px/2);margin-left:calc(10px/2);}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-10px/2);margin-left:calc(-10px/2);}body.rtl .elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-10px/2);}body:not(.rtl) .elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-10px/2);}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-icon i{color:#F9F9F9;font-size:18px;}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-icon svg{fill:#F9F9F9;width:18px;}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-text{color:#F9F9F9;}.elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-item, .elementor-3802 .elementor-element.elementor-element-7839559 .elementor-icon-list-item a{font-size:15px;font-weight:700;}.elementor-3802 .elementor-element.elementor-element-1b437cc0:not(.elementor-motion-effects-element-type-background), .elementor-3802 .elementor-element.elementor-element-1b437cc0 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F9F9F9;}.elementor-3802 .elementor-element.elementor-element-1b437cc0{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:0px 0px 70px 0px;}.elementor-3802 .elementor-element.elementor-element-1b437cc0 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3802 .elementor-element.elementor-element-7651da29 > .elementor-element-populated, .elementor-3802 .elementor-element.elementor-element-7651da29 > .elementor-element-populated > .elementor-background-overlay, .elementor-3802 .elementor-element.elementor-element-7651da29 > .elementor-background-slideshow{border-radius:3px 3px 3px 3px;}.elementor-3802 .elementor-element.elementor-element-7651da29 > .elementor-element-populated{box-shadow:0px 5px 83px 0px rgba(40, 40, 40, 0.11);margin:-88px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-6aa656f4 .cms-tabs .cms-tab-title.active{background-color:#FFFFFF;color:#1B1A1A;}.elementor-3802 .elementor-element.elementor-element-6aa656f4 .cms-tabs .cms-tab-title.active svg{fill:#1B1A1A;}.elementor-3802 .elementor-element.elementor-element-2ece0ca3:not(.elementor-motion-effects-element-type-background), .elementor-3802 .elementor-element.elementor-element-2ece0ca3 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F9F9F9;}.elementor-3802 .elementor-element.elementor-element-2ece0ca3 > .elementor-background-overlay{opacity:1;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3802 .elementor-element.elementor-element-2ece0ca3{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:0px 0px 39px 0px;}.elementor-3802 .elementor-element.elementor-element-11d671f7 .cms-testimonial-carousel .client-image img{width:60px;height:auto;}.elementor-3802 .elementor-element.elementor-element-11d671f7 .cms-slick-carousel .slick-list .slick-slide{padding:10px;}.elementor-3802 .elementor-element.elementor-element-11d671f7 .cms-slick-carousel .slick-list{margin:0 -10px;}.elementor-3802 .elementor-element.elementor-element-5e8c5388:not(.elementor-motion-effects-element-type-background), .elementor-3802 .elementor-element.elementor-element-5e8c5388 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F9F9F9;}.elementor-3802 .elementor-element.elementor-element-5e8c5388{border-style:solid;border-width:1px 0px 0px 0px;border-color:#eaeaea;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:30px 0px 31px 0px;}.elementor-3802 .elementor-element.elementor-element-5e8c5388 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3802 .elementor-element.elementor-element-22c72132 .cms-slick-carousel .slick-list .slick-slide{padding-right:10px;}@media(max-width:1024px){.elementor-3802 .elementor-element.elementor-element-3c045122 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-1e433cbd > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-7e72768 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-35a294bc > .elementor-element-populated{margin:0px 0px 0px 0px;}}@media(min-width:768px){.elementor-3802 .elementor-element.elementor-element-3c045122{width:30.665%;}.elementor-3802 .elementor-element.elementor-element-1e433cbd{width:69%;}.elementor-3802 .elementor-element.elementor-element-7e72768{width:50%;}.elementor-3802 .elementor-element.elementor-element-35a294bc{width:50.018%;}}@media(max-width:1024px) and (min-width:768px){.elementor-3802 .elementor-element.elementor-element-3c045122{width:40%;}.elementor-3802 .elementor-element.elementor-element-1e433cbd{width:60%;}.elementor-3802 .elementor-element.elementor-element-7e72768{width:100%;}.elementor-3802 .elementor-element.elementor-element-35a294bc{width:100%;}.elementor-3802 .elementor-element.elementor-element-e3780dd{width:100%;}.elementor-3802 .elementor-element.elementor-element-8085a5c{width:100%;}.elementor-3802 .elementor-element.elementor-element-10a7c5d{width:100%;}.elementor-3802 .elementor-element.elementor-element-5d4de35{width:100%;}.elementor-3802 .elementor-element.elementor-element-51951426{width:100%;}.elementor-3802 .elementor-element.elementor-element-6d169e6b{width:100%;}}@media(max-width:767px){.elementor-3802 .elementor-element.elementor-element-2d3fbd8 .custom-heading{font-size:45px;}.elementor-3802 .elementor-element.elementor-element-3c045122 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-1e433cbd > .elementor-element-populated{margin:60px 0px 0px 0px;}.elementor-3802 .elementor-element.elementor-element-3d90c035 .elementor-icon-box-icon{margin-bottom:20px;}.elementor-3802 .elementor-element.elementor-element-31e5e685 .elementor-icon-box-icon{margin-bottom:20px;}.elementor-3802 .elementor-element.elementor-element-828854c .elementor-icon-box-icon{margin-bottom:20px;}.elementor-3802 .elementor-element.elementor-element-c4bdd3 .elementor-icon-box-icon{margin-bottom:20px;}}