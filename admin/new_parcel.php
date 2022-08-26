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
</div> -->
</div>
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
														class="form-control input-height" />
											</div>
											
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Contact No:
													<span class="required"> * </span>
												</label>
												<input type="tel" id="telephone" name="s-contact" required="required" data-validate-length-range="8,20" class="form-control input-height" />
											</div>
									
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Additional Conact No.:
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-phone"></i>
														</span>
														<input type="tel" id="telephone0" name="s-contact2"data-validate-length-range="8,20" class="form-control input-height" placeholder="Optional"> 
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
															name="s-email" placeholder="Email Address"> 
												</div>
											</div>
											<div class="form-group col-md-12 col-sm-12">
						 						<label class="control-label">Address
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="s-address" placeholder="Enter address"
														class="form-control input-height"></textarea>
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
														class="form-control input-height" />
											</div>
											
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Contact No:
													<span class="required"> * </span>
												</label>
												<input type="tel" id="telephone1" name="r-contact"  placeholder="Enter contact number" required="required" data-validate-length-range="8,20" class="form-control input-height" />
												
											</div>
									
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Additional Conact No.:
												</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-phone"></i>
														</span>
														<input type="tel" id="telephone2" name="r-contact2" data-validate-length-range="8,20" class="form-control input-height"  placeholder="Optional"/> 
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
															name="r-email" placeholder="Email Address"> 
												</div>
											</div>
											<div class="form-group col-md-12 col-sm-12">
						 						<label class="control-label">Address
													<span class="required"> * </span>
												</label>
													<textarea type="text" name="r-address" id="recipientaddress" required="required" placeholder="Enter address"
														class="form-control input-height"></textarea>
											</div>
												</div>
					</div>
				</div>
				<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Shipment Type
													<span class="required"> * </span>
												</label>
													<select class="form-control input-height" name="shipment-type">
														<option value="">Select...</option>
														<option value="Warehousing">Warehousing</option>
														<option value="Air Freight">Air Freight</option>
														<option value="Ocean Freight">Ocean Freight</option>
														<option value="Road Freight">Road Freight</option>
													</select>
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label class="control-label">Delivery Class
													<span class="required"> * </span>
												</label>
													<select class="form-control input-height" name="delivery-class">
														<option value="">Select...</option>
														<option value="Fragile">Fragile</option>
														<option value="Express Delivery">Express Delivery</option>
														<option value="Insurance">Insurance</option>
														<option value="Packaging">Packaging</option>
													</select>
											</div>
										<div class="form-group col-md-6 col-sm-12">
											<p>Hint:&ensp;<span><em>Pickup = Pickup at nearest Branch</br>
											 &ensp;&ensp; &ensp;&ensp;Delivery = Deliver to Recipient's Address</em></span></p>
											<div class="radio">
												<label for="option1" >
													<input type="radio" class="deliveryoptions flat" value="Pickup" id="options1" checked="true" name="deliveryoptions"> Pickup
												</label>
											</div>
											<div class="radio">
												<label for="options2">
													<input type="radio" class="deliveryoptions flat" value="Delivery" id="options2" name="deliveryoptions"> Delivery
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
echo '<select class="form-control input-height" id="b-processed" name="b-processed"><option value="">Select Recieved Branch ...</option>';
										$c =count($branch);
														 for ($i=0; $i <$c ; $i++) {
														 	// if($branch[$i] != 0){
														 		echo '<option value="'.$branchID.'">'.$branch[$i].'</option>';
														 	// }
														 	
														} 
							echo '</select>';
?> 
								
												
											</div>
								
							
											<div class="form-group offset-6 col-md-6 col-sm-12" id="closestBranch"></div>
							</div>
									</div>
								

							<div class="" style="padding: 5px 10px; margin:20px 0 20px 0; background: black; width: 100%; color: #fff;">
										<h4 style="margin:0 0 0 10px; "><strong>Parcel Information</strong> </h4></div>			
										
									
										
										
							
									
										
										
										
												<input type="hidden" name="branchID" value="<?php if(isset($_SESSION['branchID'])){ echo $_SESSION['branchID'];}?>">
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
             
              <th></th>
         
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name="weight[]" required="required" class="form-control input-height" /></td>
              <td><input type="text" name="height[]" required="required" class="form-control input-height" /></td>
              <td><input type="text" name="length[]" required="required" class="form-control" /></td>
              <td><input type="text" name="width[]" required="required" class="form-control input-height" /></td>
				<td><input name="pworth[]" type="number" class="form-control input-height" /></td>
              <td><input name="price[]" class="text-right number form-control input-height" type="number" required="required"/></td>

              
              <td><button class="btn btn-sm btn-danger" type="button" onclick="$(this).closest('tr').remove() && calc()"><i class="fa fa-times"></i></button></td>
              
            </tr>
          </tbody>
             
          <tfoot>
            <th colspan="5" class="text-right">Total</th>
            <th class="text-right" id="tAmount">0.00</th>
            <th></th>
          </tfoot>
           
        </table>
             
        <div class="row">
          <div class="col-md-12 d-flex justify-content-end">
            <button type="button" class="btn btn-sm btn-primary" id="new_parcel"><i class="fa fa-plus"></i> Add Item</button>
          </div>
        </div>
   <input type="hidden" name="addparcel">


<div class="form-actions">
			<div align="center" class=" text-center">
				<button type="submit" class="btn btn-info m-r-20" name="addparcel" >Submit</button>
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
</script>
</html>
