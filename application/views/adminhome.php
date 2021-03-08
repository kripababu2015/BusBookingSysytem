<!DOCTYPE html>
<html>
<head>
<title> First Site </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
  padding:0px;
  margin:0px;
}
.bi{
  background-image:url(../img/bus.jpg);
  background-size:cover;

  }
.menubar{
    background-color: #B22222;/*rgba(178,34,34,0.7)*/
    text-align:center;
    height:60px;
}
.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:10px;
}
.menubar ul li a{
      color:white;
      text-decoration:none;
      padding:10px; 
      font-size:19px;
      font-stretch:expanded; 
      font-weight:bold;
      font-family: "Times New Roman", Times, serif;
      }
.menubar ul li{
       padding:10px; 
}
a:hover{
      background-color:grey;
      border-radius:10px;
}
.submenu{
      display:none;  
}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:#B22222;
         color:white;
         margin-left:5px;
         margin-top:5px;
         padding:5px;
}
.submenu ul{
           display:block;
}
.submenu ul li{
             
             border-radius:10px; 
}
      

.bgcolor
{
  color:#B22222;
}
.navbar-brand img
{
  height: 70px;
  padding-left: 20px;
}

 </style>   

</head>
<body class="bi">
<!--nav started--->
<nav class="menubar navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../img/log.png"></a>
 <ul>
  <li><a href="<?php echo base_url()?>main/adhome">HOME </a> </li>
  <li><a href="<?php echo base_url()?>main/viewbooking">PASSENGERS LIST </a> </li>
  <li><a href="#"> NOTIFICATION </a> 
   <div class="submenu">
    <ul>
     <li>
      <a href="<?php echo base_url()?>main/busname">ADD</a>
     </li>
     <li>
   <a href="<?php echo base_url()?>main/notiadmin">VIEW</a>
  </li>
  </ul>
  </div>
  <li> 
    <a href="#">BUS DETAILS</a>
    <div class="submenu">
      <ul>
        <li> <a href="addbusdetails">ADD</a></li>
        <li> <a href="viewbusdetails">VIEW</a></li>
      </ul>
    </div>
 </li>
   <li><a href="upload"> UPLOAD INSTRUCTIONS</a></li> 
   <li><a href="index">LOGOUT</a></li> 
 </ul>
</nav>
<div class="row">
  <div class="col-9">
   </div>

   <div class="col-3 py-5">

     <marquee width="40%" direction="down" height="300px" vspace="30%">
          <p class="text-justify "><h5 class="bgcolor">Today's bus details.....</h5><p>        
</marquee>  
 </div>
  </div> 
</body>
</html>