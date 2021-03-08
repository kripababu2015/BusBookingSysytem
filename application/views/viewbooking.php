<!DOCTYPE html>
<html>
<head>
	<title >Admin View Booking</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<style>
		.bg{
			background-color:rgba(0, 0, 0,0.4);
		}
	</style>
</head>
<body class="bg">


<h2 class="text-center mt-5">Bookings</h2>
	<table class="table table-stripped  table-hover table-bordered mt-5  text-center table-success">
		<thead class="table-danger">
			<tr>
				<th>Bus Number</th>
				<th>Bus Name</th>
				<th>Passenger Name</th>
				<th>Phone number</th>
				<th>Starting Place</th>
				<th>destination</th>
				
				
				
				
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
							
							</tr>
			<?php
				}
			}
			?>

			
		</tbody>
	</table>
<a href="<?php echo base_url()?>main/adminhome" class="text-decoration-none btn btn-info ms-5">BACK TO HOME</a>
</body>
</html>