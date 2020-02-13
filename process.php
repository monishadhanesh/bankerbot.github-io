<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
				$firstname =$_POST['firstname'];
				$lastname =$_POST['lastname'];
				$email =$_POST['email'];
				$phonenumber =$_POST['phonenumber'];
				$password =$_POST['password'];
				$sql="INSERT INTO user(firstname,lastname,email,phonenumber,password) VALUES(?,?,?,?,?)";
				$stmtinsert=$db->prepare($sql);
				$result=$stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
				if($result){
					echo "successfully saved";

				}
				else{
					echo "there are errors while saving the data";
				}
				
			}
			?>