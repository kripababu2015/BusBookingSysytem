<!DOCTYPE html>
<html>
<head>
	<title>Admin Notification View</title>
	<style>
		table,th,td{
			border:1px solid;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>Bus Number</th>
				<th>Bus Name</th>
				<th>Passenger Name</th>
				<th>Phone number</th>
				<th>Starting Place</th>
				<th>destination</th>
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
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->phno;?></td>
							<td><?php echo $row->startingplace;?></td>
							<td><?php echo $row->destination;?></td>
							<td><a href="<?php echo base_url()?>main/cancel/<?php echo $row->id;?>">Delete</a></td>
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>

</body>
</html>