<!DOCTYPE html>
<html>
<head>
<title>Add Bus Details</title>

<style>
*
{
    padding: 0px;
    margin:0px;
}
body
{
    background-image:url("../img/addbus.jpg");
    background-size:cover;
    /*text-align:center;*/
    
}

table{
    margin-top:80px;
    /*border:2px solid black;*/
    border-collapse: collapse;
    background-color:rgba(0,0,0,0.9);
    width:400px;
    height:auto;
    margin-left:400px;
    }
  td{
    text-align:center;
    padding:5px;
    margin:10px;
    color:white;
    
}
.btn{
    border:1px solid black;
    border-radius:5px;
    margin-left:150px;
    text-align:center;
    font-size:20px;
}

.bus{
    margin-top: 30px;
    margin-left:30px;
    margin-bottom: 10px;
}


.menubar
{   padding:15px;
    background-color:purple;
    text-align:center;
}
.menubar ul
{
    list-style:none;
    display:inline-flex;
}
.menubar ul li a
{
    color:white;
    text-decoration:none;
}
.submenu
{
    display:none;
}
.menubar ul li
{
    padding:15px;
}
.menubar ul li:hover
{
    background-color:#ff0000;
    border-radius:10px;
}

h1{ 
	position:absolute;
	font-size:40;
	color:red;
	margin-top:30px;
	margin-left:500px;
	text-align: center;
}
</style>


</style>
</head>
<body>
<nav class="menubar">
    <ul>
        <li><a href="<?php echo base_url()?>main/sms_view">Home</a></li>
        

                <li><a href="<?php echo base_url()?>main/login">Login</a></li>
            </div>
        </li>
    </ul>
</nav>
<h1>Add Bus Details</h1>
<div class="bus">
    <form action="<?php echo base_url()?>main/addbus" method="post">
<table>
<tr>
<td>Bus no</td>
<td><input type="text" name="bno"placeholder="bus number"></td></tr>
<tr><td>Bus Name</td><td><input type="text" name="bname"placeholder="bus name"></td></tr>
<tr><td>Starting Place</td><td><input type="text" name="splace"placeholder="starting place"></td></tr>
<tr><td>Destination</td><td><input type="text" name="destination" placeholder="destination"></td></tr>
<tr><td>Starting Time</td><td><input type="text" name="stime"placeholder="Starting Time"></td></tr>
<tr><td>Reaching Time</td><td><input type="text" name="rtime"placeholder="reaching time"></td></tr>
<tr><td>Stops </td><td><input type="text" name="stops"placeholder="stops"></td></tr>
<tr><td>Seat Availability </td><td><input type="text" name="savail"placeholder="seat availability"></td></tr>
<tr><td>Date </td><td><input type="date" name="date"placeholder="Date"></td></tr>
<tr><td><input  type="submit" value="ADD" name="submit"></td></tr>
</table>
</div>
</form>
</body>
</html>
