
<!DOCTYPE html>
<html >
<head>
  <title> </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!--<link rel="stylesheet" type="text/css" href="bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
  
</head>
<body >

<div class="container " >
   <div class="row">
      <div class="col-lg-6">
        <h1> Login Form </h1>
        <form action="validation.php" method="post">
            <hr>
            <div class="form-group">
              <label> username </label>
              <input type="text" name="user" class="form-control">
            </div>

            <div class="form-group">
              <label> Password </label>
              <input type="Password" name="password" class="form-control">
            </div>
            
            <button type="Submit" class="btn btn-primary"><h4> Login </h4></button>
        </form>
      </div>      
   


      <div class="col-lg-6">
        <h1> Registration Form </h1>
        <form action="registration.php" method="post">
            <hr>
            <div class="form-group">
              <label> username </label>
              <input type="text" name="user" class="form-control">
            </div>

            <div class="form-group">
              <label> Password </label>
              <input type="Password" name="password" class="form-control">
            </div>
            
            <button type="Submit" class="btn btn-primary"><h4> Submit </h4></button>
        </form>
      </div>   

  
  </div>
</div>


</body>

<style type="text/css">
  
  body {
    background-color: #fff454 ;
  }
  .container {
    background-color: #76a6f5 ;
    background-size: cover;
    padding: 5%;
    margin: 5%;   
  }
  .row {
    background-color: #ffa8fe ;
    padding: 4.5%;  
  }
  .col-lg-6 {
    background-color: #7cfa6b;
    padding: 3%;
  }
  h1 {
    font-size: 250%;
  }
  label {
    font-size: 150%;
  }
  button {
    width: auto;
    height: auto;
  }
  
</style>


</html>
