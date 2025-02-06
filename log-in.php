<?php
require 'config.php';

if ($conn instanceof mysqli) {
    if (isset($_POST["signin_submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $stmt = mysqli_prepare($conn, "SELECT * FROM tb_users WHERE email = ? AND password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $email, $password);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result !== false && mysqli_num_rows($result) > 0) {
            // L'utilisateur est connecté avec succès
            echo "<script> alert('Login Successful'); </script>";
        } else {
            // La connexion a échoué
            echo "<script> alert('Login Failed'); </script>";
        }
    }
} else {
    echo "Failed to establish database connection.";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Se connecter </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" class="js-color-style" href="css/colors/color-1.css">
    <link rel="stylesheet" href="boxicons.css">
    <link rel="stylesheet" class="js-glass-style" href="css/glass.css"  disabled>
    <link rel="stylesheet" href="css/responsive.css">
  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
<body>
  <!--pagte loader start-->
  <div class="page-loader js-page-loader">
    <div></div>
  </div>
    <!--pagte loader end-->
    
<div class="main-wrapper">
    <header class="header" id="main-header">
        <div class="container">
          <div class="header-main d-flex justify-content-between align-items-center">
            <div class="header-logo">
              <a href="index.html">
                <img src="img/logo.png" alt="MaTech Logo" class="logo-image img-fluid">
                <span>Ma</span>Tech
              </a>
            </div>
            
            <button type="button" class="header-hamburger-btn js-header-menu-toggler d-lg-none">
              <span></span>
            </button>
            <div class="header-backdrop js-header-backdrop"></div>
            <nav class="header-menu js-header-menu d-lg-flex">
              <button type="button" class="header-close-btn js-header-menu-toggler d-lg-none">
                <i class="fas fa-times"></i>
              </button>
              <ul class="menu">
                <li class="menu-item"><a href="index.html">Home</a></li>
                <li class="menu-item menu-item-has-children"><a href="#" class="js-toggle-sub-menu">Courses<i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu js-sub-menu">
                    <li class="sub-menu-item"><a href="courses.html">Online courses</a></li>
                    <li class="sub-menu-item"><a href="face.html">Face to face</a></li>
                  </ul>
                </li>
                        <li class="menu-item"><a href="contact.html">Contact</a></li>
                        <li class="menu-item menu-item-has-children"><a href="#" class="js-toggle-sub-menu">Account<i class="fas fa-chevron-down"></i></a>
                          <ul class="sub-menu js-sub-menu">
                            <li class="sub-menu-item"><a href="log-in.html">Log In</a></li>
                            <li class="sub-menu-item"><a href="sign-up.html">Sign Up</a></li>
                          </ul>
                        </li> 
              </ul>
            </nav>
          </div>
        </div>
    </header>
    
    <form class="" action="" method="post">

      <div class="container sign ">
        <div class="card">
            <div class="form">
                <div class="left-side">
                  <div class="sign-in s_form ">
                    <div class="main_login active ">
                        <div class="heading">
                            <h2>Connectez-vous</h2>
                        </div>
                        <div class="social"> <span><i class="fa fa-google"></i></span> <span><i class="fa fa-facebook"></i></span> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-dribbble"></i></span> </div>
                        <div class="or">ou utilisez votre adresse e-mail :</div>
                        <div class="input-text"> <input type="text" placeholder="Entrez votre adresse e-mail" name="email" required> </div>
                        <div class="input-text"> <input type="password" placeholder="Entrez votre mot de passe" name="password" id="password-input-login" required> <i class="fa fa-eye-slash passcode1"></i> </div>
                        <div class="terms"> <span><i class="fa fa-check d-none"></i></span>
                            <p>Se souvenir du mot de passe</p>
                        </div>
                        <div class="buttons"> <button type="submit" name="signin_submit">Se connecter</button> </div>
                    </div>
                    </form>
                    <div class="main_login">
                        <div class="heading">
                            <h2>Félicitations</h2>
                        </div>
                        <div class="social"> <span><i class="fa fa-google"></i></span> <span><i class="fa fa-facebook"></i></span> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-dribbble"></i></span> </div> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" /> </svg>
                        <div class="final-submit">
                            <p>Merci M./Mme <span id="shown-name"></span> de vous être connecté(e) chez nous, nous vous contacterons bientôt</p>
                        </div>
                    </div>
                </div>
                  

                    
                </div>
                <div class="right-side">
                    <div class="cover_image"> <img src="img/sun.jpg"> </div>
                </div>
            </div>
        </div>
    </div>

</div>
    
<!--footer section start-->
<footer class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <h3 class="footer-logo"><span>Ma</span>Tech</h3>
              <ul>
                <li><a href="#">À propos </a></li>
                <li><a href="#">Nos offres </a></li>
                <li><a href="#">Carrières </a></li>
                <li><a href="#">Blogue </a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <h3>Étudier</h3>
              <ul>
                <li><a href="#">Télécharger notre App </a></li>
                <li><a href="#">Nos offres </a></li>
                <li><a href="#">Nos principes </a></li>
                <li><a href="#">FAQ </a></li>
              </ul>
            </div>
          </div> 
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <h3>Savoir plus</h3>
              <ul>
                <li><a href="#">Devenir instructeur </a></li>
                <li><a href="#">Affiliés </a></li>
                <li><a href="#">Webinaires de formation </a></li>
                <li><a href="#">Aide et Support </a></li>
              </ul>
            </div>
          </div> 
          <div class="col-sm-6 col-lg-3">
            <div class="footer-item">
              <h3>Nous contacter</h3>
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f social-icon"></i> Facebook </a></li>
                <li><a href="#"><i class="fab fa-instagram social-icon"></i> Instagram </a></li>
                <li><a href="#"><i class="fab fa-youtube social-icon"></i> Youtube </a></li>
                <li><a href="#"><i class="fab fa-linkedin-in social-icon"></i> Linkedin </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p class="m-0 py-4 text-center">Copyright &copy;2023 MAJDA EL HASNAOUI</p>
      </div>
    </div>
  </footer>
</div>

  <!--footer section end-->

  <div class="style-switcher js-style-switcher">
    <div class="style-switcher-toggler js-style-switcher-toggler">
      <i class="fas fa-cog"></i>
    </div>
    <h3>Style Switcher</h3>
    <div class="style-switcher-item">
      <p class="mb-2">Les themes de couleurs</p>
      <div class="theme-colors js-theme-colors">
        <button type="button" data-js-theme-color="color-1" class="js-theme-color-item color-1"></button>
        <button type="button" data-js-theme-color="color-2" class="js-theme-color-item color-2"></button>
        <button type="button" data-js-theme-color="color-3" class="js-theme-color-item color-3"></button>
        <button type="button" data-js-theme-color="color-4" class="js-theme-color-item color-4"></button>
        <button type="button" data-js-theme-color="color-5" class="js-theme-color-item color-5"></button>
    
      </div>
    </div>
    <div class="style-switcher-item">
      <div class="form-check form-switch">
        <input class="form-check-input js-dark-mode" type="checkbox" role="switch" id="dark-mode">
        <label class="form-check-label" for="dark-mode">Dark mode</label>
      </div>
    </div>
    <div class="style-switcher-item">
      <div class="form-check form-switch">
        <input class="form-check-input js-glass-effect" type="checkbox" role="switch" id="glass-effect">
        <label class="form-check-label" for="glass-effect">Glass effect</label>
      </div>
    </div>
    
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>