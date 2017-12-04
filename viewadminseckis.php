<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
                <!--    <li><a href="price.html">Price</a></li>
                    <li><a href="videos.html">Videos</a></li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="primary.php">Primary</a></li>
                            <li><a href="secondary.php">Secondary</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact us</a></li>

                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
    <table width="80%" border="1">
    <tr>
        
    <th colspan="4"><h2><b>Kiswahili for Secondary resources</b></h2></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>Price</td>
    <td>Download file</td>
    </tr>
    <?php
    $sql="SELECT * FROM uploadseckis";
    $result_set=mysql_query($sql);
    while($row=mysql_fetch_array($result_set))
    {
        ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><a href="uploadseckis/<?php echo $row['file'] ?>" download>download file</a></td>
        <td><a href="uploadseckis/<?php echo $row['file'] ?>" delete>delete file</a></td>
        </tr>
        <?php
    }
    ?>
    </table>
    
</div>
</body>
</html>