
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>free-educational-responsive-web-template-webEdu</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
  <link href="#SSS" rel="stylesheet" type="text/css" />
     <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
     <link href="font/css/font-awesome.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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
          <li><a href="subscribe.php">Subscribe</a></li>
          <li><a href="contact.php">Contact us</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p>Your feedback is very important to us, Thank you!</p>
                </div>
    </header>


	<!-- container -->
<section>
    <div class="container">
      <div class="col-md-12">
        <div class="col-md-8 col-md-offset-2">
                      <?php if (isset($messo)){ echo $messo;} ?>
          <form method="post" id="register-form">
            <div class="col-md-8 col-md-offset-2 form-group">
              <label>Name:</label>
              <input type="text" class="form-control login-field" name="full_name" placeholder="Enter your Name" id="login-name" required />
              <span class="help-block " id="error"></span>
            </div>
            <div class="col-md-8 col-md-offset-2 form-group">
              <label>Email:</label>
              <input type="email" class="form-control login-field" name="email" placeholder="Enter your Email" id="login-email" required />
              <span class="help-block " id="error"></span>
            </div>
        
               <div class="col-md-8 col-md-offset-2 form-group">
              <label>Message:</label>
              <textarea rows="4" cols="70" class="form-control" name="description" placeholder="Enter Your Message here..." required/> 
                 </textarea>
              <span class="help-block " id="error"></span>
            </div>
            <div class="col-md-8 col-md-offset-2 form-group">
              <input type="submit" class="col-md-8 col-md-offset-2 btn btn-primary btn-small" name="btn-register" value="send Message" />
            </div>
            
          </form>
           <?php
	if(isset($_GET['success']))
	{
		?>
        <label>message sent...</label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While sending message !</label>
        <?php
	}
		?>

          
        </div>
      </div>
    </div>
  </section>
          
					</div>
					<div class="col-md-4">
						<div class="row">
							
						</div> 	
        				
					</div>
				</div>
			</div>
	<!-- /container -->

	 <footer id="footer">
 
    <div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-4 col-sm-6">
      <div class="footerwidget">
        <h4>
          payment procedure
        </h4>
        <div class="menu-course">
            <img src="assets/images/m-pesa.jpg" alt="" class="img-rounded pull-left" width="80">
         You pay through M-Pesa, First, you download the file you need, Pay the price of the file to 0714264331 to get the password to the file after confrimation of the payment, it's as simple as that
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="footerwidget">
        <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="primary.php">
                Primary resources
              </a>
            </li>
            <li> <a href="secondary.php">
                Secondary Resources
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6"> 
              <div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Our contact services works 24/7 for convinience of our customers</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> 3900-00100, Eldoret<br>
            <i class="fa fa-phone"></i>0714 264 331 <br>
             <i class="fa fa-envelope-o"></i> otienobedah@gmail.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
      <div class="social text-center">
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-flickr"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>
      </div>

      <div class="clear"></div>
      <!--CLEAR FLOATS-->
    </div>
    <div class="footer2">
      <div class="container">
        <div class="row">

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="simplenav">
                <a href="index.html">Home</a> | 
                <a href="about.html">About</a> |
                <a href="contact.php">Contact</a>
              </p>
            </div>
          </div>

          <div class="col-md-6 panel">
            <div class="panel-body">
              <p class="text-right">
                Copyright &copy; 2017. <a href="index.html" rel="develop">Education Care</a>
              </p>
            </div>
          </div>

        </div>
        <!-- /row of panels -->
      </div>
    </div>
  </footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/js/bootstrap.bundle.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assests/js/contact_me.js"></script>
    <script src="assets/js/clean-blog.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery2.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="js/main.js"></script> -->
    <script src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/register.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>



</body>
</html>
