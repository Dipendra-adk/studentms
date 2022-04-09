<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body{
    background-image: url('background.jpg');
    font-family: Arial, Helvetica, sans-serif;
    background-color:#1D566E;
  }
  .sidenav
  {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: black;
    overflow-x: hidden;
    transition: 1s;
    padding-top: 60px;
  }
  i{
    padding: 0px 5px;
    color: #1263ce;
  }
  .sidenav a{
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 19px;
    color: #818181;
    display: block;
    transition: 0.4s;
  }
  .sidenav a:hover{
    background-color: rgb(23,64,199);
  }
  .sidenav a:hover i{
    transition: 1s;
  }
  .sidenav .closebtn{
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 35px;
    margin-left: 50px;
  }
  .sidenav .closebtn:hover{
    background-color: black;
  }
  @media screen and (max-width: 460px){
    .sidenav{padding-top: 15px;}
    .sidenav a{font-size: 18px;}
  }
</style>
</head>
<body>
  <div class="sidenav" id=mySidenav>
    <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">
      &times;
    </a>
    <a href="#"><i class="fa fa-home"></i>Home</a>
    <a href="#"><i class="fa fa-cog"></i>Service</a>
    <a href="add-student.php"><i class="fa fa-user"></i>Registration</a>
    <a href=""><i class="fa fa-user"></i>About</a>
    <a href="#"><i class="fa fa-address-book"></i>Contact</a>
    <a href="#"><i class="fa fa-image"></i>Gallery</a>
    <a href="Admin-logout.php"><i class="fa fa-lock"></i>Logout</a>
  </div>
  <span style="font-size: 30px;cursor: pointer;margin-top: 20px;" id="name" onclick="openNav()">
    &#9776;
  </span>
  <script>
     function openNav()
     {
       document.getElementById("mySidenav").style.width="250px";
       document.getElementById("name").style.marginLeft="250px";
       document.getElementById("name").style.transition="1.5s";
     }
     function  closeNav()
     {
      document.getElementById("mySidenav").style.width="0";
      document.getElementById("name").style.marginLeft="0";
     }
    </script>
</body>
</html>