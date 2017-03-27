<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>nfntStart</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container-fluid" style="margin: 20px;margin-bottom: 10">
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url() ?>">nfnt start</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url() ?>">Home</a></li>
						<li><a href="<?php echo site_url() ?>/about">About</a></li>
						<li class="active"><a href="<?php echo site_url() ?>/contact">contact</a></li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div>
		</nav>


			<div class="container-fluid" style="margin-left: 20%;margin-right: 20%">
			<h1>Leave a Message</h1>
			<br>
			<form method="POST" action="<?php echo site_url() ?>">
				<div class="input-group">
					<span class="input-group-addon">Nama</span>
    				<input id="msg" type="text" class="form-control" name="msg" placeholder="Name">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">e-mail</span>
    				<input id="msg" type="text" class="form-control" name="msg" placeholder="Name">
				</div>
				<br>
				<div class="form-group">
  					<label for="comment">Comment:</label>
  					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
				<input type="submit" class="btn btn-default" value="Send">
			</form>
			</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>