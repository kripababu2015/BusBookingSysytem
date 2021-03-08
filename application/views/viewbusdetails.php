<!DOCTYPE html>
<html>
<head>
<title>table1</title>
<style>
table,td,th{border:1px solid red;
padding:15px;border-collapse:collapse;width:50%}
</style>
</head>
<body>
<form method="post" action="<?php echo base_url()?>main/updatedetails">
<?php
if(isset($user_data))
{
foreach ($user_data->result() as $row1)
{
?>
<table>
<tr>
<td>Bus no:</td>
<td><input type="text" name="bno" value="<?php echo $row1->bno;?>"></td>
</tr>
<tr>
<td>Bus Name:</td>
<td><input type="text" name="bname" value="<?php echo $row1->bname;?>"></td>
</tr>

<tr>
<td>Starting Place:</td>
<td><input type="text" name="splace" value="<?php echo $row1->splace;?>"></td>
</tr>
<tr>
<td>Starting Time:</td>
<td><input type="text" name="stime" value="<?php echo $row1->stime;?>"></td>
</tr>
<tr>
<td>Destination:</td>
<td><input type="text" name="destination" value="<?php echo $row1->dplace;?>"></td>
</tr>
<tr>
<td>Reaching Time:</td>
<td><input type="text" name="rtime" value="<?php echo $row1->dtime;?>"></td>
</tr>
<tr>
<td>Stops :</td>
<td><input type="text" name="stops" value="<?php echo $row1->stops;?>"></td>
</tr>
<tr>
<td>Seat Availability :</td>
<td><input type="text" name="savail" value="<?php echo $row1->seatavailability;?>"></td>
</tr>
<tr>
<td>Date :</td>
<td><input type="text" name="date" value="<?php echo $row1->cdate;?>"></td>
</tr>
<tr>
<input type="hidden" name="id" value="<?php echo $row1->bid;?>">
<td colspan="2"><input type="submit" name="update" value="update"></td>
</tr>
</table>
<?php
}
}
else
{
?>



<table>
<tr>
<th>Bus no</th>
<th>Bus Name</th>
<th>Starting Place</th>
<th>Starting Time</th>
<th>Destination</th>
<th>Reaching Time</th>
<th>Stops</th>
<th>Seat Availability</th>
<th>Date</th>
<th>Action</th>
<th>Action</th>

</tr>


<?php

if($n->num_rows()>0)
{
foreach ($n->result() as $row)
{
?>
<tr>
<td><?php echo $row->bno;?></td>
<td><?php echo $row->bname;?></td>
<td><?php echo $row->splace;?></td>
<td><?php echo $row->dplace;?></td>
<td><?php echo $row->stime;?></td>
<td><?php echo $row->dtime;?></td>
<td><?php echo $row->stops;?></td>
<td><?php echo $row->seatavailability;?></td>
<td><?php echo $row->cdate;?></td>
<input type="hidden" name="id" value="<?php echo $row->bid;?>">
<td><a href="<?php echo base_url()?>main/updatedetails<?php echo $row->bid;?>">Edit</a></td>
<td><a href="<?php echo base_url()?>main/deletedetails<?php echo $row->bid;?>">Delete</a></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<td>No Data Found</td>
</tr>
<?php
}
}
?>
</table>
</form>
</body>
</html>