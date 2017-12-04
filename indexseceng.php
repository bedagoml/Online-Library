<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="upload/style.css" type="text/css" />
<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/edu.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="admin.php">Administrator</a></li>
				<!-- 	<li><a href="price.html">Price</a></li>
					<li><a href="videos.html">Videos</a></li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="primary.php">Primary</a></li>
							<li><a href="secondary.php">Secondary</a></li>
							
						</ul>
					</li>
					<li><a href="contact.html">Contact us</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
<div id="header">
<h4 align="center"><b>Upload English for Secondary learning resources here</b></h4>
</div>
<div align="center">
<div id="body">
	<form action="uploadseceng.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<?php if (isset($message)){ echo $message;} ?>
					<form method="post">
						<div align="center" class="col-md-3 col-md-offset-4 form-group">
							<!-- <label>File price</label> --> <br><br><br>
							<input type="text" class="form-control login-field" name="price" placeholder="Enter price of the file"required />
							<span class="help-block " id="error"></span>
							<button type="submit" name="btn-upload">upload</button><br><br><br>
							<a href="viewadminseceng.php">click here to view already uploades files.</a>
						</div>

	
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="viewadminseceng.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>upload pdf files for security purposes</label>
        <?php
	}
	?>
</form>
</div>
</div>
</body>
</html>