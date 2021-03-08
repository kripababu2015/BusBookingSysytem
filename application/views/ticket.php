<html>
<body>
	<form action="<?php echo base_url()?>main/taction" method="post">

		<?php
		if(isset($n))
	{
	foreach ($n->result() as $row)
	{
		echo "<table border='1'>";
		echo "<tr><td>Kilometers</td><td>".$row->kilometers."</td></tr>";
		echo "<tr><td>Amount</td><td>".$row->amount."</td></tr>";
		
		
	}
	
}
?>
		

</form>
</body>
</html>