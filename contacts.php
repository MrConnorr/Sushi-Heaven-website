<?php include 'header.php' ?>

<link rel="stylesheet" href="css/contacts.css">


  <div class="container-fullwidth container-main">

                <div id="aboutUsBg">
                    <div id="blackLayer">
                        <div class="row d-flex align-items-end justify-content-center">
                            <h1 class="text-center-lrn col-lg-12">
                                LEARN MORE ABOUT US
                            </h1>
                            <a href="#" class="col-lg-12 brand-text" style="z-index:1; font-size: 30px; text-decoration: none;">
                                <img src="images/brand-icon.png" alt="Sushi Heaven Icon" style="width: 60px;
                                height: auto;"> Sushi Heaven
                            </a>
                        </div>

                    </div>
                </div>

                    <div class="container" style="margin-top:50px;">
                      <div class="row">
                            <div class="col-md-9" style="margin-bottom: 50px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.8289051439529!2d24.950312716180647!3d60.167011250617115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46910b183d098b0d%3A0x7367e508c5613991!2sFinlandia%20Caviar%20Shop%20%26%20Restaurant!5e0!3m2!1sru!2s!4v1611154927892!5m2!1sru!2s"
                                    width="100%" height="100%" frameborder="0" style="border: 1px solid #111; border-radius: 10px;" tabindex="0"></iframe>
                            </div>
                            <div class="col-lg-3">
                                        <i class="fa fa-map-marker-alt fa-3x"></i> <h2 style="font-weight: 600;">Our Location:</h2>
                                        <p>Eteläranta 20, 00130 Helsinki, Finland</p>

                                        <i class="fa fa-mobile-alt fa-3x"></i> <h2 style="font-weight: 600;">Call:</h2>
                                        <p>+358 40210 67 95</p>

                                        <i class="fa fa-envelope fa-3x"></i> <h2 style="font-weight: 600;">Email:</h2>
                                        <p>sushiheavenhelp@gmail.com</p>

                            </div>
                          </div>
                    </div>


                <div class="container">
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h1 class="text-center">Contact Us</h1>
                            <form action="" method="post">
                                    <input type="text" class="form-control mb-4" name="userName" placeholder="Your Name" required>
                                    <input type="email" class="form-control" name="userEmail" placeholder="Your Email" required> <br>
                                    <textarea name="userMessage" id="message" cols="30" rows="5" class="form-control mb-4" placeholder="Your Message" required></textarea>
                                    <input class="submitButton" href="contacts.php" type="submit" value="Send Message">
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
        </div>

      <script>
          if(typeof window.history.pushState == 'function') {
              window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
          }
      </script>



  <?php

  function messageSent($msg)
  {
    echo '<script type="text/javascript">
    alert("' . $msg . '")
    </script>';
    }

  if ($_SERVER['REQUEST_METHOD'] === 'POST')
  {

  $uName = $_POST['userName'];
  $uMessage = $_POST['userMessage'];
  $uEmail = $_POST['userEmail'];
  $to = 'sushiheavenhelp@gmail.com';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

  $send = mail($to, $uName. " Review", "User Email: ".$uEmail. "\r\n". "User Message: \r\n" .$uMessage);

  if($send)
  {
    messageSent("Thank you!\\n\\Message was sent");
  }

  }
   ?>


<?php include 'footer.php' ?>
