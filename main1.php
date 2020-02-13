<?php 
session_start();
if(isset($_SESSION['banking'])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>banking bot</title>
	<link rel="stylesheet" href="css.css">
	
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
	
		<div id="container">
			
			
			<form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div><br>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label"><br>
      <input class="form-check-input" type="checkbox"> Remember me
    </label><br>
    <a href="registration.php" target="_self">Are you new user? signup</a>

  </div><br><br>
 <button type="submit" class="btn btn-primary" id="login" name="button"
  >Login</button>
</form>
  
		</div>
<script>
	$(function(){
		$('#login').click(function(e){

			var valid=this.form.checkValidity();
		if(valid){
			var username=$('#email').val();
			var password=$('#password').val();
		}
		e.preventDefault();
		$.ajax({
			type:'POST',
			url:'jslogin.php',
			data:{email:email,password:password},
			success:function(data){
				if($.trim(data)=="1"){
					setTimeout('window.location.href="index.php"',2000)
				}
			},
			error:function(data){
				alert('there are erroer while login');
			}
		});
		});
		
	});
</script>
</body>
</html>