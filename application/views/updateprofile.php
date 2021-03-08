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
  <li><a href="<?php echo base_url()?>main/userhome"> HOME </a> </li>
  
 
</nav>

  <center> <table>
      <thead>
       <h1> Update Profile </h1>
      </thead>
      <tbody>
      

    <center><form method="post" action="<?php echo base_url()?>main/update">
        <?php 
    if(isset($user_data)) 
    {
      foreach($user_data->result() as $row1)
      {
      ?>
      <tr>
      <td>FIRST NAME:</td><td><input type="text" name="name" placeholder="Enter your name" value="<?php echo $row1->name;?>"></td></tr>
  <tr>
    <td>
   ADDRESS :</td><td><textarea name="add" placeholder="Enter your address"><?php echo $row1->address;?></textarea></td>
</tr>
<tr><td>
  AGE:</td><td><input type="age" name="age" placeholder="Enter your age" value="<?php echo $row1->age;?>"></td></tr>
  <tr><td>
  GENDER:</td><td><select name="gen">
              <option><?php echo $row1->gender;?></option>
              <option>Male</option>
              <option>Female</option>
            </select> </td></tr>
<tr><td>
      DISTRICT</td><td> 
             <select name="dis">
              <option><?php echo $row1->district;?></option>
              <option> TRIVANDRUM</option>
              <option>KOLLAM</option>
              <option>ALAPUZHA</option>
              <option>KOTTAYAM</option>
              <option>ERANAKULAM</option></select></td></tr>
<tr><td>
  PHONE NO:</td><td><input type="text" name="phno" placeholder="Enter your phoneno" value="<?php echo $row1->phno;?>"></td></tr>


  <tr><td>EMAIL: </td><td> <input type="email" name="mail" placeholder="Enter your email" value="<?php echo $row1->email;?>"></td></tr><br>
      
      <tr><td></td><td><input type="submit" name="update" value="submit"></td></tr><br>


  </form>
  </tbody>
</body>
</table>
<?php
          }
        } 
        ?>

  </html>


