<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="icon" href="images/mk-logo-2015-500.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/Styles.css">
  <link rel="stylesheet" href="CSS/login.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
<nav>
        <div class="container nav_container">
          <a href="index.html"><h4 class="bambo">Abune Gorgoriyos</h4></a>
          <ul class="nav_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="Login.php">Login</a></li>
            
          </ul>
          <button id="open_menu-btn"><i class="uil uil-bars"></i></button>
          <button id="close_menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
      </nav>


<section class="about_achievements">
<div class="center">
      <h1>Register</h1>
      <form action="index.php" method="post">
        <div class="txt_field">
          <input type="text" name="user name" id="user_name" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="user password" id="user_password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Register">
        <div class="signup_link">
          Already a student? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
</div>
</section>
<footer class="footer">
    <div class="container footer_container">
      <div class="footer_1">
        <a href="index.html" class="footer_logo"><h4>Abune Gorgoriyos</h4></a>
        <p>
          Producing generation who succeeds generation with better quality!
        </p>
      </div>

      <div class="footer_2">
        <h4>Permalinks</h4>
        <ul class="permalinks">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="Login.php">Login</a></li>
        </ul>
      </div>

      <div class="footer_3">
        <h4>Primacy</h4>
        <ul class="privacy">
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Term and condition</a></li>
        </ul>
      </div>

      <div class="footer_4">
        <h4>Contact Us</h4>
        <div>
          <p>+251 946 303 896</p>
          <p>yeabtiger@gmail.com</p>
        </div>

        <ul class="footer_socials">
          <li>
            <a href="https://t.me/Zero_0days"><i class="uil uil-telegram">1</i></a>
          </li>
          <li>
            <a href="https://t.me/ZEZU27"><i class="uil uil-telegram">2</i></a>
          </li>
          <li>
            <a href="https://t.me/SAMIKINGDOMGSC"><i class="uil uil-telegram">3</i></a>
          </li>
        </ul>
      </div>

      <div class="footer_copyright">
        <small>Copyright &copy;Yeab web development</small>
      </div>
    </div>
  </footer>
  <script src="./main.js"></script>
</body>
</html>