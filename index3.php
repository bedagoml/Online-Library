<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>How to use jQuery Bootstrap DataTables</title>
<link rel="stylesheet" type="text/css" href="datatables.min.css"/>
<style>
td
{
	font-family:Verdana, Geneva, sans-serif;
}
</style>
</head>
   
<body>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.codingcage.com/" target="_blank" title="Coding Cage Programming Blog">Coding Cage</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.codingcage.com/2015/10/how-to-use-jquery-bootstrap-datatables.html" target="_blank">Tutorial Link</a></li>
            <li><a href="http://www.codingcage.com/p/about.html" target="_blank">About</a></li>
            <li><a href="http://www.codingcage.com/p/contact-me.html" target="_blank">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Tutorials <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.codingcage.com/search/label/jQuery" target="_blank">jQuery</a></li>
                <li><a href="http://www.codingcage.com/search/label/Ajax" target="_blank">Ajax</a></li>
                <li><a href="#">MySQLI</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">PHP</li>
                <li><a href="http://www.codingcage.com/search/label/PHP OOP" target="_blank">PHP OOP</a></li>
                <li><a href="http://www.codingcage.com/search/label/PDO" target="_blank">PHP PDO</a></li>
              </ul>
            </li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
</nav>
    
    <br />
                                
   <div class="container">
   <table id="example"></table>
   </div>                             
               
         
<script type="text/javascript" src="datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() 
{
	$('#example').dataTable( {
        "aaData": 
 
  [
   <?php
  $sql="SELECT * FROM tbl_uploadseng";
  $result_set=mysql_query($sql);
  while($row=mysql_fetch_array($result_set))
  {
    ?>
    <?php
  }
  ?>
        

         ["<?php echo $row['file'] ?>","<?php echo $row['file'] ?>","<?php echo $row['file'] ?>","<?php echo $row['file'] ?>"] 
		 //  ["jQuery Tutorials","http://www.codingcage.com/search/label/jQuery"," n n","b  hhh"],
		 //   ["PHP MySQLi Tutorials","http://www.codingcage.com/search/label/MySQLi","tvgv","hbvg"],
			// ["HTML5 Tutorials","http://www.codingcage.com/search/label/HTML5","vgv","cgcggh"],
			// ["Pagination Tutorials","http://www.codingcage.com/search/label/Pagination","gfcfch","cgcgvg"],
			// ["PHP MySQLi Tutorials","http://www.codingcage.com/search/label/MySQLi","vfvgvg","gvghv"],
			//  ["HTML5 Tutorials","http://www.codingcage.com/search/label/HTML5","fcvg","drftft"]
		],
        "columns": [
            { "title": "file" },
            { "title": "file" },
            { "title": "file" },
            { "title": "file" }
            
        ]
    });   
});
</script>
        
<script type="text/javascript">
	 $('#example')
	.addClass('table table-bordered table-striped');
</script>


</body>
</html>