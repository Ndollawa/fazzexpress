<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0; background: white;">
<a href="../index.php" class="site_title" ><img src="../uploads/site-settings/<?php echo $hlogo; ?>" style="width:100%;"></a>
</div>
<div class="clearfix"></div>

<div class="profile clearfix">
<div class="profile_pic" style="width: 70px; height: 70px;">
<img src="../uploads/profile-pictures/<?php echo fetchUserpic($_SESSION['user_id']); ?>" alt="..." style="width: 70px; height: 70px;" class="img-circle profile_img">
</div>
<div class="profile_info">
<span>Welcome,</span>
<h2><?php echo $user_name; ?></h2>
<span>Account: <?php echo $_SESSION['user_account_type']; ?></span>
</div>
</div>

<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
<h3>General</h3>
<ul class="nav side-menu">
<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="../index.php">Home</a></li>
<?php if($_SESSION['user_account_type'] == 'Admin'){
echo '
<li><a href="index.php">Dashboard</a></li>';
}
?>
</ul>
</li>
<?php if($_SESSION['user_account_type'] == 'Admin'){
echo '<li><a><i class="fa fa-building-o"></i> Branches / Regions<span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="new_branch.php">Add New</a></li>
<li><a href="branch_list.php">All List</a></li>

</ul>
</li>


<li><a><i class="fa fa-suitcase"></i> Services <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="new_service.php">Add New</a></li>
<li><a href="all_services.php">List All</a></li>

</ul>
</li>';}
?>
<li><a><i class="fa fa-suitcase"></i> Packages / Parcels <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="new_parcel.php">Add New</a></li>
<li><a href="parcel_list.php">List All</a></li>
<li><a href="items_accepted.php">Items Accepted by Courier</a></li>
<li><a href="items_shipped.php">Shipped</a></li>
</ul>
</li>
<li><a><i class="fa fa-truck"></i>Shipments<span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="items_in-transit.php">In Transit</a></li>
<li><a href="items_arrived.php">Arrived at Destination</a></li>
<li><a href="items_out.php">Out for Delivery</a></li>
<li><a href="items_for_pickup.php">Ready for Pickup</a></li>
<li><a href="items_pickedup.php">Picked-up</a></li>
<li><a href="items_delivered.php">Delivered</a></li>
<li><a href="items_collected.php">Collected</a></li>
<li><a href="items_unsuccessful.php">Unsuccessful Delivery Attempt</a></li>
</ul>
</li>
<?php if($_SESSION['user_account_type'] == 'Admin'){
echo '<li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="new_user.php">Add New</a></li>
<li><a href="all_users.php">List All</a></li>

</ul>
</li>'; }
?>
</li>
</ul>
</div>
<?php if($_SESSION['user_account_type'] == 'Admin'){
echo '<div class="menu_section">
<h3>Admin</h3>
<ul class="nav side-menu">
<li><a><i class="fa fa-tasks"></i> Management<span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<!-- <li><a href="locations_mgt.php">Locations</a></li> -->
<li><a href="shipment_reports.php">Shipment Reports</a></li>
<li><a href="request_quote_mgt.php">Requested Quotes</a></li>
<li><a href="faq.php">FAQ</a></li>
<!-- <li><a href="profile.php">Profile</a></li> -->
</ul>
</li>

</ul>
</div>';
} ?>

</div>


<div class="sidebar-footer hidden-small" >
<a data-toggle="tooltip" data-placement="top" title="Settings" href="profile_settings.php">
<span style="color:#ffffff !important;"  class="fa fa-cog" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="FullScreen">
<span style="color:#ffffff !important;"  class="fa fa-desktop" aria-hidden="true"></span>
</a>
<a href="profile.php" data-toggle="tooltip" data-placement="top" title="Profile">
<span  style="color:#ffffff !important;" class="fa fa-user" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
<span  style="color:#ffffff !important;" class="fa fa-reply" aria-hidden="true"></span>
</a>
</div>

</div>
</div>

<div class="top_nav">
<div class="nav_menu">
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>
<nav class="nav navbar-nav">
<ul class=" navbar-right">
<li class="nav-item dropdown open" style="padding-left: 15px;">
<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
<img src="../uploads/profile-pictures/<?php echo fetchUserpic($_SESSION['user_id']); ?>" alt=""><?php echo $user_name; ?>
<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="profile.php"> Profile</a>
<a class="dropdown-item" href="profile_settings.php">
<!-- <span class="badge bg-red pull-right">50%</span> -->
<span>Profile Settings</span>
</a>

<a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
</div>
</li><?php if($_SESSION['user_account_type'] == 'Admin'){
echo '<li role="presentation" class="nav-item ml-3 mr-3"><a class="" href="site-settings.php" title="Site Settings"><i class="fa fa-cog" > </i></a></li>';
}
?>
<li role="presentation" class="nav-item dropdown open">
<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
<i class="fa fa-envelope-o"></i>
<span class="badge bg-green">6</span>
</a>
<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
<li class="nav-item">
<a class="dropdown-item">
<span class="image"><img src="../uploads/profile-pictures/<?php //echo $user_image; ?>" alt="Profile Image" /></span>
<span>
<span>John Smith</span>
<span class="time">3 mins ago</span>
</span>
<span class="message">
Film festivals used to be do-or-die moments for movie makers. They were where...
</span>
</a>
</li>

<li class="nav-item">
<div class="text-center">
<a class="dropdown-item">
<strong>See All Alerts</strong>
<i class="fa fa-angle-right"></i>
</a>
</div>
</li>
</ul>
</li>
</ul>
</nav>
</div>
</div>
<!-- Modal -->
<div class="modal-container"></div>