<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstaps/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstaps/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container" style="margin-top:75px;">
	<a type="button" class="btn btn-primary" href="<?php echo site_url('admin/addmember') ?>">Add+</a>
	<table class="table table-bordered">
		<thead>
			<th>No.</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Tools</th>
		</thead>
		<?php $i=0;foreach ($query as $result): ?>
		<tr>
			<td> <?php echo ++$i 			  ?> </td>
			<td> <?php echo $result->userName ?> </td>
			<td> <?php echo $result->Phone    ?> </td>
			<td>
				<a  class="btn btn-warning" 
				href="<?php echo site_url('admin/editmember/'.$result->ID) ?>">Edit</a>
				<a  class="btn btn-danger" 
				href="<?php echo site_url('admin/deletemember/'.$result->ID) ?>">Delete</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

</body>
</html>