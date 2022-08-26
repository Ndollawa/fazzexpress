<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Request Quotes</h3>
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
<h2>Requests</h2>

<div class="clearfix"></div>
</div>
<div class="x_content">

<table class="table table-responsive table-striped jambo_table bulk_action" id="datatables" style="width: 100%;">
<thead>
<tr class="headings">

<th class="column-title">S/N</th>
<!-- <th class="column-title">Company</th> -->
<th class="column-title"> Name </th>
<th class="column-title">Email</th>
<th class="column-title">Weight</th>
<th class="column-title">Height </th>
<th class="column-title">Width</th>
<th class="column-title">Length </th>
<th class="column-title no-link last"><span class="nobr">Action</span>
</th>

</tr>
</thead>
<tbody id="quoteRequestDisTable">


</tbody>

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
</body>
</html>
