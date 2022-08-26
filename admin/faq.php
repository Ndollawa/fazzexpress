<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Frequently Asked Questions</h3>
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
<h2>FAQ</h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
	<div class="row">
						<div class="col-sm-12 col-md-12 col-xl-12">
							<div class="card-box">
								<div class="card-head">
									<header>Frequently Asked Questions</header>
					
								</div>
								<div class="card-body ">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-6">
											<div class="btn-group">
												<a href="javascript:;" id="addRow" class="addFaq btn btn-info">
													Add New <i class="fa fa-plus"></i>
												</a>
											</div>
										</div>
								
									</div>
									<div class="table-scrollable">
											<form action="" method="post" id="faqdisTable">
<div class="text-center" style="margin: 5px 0 5px 70%; display: inline-flex;">
	<select class="form-control text-center" id="bulk-options" name="bulk-options"style="width:200px;margin: 5px 5px;" >
			<option value="">Select Options</option>
			<option value="Active">Active</option>
			<option value="In-active">In-active</option>
			<option value="Deleted">Delete</option>
													</select>	
											<input type="submit" class="btn btn-success btn-sm  btn-round" name="checkbox-submit" value="Apply" />
										</div>
														 
						<table
							class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
							id="faqTable">	
																

											<thead>
												<tr>
													<th><input type="checkbox" id="selectAll" name="selectAll"></th>
													<th>#</th>
													<th>Question</th>
													<th>Answer</th>
													<th>Date</th>
													<th>Status</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody id="faqTableData">

									</tbody>
																									
										</table>
									</form>
									</div>
								</div>
							</div>
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

</html>
