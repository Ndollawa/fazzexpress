<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>New Parcel</h3>
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
</div>
</div> -->
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2><strong>Delivery Information</strong></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<?php include __DIR__.'/../add-form.php'; ?>
<?php if(!(isset($_GET['edit']))){
header('Location:page_404.php');
}elseif(isset($_GET['edit'])){
$parcel_id = $database->escape_value($_GET['edit']);											
$sql="SELECT * FROM parcels  WHERE id = $parcel_id";
$query = $database->query($sql);
 $row = $database->fetch_array($query);
  if($row == 0){
header('Location:page_500.php');
 }else{

	foreach ($query as $row) { 
					 $parcel_id = $row['id'];
	  $reference_number = $row['reference_number'];
	  $sender_name = $row['sender_name'];
	  $sender_address = $row['sender_address'];
	  $date_created = date('l,d-m-Y',strtotime($row['date_created']));
	  $sender_contact =$row['sender_contact'];
	  $recipient_name = $row['recipient_name'];
	  $sender_email = $row['sender_email'];
	  $recipient_email = $row['recipient_email'];
	  $recipient_address = $row['recipient_address'];
	  $recipient_contact = $row['recipient_contact'];
	  $parcel_status = $row['status'];
	  $delivery_class = $row['delivery_class'];
	  $shipment_type= $row['shipment_type'];
	  $delivery_type =$row['delivery_type'];
	 $from_branch_id = $row['from_branch_id'];
	  $weight =$row['weight'];
	  $height = $row['height'];
	  $width = $row['width'];
	  $length = $row['length'];
	  $price = $row['price'];
	  $parcel_worth = $row['parcel_worth'];
	  $parcel_image = $row['parcel_image'];
	  // $date_sent = $row['date_sent'];
	  // $date_arrived = $row['date_arrived'];
	  // $shipment_report = $row['shipment_report'];
	  // $recipient_address = $row['recipient_address'];
	  // $recipient_contact = $row['recipient_contact'];
	  $sender_numbers =preg_split("/,/",  preg_replace("/ /", "", $sender_contact));
						
							$sender_contact1 = $sender_numbers[0];
							if(count($sender_numbers) > 1){
							$sender_contact2 = $sender_numbers[1];}else{
								$sender_contact2 = "";
							}
	$recipient_numbers =preg_split("/,/",  preg_replace("/ /", "", $recipient_contact));
						
							$recipient_contact1 = $recipient_numbers[0];
							if(count($recipient_numbers) > 1){
							$recipient_contact2 = $recipient_numbers[1];}else{
								$recipient_contact2 = "";
							}
}

	}}
	?>
