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
<table>
<?php
if($n->num_rows()>0)
{
foreach ($n->result() as $row)
{
?>
<tr>
<td>
<a href="<?php echo base_url("/files/");
if($row->pic)echo $row->pic;
else echo"no-report.pdf";?>?>"target="_blank">Covid Protocol</a>
<?php
}
}
?>

</td>
</tr>
</table>
</body>
</html>
