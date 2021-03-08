<!DOCTYPE html>
<html>
<head>
	<title>Admin Notification View</title>
	 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style>
		table,th,td{
			border:1px solid;
			border-collapse: collapse;
		}
		.bg{
			background-color: rgba(0,0,0,0.2);
		}

	</style>
</head>
<body class="bg">
<a href="<?php echo base_url()?>main/adminhome" class="btn btn-primary">BACK TO HOME</a>
<h2 class="py-3 text-center">Notifications</h2>
	<table class="table table-hover table-bordered border-info text-center my-2"	>
		<thead>
			<tr>
				<th>Bus Number</th>
				<th>Bus Name</th>
				<th>Notification</th>
				<th>Action</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php
		if($n->num_rows()>0)
		{
			foreach($n->result() as $row)
					{
		?>
						<tr>
							<td><?php echo $row->bno;?></td>
							<td><?php echo $row->bname;?></td>
							<td><?php echo $row->notification;?></td>
							<td><a href="<?php echo base_url()?>main/notify_delete/<?php echo $row->id;?>">Delete</a></td>
							<td><a href="<?php echo base_url()?>main/admin_update/<?php echo $row->id;?>">Update</a></td>
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>

</body>
</html>