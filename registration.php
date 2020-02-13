
<!DOCTYPE html>
<html>
	<head>
		<title>registration</title>
		<link rel="stylesheet" href="summa.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div>
			<div class="header">
		<img src="bank.png" width=100%">
	</div>

			<form action="registration.php" method="post">
				<div class="col-lg-5 m-auto">
					<h3 style="color:white;">Registration </h3>
					<p style="color:white">Fill up the form with correct values</p>
					
					<input class="form-control mt-2" id="firstname" type="text" name="firstname" required placeholder="firstname">
					
					<input class="form-control mt-2" id="lastname" type="text" placeholder="lastname" name="lastname" required> 
					
					<input class="form-control mt-2" id="email" type="email" name="email" placeholder="email" required>
					
					<input class="form-control mt-2" id="phonenumber" type="text" placeholder="phonenumber" name="phonenumber" required>
				    
					<input class="form-control mt-2"id="password" type="password" placeholder="password" name="password" required>
				   <hr class="mb-1">
				   <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
			</form>
					</div>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

						<script type="text/javascript">
						$(function(){
							$('#register').click(function(e){
								var valid=this.form.checkValidity();
								if(valid){
									var firstname=$('#firstname').val();
								
                         var lastname=$('#lastname').val();
                          var email=$('#email').val();
                           var phonenumber=$('#phonenumber').val();
                            var password=$('#password').val();
									e.preventDefault();
									$.ajax({
										type:'POST',
										url:'process.php',
										data:{firstname:firstname,lastname:lastname,email:email,phonenumber:phonenumber,password:password},
										success:function(data){
											Swal.fire({
						'title':'successfully saved',
						'text':'successfully registered',
						'type':'success'
					})
										},
										error:function(data){
									
											Swal.fire({
						'title':'Error',
						'text':'error while saving the data',
						'type':'error'
					})

										}
									});
									
					}			

                        else{}



});	

					
				});
					
						</script>
						
					
	</body>

</html>
