<!doctype html>
<html>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </head>

   <body >

     <div class = "container-fluid" >
       <div class ="bg"> </div>
     <h1> <center> Login Page </center></h1>

   <form method="POST" action="checklogin.php"><center>
     <div class="form-group">
      <label for="usr"> Username: </label>
      <input type="myusername" class="form-control" id="usr" placeholder="Enter username">
    </div><br>
    <div class="form-group">
      <label for="pwd">Password: </label>
      <input type="mypassword" class="form-control" id="pwd" placeholder="Enter password">
    </div>
     <input type="submit" class="btn btn-info" value="Login">
   <center></form>
    </div>
   </body>
</html>
