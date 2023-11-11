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
    <!-- main -->
    <main class="page">
      <!-- header -->
      <header class="hero">
        <div class="hero-container">
          <div class="hero-text">
            <h1>Foodie</h1>
            <h4>Where Every Dish Tells a Story.</h4>
          </div>
        </div>
      </header>
      <!-- end of header -->
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>recipes</h4>
          <div class="tags-list">
            <a href="greek.html">Beef (1)</a>
            <a href="breakfast-tag.html">Breakfast (2)</a>
            <a href="chillie potatoes.html">Potatoes (1)</a>
            <a href="single-recipe.html">Banana (1)</a>
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
          <!-- single recipe -->
          <a href="Muttai Appam.html" class="recipe">
            <img
              src="./assets/recipes/recipe-6.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Muttai Appam</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="greek.html" class="recipe">
            <img
              src="./assets/recipes/recipe-7.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Beef Stew</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="chillie potatoes.html" class="recipe">
            <img
              src="./assets/recipes/recipe-5.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Chillie Potatoes</h5>
            <p>Prep : 10min | Cook : 10min</p>
          </a>
          <!-- end of single recipe -->
          <!-- single recipe -->
          <a href="locked.html" class="recipe">
            <img
              src="./assets/recipes/recipe-4.jpeg"
              class="img recipe-img"
              alt=""
            />
            <h5>Banana Pancakes</h5>
            <p>Prep : 15min | Cook : 5min</p>
          </a>
          <!-- end of single recipe -->
        </div>
        <!-- end of recipes list -->
      </section>
    </main>
    <!-- end of main -->
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
