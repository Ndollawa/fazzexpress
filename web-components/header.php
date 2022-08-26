<!DOCTYPE html>
<?php
require_once __DIR__.'/../base_dir.php';
require_once __DIR__.'/../backend/database.php';
require_once __DIR__.'/../backend/session.php';
// require_once __DIR__.'/../backend/access_restriction.php';
include_once __DIR__.'/../backend/functions.php';
include_once  __DIR__.'/../backend/timeAgo.php';
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// ECHO $basedir = str_replace($BASE_P, '', $BASE)."</BR>";
// echo $BASEDIR = str_replace('\\', '/',$BASE);
		//define(BASEDIR,"/fazzexpress/");
?>
<?php //include_once __DIR__.'/../swiftmailer-master/lib/swift_required.php'; ?>
<?php
$sql = "SELECT * FROM site_settings WHERE id = 1 ";
$send = $database->query($sql);
$row = $database->fetch_array($send);
// $count = 1;
$rowcount = $database->num_rows($send);
foreach ($send as $row) {
$id = $row['id'];
	$website_name = $row['website_name'];
	$active_hours = $row['active_hours'];
    $website_link = $row['website_link'];
    $site_description = $row['site_description'];
    $fixedMenu=  $row['fixedMenu'];
    $fixedFooter =  $row['fixedFooter'];
    $theme_colour = $row["theme_colour"];
$theme_footer_colour = $row["theme_footer_colour"];
$theme_links_colour = $row["theme_link_colour"];
$theme_buttons_colour = $row["theme_colour"];  
    $slideRTL=  $row['slideRTL'];
	$favicon=  $row['favicon'];
	$brand_name_logo =  $row['brand_name_logo'];
	$hlogo =  $row['headerlogo'];
	$flogo =  $row['footerlogo'];
	$introVideo =  $row['home_video'];
	$services_video =  $row['services_video'];
	$home_slider1d =  $row['home_slider1'];
	$home_slider2d =  $row['home_slider2'];
	$L_S_visibility =  $row['login_signup'];
	$address = $row['address'];
	$city =  $row['city'];
	$zip_code =  $row['zip_code'];
	$country = $row['country'];
	$facebooklink = $row['facebooklink'];
	$twitterhandle = $row['twitterhandle'];
	$instagrampage = $row['instagrampage'];
	$youtube = $row['youtube'];
	$whatsapp = $row['whatsapplink'];
	$about = $row['about_us'];
	$core_values=  $row['core_values'];
	$policy =  $row['policy'];
	$semail =  $row['email'];
	$scontact =  $row['contact'];
	$homepageStyle =  $row['homepage_style'];


}


?>

<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $website_name; ?></title>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel='dns-prefetch' href='http://s.w.org/' />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"<?php echo $BASEDIR;?>assets\/js\/wp-emoji-release.min.js?ver=5.7.2"}};
			!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='wp-block-library-css'  href='<?php echo $BASEDIR;?>assets/css/style.min9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='<?php echo $BASEDIR;?>assets/css/stylesc225.css?ver=5.4.1' type='text/css' media='all' />
<link rel='stylesheet' id='etc-main-css-css'  href='<?php echo $BASEDIR;?>assets/css/main8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='progressbar-lib-css-css'  href='<?php echo $BASEDIR;?>assets/css/progressbar.minceb2.css?ver=0.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='oc-css-css'  href='<?php echo $BASEDIR;?>assets/css/owl.carousel.min77e6.css?ver=2.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='<?php echo $BASEDIR;?>assets/revslider/public/assets/css/rs60192.css?ver=6.2.9' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<style id='equita-theme-inline-css' type='text/css'>
body #pagetitle.page-title{background-image:url(<?php echo $BASEDIR;?>wp-content/uploads/2019/09/axima-07.html)}
</style>
<link rel='stylesheet' id='bootstrap-css'  href='<?php echo $BASEDIR;?>assets/css/bootstrap.mincce7.css?ver=4.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='<?php echo $BASEDIR;?>assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome5-css'  href='<?php echo $BASEDIR;?>assets/css/font-awesome5.min3e35.css?ver=5.8.0' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css'  href='<?php echo $BASEDIR;?>assets/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='material-design-iconic-font-css'  href='<?php echo $BASEDIR;?>assets/css/material-design-iconic-font.min3601.css?ver=2.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='<?php echo $BASEDIR;?>assets/css/magnific-popup8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='equita-style-css'  href='<?php echo $BASEDIR;?>assets/css/style9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='equita-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Rubik%3A400%2C400i%2C500%2C500i%2C700%2C700i%7CRoboto%3A300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i&amp;subset=latin%2Clatin-ext&amp;ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='newsletter-css'  href='<?php echo $BASEDIR;?>assets/css/style0e03.css?ver=7.1.5' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='<?php echo $BASEDIR;?>assets/lib/eicons/css/elementor-icons.min21f9.css?ver=5.11.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='<?php echo $BASEDIR;?>assets/lib/animations/animations.mine5ca.css?ver=3.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='<?php echo $BASEDIR;?>assets/css/frontend-legacy.mine5ca.css?ver=3.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='<?php echo $BASEDIR;?>assets/css/frontend.mine5ca.css?ver=3.2.3' type='text/css' media='all' />
<style id='elementor-frontend-inline-css' type='text/css'>
@font-face{font-family:eicons;src:url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons0b93.eot?5.10.0);src:url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
</style>
<link rel='stylesheet' id='elementor-global-css'  href='<?php echo $BASEDIR;?>assets/css/globalb861.css?ver=1620910245' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-12-css'  href='<?php echo $BASEDIR;?>assets/css/post-12622d.php?ver=1620914825' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRubik%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='<?php echo $BASEDIR;?>assets/lib/font-awesome/css/fontawesome.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='<?php echo $BASEDIR;?>assets/lib/font-awesome/css/solid.min9e0b.css?ver=5.15.1' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo $BASEDIR;?>assets/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>


