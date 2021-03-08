<!DOCTYPE html>
<html>
<head>
<title>file upload</title>
</head>
<body>
<form enctype="multipart/form-data" action="<?php echo base_url()?>main/fileupload" method="post">

Covid protocol<input type="file"name="pic" >
<input type="submit" value="upload">

</form>
</body>
</html>
