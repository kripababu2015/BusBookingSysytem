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
     background-color:rgba(178,34,34,0.7);
      text-align:center;
      height:60px;
}

.menubar ul{
    list-style:none;
    display:inline-flex;
    padding:5px;
}
.menubar ul li a{
      color:white;
      text-decoration:none;
      padding:10px;
      font-size:18px;
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
     border-radius:10px; 

}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:#B22222;
         color:white;
         margin-left:-25px;
         padding:10px;
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
  height: 50px;
  padding-left:30px;
}
#nav-bar
{
  position: sticky;
  top: 0;
  z-index: 10;
}

 </style>

</head>
<body class="bi">
<!--nav started--->
<nav class="menubar navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../img/log.png"></a>
         <ul>
          <li><a href="uhome">HOME </a> </li>
          <li><a href="bookingview">BUS DETAILS</a> </li>
          <li><a href="usernoti"> NOTIFICATIONS </a></li> 
          
          <li> 
            <a href="#"> PROFILE</a>
            <div class="submenu">
              <ul>
                <li> <a href="viewprofile">UPDATE PROFILE</a></li>
              </ul>
            </div>
         </li>
         <li><a href="pdf">INSTRUCTIONS</a></li>
        <li><a href="index">LOGOUT</a></li> 
         </ul>
    </div>
</nav>

<div class="row">
  <div class="col-10">
   </div>

   <div class="col-2 py-5">

     <marquee width="40%" direction="down" height="500px" vspace="30%">
            <p class="text-justify "><h5 class="bgcolor">Today's bus details.....</h5><p>        
</marquee>  
 </div>
  </div> 
   

    
</body>
</html>