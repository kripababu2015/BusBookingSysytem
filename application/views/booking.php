<html>
<head>
<title> first site </title>
<style>
<style>
table,td,th{border:1px solid red;
padding:15px;border-collapse:collapse;width:50%}
</style>
</head>
<body>
<!form start>
<form action="<?php echo base_url()?>main/bookform" method="post">
<table>
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
<td><input type="text" name="splace" placeholder="Starting Place"></td>
</tr>

<tr>
<td>Destination:</td>
<td><input type="text" name="destination"placeholder="Destination"></td>
</tr>
<tr>
<input type="hidden" name="id" value="<?php echo $row1->bid;?>">
<td><input type="submit" name="book" value="Book"></td>
</tr>
<?php
}
}
?>
</table>
</form>
<!--form end-->
</body>
</html>
