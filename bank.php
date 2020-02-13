<!DOCTYPE html>
<html>
<head>
	<title>bankerbot website</title>
<link rel="stylesheet" href="summa.css">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="jquery-3.4.1.min.js"></script>
</head>
<body>

	<div class="header">
		<img src="bank.png" width=100%">
	</div>
	
<div class="container text-center">
	
	<div class="row">
		<div class="col-lg-5 m-auto">
			<div class="card bg-light mt-3">
				<div class="card-title bg-primary text-white">
					<h3 class="text-center py-2">Login</h3>

			</div>
		<?php
			if(@$_GET['Empty']==true)
			{
				?>
				<div class="alert-light text-danger text-center">
					<?php echo $_GET['Empty']?>
				</div>
				<?php 

			}

			?>
			<?php
			if(@$_GET['Invalid']==true)
			{
				?>
				<div class="alert-light text-danger text-center">
					<?php echo $_GET['Invalid']?>
				</div>
				<?php 

			}

			?>
			<div class="card-body">
			
			<form action="process1.php" method="post">
				<input type="text" name="email" placeholder="email" class="form-control ">
				<input type="password" name="password" placeholder="password" class="form-control mt-3"><br>
				<a href="registration.php" target="_self">Are you new user? signup here.</a><br>

				<button class="btn btn-primary mt-3" name="Login">Login</button>
				</form>
		</div>
	</div>
<footer class="f1" style="color:white;font-size:15px;">&copy Monisha  II Msc IT</footer>
</div>
</div>

</body>
</html>