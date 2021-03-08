<html>
  <head>
    <title>
      This is a demo page
     </title>
     <style>

  *{
  padding:0px;
  margin:0px;
  }

      body
      {
       color:red;
      }
      
      table{
        color:white;
        padding:50px;
        width:500px;
        height:500px;
        text-align:center;
        background:rgba(0,0,0,0.3);


      }
       body form
      {
      background-color:grey; 
      }
   
.bi{
  background-image:url(../img/bus.jpg);
  background-size:cover;
  }
.menubar{
    background-color:black;
    text-align:center;
    width:100%;
    height:10%;

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
}
.menubar ul li{
       padding:10px; 
}
a:hover{
      background-color:red;
      border-radius:10px;
}
.submenu{
      display:none;  
}
.menubar ul li:hover .submenu{
       
         display:block;
         position:absolute;
         background-color:black;
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

.rows{
  display:flex;
  text-align:justify;
  
}
.rows h2{
  color:white;
  text-decoration:underline;
  text-align:center;
}
      
.col{
  background:rgba(0,0,0,0.4);
  width:450px;
  height:300px;
  padding:15px;
  color:white;
  margin:20px;
  
}
.ft{
   color:white;
   background:black;
   padding:20px;
   text-align:center;
   
}

  
      
      
     </style>
  </head>
  <body class="bi">
<!--nav started--->
<nav class="menubar">
 <ul>
  <li><a href="<?php echo base_url()?>main/index"> HOME </a> </li>
 </ul>
</nav>

  <center> <table>
      <thead>
       <h1> REGISTER HERE </h1>
      </thead>
      <tbody>
      

    <center><form method="post" action="<?php echo base_url()?>main/regist">

      <tr>
      <td>FIRST NAME:</td><td><input type="text" name="name" placeholder="Enter your   name"></td></tr>
  <tr>
    <td>
   ADDRESS :</td><td><textarea name="add" placeholder="Enter your address"></textarea></td>
</tr>
<tr><td>
  AGE:</td><td><input type="age" name="age" placeholder="Enter your  age"></td></tr>
  <tr><td>
  GENDER:</td><td><input type="radio" name="gen" value="female">FEMALE
  <input type="radio" name="gen" value="male">MALE</td></tr>
<tr><td>
      DISTRICT</td><td> 
             <select name="dis"><option> TRIVANDRUM</option>
              <option>KOLLAM</option>
              <option>ALAPUZHA</option>
              <option>KOTTAYAM</option>
              <option>ERANAKULAM</option></select></td></tr>
<tr><td>
  PHONE NO:</td><td><input type="text" name="phno" placeholder="Enter your phoneno"></td></tr>


  <tr><td>EMAIL: </td><td> <input type="email" name="mail" placeholder="Enter your email"></td></tr><br>
      <tr><td>Password:</td><td> <input type="password" name="pass" placeholder="Enter your password"></td></tr><br>
      <tr><td></td><td><input type="submit" name="sub" value="submit"></td></tr><br>


  </form>
  </tbody>
</body>
</table>

  </html>


