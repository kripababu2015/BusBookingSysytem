<!DOCTYPE html>
<html>
<head>
<title>table1</title>
 <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>

</style>
</head>
<body>
<a href="<?php echo base_url()?>main/userhome">BACK TO HOME</a>
<table class="table table-hover table-bordered border-info text-center my-5">
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
<td><a href="<?php echo base_url()?>main/booking/<?php echo $row->bid;?>">Book</a></td>

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

?>
</table>
</form>
</body>
</html>