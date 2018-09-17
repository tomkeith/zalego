<?php
session_start();
include('connect_db.php');
if(isset($_POST['submit'])){

     $username=$_POST['username'];
     $password=MD5($_POST['password']);

    $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($con, $sql);

    $count =mysqli_num_rows($result);

    if($count == 1){
        $_SESSION['alogin'] = $_POST['username'];
            echo "<script type='text/javascript'>document.location='home.php';</script>";
          
    }else{
        echo "<script> alert('Wrong Username and Password');</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zalego</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">

<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row-fluid">
<div class="span4"></div>

</div>
    <div id="login">
    <form action=" " method="post">
    <div class="form-group">
      <label for="email">Username:</label>
      <span style="height:30px; width:25px;" class="add-on"><i class="icon-user icon-2x"></i></span> <input type="email" name="username" id="username" class="form-control" placeholder="username" required>
    </div>
    <div class="form-group">
      <label for="password">password</label>
      <span style="height:30px; width:25px;" class="add-on"><i class="icon-lock icon-2x"></i></span><input type="password" class="form-control" name="password" id="password" class="form-control" placeholder="password" required>
    </div><br>
    <input name="submit" id="submit" class="btn btn-success" type="submit" value="submit">
    <a href="signup.php" class="badge badge-info">Sign Up here</a>
    
    </form>
    
    </div>
</div>   
    
</body>
</html>