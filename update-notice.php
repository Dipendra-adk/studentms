<?php
session_start();
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:home.php');
 }
 $id = $_SESSION['users_id']; 
 include('include/connect.php');
$query = "SELECT * FROM noticetable WHERE id='$id'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);

$Query="SELECT * FROM noticetable";
$Result= mysqli_query($conn,$Query);


?>
<!DOCTYPE html>
<html>
  <head>
      <title>Student Management</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>
<?php include('include/nav.php');?>    
 
<div class="container">
   <div class="row">
      <?php include('include/nav.php');?>
    <div class="col-8">
          <form method="POST" action="add-notice.php" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="" class="form-label">Notice Title</label>
              <input type="text" value="<?php echo $post['title'];?>" class="form-control" name="title">
            </div>

             <div class="mb-3">
                 <label for="" class="form-label">Notice</label>
                 <textarea id="news" class="form-control" name="content"></textarea>
             </div>

             <div class= "mb-3">
               <label for="" class="form-label"> Notice </label>
               <select class="form-control" name="add-notice">
                    <?php while($row=mysqli_fetch_assoc($Result)){ ?>
                              <option value="<?php echo $row['id'];?>" <?php if($post['id']==$row['id']){echo "selected";}?> >
                                <?php echo $row['title']; ?></option>
                    <?php } ?>
               </select>
             </div>
             <hr>
             <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
          <br/>
          <?php include('db/message.php'); ?>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/3zwwm21up91he2r5xahpbs9a92sx2zw8r9qsa2qtft266g4a/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


</body>
</html>