<?php

use unicalCSphp\UploadFile;
$data = array();

if(isset($_POST['action'])) {
	include __DIR__.'/../../backend/database.php';
include __DIR__.'/../../backend/functions.php';
include __DIR__.'/../../backend/timeAgo.php';
session_start();

if($_POST['action'] === 'load-quoteTableData'){
 $sql=" SELECT * FROM quotes WHERE status = 'Received'";
			 $result= $database->query($sql);
			 $row= $database->fetch_array($result);
			 $count = 0;
			 foreach ($result as $key => $row) {
	$count++; 
			 $id = $row['id'];
			 $company = $row['company'];
			 $name = $row['name'];
			 $email = $row['email'];
			 $contact = $row['contact'];
			 $address = $row['address'];
			 $pickup_street = $row['pickup_street'];
			 $pickup_city = $row['pickup_city'];
			 $pickup_country = $row['pickup_country'];
			 $pickup_zipcode = $row['pickup_zipcode'];
			 $pickup_point_access = $row['pickup_point_access'];
			 $dropoff_street = $row['dropoff_street'];
			 $dropoff_city = $row['dropoff_city'];
			 $dropoff_country = $row['dropoff_country'];
			 $dropoff_zipcode = $row['dropoff_zipcode'];
			 $dropoff_point_access = $row['dropoff_point_access'];
			 $weight = $row['weight'];
			 $height = $row['height'];
			 $width = $row['width'];
			 $length = $row['length'];
			 $quantity = $row['quantity'];
			 $stackable_status = $row['stackable_status'];
			 $price = $row['price'];
			 $parcel_worth = $row['parcel_worth'];
			 $parcel_image = $row['parcel_image'];
			 $form_type = $row['form_type'];
			 $status = $row['status'];
			 $date_created = $row['date_created'];

echo '
<tr>
<td class="">'.$count.'</td>
<td class="">'.$name.'</td>
<td class="">'.$email.'</td>
<td class="">'.$weight.'</td>
<td class="">'.$height.'</td>
<td class="">'.$width.'</td>
<td class="">'.$length.'</td>
<td class="inline-flex" style="display:inline-flex;"><button type="button" data-quote_id="'.$id.'" data-action="load-quoteResponseForm" id="" class="btn edit-quote btn-primary btn-xs quoteResponseForm">
					<i class="fa fa-reply"></i>
				</button>
				<button  class="btn btn-danger btn-xs action-button delete-quote " title="Delete" data-action="delete-quote" data-quote_id="'.$id.'"><i class="fa fa-trash-o "></i>
				</button></td>
</tr>';
		}


}


if($_POST['action'] == "load-quoteRequestForm"){
	echo $quote_id =$_POST['quote_id'];	
$sql=" SELECT * FROM quotes WHERE status != 'Deleted' AND id = $quote_id ORDER BY id";
												 $result= $db->query ($sql);
												 $row = mysqli_fetch_array($result);
												 $count = 1;
													foreach ($result as $row) {
									  $id = $row['id'];
									   $company = $row['company'];
			 $name = $row['name'];
			 $email = $row['email'];
			 $contact = $row['contact'];
			 $address = $row['address'];
			 $pickup_street = $row['pickup_street'];
			 $pickup_city = $row['pickup_city'];
			 $pickup_country = $row['pickup_country'];
			 $pickup_zipcode = $row['pickup_zipcode'];
			 $pickup_point_access = $row['pickup_point_access'];
			 $dropoff_street = $row['dropoff_street'];
			 $dropoff_city = $row['dropoff_city'];
			 $dropoff_country = $row['dropoff_country'];
			 $dropoff_zipcode = $row['dropoff_zipcode'];
			 $dropoff_point_access = $row['dropoff_point_access'];
			 $weight = $row['weight'];
			 $height = $row['height'];
			 $width = $row['width'];
			 $length = $row['length'];
			 $quantity = $row['quantity'];
			 $stackable_status = $row['stackable_status'];
			 $price = $row['price'];
			 $parcel_worth = $row['parcel_worth'];
			 $parcel_image = $row['parcel_image'];
			 $form_type = $row['form_type'];
			 $status = $row['status'];
			 $date_created = $row['date_created'];
									}
	echo '<form   id="quote-updateform" method="post" style="margin-top:40px;">
				<div class="form-group inline-flex" style="width:100%;">
												
													<span class="input-height text-center " style="background:#ccc; width:150px;padding:10px 20px; ">Email: <i class="fa fa-mail"></i></span><input type="text" name="user-email" id="email"
														class="form-control input-height" value="'.$email.'" style="width:100%;"/>
											</div>	
											<div class="form-group inline-flex" style="width:100%;">
												
													<span class="input-height text-center " style="background:#ccc; width:150px;padding:10px 20px; ">Name: <i class="fa fa-question-circle"></i></span><input type="text" name="user-name" id="user-name"
														class="form-control input-height" value="" style="width:100%;"/>
											</div>	
											<div class="heading bold">Answer</div>
								<div class="editor" id ="quote-answer">
									
								</div>
						
					<div class="form-actions">
							<div class="row">
								<div class="offset-md-3 col-md-9">
									<button type="submit" id="faq-update" name="faq-update" data-quote_id="'.$id.'"
										class="btn btn-success m-r-20">Update FAQ</button>
									<button type="button" onClick="window.history();" class="btn btn-default cancel">Cancel</button>
								</div>
							</div>
					</div>
					
			</form>';
}


if($_POST['action'] === 'make-todosForm'){
	$user_id =$_SESSION['user_id'];
echo	'<form action="" method="post"  id="add-todo">
			 					<div class="form-group">	
			 						<label for="todo-title"><strong> Add Todos</strong></label>
			 						<input type="text" class="form-control" id="todo-title" name="todo-title" /></div>
			 					<div class="form-group">
			 						<button type="submit" class="btn btn-primary btn-default" id="create-Todo">Add Todo</button></div>
			 					</form>';
}


if($_POST['action'] == 'make-todosFormpanel'){
	$user_id =$_SESSION['user_id'];
echo	'<div class="row">
						<div class="col-sm-12 col-md-12">
			 				<div class="card-body"> 
			 					<form action="" method="post"  id="add-todo">
			 					<div class="form-group">	
			 						<label for="todo-title"><strong> Add Todos</strong></label>
			 						<input type="text" class="form-control" id="todo-title" name="todo-title" /></div>
			 					<div class="form-group">
			 						<button type="submit" class="btn btn-primary btn-default" id="create-Todo">Add Todo</button></div>
			 					</form>

				 			</div>
					<div class="todo-edit"></div>
				 		</div>
				 	<!-- </div> -->
					<!-- <div class="row"> -->
						<div class="col-sm-12 col-md-12">
				 			<div class="card-body"> 
							 	<div class="table-responsive"> 
							 		<form action="" method="post" id="todosdisTable">
									<table class="table table-bordered table-hover border mb-0 align-items-center" id="usertodos"> 
	
										<div class="bulkoptions-container">
					 								<div class="row" >
													<div class="col-md-12 col-sm-12 col-12 pull-right">
												<select class="form-control bulkoptions-container-tools" id ="bulk-options" name="bulk-options" style="width: 150px; margin: 5px 0px;">
														<option value="">Select Options</option>
														<option value="Pending">Pending</option>
														<option value="Completed">Completed</option>
														<!-- <option value="Deleted">Delete</option> -->
														<option value="Deleted">Delete</option>
													</select>	<div class="bulkoptions-container-tools" style="margin: 5px 0px;">
											<input type="submit" class="btn btn-success" name="checkbox-submit" value="Apply">
										</div>
											</div>
										
					 							</div>

					 					<thead>
					 						<tr>
					 							<th><input type="checkbox" id="selectAll" name="selectAll"></th>
					 							<th><strong> Todos</strong></th>
					 							<th><strong> Status</strong></th>
					 							<th><strong> Actions</strong></th>
					 							
					 						</tr> 
					 						</thead> 
					 						<tbody class=" todosTable" >
					 						</tbody>
							 		</table>
							 	</form>
							 	</div>
							  </div> 
						</div> 
					</div> ';
}


									
if($_POST['action'] =='todoBulkOperation'){
	if(!empty($_POST['selectid'])){
$checkboxes = json_decode(stripcslashes($_POST['selectid']));
	foreach ($checkboxes as $checkboxValue) {
$bulk_options = $_POST['bulk_options'];
$todos_id=$checkboxValue;

 switch ($bulk_options) {
 		case 'Completed':
 		$sql =" UPDATE todos SET STATUS = '{$bulk_options}' WHERE ID = $todos_id ";
 		$send = $database->query($sql);

 		break;
 	case 'Pending':
 		$sql =" UPDATE todos SET STATUS = '{$bulk_options}' WHERE ID = $todos_id ";
 		$send = $database->query($sql);
 		break;
 	
 	case 'Deleted':
 		$sql =" UPDATE todos SET STATUS = '{$bulk_options}' WHERE ID = $todos_id ";
 		$send = $database->query($sql);
 		break;
 	
 	default:
 		# code...
 		break;

 }

				}

			}
	}


if($_POST['action'] == 'create-todo'){
			// parse_str($_POST["files"],$_POST);   
			$todoName = $database->escape_value(ucfirst($_POST['todoname']));
			if($todoName != ""){
			$query = "INSERT INTO todos (USER_ID,TODO,CREATED_TIME) VALUES ('".$_SESSION['user_id']."','$todoName','".date('Y-m-d H:i:s')."')";
			$send = $database->query($query);}
}


if($_POST['action'] == 'update-todo'){
			// parse_str($_POST["files"],$_POST); 
			$todo_id = $_POST['todo_id'];  
			$todoName = $database->escape_value($_POST['todoname']);
			if($todoName != ""){
			$query = "UPDATE todos SET TODO = '$todoName' WHERE ID = '".$todo_id."'";
			$send = $database->query($query);}
}



if($_POST['action'] == 'loadtodo'){

$query = "SELECT * FROM todos WHERE STATUS != 'Deleted' AND USER_ID = '".$_SESSION['user_id']."' ";
$send = $database->query($query);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$todo_id = $row['ID'];
	$todo_title = $row['TODO'];
	$status = $row['STATUS'];
			switch ($status) {
		case 'Completed':
			$status ='<span class="btn btn-xs btn-success">'.$status.'</span>';
			break;
		
		case 'Pending':
			$status ='<span class="btn btn-xs btn-warning">'.$status.'</span';
			break;
		case 'Deleted':
			$status ='<span class="btn btn-xs btn-danger">'.$status.'</span>';
			break;
		default:
			# code...
			break;
	}
	$output = '	<tr>
	<td><input type="checkbox" class="checkboxes" name="selectid[]" value="'.$todo_id.'"></td>
					<td>'.$todo_title.'</td>
					<td>'.$status.'</td>
					<td>
				<button	type="button" style="width:25px; height:25px; padding: 5px 5px 10px; margin:2px 4px;" class="btn btn-primary btn-xs  edit-todo" title="Edit" data-action="edit-todo" data-todo_id="'.$todo_id.'">
					<i class="fa fa-pencil"></i>
				</button>
				<button type="button"  style="width:25px; height:25px; padding:5px 5px 10px; margin:2px 4px;" class="btn btn-danger btn-xs delete-todo" title="Delete" data-action="delete-todo" data-todo_id="'.$todo_id.'">
					<i class="fa fa-trash-o "></i>
				</button>
					</td>
						
				</tr>';
				echo $output;
}



}
		if($_POST['action'] == 'loadTodoList'){
$x=1;
$query = "SELECT * FROM todos WHERE STATUS != 'Deleted' AND USER_ID = '".$_SESSION['user_id']."' ORDER BY ID DESC LIMIT 6 ";
$send = $database->query($query);
$row = $database->fetch_array($send);
if($row>0){
foreach ($send as $row) {
	$todo_id = $row['ID'];
	$todo_title = $row['TODO'];
	$status = $row['STATUS'];
	
	$output = '<li><div class="todo-check pull-left">
												<input type="checkbox" class="todolist" value="'.$todo_id.'" name="todo"id="todo-check'.$x.'" '; 
												if($status == 'Pending'){
													$output .='';
												}elseif ($status == 'Completed') {
													$output .='checked';
												}
												$output .='>
												<label for="todo-check'.$x.'"></label>
											</div>
											<p class="todo-title '; 
												if($status == 'Pending'){
													$output .='';
												}elseif ($status == 'Completed') {
													$output .='line-through';
												}
												$output .='">'.$todo_title.'
											</p>
											<div class="todo-actionlist pull-right clearfix">
												<a href="#" class="todo-remove delete-todo" data-action="delete-todo" data-todo_id="'.$todo_id.'"><i class="fa fa-times"></i></a>
											</div>
										</li>';
				echo $output;
				$x++;
}
}else{
	echo '<div class="text-center container-fluid bold" style="margin:25% auto;"> SORRY... None YET!!</div>';
}



}

