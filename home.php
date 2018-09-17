<?php
	//Start session
	session_start();
	include('connect_db.php');
	
	if(strlen($_SESSION['alogin']) == 0){
		header("location: index.php");
	
	}else{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zalego</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
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
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
					<a class="brand" href="#"><b>Zalego</b></a>
					<div class="nav-collapse collapse">
					<ul class="nav pull-right">
					<li><a><i class="icon-user icon-large"></i> Welcome:<strong> <?php  
							
							
							
							// Store Session Data
							$_SESSION['alogin']= $email;  // Initializing Session with value of PHP Variable
							echo $_SESSION['alogin'];
							
							
								?></strong></a></li>
					<li><a > <i class="icon-calendar icon-large "></i>
								<?php
								$Today = date('y:m:d',mktime());
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>

				</a></li>
<li><a  href="logout.php"><font color="red"><i class="icon-off icon-large float "></i></font> Log Out</a></li>
</ul>
</div></div>




</div>

</div>
<div class="banner" id="home">
	<div class="agileinfo-dot">
		<div class="container">
		<div class="span13" length="90%">
	<div class="contentheader">
			<i class="icon-dashboard"></i> ZALEGO
			</div>
			<ul class="breadcrumb">
			<li class="active">Zalego</li>
			</ul>
<div id="mainmain"> 
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th width="17%"> First Name </th>
			<th width="10%"> Last Name </th>
			<th width="10%"> Username</th>
			
           
		</tr>
	</thead>
	<tbody>
		
			<?php
				include('connect_dbh.php');
				$result = $db->prepare("SELECT * FROM users ORDER BY user_id DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
			<td><?php echo $row['username']; ?></td>
		
		
			</tr>
			<?php
				}
			?>
		
	</tbody>
</table>

</body>
</html>
		<?php } ?>