<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
    <style>
       .container{
           margin-top:20px;
       }
       label{
        font-family: sans-serif;
        font-size:20px;
        color:#52575D;
       }
       body{
         background-color:#F0FFF3;
       }
    </style>
  </head>
  <body>


    <div class="container">
        <form class="row g-3" action="include/add-student.php" method="post">
            <h4>Enter Student Details:</h4>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Enter Student Name <span style="color:red">* :</span></label>
              <input type="text" class="form-control" id="inputEmail4" name="StudentName" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Enter Student Email<span style="color:red">*:</span></label>
              <input type="email" class="form-control" id="inputPassword4" name="StudentEmail">
            </div> 
            <div class="col-12">
              <label for="inputAddress" class="form-label"> Enter permanent Address <span style="color:red">* :</span></label>
              <input type="text" class="form-control" id="inputAddress" name="StudentPermanentAddress">
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Enter Temprory <span style="color:red">*:</span></label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="StudentTemporaryAddress">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">Enter Class</label> <span style="color:red">*:</span></label>
              <select id="inputState"  name="StudentClass"class="form-select">
                <option selected>Choose...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Contact Number: <span style="color:red">*</span></label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Enter contact" name="StudentContactNumber">
         
            </div>
            <div class="col-4">
                <label for="inputState" class="form-label">Enter DOB: <span style="color:red">*</span></label>
                <input type="date" class="form-control" id="inputAddress2" placeholder="Enter contact" name="DOB">
              
            
            </div>
            <div class="col-4">
                <label for="inputState" class="form-label">Slect Gender: <span style="color:red">*</span></label>
                <select id="inputState" class="form-select"name="Gender">
                    <option >Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
            
            </div>
            <h4>Parents/Guardian's Details</h4>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Enter's Father Name <span style="color:red">* :</span></label>
                <input type="text" class="form-control" id="inputEmail4" name="FatherName">
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Enter Mother Name<span style="color:red">*:</span></label>
                <input type="text" class="form-control" id="inputPassword4" name="MotherName">
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Enter Contact</label> <span style="color:red">*:</span></label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Enter contact" name="ContactNumber">
                  
              </div>
              <div class="col-md-4">
                <label for="inputState" class="form-label">Enter Address: <span style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="parent Address" name="PrentsAddress">
           
              </div>

              <h4>LOGIN DETAILS:</h4>
              <div class="col-12">
                <label for="inputAddress" class="form-label"> Enter User Name <span style="color:red">* :</span></label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="UserName">
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Enter password <span style="color:red">*:</span></label>
                <input type="password" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="Password">
              </div>
            <div class="col-12">
              <button type="submit" value="submit" name="submit"class="btn btn-primary">Add Student</button>
            </div>
           <?php  include('db/message.php');?>

          </form>
    
    
    </div>





    <!-- **************************************
    ************************************************************************ -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>