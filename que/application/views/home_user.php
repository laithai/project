<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<title>user_view</title>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<style>
	#intro
	{
	
		background-color:#FFFFFF;
	}
#photo
{
		margin-top:100px;
		text-align: center;
		font-size:15px;
		color:#333333;
		
		font-family:"Montserrat";
	}
		#intro-content1
	{
		margin-top:45px;
		text-align: center;
	}
	.bg-yellow
	{
		background-color: #646464;
		height: 50px;
		width:300px;
		color: #FFFFFF;
		text-align: center;
		font-size: 20px;
		margin-top:25px;
	}
		#intro-content1
	{
		margin-top:80px;
		text-align: center;
	}
		#b-logo
	{
		font-size: 20px;
			margin-top: 80px;
			color: #FCD209;
			border: 1px solid #FCD209;
			border-radius: .25em;
			width: 143px;
			margin:0 auto;
	}
		#name
	{
		font-size: 20px;
			margin-top: 25px;
			color: #FCD209;
			border: 1px solid #FCD209;
			border-radius: .25em;
			width: 500px;
			margin:0 auto;
	}
		#status
	{
		background-color: green;
		font-size: 20px;
			margin-top: 80px;
			color: #FFFFFF;
			border: 1px solid #22B14C;
			border-radius: .25em;
			width: 500px;
			margin:0 auto;
	}
</style>
<body background="" >

<br>
<nav class="navbar-fixed-top navbar-default">
 <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class=""><img width="100" height="50" src="<?php echo base_url(); ?>image/logo.gif"></a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
 
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="/asia/index.php">HOME</a></li>
		<li><a href="/asia/index.php/addroom/rent">STATUS ROOM</a></li>
        <li><a href="/asia/index.php/addroom/test">RESERVE</a></li>
        <li><a href="<?php echo base_url();?>index.php/home/logout">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>  

<div id="intro" class="col-xs-12 col-lg-12 col-md-12">
		
	

		<div id="intro-content1" class="col-xs-12 col-lg-12 col-md-12">

		
				<div id="b-logo">
				ยินดีต้อนรับ
				</div>
				
				<div id="intro-content1"class="col-xs-12 col-lg-12 col-md-12">

		
				<div id="name">
			<font color="red">NAME:: </font>   <?php echo $loginData['membername'];	?> 	<font color="red"> LASTNAME::</font><?php echo $loginData['memberlastname'];	?>
				</div>

			
				<div id="status">
				<?php echo $loginData['status'];	?>
				</div>
			
	
</div>	
	
</div>	
		
        
								 
            
           
          </div>
        

	

<center><a href="/asia/index.php/regisname/update"><font color="red">เปลี่ยนรหัสผ่าน</font></a></h1></center>
   <br>
		</br>
		<center>
	
</body>
</html>
