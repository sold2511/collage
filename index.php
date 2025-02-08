<?php  
	include('./database.php');
$inactive = false;
$wrongpass = false;
$existuser = false;
$nodata = false;
$success = false;
$newsuccess = false;
	if(isset($_POST['sub']) && $_POST['sub'] =="1")
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		$res = mysqli_query($conn,"SELECT * FROM user WHERE email='$username'");

		if(mysqli_num_rows($res)==1){
			$data = mysqli_fetch_assoc($res);
			if($data['active'] =="1"){
				if($_POST['password'] == $data['pass'] ){
				$success = true;
				$_SESSION['username'] = $data['username'];
				?>
				<script>
					 setTimeout(() => {
						 window.location.href='home.php';
                }, 1600);
						
					
					</script>
				
				<?php
				}
				
				else{
				$wrongpass = true;
				?>
				<script>
					 setTimeout(() => {
						 window.location.href='./';
                }, 1600);
						
					
					</script>
				
				<?php
				}
			}
			else{
				$inactive = true;
				?>
				<script>
					 setTimeout(() => {
						 window.location.href='./';
                }, 1600);
						
					
					</script>
				
				<?php
			}
		}
		else
		{
			$nodata = true;
			?>
				<script>
					 setTimeout(() => {
						 window.location.href='./';
                }, 1600);
						
					
					</script>
				
				<?php
		}
	}
	if(isset($_POST['sub']) && $_POST['sub'] =="2")
	{
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['pass']);
		$num = mysqli_real_escape_string($conn,$_POST['num']);
		$user = mysqli_real_escape_string($conn,$_POST['user']);
		// $res = mysqli_query($conn,);

		$chkusr = mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
   if(mysqli_num_rows($chkusr)==1){
      $existuser=true;
	  ?>
	  <script>
	   setTimeout(() => {
			   window.location.href='./';
		  }, 1600);
	   
	  </script>
	  <?php
  }
  else{
  
   $newuser = mysqli_query($conn,"INSERT INTO `user` (`id`, `name`, `email`, `phone`, `pass`, `active`) VALUES (NULL, '$user', '$email', '$num', '$password', '1');");
    if($newuser){
        $newsuccess=true;
    ?>
            <script>
             setTimeout(() => {
                     window.location.href='./';
                }, 1600);
             
            </script>
            <?php
    }
}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<link rel="stylesheet" href="style.css" />
	<title>Sign in & Sign up Form</title>
	<style>
		.msg{
			position: absolute;
			width: 50vw;
			text-align: center;
			z-index: 100;
			/* margin: auto; */
			right:0;
			
			padding:8px 14px;
			border-radius: 20px;
		}
	</style>
</head>

<body>
	<div class="container">
	
		<div class="forms-container">
			<div class="signin-signup">
		<div class="msg">
		<?php
		if($success == true){
		   ?>
		   <div style="color:green; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">Welcome, <?php echo $data['name']; ?>. you Are Logged In Successfully</div>
		   <?php
		}
		if($newsuccess == true){
		   ?>
		   <div style="color:green; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">Welcome, <?php echo $data['name']; ?>. You are Signed Up Successfully</div>
		   <?php
		}
		if($inactive == true){
		   ?>
		   <div style="color:red; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">Your Account In Inactive Contact With Admin</div>
		   <?php
		}
		if($wrongpass == true){
		   ?>
		   <div style="color:red; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">Password Incorrect</div>
		   <?php
		}
		if($nodata == true){
		   ?>
		   <div style="color:red; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">Username Not Exist! Register before Login</div>
		   <?php
		}
		?>
	 </div>
				<form method="post" role="form" action="" autocomplete="off" class="sign-in-form" >
					
					<h2 class="title">Sign in</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="username" placeholder="Username" />
					</div>
					<input type="hidden" name="sub" value="1">
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="Password" />
					</div>
					<input type="submit" value="Login" class="btn solid" />
					
				</form>
				<form action="" method="post" role="form"  class="sign-up-form">
				<?php 
				    if( $existuser== true){
                              ?>
                              <div style="color:red; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">Username Alredy Exist!!!</div>
                              <?php
                           }
				    ?>
					<h2 class="title">Sign up</h2>
					<input type="hidden" name="sub" value="2">
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="user" placeholder="Username" />
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" name="email" placeholder="Email" />
					</div>				
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="pass" placeholder="Password" />
					</div>
					<div class="input-field">
						<i class="fas fa-phone"></i>
						<input type="number" name="num" placeholder="Phone" />
					</div>
					<input type="submit" class="btn" value="Sign up" />
					
					
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>New here ?</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
						ex ratione. Aliquid!
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Sign up
					</button>
				</div>
				<img  src="./images/login.png" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>One of us ?</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
						laboriosam ad deleniti.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Sign in
					</button>
				</div>
				<img src="./images/login1.png"  class="image" alt="" />
			</div>
		</div>
	</div>

	<script src="app.js"></script>
</body>

</html>