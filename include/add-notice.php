<?php
include('connect.php');
if(isset($_POST['submit'])){
    $Title=$_POST['Notice_Title'];
    $Notice=$_POST['Notice'];

    $query="INSERT * INTO noticetable(Notice_Title,Notice)VALUES('$Title','$Notice')";
    if(mysqli_query($conn,$query)){
        // echo"<script>alert('Notice Added Successfully')</sceipt>";
    }
    else{
        echo"<script>alet('Update Failed')</script>";
    }
}

?>