<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>
<style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">.primary-menu > li > a, body .primary-menu .sub-menu li a{font-display:swap;}body #pagetitle{background-image:url('../uploads/site-settings/<?php echo $home_slider1d; ?>');}body #pagetitle h1.page-title,body #pagetitle .page-title-inner .cms-breadcrumb{color:#ffffff;}#pagetitle.pagetitle{padding-top:375px;padding-bottom:275px;}a{color:inherit;}a:hover{color:<?php echo $theme_links_colour; ?>;}a:active{color:<?php echo $theme_links_colour; ?>;}body{font-display:swap;}h1,.h1,.text-heading{font-display:swap;}h2,.h2{font-display:swap;}h3,.h3{font-display:swap;}h4,.h4{font-display:swap;}h5,.h5{font-display:swap;}h6,.h6{font-display:swap;}</style><style id="cms-page-dynamic-css" data-type="redux-output-css">#content{padding-top:0px;padding-bottom:0px;}

footer.site-footer-custom{
background: <?php echo $theme_footer_colour; ?>;
}



.timeline {
    margin: 0 0 45px;
    padding: 0;
    position: relative;
}
.timeline::before {
    border-radius: .25rem;
    background-color: #dee2e6;
    bottom: 0;
    content: "";
    left: 31px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 4px;
}
.timeline>div {
    margin-bottom: 15px;
    margin-right: 10px;
    position: relative;
}

.timeline>div>.fa, .timeline>div>.fab, .timeline>div>.fad, .timeline>div>.fal, .timeline>div>.far, .timeline>div>.fas, .timeline>div>.ion, .timeline>div>.svg-inline--fa {
    background-color: #adb5bd;
    border-radius: 50%;
    font-size: 16px;
    height: 30px;
    left: 18px;
    line-height: 30px;
    position: absolute;
    text-align: center;
    top: 0;
    width: 30px;
}

.timeline>div>.timeline-item {
    box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
    border-radius: .25rem;
    background-color: #fff;
    color: #495057;
    margin-left: 60px;
    margin-right: 15px;
    margin-top: 0;
    padding: 0;
    position: relative;
}
.timeline>div>.timeline-item>.time {
    color: #999;
    float: right;
    font-size: 12px;
    padding: 10px;
}
.timeline>div>.timeline-item>.timeline-body, .timeline>div>.timeline-item>.timeline-footer {
    padding: 10px;
}
</style>

	<link rel='stylesheet' id='wp-block-library-css'  href='<?php echo $BASEDIR;?>assets/css/style.min9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='<?php echo $BASEDIR;?>assets/css/stylesc225.css?ver=5.4.1' type='text/css' media='all' />

<link rel='stylesheet' id='progressbar-lib-css-css'  href='<?php echo $BASEDIR;?>assets/css/progressbar.minceb2.css?ver=0.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='oc-css-css'  href='<?php echo $BASEDIR;?>assets/css/owl.carousel.min77e6.css?ver=2.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='<?php echo $BASEDIR;?>assets/revslider/public/assets/css/rs60192.css?ver=6.2.9' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='bootstrap-css'  href='<?php echo $BASEDIR;?>assets/css/bootstrap.mincce7.css?ver=4.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='<?php echo $BASEDIR;?>assets/lib/font-awesome/css/font-awesome.min1849.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome5-css'  href='<?php echo $BASEDIR;?>assets/css/font-awesome5.min3e35.css?ver=5.8.0' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css'  href='<?php echo $BASEDIR;?>assets/css/flaticon8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='material-design-iconic-font-css'  href='<?php echo $BASEDIR;?>assets/css/material-design-iconic-font.min3601.css?ver=2.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='<?php echo $BASEDIR;?>assets/css/magnific-popup8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='equita-style-css'  href='<?php echo $BASEDIR;?>assets/css/style9f31.css?ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='equita-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Rubik%3A400%2C400i%2C500%2C500i%2C700%2C700i%7CRoboto%3A300%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i&amp;subset=latin%2Clatin-ext&amp;ver=5.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='newsletter-css'  href='<?php echo $BASEDIR;?>assets/css/style0e03.css?ver=7.1.5' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='<?php echo $BASEDIR;?>assets/lib/eicons/css/elementor-icons.min21f9.css?ver=5.11.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='<?php echo $BASEDIR;?>assets/lib/animations/animations.mine5ca.css?ver=3.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='<?php echo $BASEDIR;?>assets/css/frontend-legacy.mine5ca.css?ver=3.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='<?php echo $BASEDIR;?>assets/css/frontend.mine5ca.css?ver=3.2.3' type='text/css' media='all' />

