<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Website Settings</h3>
</div>
<!-- <div class="title_right">
<div class="col-md-5 col-sm-5   form-group pull-right top_search">
<div class="input-group">
<input type="text" class="form-control" placeholder="Search for...">
<span class="input-group-btn">
<button class="btn btn-default" type="button">Go!</button>
</span>
</div>
</div>
</div> -->
</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2>Settings</h2>
<div class="clearfix"></div>
</div>
<div class="x_content">
	<?php if (isset($_SESSION['message'])){  echo $_SESSION['message'];} ?>
			<div class="row jumbotron"> 
				<div class="col-lg-3"> 
					<div class="card"> 
						<div class="card-header"> 
							<h3 class="card-title"> Menu</h3> 
						<!-- 	<div class="card-options"> 
								<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
								 <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> 
								</div> --> 
							</div> 
							<div class="card-body"> 
						 <div class="setting-menu">
						 	<ul class="setting-menu-option" style="list-style: none; line-height: 2em;">
								<li class="mt-20"><a class="menu-list " href="site-settings.php?tab=General"><i class="fa fa-home"></i>&ensp; General </a></li>
						 		<li class="mt-20"><a class="menu-list " href="site-settings.php?tab=Pages"><i class="fa fa-file"></i>&ensp; Pages</a></li>
						 		<li class="mt-20"><a class="menu-list " href="site-settings.php?tab=Home"><i class="fa fa-film"></i>&ensp; Home </a></li>
						 		<li class="mt-20"><a class="menu-list " href="site-settings.php?tab=Gallery"><i class="fa fa-image"></i>&ensp; Gallery </a></li>
						 		
						 		<!-- <li><a class="menu-list " href="site-settings.php?tab=Users"><i class="fa fa-users"></i>  Users </a></li> -->
						 		<!-- <li><a class="menu-list " href="site-settings.php?tab=Comment"><i class="fa fa-comments"></i>&ensp;  Comment </a></li>
						 		<li><a class="menu-list " href="site-settings.php?tab=Category"><i class="fa fa-reorder"></i>&ensp; Category</a></li>
						 		<li><a class="menu-list " href="site-settings.php?tab="></a></li> -->
						 	</ul>
						 </div>
							</div> 
									</div> 
								</div> 
								<div class="col-lg-9"> 
								<?php 

								
if(isset($_GET['tab']))	{
	$condition = $_GET['tab'];
}else{
	$condition ="";
}
switch ($condition) {
	case 'General':
	include 'settings/general.php';
		break;
	
	case 'Pages':
	include 'settings/pages.php';
		break;

	case 'Home':
	include 'settings/home.php';
		break;

	case 'Gallery':
	include 'settings/gallery.php';
		break;


	default:
		include 'settings/general.php';
		break;
}



									?>
										</div> 
										 </div> 
</div>
</div>
</div>
</div>
</div>
</div>

<?php include 'components/footer.php'; ?>
</div>
</div>
<?php include 'components/javascript.php'; ?>
</body>
</html>