<?php echo $msg; ?> 
<form action="" class="form-horizontal"  enctype="multipart/form-data" method="post">
							<div class="row">
								<div class="col-12">
									<div class="row">
										<div class="col-md-6">	<div class="" style="padding: 5px 10px; margin:20px 0 20px 0; background: black; width: 100%; color: #fff;">
										<h4 style="margin:0 0 0 10px; "><strong>Sender's Information</strong> </h4></div>
										
											
										<div class="form-body">
											<div class="form-group row">
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Full Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="s-name" placeholder="Enter Sender's name"
														class="form-control input-height" value="<?php echo $sender_name ; ?>" />
											</div>
											
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Contact No:
													<span class="required"> * </span>
												</label>
												<input type="tel" id="telephone" name="s-contact" required="required" data-validate-length-range="8,20" class="form-control input-height" value="<?php echo $sender_contact1 ; ?>" />
											</div>
									
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Additional Conact No.:
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-phone"></i>
														</span>
														<input type="tel" id="telephone0" name="s-contact2"data-validate-length-range="8,20" class="form-control input-height" placeholder="Optional" value="<?php echo $sender_contact2 ; ?>" > 
												</div>
											</div>
										
										<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Email
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="email" class="form-control input-height"
															name="s-email" placeholder="Email Address" value="<?php echo $sender_email ; ?>" > 
												</div>
											</div>
											<div class="form-group col-md-12 col-sm-12">
						 						<label class="control-label">Address
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="s-address" placeholder="Enter address"
														class="form-control input-height"><?php echo $sender_address ; ?></textarea>
											</div>
										
											</div>
										</div>

									
							</div>
										<div class="col-md-6">	<div class="" style="padding: 5px 10px; margin:20px 0 20px 0; background: black; width: 100%; color: #fff;">
										<h4 style="margin:0 0 0 10px; "><strong>Recipient's Information</strong> </h4></div>
		
										<div class="form-body">
											<div class="row">
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Full Name
													<span class="required"> * </span>
												</label>
													<input type="text" name="r-name" placeholder="Enter Recipient's name"
														class="form-control input-height" value="<?php echo $recipient_name ; ?>"  />
											</div>
											
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Contact No:
													<span class="required"> * </span>
												</label>
												<input type="tel" id="telephone1" name="r-contact"  placeholder="Enter contact number" required="required" data-validate-length-range="8,20" class="form-control input-height" value="<?php echo $recipient_contact1 ; ?>" />
												
											</div>
									
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Additional Conact No.:
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-phone"></i>
														</span>
														<input type="tel" id="telephone2" name="r-contact2" data-validate-length-range="8,20" class="form-control input-height"  placeholder="Optional" value="<?php echo $recipient_contact2 ; ?>" /> 
												</div>
											</div>
										
										<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Email
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="email" class="form-control input-height"
															name="r-email" placeholder="Email Address" value="<?php echo $recipient_email ; ?>" > 
												</div>
											</div>
											<div class="form-group col-md-12 col-sm-12">
						 						<label class="control-label">Address
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="r-address" id="recipientaddress" required="required" placeholder="Enter address"
														class="form-control input-height"><?php echo $recipient_address ; ?></textarea>
											</div>
												</div>
					</div>
				</div>
		<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Shipment Type
													<span class="required"> * </span>
												</label><?php 
$st = array("Warehousing","Air Freight","Ocean Freight","Road Freight");
												echo	'<select class="form-control input-height" name="shipment-type">
												<option value="'.$shipment_type.'">';
if(!empty($shipment_type)){echo $shipment_type;}else{ echo "Select  ...";} 
echo '</option>';
										$c =count($st);
														 for ($i=0; $i <$c ; $i++) {
														 	if($st[$i] != $shipment_type){
														 		echo '<option value="'.$st[$i].'">'.$st[$i].'</option>';
														 	}
														 	
														} 
							echo '</select>';
?> 
													
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Delivery Class
													<span class="required"> * </span>
												</label><?php 
$dc = array("Fragile","Express Delivery","Insurance","Packaging");
												echo	'<select class="form-control input-height" name="delivery-class">
												<option value="'.$delivery_class.'">';
if(!empty($delivery_class)){echo $delivery_class;}else{ echo "Select  ...";} 
echo '</option>';
										$c =count($dc);
														 for ($i=0; $i <$c ; $i++) {
														 	if($dc[$i] != $delivery_class){
														 		echo '<option value="'.$dc[$i].'">'.$dc[$i].'</option>';
														 	}
														 	
														} 
							echo '</select>';
?> 
													<!-- <select class="form-control input-height" name="delivery-class">
														<option value="">Select...</option>
														<option value="Fragile">Fragile</option>
														<option value="Express Delivery">Express Delivery</option>
														<option value="Insurance">Insurance</option>
														<option value="Packaging">Packaging</option>
													</select> -->
											</div>
										<div class="form-group col-md-6 col-sm-12">
											<p>Hint:&ensp;<span><em>Pickup = Pickup at nearest Branch</br>
											 &ensp;&ensp; &ensp;&ensp;Delivery = Deliver to Recipient's Address</em></span></p>
											<div class="radio">
												<label for="option1" >
													<input type="radio" class="deliveryoptions flat" <?php if($delivery_type == 'Pickup'){echo 'checked="true"';} ?> value="Pickup" id="options1"  name="deliveryoptions"> Pickup
												</label>
											</div>
											<div class="radio">
												<label for="options2">
													<input type="radio" class="deliveryoptions flat" <?php if($delivery_type == 'Delivery'){echo 'checked="true"';} ?> value="Delivery" id="options2" name="deliveryoptions"> Delivery
												</label>
											</div>
										</div>
										<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Branch Processed
													<span class="required"> * </span>
												</label>
							<?php

	$sql ="SELECT * FROM branches WHERE status != 'Deleted' GROUP BY id ORDER BY id";
			$qry =$database->query($sql);
	$row=$database->fetch_array($qry);
