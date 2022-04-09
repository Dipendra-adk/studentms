<?php 
  include('connect.php');
  if(isset($_POST['LOGIN'])){
      $email = $_POST['Email'];
      $password = $_POST['Password'];

      $query="SELECT * FROM `admin` WHERE  Email='$email'&& Password='$password'";
      $result=mysqli_query($conn,$query);
     if($row=(mysqli_num_rows($result)==1)){
          echo"Login SuccessFully";
          session_start();
          $_SESSION['Email']=$email;
          header('location:../db/slider.php');
      }
      else{
          echo"<script>alert('LOGIN FAILED')</script>";
      }
    }
  

?>