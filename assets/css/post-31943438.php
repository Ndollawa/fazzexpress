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
.elementor-3194 .elementor-element.elementor-element-733355f8{overflow:hidden;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-3194 .elementor-element.elementor-element-733355f8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-42960d89:not(.elementor-motion-effects-element-type-background), .elementor-3194 .elementor-element.elementor-element-42960d89 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FEFEFE;}.elementor-3194 .elementor-element.elementor-element-42960d89, .elementor-3194 .elementor-element.elementor-element-42960d89 > .elementor-background-overlay{border-radius:3px 3px 3px 3px;}.elementor-3194 .elementor-element.elementor-element-42960d89{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:-60px;margin-bottom:0px;z-index:1;}.elementor-3194 .elementor-element.elementor-element-42960d89 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-700be129:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-3194 .elementor-element.elementor-element-700be129 > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:<?php echo $theme_colour; ?>;}.elementor-3194 .elementor-element.elementor-element-700be129 > .elementor-element-populated, .elementor-3194 .elementor-element.elementor-element-700be129 > .elementor-element-populated > .elementor-background-overlay, .elementor-3194 .elementor-element.elementor-element-700be129 > .elementor-background-slideshow{border-radius:3px 0px 0px 3px;}.elementor-3194 .elementor-element.elementor-element-700be129 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:42px 45px 0px 45px;}.elementor-3194 .elementor-element.elementor-element-700be129 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-b40821b .custom-heading{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-b40821b .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3194 .elementor-element.elementor-element-b40821b .custom-subheading{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-b40821b .custom-subheading.line-before:before{background-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-b40821b .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3194 .elementor-element.elementor-element-1ef4825d:not(.elementor-motion-effects-element-type-background) > .elementor-column-wrap, .elementor-3194 .elementor-element.elementor-element-1ef4825d > .elementor-column-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-1ef4825d > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-1ef4825d > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-0bcd156 > .elementor-widget-container{margin:0px 1px 0px 1px;}.elementor-3194 .elementor-element.elementor-element-3da73a9 > .elementor-widget-container{margin:0px 1px 0px 1px;}.elementor-3194 .elementor-element.elementor-element-9b7edbb > .elementor-widget-container{margin:0px 0px 0px 1px;border-radius:0px 3px 3px 0px;}.elementor-3194 .elementor-element.elementor-element-14911d02{margin-top:110px;margin-bottom:0px;}.elementor-3194 .elementor-element.elementor-element-70a2902f > .elementor-element-populated{margin:0px 20px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-5b34ec81 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3194 .elementor-element.elementor-element-5b34ec81 .custom-heading{font-size:35px;}.elementor-3194 .elementor-element.elementor-element-5b34ec81 .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3194 .elementor-element.elementor-element-45430341{font-size:15px;}.elementor-3194 .elementor-element.elementor-element-45430341 > .elementor-widget-container{margin:16px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-28b8955a{font-size:15px;}.elementor-3194 .elementor-element.elementor-element-28b8955a > .elementor-widget-container{margin:13px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-7e3de4cf{margin-top:4px;margin-bottom:0px;}.elementor-3194 .elementor-element.elementor-element-19c6461c .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:0px;}.elementor-3194 .elementor-element.elementor-element-19c6461c .custom-heading{font-size:15px;font-weight:bold;}.elementor-3194 .elementor-element.elementor-element-19c6461c .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3194 .elementor-element.elementor-element-19c6461c .custom-heading-description{color:#616161;font-size:12px;}.elementor-3194 .elementor-element.elementor-element-7ae357dc{text-align:left;}.elementor-3194 .elementor-element.elementor-element-92b3040 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:0px 0px 0px 60px;}.elementor-3194 .elementor-element.elementor-element-92b3040 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-76f33167:not(.elementor-motion-effects-element-type-background), .elementor-3194 .elementor-element.elementor-element-76f33167 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/site-settings/<?php echo $home_slider1;?>");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-3194 .elementor-element.elementor-element-76f33167, .elementor-3194 .elementor-element.elementor-element-76f33167 > .elementor-background-overlay{border-radius:3px 3px 3px 3px;}.elementor-3194 .elementor-element.elementor-element-76f33167{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-3194 .elementor-element.elementor-element-76f33167 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-712be883 .elementor-spacer-inner{height:140px;}.elementor-3194 .elementor-element.elementor-element-331e0e6 > .elementor-widget-container{margin:0px 0px 0px -50px;}.elementor-3194 .elementor-element.elementor-element-2bd6cc58 .elementor-spacer-inner{height:45px;}.elementor-3194 .elementor-element.elementor-element-2c9ac15 > .elementor-background-overlay{background-image:url("../../uploads/pages/<?php echo $sidenav_image;?>");background-position:-135px 0px;background-repeat:no-repeat;background-size:cover;opacity:1;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-2c9ac15{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:110px;margin-bottom:0px;padding:126px 0px 260px 0px;}.elementor-3194 .elementor-element.elementor-element-8443047 .custom-heading{color:#FFFFFF;font-size:43px;}.elementor-3194 .elementor-element.elementor-element-8443047 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3194 .elementor-element.elementor-element-8443047 .custom-subheading{color:#F9F9F9;}.elementor-3194 .elementor-element.elementor-element-8443047 .custom-subheading.line-before:before{background-color:#F9F9F9;}.elementor-3194 .elementor-element.elementor-element-8443047 .cms-heading-wrapper .custom-subheading{margin-bottom:9px;}.elementor-3194 .elementor-element.elementor-element-18828a1 > .elementor-widget-container{margin:20px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-7763cdd > .elementor-element-populated{margin:0px 70px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-2c6b188{color:#F9F9F9;font-size:17px;font-weight:500;line-height:27px;}.elementor-3194 .elementor-element.elementor-element-2c6b188 > .elementor-widget-container{margin:8px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-e4ed897{margin-top:22px;margin-bottom:0px;}.elementor-3194 .elementor-element.elementor-element-9004b67 .elementor-icon-wrapper{text-align:left;}.elementor-3194 .elementor-element.elementor-element-9004b67.elementor-view-stacked .elementor-icon{background-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-9004b67.elementor-view-framed .elementor-icon, .elementor-3194 .elementor-element.elementor-element-9004b67.elementor-view-default .elementor-icon{color:#FFFFFF;border-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-9004b67.elementor-view-framed .elementor-icon, .elementor-3194 .elementor-element.elementor-element-9004b67.elementor-view-default .elementor-icon svg{fill:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-9004b67 .elementor-icon{font-size:65px;}.elementor-3194 .elementor-element.elementor-element-9004b67 .elementor-icon i, .elementor-3194 .elementor-element.elementor-element-9004b67 .elementor-icon svg{transform:rotate(0deg);}.elementor-3194 .elementor-element.elementor-element-9004b67 > .elementor-widget-container{margin:0px 0px 17px 0px;}.elementor-3194 .elementor-element.elementor-element-b97ecec .cms-counter-number-wrapper{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-b97ecec .cms-counter-title{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-c34daab .elementor-icon-wrapper{text-align:left;}.elementor-3194 .elementor-element.elementor-element-c34daab.elementor-view-stacked .elementor-icon{background-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-c34daab.elementor-view-framed .elementor-icon, .elementor-3194 .elementor-element.elementor-element-c34daab.elementor-view-default .elementor-icon{color:#FFFFFF;border-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-c34daab.elementor-view-framed .elementor-icon, .elementor-3194 .elementor-element.elementor-element-c34daab.elementor-view-default .elementor-icon svg{fill:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-c34daab .elementor-icon{font-size:65px;}.elementor-3194 .elementor-element.elementor-element-c34daab .elementor-icon i, .elementor-3194 .elementor-element.elementor-element-c34daab .elementor-icon svg{transform:rotate(0deg);}.elementor-3194 .elementor-element.elementor-element-c34daab > .elementor-widget-container{margin:0px 0px 17px 0px;}.elementor-3194 .elementor-element.elementor-element-c29b384 .cms-counter-number-wrapper{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-c29b384 .cms-counter-title{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-ebc787d .elementor-icon-wrapper{text-align:left;}.elementor-3194 .elementor-element.elementor-element-ebc787d.elementor-view-stacked .elementor-icon{background-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-ebc787d.elementor-view-framed .elementor-icon, .elementor-3194 .elementor-element.elementor-element-ebc787d.elementor-view-default .elementor-icon{color:#FFFFFF;border-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-ebc787d.elementor-view-framed .elementor-icon, .elementor-3194 .elementor-element.elementor-element-ebc787d.elementor-view-default .elementor-icon svg{fill:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-ebc787d .elementor-icon{font-size:65px;}.elementor-3194 .elementor-element.elementor-element-ebc787d .elementor-icon i, .elementor-3194 .elementor-element.elementor-element-ebc787d .elementor-icon svg{transform:rotate(0deg);}.elementor-3194 .elementor-element.elementor-element-ebc787d > .elementor-widget-container{margin:0px 0px 17px 0px;}.elementor-3194 .elementor-element.elementor-element-c4859dd .cms-counter-number-wrapper{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-c4859dd .cms-counter-title{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-ab055c8{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:0px 0px 60px 0px;}.elementor-3194 .elementor-element.elementor-element-ab055c8 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-5b00ff11 > .elementor-element-populated, .elementor-3194 .elementor-element.elementor-element-5b00ff11 > .elementor-element-populated > .elementor-background-overlay, .elementor-3194 .elementor-element.elementor-element-5b00ff11 > .elementor-background-slideshow{border-radius:3px 3px 3px 3px;}.elementor-3194 .elementor-element.elementor-element-5b00ff11 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin:-155px 0px 0px 135px;}.elementor-3194 .elementor-element.elementor-element-5b00ff11 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-5f0fa8ee{text-align:left;z-index:2;}.elementor-3194 .elementor-element.elementor-element-5f0fa8ee img{border-radius:3px 3px 3px 3px;}.elementor-3194 .elementor-element.elementor-element-3e92df7c{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-3194 .elementor-element.elementor-element-3e92df7c > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-5fb491fb .elementor-spacer-inner{height:23px;}.elementor-3194 .elementor-element.elementor-element-1341d850 .cms-heading-wrapper{text-align:center;}.elementor-3194 .elementor-element.elementor-element-1341d850 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3194 .elementor-element.elementor-element-63aa8642 .elementor-spacer-inner{height:33px;}.elementor-3194 .elementor-element.elementor-element-78863cc .cms-grid .cms-grid-inner{margin-left:-15px;margin-right:-15px;}.elementor-3194 .elementor-element.elementor-element-78863cc .cms-grid .grid-item{padding-left:15px;padding-right:15px;}.elementor-3194 .elementor-element.elementor-element-78863cc .cms-grid .grid-sizer{padding-left:15px;padding-right:15px;}.elementor-3194 .elementor-element.elementor-element-2ce6f3d3:not(.elementor-motion-effects-element-type-background), .elementor-3194 .elementor-element.elementor-element-2ce6f3d3 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $about_image;?>");background-position:top center;background-repeat:no-repeat;background-size:cover;}.elementor-3194 .elementor-element.elementor-element-2ce6f3d3 > .elementor-background-overlay{background-color:#1B1A1A;opacity:0.25;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-2ce6f3d3{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top:45px;margin-bottom:0px;padding:120px 130px 0px 130px;}.elementor-3194 .elementor-element.elementor-element-8b7f3ec .cms-video-player{text-align:left;}.elementor-3194 .elementor-element.elementor-element-8b7f3ec > .elementor-widget-container{margin:10px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-2e818621 .custom-heading{color:#FFFFFF;font-size:43px;}.elementor-3194 .elementor-element.elementor-element-2e818621 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3194 .elementor-element.elementor-element-2e818621 .custom-subheading{color:#F9F9F9;}.elementor-3194 .elementor-element.elementor-element-2e818621 .custom-subheading.line-before:before{background-color:#F9F9F9;}.elementor-3194 .elementor-element.elementor-element-2e818621 .cms-heading-wrapper .custom-subheading{margin-bottom:9px;}.elementor-3194 .elementor-element.elementor-element-2e818621 > .elementor-widget-container{margin:46px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-22d6890a > .elementor-element-populated{margin:0px 0px -113px 0px;}.elementor-3194 .elementor-element.elementor-element-22d6890a{z-index:1;}.elementor-3194 .elementor-element.elementor-element-32f82d5c .cms-tabs .cms-tab-title{background-color:#EAEAEA;color:#1B1A1A;}.elementor-3194 .elementor-element.elementor-element-32f82d5c .cms-tabs .cms-tab-title svg{fill:#1B1A1A;}.elementor-3194 .elementor-element.elementor-element-32f82d5c .cms-tabs .cms-tab-title.active{background-color:<?php echo $theme_colour; ?>;color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-32f82d5c .cms-tabs .cms-tab-title.active svg{fill:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-32f82d5c > .elementor-widget-container{border-radius:3px 3px 3px 3px;}.elementor-3194 .elementor-element.elementor-element-fd1d924{overflow:hidden;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-3194 .elementor-element.elementor-element-fd1d924:not(.elementor-motion-effects-element-type-background), .elementor-3194 .elementor-element.elementor-element-fd1d924 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F9F9F9;}.elementor-3194 .elementor-element.elementor-element-fd1d924 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-6bd79fc .elementor-spacer-inner{height:57px;}.elementor-3194 .elementor-element.elementor-element-5852ec8 .cms-heading-wrapper{text-align:left;}.elementor-3194 .elementor-element.elementor-element-5852ec8 .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3194 .elementor-element.elementor-element-04b371c .cms-slick-carousel .slick-list .slick-slide{padding:0 15px;}.elementor-3194 .elementor-element.elementor-element-04b371c .cms-slick-carousel .slick-list{margin:0 -15px;}.elementor-3194 .elementor-element.elementor-element-04b371c > .elementor-widget-container{margin:15px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-a5dbcd8 .elementor-spacer-inner{height:40px;}.elementor-3194 .elementor-element.elementor-element-4f2bb577{overflow:hidden;border-style:solid;border-width:1px 0px 0px 0px;border-color:#eaeaea;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:30px 0px 31px 0px;}.elementor-3194 .elementor-element.elementor-element-4f2bb577:not(.elementor-motion-effects-element-type-background), .elementor-3194 .elementor-element.elementor-element-4f2bb577 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-color:#F9F9F9;}.elementor-3194 .elementor-element.elementor-element-4f2bb577 > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-4b28f240 .cms-slick-carousel .slick-list .slick-slide{padding-right:10px;}.elementor-3194 .elementor-element.elementor-element-1a82e048{overflow:hidden;transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;padding:0px 0px 39px 0px;}.elementor-3194 .elementor-element.elementor-element-1a82e048:not(.elementor-motion-effects-element-type-background), .elementor-3194 .elementor-element.elementor-element-1a82e048 > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("../../uploads/pages/<?php echo $about_image;?>");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-3194 .elementor-element.elementor-element-1a82e048 > .elementor-background-overlay{background-color:<?php echo $theme_colour; ?>;opacity:0.95;transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-3194 .elementor-element.elementor-element-261e498 .elementor-spacer-inner{height:105px;}.elementor-3194 .elementor-element.elementor-element-a3b01da .cms-heading-wrapper{text-align:center;}.elementor-3194 .elementor-element.elementor-element-a3b01da .custom-heading{color:#FFFFFF;letter-spacing:0px;}.elementor-3194 .elementor-element.elementor-element-a3b01da .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:13px;}.elementor-3194 .elementor-element.elementor-element-a3b01da .custom-subheading{color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-a3b01da .custom-subheading.line-before:before{background-color:#FFFFFF;}.elementor-3194 .elementor-element.elementor-element-a3b01da .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3194 .elementor-element.elementor-element-a7f995e{text-align:center;color:#F9F9F9;}.elementor-3194 .elementor-element.elementor-element-acd2175 .elementor-spacer-inner{height:43px;}.elementor-3194 .elementor-element.elementor-element-7b21b4d4 .cms-testimonial-carousel .client-image img{width:60px;height:auto;}.elementor-3194 .elementor-element.elementor-element-7b21b4d4 .cms-slick-carousel .slick-list .slick-slide{padding:10px;}.elementor-3194 .elementor-element.elementor-element-7b21b4d4 .cms-slick-carousel .slick-list{margin:0 -10px;}.elementor-3194 .elementor-element.elementor-element-9938bf0 .elementor-spacer-inner{height:36px;}.elementor-3194 .elementor-element.elementor-element-3cc95534{margin-top:113px;margin-bottom:0px;}.elementor-3194 .elementor-element.elementor-element-aa46c0b .cms-heading-wrapper{text-align:center;}.elementor-3194 .elementor-element.elementor-element-aa46c0b .cms-heading-wrapper .custom-heading{margin-top:0px;margin-bottom:15px;}.elementor-3194 .elementor-element.elementor-element-aa46c0b .cms-heading-wrapper .custom-subheading{margin-bottom:12px;}.elementor-3194 .elementor-element.elementor-element-4fe06af{text-align:center;line-height:27px;}.elementor-3194 .elementor-element.elementor-element-4fe06af > .elementor-widget-container{margin:5px 0px 0px 0px;padding:0% 25% 0% 25%;}.elementor-3194 .elementor-element.elementor-element-6bfb82fd{margin-top:17px;margin-bottom:40px;}.elementor-3194 .elementor-element.elementor-element-4c578b0 .cms-grid .cms-grid-inner{margin-left:-15px;margin-right:-15px;}.elementor-3194 .elementor-element.elementor-element-4c578b0 .cms-grid .grid-item{padding-left:15px;padding-right:15px;}.elementor-3194 .elementor-element.elementor-element-4c578b0 .cms-grid .grid-sizer{padding-left:15px;padding-right:15px;}@media(max-width:1024px){.elementor-3194 .elementor-element.elementor-element-42960d89{margin-top:-53px;margin-bottom:0px;}.elementor-3194 .elementor-element.elementor-element-700be129 > .elementor-element-populated{padding:30px 30px 0px 30px;}.elementor-3194 .elementor-element.elementor-element-92b3040 > .elementor-element-populated{margin:0px 0px 0px 55px;}.elementor-3194 .elementor-element.elementor-element-2c9ac15{padding:100px 0px 100px 0px;}.elementor-3194 .elementor-element.elementor-element-5b00ff11 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-22d6890a > .elementor-element-populated{margin:0px 0px 100px 0px;}.elementor-3194 .elementor-element.elementor-element-4fe06af > .elementor-widget-container{padding:0px 0px 0px 0px;}}@media(max-width:767px){.elementor-3194 .elementor-element.elementor-element-42960d89{margin-top:110px;margin-bottom:0px;}.elementor-3194 .elementor-element.elementor-element-92b3040 > .elementor-element-populated{margin:0px 0px 0px 0px;}.elementor-3194 .elementor-element.elementor-element-712be883 .elementor-spacer-inner{height:50px;}.elementor-3194 .elementor-element.elementor-element-331e0e6 > .elementor-widget-container{margin:0px 15px 0px 15px;}.elementor-3194 .elementor-element.elementor-element-2ce6f3d3{padding:120px 15px 0px 15px;}}@media(min-width:768px){.elementor-3194 .elementor-element.elementor-element-700be129{width:34%;}.elementor-3194 .elementor-element.elementor-element-1ef4825d{width:22%;}.elementor-3194 .elementor-element.elementor-element-2ec6f776{width:22%;}.elementor-3194 .elementor-element.elementor-element-41b42fd{width:22%;}.elementor-3194 .elementor-element.elementor-element-70a2902f{width:43%;}.elementor-3194 .elementor-element.elementor-element-5566e95f{width:30.01%;}.elementor-3194 .elementor-element.elementor-element-2637437f{width:70%;}.elementor-3194 .elementor-element.elementor-element-92b3040{width:57%;}.elementor-3194 .elementor-element.elementor-element-9040904{width:43%;}.elementor-3194 .elementor-element.elementor-element-7763cdd{width:57%;}.elementor-3194 .elementor-element.elementor-element-203f1baf{width:37%;}.elementor-3194 .elementor-element.elementor-element-22d6890a{width:63%;}.elementor-3194 .elementor-element.elementor-element-46cde97d{width:100%;}}@media(max-width:1024px) and (min-width:768px){.elementor-3194 .elementor-element.elementor-element-700be129{width:50%;}.elementor-3194 .elementor-element.elementor-element-1ef4825d{width:50%;}.elementor-3194 .elementor-element.elementor-element-2ec6f776{width:50%;}.elementor-3194 .elementor-element.elementor-element-41b42fd{width:50%;}.elementor-3194 .elementor-element.elementor-element-70a2902f{width:100%;}.elementor-3194 .elementor-element.elementor-element-92b3040{width:100%;}.elementor-3194 .elementor-element.elementor-element-9040904{width:100%;}.elementor-3194 .elementor-element.elementor-element-7763cdd{width:100%;}.elementor-3194 .elementor-element.elementor-element-203f1baf{width:100%;}.elementor-3194 .elementor-element.elementor-element-22d6890a{width:100%;}}