<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Miranda's Blog</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo site_url()?>/home"><span class="glyphicon glyphicon-home"></span> Home</a></li>
								<li><a href="<?php echo site_url()?>/about"><span class="glyphicon glyphicon-star"></span> About Me</a></li>
								<li class="active"><a href="<?php echo site_url()?>/contact"><span class="glyphicon glyphicon-phone"></span> Contact Me</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<table border=0 class="table" width="80%" cellpadding="0">
					<tr>
					<td width="50%">
					<div class="alert alert-success" role="alert">
					<form action="active" method="POST" role="form">
					<h1><center>Contact Me</center></h1>
				
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" id="name" placeholder="Your Name">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" class="form-control" id="email" placeholder="Your Email">
					</div>
					<div class="form-group">
						<label for="">Phone Number</label>
						<input type="text" class="form-control" id="phone" placeholder="Your Phone Number">
					</div>
					<div class="form-group">
						<label for="">Message</label>
						<input type="text" class="form-control" id="phone" placeholder="Your Message">
					</div>
					<button type="submit" class="btn btn-primary">Send</button>
				</form>
				</div></td>
						<td width="30%">	
						<div class="alert alert-success" role="alert">
						<center><h2>Politeknik Negeri Malang</h2>
						<br>
						<center>
								<img src="<?php echo base_url() ?>image/logo.png" class="img-thumbnail" alt="Image" width="150">
								</center>
								<br>
							Address : Jalan Soekarno-Hatta no 9 Malang, Jawa Timur
						<br>
							Phone Number : 0341-404420
							</center>
						</div>
						</td>
						</td>
					</tr>
				</table>
				
			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>