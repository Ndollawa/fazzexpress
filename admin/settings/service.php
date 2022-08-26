<?php
use unicalCSphp\UploadFile;
$msg ="";
$Fname= array();
$result= array();
 $message= "";



if(isset($_POST['update-siteprofile'])){

  $destination = '../../uploads/site-settings/';
	$fwebsite_name=  $database->escape_value($_POST['website_name']);
	$faddress = $database->escape_value($_POST['address']);
	$factive_hours =  $database->escape_value($_POST['active-hours']);
	$fcity =  $database->escape_value($_POST['city']);
	$fzip_code =  $database->escape_value($_POST['zip-code']);
	$femail =  $database->escape_value($_POST['email']);
	$fcontact =  $database->escape_value($_POST['contact']);
	$theme_color1 =  $database->escape_value($_POST['theme-color1']);
	$theme_color2 =  $database->escape_value($_POST['theme-color2']);
	$theme_l_color =  $database->escape_value($_POST['theme-link-color']);
	$fcountry = $database->escape_value(ucfirst($_POST['country']));
	$ffacebooklink = $database->escape_value(lcfirst($_POST['fblink']));
	$ftwitterhandle = $database->escape_value(lcfirst($_POST['twitterhandle']));
	$fwebsite_link =  $database->escape_value(lcfirst($_POST['sitelink']));
	$finstagrampage = $database->escape_value(lcfirst($_POST['instagrampage']));
	$fyoutube = $database->escape_value(lcfirst($_POST['youtube']));
	$fwhatsapp = $database->escape_value(lcfirst($_POST['whatsapp']));
  $fsite_description =  $database->escape_value($_POST['site-description']);
    $fhomepage_Style=  $database->escape_value($_POST['homepage-style']);

$sql = "UPDATE site_settings SET website_name = '$fwebsite_name',active_hours ='$factive_hours', website_link ='$fwebsite_link', site_description = '$fsite_description',homepage_style = '$fhomepage_Style',theme_colour = '$theme_color1', theme_link_colour= '$theme_l_color',theme_footer_colour = '$theme_color2', address = '$faddress',email = '$femail', contact ='$fcontact',city = '$fcity',zip_code = '$fzip_code', country = '$fcountry', facebooklink = '$ffacebooklink',twitterhandle = '$ftwitterhandle',  instagrampage = '$finstagrampage',youtube = '$fyoutube' ,whatsapplink = '$fwhatsapp' WHERE id = 1 ";
$send = $database->query($sql);
if($send){
	$_SESSION['message'] = '<h4 style="margin:10px  10px; padding:5px;" class="alert alert-success"><center>  Record updated successfully <i class=" icon-holder material-icons f-left" style="color:white;">done_all</i></center></h4>';
	echo "<script type='text/javascript'>
	  $.toast({
                                              heading: 'SUCCESS!!!. ',
                                              text: ' Record updated successfully ..',
                                              position: 'top-right',
                                              loaderBg:'#ff6849',
                                              icon: 'success',
                                              hideAfter: 3500,
                                              stack: 6
                                            });</script>";
        header('Location:site-settings.php?tab=General') ;
      }else {
           $_SESSION['message'] ='<h4 style="margin:10px  10px; padding:5px;" class="alert alert-danger"><center>Please fill out all entries..</center></h4>';
           	echo "<script type='text/javascript'>
	  $.toast({
                                              heading: 'ALERT!!! ERROR. ',
                                              text: 'Please fill out all entries...',
                                              position: 'top-right',
                                              loaderBg:'#ff6849',
                                              icon: 'error',
                                              hideAfter: 3500,
                                              stack: 6
                                            });</script>";
   }
}

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
													<label class="form-label">Favicon</label> <input type="file" accept=".jpeg, .jpg, .png, .gif"  id="favicon" class="form-control" name="favicon"/>
												</div>
											</div>
											<div class="col-md-6">
												<div id="sitefavicon" >

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													 <label class="form-label">Brand Name & Logo</label> <input type="file" id="brand_name_logo" accept=".jpeg, .jpg, .png, .gif"  class="form-control" name="brand_name_logo" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="sitebrandname_logo" >

													</div>
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Header Logo</label> <input type="file" id="headerlogo" class="form-control" accept=".jpeg, .jpg, .png, .gif"  name="headerlogo" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="siteheaderlogo">
												</div>
											</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Footer Logo</label> <input type="file" id="footerlogo" class="form-control" accept=".jpeg, .jpg, .png, .gif"  name="footerlogo" />
													</div>
												</div>
												<div class="col-md-6">
													<div id="sitefooterlogo">
												</div>
											</div>
												<div class="col-md-12">
													<div class="form-group mb-0 ">
													<h6> Fixed Nav Menu</h6>
														<label class=" pull-right"><input type="checkbox" id="fixedMenu" class="js-switch" name="fixedMenu"<?php if( $fixedMenu== 'true'){
															echo 'checked';
														} ?> value="<?php echo $fixedMenu; ?>"><span class="slider round"></span></input></label>
														 </div>
														</div>
												<div class="col-md-12">
													<div class="form-group mb-0 ">
													<h6>Fixed Footer</h6>
														<label class="pull-right"><input type="checkbox" id="fixedFooter" class="js-switch" name="fixedFooter"<?php if( $fixedFooter== 'true'){
															echo 'checked';
														} ?> value="<?php echo $fixedFooter; ?>"><span class="slider round"></span></input></label>
														 </div>
												</div>
												<div class="col-md-12">
													<div class="form-group mb-0 ">
													<h6> Slide RTL</h6>
														<label class="pull-right"><input type="checkbox" id="slideRTL" class="js-switch" name="slideRTL"<?php if( $slideRTL== 'true'){	echo 'checked';	} ?> value="<?php echo $slideRTL; ?>"><span class="slider round"></span></input></label>
														 </div>
														</div>
										<!-- <div class="col-md-12">
											<div class="form-group mb-0 ">
													<h6> Show Login/Signup</h6>
														<label class="switch pull-right"><input type="checkbox" id="show_login_signup" class="switch" name="show_login_signup"<?php //if( $L_S_visibility== 'true'){	echo 'checked';	} ?> value="<?php //echo $L_S_visibility; ?>"><span class="slider round"></span></input></label>
														 </div>
														</div> -->
											</div>
												<form method="post"  name="gsetting-form" action=""> <div class="row">

					<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label" for="theme-color1" >Theme Colour</label> <input type="color"id="theme-color1"  class="form-control" name="theme-color1" value="<?php echo $theme_colour; ?>" />
													</div>
											</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label" for="theme-color2">Theme Footer Colour</label> <input type="color" id="theme-color2" class="form-control" name="theme-color2" value="<?php echo $theme_footer_colour; ?>" />
													</div>
												</div>
											
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label" for="theme-color3">Theme link Colour</label> <input type="color" id="theme-color3" class="form-control" name="theme-link-color" value="<?php echo $theme_links_colour; ?>" />
													</div>
												</div>
											

													<div class="col-md-6 col-sm-6">
														<div class="form-group"> <label class="form-label">Website Name</label> <input type="text" class="form-control" name="website_name" placeholder="name" value="<?php echo $website_name; ?>"/>
														</div>
											</div>


												<div class="col-sm-6 col-md-6">
													<div class="form-group">
														<label class="form-label">Site Link</label> <input type="text" class="form-control" name="sitelink" value="<?php echo $website_link; ?>" placeholder="site url"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
										<div class="form-group">
										    <label class="form-label">Homepage Style</label> <select class="form-control" name="homepage-style" ><option value="<?php echo $homepageStyle; ?>"><?php if($homepageStyle == ""){ echo "..Select";}else{ echo ucfirst($homepageStyle);} ?></option>
											<?php if($homepageStyle == 'modern'){
									echo '<option value="default">Default</option>';}elseif($homepageStyle == 'default'){
									    echo '<option value="modern">Modern</option>';
									}else{
									    echo '	<option value="default">Default</option>
										<option value="modern">Modern</option>';
									}?>
											</select>
													</div>
												</div>

												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">City</label> <input type="text" class="form-control" name="city" value="<?php echo $region ; ?>" placeholder="City"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Postal Code</label> <input type="number" class="form-control" name="zip-code" value="<?php echo $zip_code; ?>" placeholder="ZIP Code"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Country</label> <input type="text" class="form-control" name="country" value="<?php echo $country; ?>" placeholder=" Country"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Email</label> <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email Address"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Contact</label> <input type="tel" class="form-control" name="contact" value="<?php echo $scontact; ?>" placeholder="Contact"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Facebook Link</label> <input type="text" class="form-control" name="fblink" value="<?php echo $facebooklink; ?>" placeholder="http://facebook.com/username"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Instagram Handle</label> <input type="text" class="form-control" name="instagrampage" value="<?php echo $instagrampage; ?>" placeholder="Instagram page link"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Youtube</label> <input type="text" class="form-control" name="youtube" value="<?php echo $youtube; ?>" placeholder=" Youtube Channel"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Twitter Handle</label> <input type="text" class="form-control" name="twitterhandle" value="<?php echo $twitterhandle; ?>" placeholder=" Twitter Handle"/>
													</div>
												</div>
												<div class="col-sm-6 col-md-4">
													<div class="form-group">
														<label class="form-label">Whatsapp Link</label> <input type="text" class="form-control" name="whatsapp" value="<?php echo $whatsapp; ?>" placeholder=" Whatsapp link"/>
													</div>
												</div>
													<div class="col-md-12 col-sm-12">
													<div class="form-group">
														<label class="form-label">Address</label> <textarea type="text" class="form-control editor" name="address" placeholder=" Address"><?php echo $address; ?></textarea>
													</div>
												</div>
												<div class="col-md-12 col-sm-12">
													<div class="form-group mb-0">
														<label class="form-label">Active Hours</label> <textarea rows="5" class="form-control editor" name="active-hours" placeholder="Enter site description"><?php echo $active_hours; ?></textarea>
														 </div>
														</div>
												<div class="col-md-12">
													<div class="form-group mb-0">
														<label class="form-label">Site Description</label> <textarea rows="5" class="form-control editor" name="site-description" placeholder="Enter site description"><?php echo $site_description; ?></textarea>
														 </div>
														</div>
													</div>
												</div>
												<input type="hidden" name="update-siteprofile">
												<div class="card-footer text-right">
													<button type="submit"  name="update-siteprofile" class="btn btn-primary">Update Site Profile</button> </div>
												</div>
											</form>
										</div>