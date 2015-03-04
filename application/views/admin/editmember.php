<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstaps/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstaps/css/bootstrap-theme.min.css">
  </head>
  <body>
   <div class="container">
   		<form method="POST" action="<?php echo site_url('admin/saveeditmember/'.$query[0]->ID) ?>">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name</label>
		    <input type="text" class="form-control" name="user" 
		    placeholder="Enter Name" value="<?php echo $query[0]->userName ?>">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Phone</label>
		    <input type="text" class="form-control" name="phone" 
		    placeholder="09x-xxxx" value="<?php echo $query[0]->Phone ?>">
		  </div>
		  <button type="submit" class="btn btn-success">Edit</button>
		</form>
   </div>

  </body>
</html>