if($_POST['action'] == 'edit-todo'){
$todo_id = $_POST['todo_id'];
$query = "SELECT * FROM todos WHERE ID = '".$todo_id."'";
$send= $database->query($query);
$row = $database->fetch_array($send);
foreach ($send as $row) {
	$todo_title = $row['TODO'];

$output = '<div class="card-body"> 
			 					<form action="" method="post"  id="edit-todo" enctype="multipart/form-data">
			 					<div class="form-group">	
			 						<label for="newtodo-title"><strong> Edit todo</strong></label>
			 						<input type="text" class="form-control" value="'.$todo_title.'" id="newtodo-title" name="newtodo-title" /></div>
			 					<div class="form-group">
			 					<input type="hidden" value ="'.$todo_id.'" id="update-todoid" />
			 						<button type="submit" class="btn btn-primary btn-default" id="upadte-todo" >Update Todo</button></div>
			 					</form></div>';

echo $output;
	}
		
}


if($_POST['action'] == 'delete-todo'){
$todo_id = $_POST['id'];
$query = "UPDATE todos SET STATUS = 'Deleted' WHERE ID = '".$todo_id."' AND USER_ID = '".$_SESSION['user_id']."'";
$send= $database->query($query);
		
		}
if($_POST['action'] == 'change-todoStatus'){
$todo_id = $_POST['todo_id'];
$status = $_POST['status'];
if($status == 'undone'){
	$status= 'Pending';
}elseif ($status == 'done') {
	$status = 'Completed';
}
$query = "UPDATE todos SET STATUS = '$status' WHERE ID = '".$todo_id."' AND USER_ID = '".$_SESSION['user_id']."'";
$send= $database->query($query);
		
		}




}?>

