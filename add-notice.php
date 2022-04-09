<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
      textarea{
          border-radius:5px;
      }
      .container{
          justify-content:center;
      }
  </style>
</head>
<body>
    <section id="notice">
        <div class="container">
            <div class="row">
                <form action="include/add-notice.php" method="POST">
                <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Notice Title<span style="color:red">* :</span></label>
              <input type="text" class="form-control" id="inputEmail4" name="Notice_Title" required="true" placeholder="Notice Title">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Notice<span style="color:red">*:</span></label>
              <br>
             <textarea name="Notice" cols="85" rows="10" class="Notice" placeholder="Enter Notice" required="true"></textarea>
            </div> 
             <input type="button" name="submit" value="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </section>
</body>
</html>