
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<title>ล็อกอิน</title>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
<style>
		#page
	{
			background-color: #FFFFFF;
			font-size: 80px;
			margin-top: 80px;
		
			border: 1px solid #22B14C;
			border-radius: .25em;
			width: 500px;
			margin:0 auto;
				padding:150px ;
			text-align: center;
	}
	#back

	{
			background-color: #FFFFFF;
			font-size: 80px;
			margin-top: 80px;
		
			
			width: 100px;
			margin:0 auto;
				
			text-align: center;
	}
	#next

	{
			background-color: #FFFFFF;
			font-size: 80px;
			margin-top: 80px;
		
			
			width: 100px;
			margin:0 auto;
				
			text-align: center;
	}
</style>
	<div id="back"class="col-xs-4col-sm-12 col-md-4">
			  <a href="<?php echo base_url('index.php/home/logout');?>" class="btn  btn-success btn-block ">back</a>
			</div>		


<div id="page" class=" col-xs-12 col-md-3 col-lg-3">
{blog_entries}
</div>
			
					<div id="next"class="col-xs-4col-sm-12 col-md-4">
			  <a href="<?php echo base_url('index.php/admin/next_text');?>" class="btn  btn-success btn-block">next</a>
			</div>		
			
				<form role="form">


					<div class="col-xs-4col-sm-12 col-md-4">
			  <a href="<?php echo base_url('index.php/home/logout');?>" class="btn btn-sm  ">LOGOUT</a>
			</div>
		</form>


</div>	