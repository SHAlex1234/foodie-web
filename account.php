<?php 
	require "functions.php";
	
	if(!isset($_SESSION['user'])){
		header("location: login.php");
		exit();
	}

	if(isset($_GET['logout'])){
		logoutUser();
	}
	
	if(isset($_GET['confirm-account-deletion'])){
		deleteAccount();
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
          <a href="Sign-Up.php" class="btn"> Sign Up </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
	<main class="page">
    <section class="account-page">
	    <article>
		<h2>Welcome <?php echo $_SESSION["user"] ?> </h2>
		<h4>We would love to hear from you!</h4>

    <br>
    <p> We are presently taking submissions for profiles, news and trending items, and recipes. </p>
		
		<p>Please fill out our <a href="https://docs.google.com/forms/d/e/1FAIpQLScNGtGnUEM-8-0HIQNM8iZhekrUOX487XodmLuESoxO-Ggupw/viewform?usp=sf_link" 
        data-component="link" data-source="inlineLink" data-type="externalLink" data-ordinal="1">pitch form</a>
        and submit your recipes and ideas with us.</p>
		<br>
		
		
		<a href="?logout">Logout</a>
		<br>
		<?php 
			if(isset($_GET['delete-account'])){
				?>
					<p class="confirm-deletion">
						Are you sure you want to delete you account?
						<a class="confirm-deletion" href="?confirm-account-deletion">Delete account</a>
					</p>
				<?php
			}else{
				?>
					<a href="?delete-account">Delete account</a>
				<?php
			}
		?>
	</article>
  <img
          src="./assets/account.jpeg"
          alt="Person Pouring Salt in Bowl"
          class="img about-img"
        />
      </section>
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
