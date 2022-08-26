<?php 
header("Content-type: text/css; charset:UTF-8");
include '../../backend/database.php';
$sql = "SELECT theme_link_colour,theme_footer_colour,theme_colour FROM site_settings WHERE id =1"; 
$query = $database->query($sql);
$row = $database->fetch_array($query);
foreach($query as $key => $row) {
$theme_colour = $row["theme_colour"];
$theme_footer_colour = $row["theme_footer_colour"];
$theme_links_colour = $row["theme_link_colour"];
$theme_buttons_colour = $row["theme_colour"];              
              }              



?>
.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(6px/2);}.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(6px/2);}.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item{margin-right:calc(6px/2);margin-left:calc(6px/2);}.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-items.elementor-inline-items{margin-right:calc(-6px/2);margin-left:calc(-6px/2);}body.rtl .elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{left:calc(-6px/2);}body:not(.rtl) .elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after{right:calc(-6px/2);}.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-icon i{color:<?php echo $theme_colour; ?>;font-size:14px;}.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-icon svg{fill:<?php echo $theme_colour; ?>;width:14px;}.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-text{color:#9B9B9B;}.elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-item, .elementor-4625 .elementor-element.elementor-element-25a6ba3b .elementor-icon-list-item a{font-size:14px;}.elementor-4625 .elementor-element.elementor-element-25a6ba3b > .elementor-widget-container{margin:2px 0px 0px 0px;}