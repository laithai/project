<!DOCTYPE html>
<html lang="en">
<head>
	<title>ระบบแคทตาล็อคสินค้า</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Magnetic is a stunning responsive HTML5/CSS3 photography/portfolio website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/reset.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main.css");?>">
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js");?>"> </script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/main.js");?>"></script>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 60%;
      margin: auto;
	  padding: auto;
  }
  </style>
<body>

	<header>
		<div class="logo">
			
		</div><!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
	

		<form class="form-horizotal"method="post" action=" <?php echo base_url("index.php/checkLogin");?>">

		<div class="form-group">
				<li><a><label for="inputemail" class="com-sm-2 control-label">Username</label></a></li>
                <li><a> <input type="text" name="username" id="email" class="form-control " placeholder="username"></a></li>
				</div>
				<div class="form-group">
				<li><a><label for="inputpassword" class="com-sm-2 control-label">Password</label></a></li>
                <li><a><input type="password" name="password" id="password" class="form-control " placeholder="Password"></a></li>
				</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <li><a><input type="submit" class="btn  btn-success btn-block" value="Sign In"></a></li>
						
					</div>
			 <?php echo $error; ?>
		
		</form></a></li>
			

			
			
			</ul>
		</nav><!-- end navigation menu -->

		<div class="footer clearfix">
			<ul class="social clearfix">
				<li><a href="https://www.facebook.com/femz.chillz" class="fb" data-title="Facebook"></a></li>
				<li><a href="#" class="google" data-title="Google +"></a></li>
				<li><a href="#" class="behance" data-title="Behance"></a></li>
				<!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
				<li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
				<li><a href="#" class="rss" data-title="RSS"></a></li>
			</ul><!-- end social -->

			<div class="rights">
				<p>Copyright photo © 2015 ลายไท.</p>
				<p>Template by <a href="">Pixelhint.com</a></p>
			</div><!-- end rights -->
		</div ><!-- end footer -->
	</header><!-- end header -->

	<section class="main clearfix">
		
<table class="table">
		<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    
</head>
<body>    
           <span id="date_time" style="color: #000000; font-size: x-large;"></span>
            <script type="text/javascript"> window.onload = date_time('date_time');</script>
  
 
</body>
</html>
{blog_entries}

<div class="table-responsive">

		<div class="work col-sm-12 col-md-4 col-lg-4">
			<a href="<?php echo base_url('index.php/template/find?id={id}');?>">
		


 <tr>
              <td>{product_id}</td>
			  <td>{product_name}</td>
			  <td>{product_amt}</td>
			  <td>{product_member}</td>
			   <td>{insure}</td>
			
     </tr>


 
</div>
				
			</a>
		</div>

{/blog_entries}
	 </table>
	</section><!-- end main -->
	
</body>
</html>