<link rel='stylesheet' id='elementor-post-4999-css'  href='<?php echo $BASEDIR;?>assets/css/post-4999b021.css?ver=1620910244' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='<?php echo $BASEDIR;?>assets/css/globalb861.css?ver=1620910245' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-3194-css'  href='<?php echo $BASEDIR;?>assets/css/post-31943438.php?ver=1620913684' type='text/css' media='all' />

<script type='text/javascript' src='<?php echo $BASEDIR;?>assets/js/jquery/jquery.min9d52.js?ver=3.5.1' id='jquery-core-js'></script>

<?php if($homepageStyle == 'modern'): ?>

<script type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
				try {
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
					if(e.layout==="fullscreen" || e.l==="fullscreen")
						newh = Math.max(e.mh,window.RSIH);
					else{
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

						var nl = new Array(e.rl.length),
							ix = 0,
							sl;
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}
			//});
		  };</script>
<style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">.primary-menu > li > a, body .primary-menu .sub-menu li a{font-display:swap;}body #pagetitle{background-image:url('../uploads/site-settings/<?php echo $home_slider1d; ?>');}body #pagetitle h1.page-title,body #pagetitle .page-title-inner .cms-breadcrumb{color:#ffffff;}#pagetitle.pagetitle{padding-top:375px;padding-bottom:275px;}a{color:inherit;}a:hover{color:<?php echo $theme_links_colour; ?>;}a:active{color:<?php echo $theme_links_colour; ?>;}body{font-display:swap;}h1,.h1,.text-heading{font-display:swap;}h2,.h2{font-display:swap;}h3,.h3{font-display:swap;}h4,.h4{font-display:swap;}h5,.h5{font-display:swap;}h6,.h6{font-display:swap;}</style><style id="cms-page-dynamic-css" data-type="redux-output-css">#content{padding-top:0px;padding-bottom:0px;}</style>
<?php endif; ?>

<style id='elementor-frontend-inline-css' type='text/css'>
@font-face{font-family:eicons;src:url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons0b93.eot?5.10.0);src:url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"),url(<?php echo $BASEDIR;?>assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
</style>
<link rel='stylesheet' id='elementor-post-4999-css'  href='<?php echo $BASEDIR;?>assets/css/post-4999b021.css?ver=1620910244' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='<?php echo $BASEDIR;?>assets/css/globalb861.css?ver=1620910245' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-4417-css'  href='<?php echo $BASEDIR;?>assets/css/post-44172aae.php?ver=1620933671' type='text/css' media='all' >






<style id="cms_theme_options-dynamic-css" title="dynamic-css" class="redux-options-output">.primary-menu > li > a, body .primary-menu .sub-menu li a{font-display:swap;}body #pagetitle{background-image:url('../uploads/site-settings/<?php echo $home_slider1d; ?>');}body #pagetitle h1.page-title,body #pagetitle .page-title-inner .cms-breadcrumb{color:#ffffff;}#pagetitle.pagetitle{padding-top:375px;padding-bottom:275px;}a{color:inherit;}a:hover{color:<?php echo $theme_links_colour; ?>;}a:active{color:<?php echo $theme_links_colour; ?>;}body{font-display:swap;}h1,.h1,.text-heading{font-display:swap;}h2,.h2{font-display:swap;}h3,.h3{font-display:swap;}h4,.h4{font-display:swap;}h5,.h5{font-display:swap;}h6,.h6{font-display:swap;}</style><style id="cms-page-dynamic-css" data-type="redux-output-css">#content{padding-top:0px;padding-bottom:80px;}</style></head>
<link rel="stylesheet" href="<?php echo $BASEDIR;?>vendors/steps/steps.css">
<link href="<?php echo $BASEDIR;?>vendors/sweet-alert/sweetalert2.min.css" rel="stylesheet">
<!-- Jquery Toast css -->
<link rel="stylesheet" href="<?php echo $BASEDIR;?>vendors/jquery-toast/dist/jquery.toast.min.css">

<link rel="stylesheet" href="<?php echo $BASEDIR;?>vendors/flatpicker/css/flatpickr.min.css" />
<link rel="icon" type="image/png" href="<?php echo $BASEDIR;?>uploads/site-settings/<?php echo $favicon; ?>"/>
<link rel='stylesheet' id='etc-main-css-css'  href='<?php echo $BASEDIR;?>assets/css/styles.php' type='text/css' media='all' />
</head>