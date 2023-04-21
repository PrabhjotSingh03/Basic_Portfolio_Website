<?php include './php/function.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<title>Prabhjot Singh Sains</title>
            <link rel="stylesheet" type="text/css" href="./style/style.css">
            <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
            <script type="text/javascript" src="./js/javascript.js"></script>  
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
    <body>
        
        <header class="header">
            <img src="images/Screnery-001.jpg" alt="A Abstract background for header" class="abstractHeaderimg">
            <div class="centerLogo"><img src="images/pslogo.jpg" alt="Prabhjot singh logo for header" class="pslogoimg"></div>
        </header>

        <nav class="topnav" id="topnav">
            <a href="index.html">Home</a>
            <a href="portfolio.html">Portfolio</a>
            <a href="blogs.html">Blogs</a>
            <a href="contact.php" class="active">Contact</a>
            <a href="javascript:void(0);" class="navicon" onclick="topnavresp()"><i class="fa fa-bars"></i></a>
        </nav>
        
        <div class="container">
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    You can connect with me on any of the social media links provided in the website.
                </p>
      
                <div class="info">
                  <div class="information">
                    <img src="images/location.png" class="icon" alt="" />
                    <p>Chandigarh, India</p>
                  </div>
                  <div class="information">
                    <img src="images/email.png" class="icon" alt="" />
                    <p>prabhjot.sains@gmail.com</p>
                  </div>
                  <div class="information">
                    <img src="images/phone.png" class="icon" alt="" />
                    <p>+91-9816919394</p>
                  </div>
                </div>
      
                <div class="social-media">
                  <p>Connect with Me :</p>
                  <div class="social-icons">
                    <a href="https://www.facebook.com/PrabhjotSinghSains/">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/SinghPrabhjot03">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/prabhjot_singh_sains/">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/prabhjot-singh-sains-a7049292/">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/PrabhjotSingh03">
                        <i class="fab fa-git-square"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCkA6atw292jgnmeDeNlUgsg">
                        <i class="fab fa-youtube-square"></i>
                    </a>
                  </div>
                </div>
              </div>
      
              <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
      
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off" id="form" >
                  <h3 class="title">Contact Me</h3>
                  <div class="input-container">
                    <input type="text" name="name" class="input" id="fullname">
                    <label for="">Full Name</label>
                    <span>Full Name</span>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error</small>
                  </div>
                  <div class="input-container">
                    <input type="email" name="email" class="input" id="email">
                    <label for="">Email</label>
                    <span>Email</span>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error</small>
                  </div>
                  <div class="input-container">
                    <input type="tel" name="phone" class="input" id="phone">
                    <label for="">Phone</label>
                    <span>Phone</span>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error</small>
                  </div>
                  <div class="input-container textarea">
                    <textarea name="message" class="input" id="msg"></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error</small>
                  </div>
                  <input type="submit" value="Send" class="btn" name="mailsubmit">
                </form>
              </div>
            </div>
          </div>

          

          <nav class="footnav" id="footnav">
            <a href="index.html" >Home</a>
            <a href="portfolio.html">Portfolio</a>
            <a href="blogs.html">Blogs</a>
            <a href="contact.php" class="active">Contact</a>
            <a href="javascript:void(0);" class="navicon" onclick="footnavresp()"><i class="fa fa-bars"></i></a>
        </nav>

        <footer class="footer">
            <img src="images/Screnery-002.jpg" alt="A Abstract background for header" class="footerimg">
            <nav class="copyright">
                <a href="copyright.html">Copyright 2022 Prabhjot Singh all terms reserved</a>
            </nav>
        </footer>

    </body>
</html>