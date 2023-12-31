<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="icon" href="../images/Logo.jpg" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Alegreya&family=Allura&family=Libre+Baskerville&family=Rokkitt:wght@300;400&family=Taviraj&family=Ysabeau+Infant&display=swap");
    </style>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <!-- <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script> -->
    
    
    <title>Luxurious Creation | Login</title>
  </head>

  <body>
    <!-- navigation -->
    <nav>
      <div class="navdiv">
        <div class="navbarL">
          <img src="../images/Logo.jpg" alt="L.C. Logo" />
          <h1 class="brandName">Luxurios Creation</h1>
        </div>
        <div class="navbarR">
          <ul class="navList">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../category.html">Category</a></li>
            <li>
              <a href="http://localhost/Home%20Decor-xampp/feedback/index.php"
                >Feedback</a
              >
            </li>
            <li>
              <a href="http://localhost/Home%20Decor-xampp/contact/index.php"
                >Contact Us</a
              >
            </li>
            <button><a href="http://localhost/Home%20Decor-xampp/authentication/index.php">Login/Register</a></button>
          </ul>
        </div>
      </div>
    </nav>

    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </div>
        </div>
      </div>
    </nav> -->

    <!-- navigation -->

    <!-- Registration -->

    <section id="login">
      <!-- Login-Registration -->

      <div class="wrapper">
        <!-- <span class="icon-close">
                    <ion-icon name="close"></ion-icon>
                </span> -->

        <div class="form-box login">
          <h2>Login</h2>
          <form action="login.php" method="post">
            <div class="input-box">
              <span class="icon"> <ion-icon name="person"></ion-icon></span>
              <input type="text" name="username" id="" required />
              <label>Username</label>
            </div>

            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon
              ></span>
              <input type="password" name="password" id="" required />
              <label>Password</label>
            </div>

            <div class="remember-forget">
              <label><input type="checkbox" />Remember me</label>
              <label>
                <a href="#" class="forget-link"> Forget password?</a>
              </label>
            </div>

            <button type="submit" class="button">Login</button>

            <div class="login-register">
              <p>
                Don't have any account?
                <a href="#" class="register-link">Register</a>
              </p>
            </div>
          </form>
        </div>

        <!-- Registration -->

        <div class="form-box register">
          <h2>New Registration</h2>
          <form action="register.php" method="post">
            <div class="input-box">
              <span class="icon"
                ><span class="material-symbols-outlined"> badge </span></span
              >
              <input type="text" name="name" id="" required />
              <label>Name</label>
            </div>

            <div class="input-box">
              <span class="icon"> <ion-icon name="person"></ion-icon></span>
              <input type="text" name="username" id="" required />
              <label>Username</label>
            </div>

            <div class="input-box">
              <span class="icon"> <ion-icon name="mail"></ion-icon></span>
              <input type="email" name="email" id="" required />
              <label>Email</label>
            </div>

            <div class="input-box">
              <span class="icon"> <i class="fa-solid fa-phone"></i></span>
              <input type="number" name="contact" id="" required />
              <label>Mobile No.</label>
            </div>

            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon
              ></span>
              <input type="password" name="password" id="" required />
              <label>Password</label>
            </div>

            <div class="remember-forget">
              <label
                ><input type="checkbox" required />I agree to the Terms &
                Conditions</label
              >
            </div>

            <button type="submit" class="button">Register</button>

            <div class="login-register">
              <p>
                Already have any account?
                <a href="#" class="login-link">Login</a>
              </p>
            </div>
          </form>
        </div>

        <!-- Forget Password -->

        <div class="form-box forget">
          <h2>Reset Password</h2>
          <form action="forget.php" method="post">
            <p class="forget-inst">
              *Use your registered Username to reset password
            </p>
            <div class="input-box">
              <span class="icon"> <ion-icon name="person"></ion-icon></span>
              <input type="text" name="username" id="" required />
              <label>Username</label>
            </div>

            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon
              ></span>
              <input type="password" name="password" id="" required />
              <label>New Password</label>
            </div>

            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon
              ></span>
              <input type="password" name="newPassword" id="" required />
              <label>Retype New Password</label>
            </div>

            <button type="submit" class="button">Reset Password</button>

            <div class="login-register">
              <p>
                Back to
                <a href="#" class="login-back">Login</a>
                Page
              </p>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div class="alert alert-danger" role="alert">
        The Website is under development! Stay connected.
      </div>      
    </footer>

    <!-- Footer -->

    <!-- <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>JavaScript For Beginners</li>
            <li>HTML</li>
            <li>Python Programming</li>
            <li>AWS Cloud Computing</li>
        </div>

        <div class="footer-col">
            <h3>Quick Links</h3>
            <li>Jobs</li>
            <li>Brand Assets</li>
            <li>Investor Relation</li>
            <li>Terms Of Services</li>
        </div>

        <div class="footer-col">
            <h3>Features</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Websites</li>
            <li>Marketing Services</li>
        </div>

        <div class="footer-col">
            <h3>Resources</h3>
            <li>Guides</li>
            <li>Research</li>
            <li>Experts</li>
            <li>Marketing Services</li>
        </div>

        <div class="footer-col">
            <h3>Newsletter</h3>
            <p>Lorem ipsum, dolor sit amet </p>
            <div class="subscribe">
                <input type="text" name="" id="" placeholder="Your Email Address">
                <a href="#" class="greenish">SUBSCRIBE</a>
            </div>
        </div>

        <div class="copyright">
            <p>Copyright ©2023 All Rights Reserved | This Website is Managed by Techno Web Team</p>
            <div class="pro-links">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>

            </div>
        </div>


    </footer> -->

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="assets/script.js"></script>
  </body>
</html>
