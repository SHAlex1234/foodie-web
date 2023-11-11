<?php 
	require "functions.php";
	if(isset($_POST['submit'])){
		$response = passwordReset($_POST['email']);
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
		<h2>Password reset</h2>
		<h4>Please enter your email so we can send you a new password.</h4>
		<div>
			<label>Email</label>
			<input type="text" name="email" value="<?php echo @$_POST['email']; ?>">
		</div>
		
		<button type="submit" name="submit">Submit</button>	

		<p>
			<a href="login.php">Back to login page?</a>
		</p>

		<?php 
			if(@$response == "success"){
				?>
					<p class="success">Please go to your email account and use your new password.</p>
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
