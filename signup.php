 <?php
 include('connect_db.php');
 if(isset($_POST['SUBMIT'])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $username=$_POST['username'];
    $password=MD5($_POST['password']);
     
    $sql="INSERT INTO users(fname,lname,username,password) VALUES ('$fname','$lname','$username','$password')";
    $qry=mysqli_query($con, $sql);


        if(!$qry){
            echo '<script> alert("Reccord not Added");</script>';
        }else{
            echo "<script> alert('Account created Successfully');</script>";
            echo "<script type='text/javascript'>document.location='index.php';</script>";
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
<font style=" font:bold 44px 'Aleo'; text-shadow:1px 1px 15px #000; color:#fff;"><center>Zalego Sign Up</center></font>
		
    <div id="login">
    <form action=" " method="post">
    <div class="form-group">
    </div><br>
    <div class="form-group">
      
      
      <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" aria-describedby="helpId" required>
     
    </div><br>
    <div class="form-group">
     
     
      <input type="text" class="form-control" name="lname" id="lname" aria-describedby="HelpId" placeholder="Last Name" required>
      
    </div><br>
    <div class="form-group">
     
      <input type="email" class="form-control" name="username" id="username" aria-describedby="emailHelpId" placeholder="username">
      
    </div><br>
   
    <div class="form-group">
     
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div><br>
   
   <button type="submit" name="SUBMIT" Value="SUBMIT" class="btn btn-light">Sign Up</button>
   <a href="index.php" class="badge badge-info">Login here</a>
    </form>
    
    
    
    </div>
</div>
    
</body>
</html>