<?php 
	require "functions.php";
	if(isset($_POST['submit'])){
		$response = registerUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm-password']);
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foodie</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/f.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- old -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
</head>
<body>
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <img src="./assets/logo.svg" alt="Foodie" />
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="index.php" class="nav-link"> home </a>
          <a href="about.html" class="nav-link"> about </a>
          <a href="recipes.html" class="nav-link"> recipes </a>
          <a href="contact.html" class="nav-link"> Contact </a>

          <div class="nav-link contact-link">
            <a href="./php/index.php" class="btn"> Sign Up </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
    <main class="page">
    <article>
	<form action="" method="post" autocomplete="off">
		<h2>Sign up</h2>
		<h4>
			Please fill this form to create an account. <br>
			<span>All fields are required</span>
		</h4>

		<div class="grid">
			<div>
				<label>Email *</label>
				<input type="text" name="email" value="<?php echo @$_POST['email']; ?>" >
			</div>

			<div>
				<label>Username *</label>
				<input type="text" name="username" value="<?php echo @$_POST['username']; ?>" >
			</div>

			<div>
				<label>Password *</label>
				<input type="text" name="password" value="<?php echo @$_POST['password']; ?>">
			</div>

			<div>
				<label>Confirm Password *</label>
				<input type="text" name="confirm-password" value="<?php echo @$_POST['confirm-password']; ?>">
			</div>
		</div>	

		<button type="submit" name="submit">Submit</button>	

		<p>
			Already have an account? 
			<a href="login.php">Login here</a>
		</p>

		<?php 
			if(@$response == "success"){
				?>
					<p class="success">Your registration was successful</p>
				<?php
			}else{
				?>
					<p class="error"><?php echo @$response; ?></p>
				<?php
			}
		?>
	</form>
    </article>
    </main>
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">foodie</span> Built by Shenita Alex
      </p>
    </footer>
    <script src="./js/app.js"></script>
</body>
</html>
