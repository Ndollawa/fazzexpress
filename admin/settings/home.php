<?php
use unicalCSphp\UploadFile;
$msg ="";
$Fname= array();
$result= array();
 $message= "";



// if(isset($_POST['update-siteprofile'])){

//   $destination = '../../uploads/site-settings/';
// 	$website_name=  $database->escape_value($_POST['website_name']);
// 	$address = $database->escape_value($_POST['address']);
// 	$active_hours =  $database->escape_value($_POST['active-hours']);
// 	$city =  $database->escape_value($_POST['city']);
// 	$zip_code =  $database->escape_value($_POST['zip-code']);
// 	$email =  $database->escape_value($_POST['email']);
// 	$contact =  $database->escape_value($_POST['contact']);
// 	$country = $database->escape_value(ucfirst($_POST['country']));
// 	$facebooklink = $database->escape_value(lcfirst($_POST['fblink']));
// 	$twitterhandle = $database->escape_value(lcfirst($_POST['twitterhandle']));
// 	$website_link =  $database->escape_value(lcfirst($_POST['sitelink']));
// 	$instagrampage = $database->escape_value(lcfirst($_POST['instagrampage']));
// 	$youtube = $database->escape_value(lcfirst($_POST['youtube']));
// 	$whatsapp = $database->escape_value(lcfirst($_POST['whatsapp']));
//   $site_description=  $database->escape_value($_POST['site-description']);
//     $homepage_Style=  $database->escape_value($_POST['homepage-style']);

// $sql = "UPDATE site_settings SET website_name = '$website_name',active_hours ='$active_hours', website_link ='$website_link', site_description = '$site_description',homepage_style = '$homepage_Style',address = '$address',email = '$email', contact ='$contact',city = '$city',zip_code = '$zip_code', country = '$country', facebooklink = '$facebooklink',twitterhandle = '$twitterhandle',  instagrampage = '$instagrampage',youtube = '$youtube' ,whatsapplink = '$whatsapp' WHERE id = 1 ";
// $send = $database->query($sql);
// if($send){
// 	$_SESSION['message'] = '<h4 style="margin:10px  10px; padding:5px;" class="alert alert-success"><center>  Record updated successfully <i class=" icon-holder material-icons f-left" style="color:white;">done_all</i></center></h4>';
// 	echo "<script type='text/javascript'>
// 	  $.toast({
//                                               heading: 'SUCCESS!!!. ',
//                                               text: ' Record updated successfully ..',
//                                               position: 'top-right',
//                                               loaderBg:'#ff6849',
//                                               icon: 'success',
//                                               hideAfter: 3500,
//                                               stack: 6
//                                             });</script>";
//         header('Location:site-settings.php?tab=General') ;
//       }else {
//            $_SESSION['message'] ='<h4 style="margin:10px  10px; padding:5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h4>';
//            	echo "<script type='text/javascript'>
// 	  $.toast({
//                                               heading: 'ALERT!!! ERROR. ',
//                                               text: 'Please fill out all entries...',
//                                               position: 'top-right',
//                                               loaderBg:'#ff6849',
//                                               icon: 'error',
//                                               hideAfter: 3500,
//                                               stack: 6
//                                             });</script>";
//    }
// }

?>
								<div class="card">
										<div class="card-header">
											<h3 class="card-title">Edit Website</h3>
											<!-- <div class="card-options">
												<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a> <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a> </div>  -->
											</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Home Slider One</label> <input type="file" accept=".jpeg, .jpg, .png, .gif"  id="home_slider1" class="form-control" name="home_slider1"/>
												</div>
											</div>
											<div class="col-md-6">
												<div id="home_sliderone" >

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Home Slider Two</label> <input type="file" id="home_slider2" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="home_slider2" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="home_slidertwo" >

													</div>
											</div>
											<div class="col-md-6">
													<div class="form-group">
													<label class="form-label">Home Slider Three</label> <input type="file" accept=".jpeg, .jpg, .png, .gif"  id="home_slider3" class="form-control" name="home_slider3"/>
												</div>
											</div>
											<div class="col-md-6">
												<div id="home_sliderthree" >

												</div>
											</div>
											<div class="col-md-6">
													<div class="form-group">
													<label class="form-label">Home Sidenav Image</label> <input type="file" accept=".jpeg, .jpg, .png, .gif"  id="home_sidenav" class="form-control" name="home_sidenav"/>
												</div>
											</div>
											<div class="col-md-6">
												<div id="home_sidenavdis" >

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Home Quote Image</label> <input type="file" id="home_quote-img" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="home_quote-img" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="home_quote-imgdis" >

													</div>
											</div>
														<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Company Image</label> <input type="file" id="company-img" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="company-img" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="company-imgdis" >

													</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Gallery Page Image</label> <input type="file" id="gallery-img" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="gallery-img" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="gallery-imgdis" >

													</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Core value page Image</label> <input type="file" id="corevalue-img" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="corevalue-img" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="corevalue-imgdis" >

													</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Location Image</label> <input type="file" id="location-img" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="location-img" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="location-imgdis" >

													</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">About Us Page Image</label> <input type="file" id="about-img" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="about-img" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="about-imgdis" >

													</div>
											</div>
											
											
													<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Introduction Video One</label> <input type="file" accept="video/*, .mp4, .mpeg"  id="home_video" class="form-control" name="home_video"/>
												</div>
											</div>
											<div class="col-md-6">
												<div id="home_videodisp" >

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Services Video Two</label> <input type="file" id="services_video" accept="video/*, .mp4, .mpeg"  class="form-control" name="services_video" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="services_videodisp" >

													</div>
											</div>
											
											</div>
										</div>