foreach ($qry as $row) {
	$branchID =  $row['id'];
$branch[] = $row['branch_code'].' | '.ucfirst($row['building']).', '.ucfirst($row['city']).','.ucfirst($row['state']).', '.ucfirst($row['country']);}
echo '<select class="form-control input-height" id="b-processed" name="b-processed"><option value="'.$from_branch_id.'">';
if(!empty($from_branch_id)){echo get_branchAddressCode($from_branch_id);}else{ echo "Select Recieved Branch ...";} 
echo '</option>';
										$c =count($branch);
														 for ($i=0; $i <$c ; $i++) {
														 	if($branch[$i] != $from_branch_id){
														 		echo '<option value="'.$branchID.'">'.$branch[$i].'</option>';
														 	}
														 	
														} 
							echo '</select>';
?> 
								
												
											</div>
								
							
											<div class="form-group offset-6 col-md-6 col-sm-12" id="closestBranch"></div>
							</div>
									</div>
								

							<div class="" style="padding: 5px 10px; margin:20px 0 20px 0; background: black; width: 100%; color: #fff;">
										<h4 style="margin:0 0 0 10px; "><strong>Parcel Information</strong> </h4></div>			
										
									
										
										
							
									
										
										
										
												<input type="hidden" name="branchID" value="<?php echo $_SESSION['branchID'];?>">
												<input type="hidden" name="action" value="add_newparcel">
												<div class="form-group col-md-3 col-sm-12">
												<label class="control-label">Parcel Image
												</label>
												<!-- <div class="compose-editor"> -->
													<input type="file" accept="image/*" class="form-control" id="parcelImageUpload" name="p-image">
												<!-- </div> -->
											</div>
										
											<div class="form-group col-md-6 col-sm-12 ">
												<div id="parcelImage-preview" style="width:10px;height:10px;align-content: center;"></div>
												</div>
								
							</div>
								 <hr>
        <div><b>Parcel Information</b></div>
        <table class="table table-bordered" id="parcel-items">
          <thead>
            <tr>
              <th>Weight</th>
              <th>Height</th>
              <th>Length</th>
              <th>Width</th>
              <th>Parcel Appx. Worth</th>
              <th>Shipment Price / Fee</th>
             
              <!-- <th></th> -->
         
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name="weight[]" required="required" class="form-control input-height" value="<?php echo $weight ; ?>"  /></td>
              <td><input type="text" name="height[]" required="required" class="form-control input-height"  value="<?php echo $height ; ?>" /></td>
              <td><input type="text" name="length[]" required="required" class="form-control"  value="<?php echo $length ; ?>" /></td>
              <td><input type="text" name="width[]" required="required" class="form-control input-height"  value="<?php echo $width ; ?>" /></td>
				<td><input name="pworth[]" type="number" class="form-control input-height"  value="<?php echo $parcel_worth ; ?>" /></td>
              <td><input name="price[]" class="text-right number form-control input-height" type="number" required="required" value="<?php echo $price ; ?>" /></td>

              
              <!-- <td><button class="btn btn-sm btn-danger" type="button" onclick="$(this).closest('tr').remove() && calc()"><i class="fa fa-times"></i></button></td>
               -->
            </tr>
          </tbody>
             
          <tfoot>
            <th colspan="5" class="text-right">Total</th>
            <th class="text-right" id="tAmount">0.00</th>
            <!-- <th></th> -->
          </tfoot>
           
        </table>
             
        <!-- <div class="row">
          <div class="col-md-12 d-flex justify-content-end">
            <button  class="btn btn-sm btn-primary bg-gradient-primary" type="button" id="new_parcel"><i class="fa fa-plus"></i> Add Item</button>
          </div>
        </div> -->
   <input type="hidden" name="editparcel">


