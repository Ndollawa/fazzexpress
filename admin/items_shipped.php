<?php include 'components/header.php'; ?>

<body class="nav-md">
<div class="container body">
<div class="main_container">
<?php include 'components/nav.php'; ?>


<div class="right_col" role="main">
<div class="">
<div class="page-title">
<div class="title_left">
<h3>Parcel List</h3>
</div>

</div>
<div class="clearfix"></div>
<div class="row">
<div class="col-md-12 col-sm-12  ">
<div class="x_panel">
<div class="x_title">
<h2><strong>Shipped Items List</strong></h2>

<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="table-responsive">
<table class="table  table-striped jambo_table table-bordered table-hover" id="datatables">
<thead>
<tr class="headings">
<th><input type="checkbox" id="selectAll"  name="selectAll"></th>
<th class="column-title">S/N</th>
<th class="column-title">Reference Number</th>
<th class="column-title">Branch Recieved</th>
<th class="column-title">Sender Name</th>
<th class="column-title">Sender Contact</th>
<th class="column-title">Recipient Name </th>
<th class="column-title">Recipient Contact</th>
<th class="column-title">Status </th>
<th class="column-title no-link last"><span class="nobr">Action</span>
</th>
<th class="bulk-actions" colspan="7">
<a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
</th>
</tr>
</thead>
<tbody id="shipped_parcelDisTable">


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

</html>