<div class="form-actions">
			<div align="center" class=" text-center">
				<button type="submit" class="btn btn-info m-r-20" name="editparcel" >Update</button>
					<button type="button" onClick = "history.back();" class="btn btn-default">Cancel</button>
													</div>
											</div>
										
									</form>
									<div id="ptr_clone" class="d-none">
  <table>
    <tr>
        <td><input type="text" name='weight[]' class="form-control input-height" required></td>
        <td><input type="text" name='height[]' class="form-control input-height" required></td>
        <td><input type="text" name='length[]' class="form-control input-height" required></td>
        <td><input type="text" name='width[]' class="form-control input-height" required></td>
        <td><input name="pworth[]" type="number" class="form-control input-height" /></td>
        <td><input type="number" class="text-right number form-control input-height" name='price[]' required></td>
        <td><button class="btn btn-sm btn-danger" type="button" onclick="$(this).closest('tr').remove() && calc()"><i class="fa fa-times"></i></button></td>
      </tr>
  </table>
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
<script type="text/javascript">

	 $('[name="price[]"]').keyup(function(){
      calc()
    })
  $('#new_parcel').click(function(){
    var tr = $('#ptr_clone tr').clone()
    $('#parcel-items tbody').append(tr)
    $('[name="price[]"]').keyup(function(){
      calc()
    })
    $('.number').on('input keyup keypress',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9]/, '');
        val = val.replace(/,/g, '');
        val = val > 0 ? parseFloat(val).toLocaleString("en-US") : 0;
        $(this).val(val)
    })

  })
 function calc(){

        var total = 0 ;
         $('#parcel-items [name="price[]"]').each(function(){
          var p = $(this).val();
              p =  p.replace(/,/g,'')
              p = p > 0 ? p : 0;
            total = parseFloat(p) + parseFloat(total)
         })
         if($('#tAmount').length > 0)
         $('#tAmount').text(parseFloat(total).toLocaleString('en-US',{style:'decimal',maximumFractionDigits:2,minimumFractionDigits:2}))
  }

// var output ="";
// load_address();
// function load_address(){
// 	if(<?php echo $delivery_type; ?> == 'Pickup'){
// 					output +='<label class="control-label"> Closest Branch<span class="required"> * </span></label>';
				

// 	<?php $sql ="SELECT * FROM branches WHERE status != 'Deleted' AND zip_code LIKE '%$zip_code%' GROUP BY id ORDER BY id DESC";
// 			$qry =$database->query($sql);
// 			$output= "";
// 	$row=$database->fetch_array($qry);
// foreach ($qry as $key => $row) {
// 	$branchID =  $row['id'];
// $branch[] = $row['branch_code'].'|'.ucfirst($row['building']).', '.ucfirst($row['city']).', '.ucfirst($row['country']);}
// $output .='<select class="form-control input-height" id="deliveryaddress" name="deliveryaddress"><option value="">Select Recieved Branch ...</option>';
// 										$c =count($branch);
// 														 for ($i=0; $i <$c ; $i++) {
// 														 	if($branch[$i] != 0){
// 														 		$output .= '<option value="'.$branchID.'">'.$branch[$i].'</option>';
// 														 	}
														 	
// 														} 
// 							$output .= '</select>';?>
// 							output += <?php echo $output; ?>;
// 					$('#closestBranch').html(output);			
											
// }else if (<?php echo $delivery_type; ?> == 'Delivery') {

// var html =  '<label class="control-label"> Delivery Address<span class="required"> * </span></label><input type="text" class="form-control" readonly="readonly" placeholder="" value="'+<?php echo $deliveryAddress;?>+'"/>';
// $('#closestBranch').html(html);
// }
// }



</script>
</html>
