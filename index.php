
<?php include 'header.php' ?>
      <div class="img-slider">

        <div class="welcome">
          <h1>Welcome to Sushi Heaven</h1>
          <p>Best sushi in town made with love</p>
          <a href="#scroll-target" type="button" class="btn">Learn More</a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/slider-image1.jpg" class="d-block w-100 img-fluid" alt="Sushi Img For Slider 1">
            </div>
            <div class="carousel-item">
              <img src="images/slider-image2.jpg" class="d-block w-100 img-fluid" alt="Sushi Img For Slider 2">
            </div>
            <div class="carousel-item">
              <img src="images/slider-image3.jpg" class="d-block w-100 img-fluid" alt="Sushi Img For Slider 3">
            </div>
            <div class="carousel-item">
              <img src="images/slider-image4.jpg" class="d-block w-100 img-fluid" alt="Sushi Img For Slider 4">
            </div>
            <div class="carousel-item">
              <img src="images/slider-image5.jpg" class="d-block w-100 img-fluid" alt="Sushi Img For Slider 5">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>

      </div>


        <div class="container-fullwidth container-main">
          <!--Write your code here-->

          <article id="scroll-target">
            <div class="container">
              <?php
                $postsArray = $dbHandle->runQuery("SELECT * FROM maininfoposts ORDER BY id ASC");
                if(!empty($postsArray))
                {
                  foreach ($postsArray as $key => $value)
                  {
                    if ($postsArray[$key]['imglocation'] == "left")
                    {
              ?>
              <div class="row info-restaurant">
                <div class="col-lg-6">
                  <h1><?php echo $postsArray[$key]['title']; ?></h1>
                  <p>
                  <?php echo $postsArray[$key]['description']; ?>
                  </p>
                </div>
                <div class="col-lg-6">
                  <img src="<?php echo $postsArray[$key]['image']; ?>" alt="<?php echo $postsArray[$key]['imageAlt']; ?>" class="img-fluid">
                </div>
              </div>
              <?php
            } else if ($postsArray[$key]['imglocation'] == "right")
            {
          ?>
          <div class="row info-restaurant">
            <div class="col-lg-6">
              <img src="<?php echo $postsArray[$key]['image']; ?>" alt="<?php echo $postsArray[$key]['imageAlt']; ?>" class="img-fluid">
            </div>
            <div class="col-lg-6">
              <h1><?php echo $postsArray[$key]['title']; ?></h1>
              <p>
              <?php echo $postsArray[$key]['description']; ?>
              </p>
            </div>
          </div>
          <?php
        } else if ($postsArray[$key]['imglocation'] == "up")
        {
          ?>
          <div class="row info-restaurant">
            <div class="col-lg-12">
              <img src="<?php echo $postsArray[$key]['image']; ?>" alt="<?php echo $postsArray[$key]['imageAlt']; ?>" class="img-fluid">
            </div>
            <div class="col-lg-12">
              <h1><?php echo $postsArray[$key]['title']; ?></h1>
              <p>
              <?php echo $postsArray[$key]['description']; ?>
              </p>
            </div>
          </div>
          <?php
        } else if ($postsArray[$key]['imglocation'] == "down")
        {
          ?>
          <div class="row info-restaurant">
            <div class="col-lg-12">
              <h1><?php echo $postsArray[$key]['title']; ?></h1>
              <p>
              <?php echo $postsArray[$key]['description']; ?>
              </p>
            </div>
            <div class="col-lg-12">
              <img src="<?php echo $postsArray[$key]['image']; ?>" alt="<?php echo $postsArray[$key]['imageAlt']; ?>" class="img-fluid">
            </div>
          </div>
          <?php
        } else if ($postsArray[$key]['imglocation'] == "none")
        {
          ?>
          <div class="row info-restaurant">
            <div class="col-lg-12">
              <h1><?php echo $postsArray[$key]['title']; ?></h1>
              <p>
              <?php echo $postsArray[$key]['description']; ?>
              </p>
            </div>
          </div>
            <?php
                }
              }
            }
            ?>
            </div>
          </article>

          <div class="general-info">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h2>Buffet</h2>
                  <p>
                    Info about buffet
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                  </p>
                  <img src="images/opening-icon.png" alt="Icon for Opening Hours" class="img-fluids">
                  <p class="hours-info">
                    Opening Hours <br>
                    Mon-Fri: 09:00 - 21:00 <br>
                    Sat: 11:00 - 23:00 <br>
                    Sun: Closed
                  </p>
                </div>
                <div class="col-md-6">
                  <h2>Delivery</h2>
                  <p>
                    Info about delivery
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                  </p>
                  <img src="images/delivery-icon.png" alt="Delivery Icon" class="img-fluid">
                  <p class="hours-info">
                    Delivery working Hours <br>
                    Mon-Fri: 10:00 - 20:00 <br>
                    Sat: 12 :00 - 22:00 <br>
                    Sun: Closed
                  </p>
                </div>
              </div>
            </div>
          </div>

            <div class="partners">
                <h3>Our Partners</h3>
                <div class="container">
                  <li><img src="images/partner-img1.jpg" alt="Wolt Partner Image" class="img-fluid"></li>
                  <li><img src="images/partner-img2.jpg" alt="Hotel Partner Image" class="img-fluid"></li>
                  <li><img src="images/partner-img3.jpg" alt="Spa Partner Image" class="img-fluid"></li>
                  <li><img src="images/partner-img4.jpg" alt="Fishin Company Partner Image" class="img-fluid"></li>
                  <li><img src="images/partner-img5.jpg" alt="Sports Center Partner Image" class="img-fluid"></li>
              </div>
            </div>

          <div class = "comments">
            <div class="container">
                <div class="row">
                  <div class="col-md-4 cmnt">
                    <div class="commentfield">
                    <?php
                    $commentArray = $dbHandle->runQuery("SELECT * FROM comments ORDER BY RAND() LIMIT 1;");
                    if(!empty($commentArray))
                    {
                      foreach ($commentArray as $key => $value)
                      {
                    ?>
                      <p class="comment">
                        <?php echo "\"" . $commentArray[$key]["userComment"] . "\"";
                        ?>
                      </p>
                      <p class="name">
                      <?php echo "- " . $commentArray[$key]["userName"];
                        ?>
                      </p>
                      <?php
                      }
                      }
                    ?>
                    </div>
                  </div>
                  <div class="col-md-4 central-form">
                  <form method="post" action="comment-posting.php">
                    <div class="form-row">
                      <div class="col-md-12">
                        <label for="validationDefault01">Write a short comment</label>
                        <input type="text" name="userComment" class="form-control" id="validationDefault01" placeholder="Comment" maxlength="140" required>
                      </div>
                      <div class="col-md-12">
                        <label for="validationDefault02">First name</label>
                        <input type="text" name="userName" class="form-control" id="validationDefault02" placeholder="Your name" maxlength="20" required>
                      </div>
                      <div class="col-md-12">
                      <label for="validationDefault03">E-mail</label>
                      <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" maxlength="50" placeholder="Enter email" required>
                      </div>
                    </div>
                    <input class="btn btn-dark" type="submit" value="Submit">
                  </form>
                  </div>
                  <div class="col-md-4 cmnt">
                  <div class="commentfield">
                  <?php
                    $commentArray = $dbHandle->runQuery("SELECT * FROM comments ORDER BY RAND() LIMIT 1;");
                    if(!empty($commentArray))
                    {
                      foreach ($commentArray as $key => $value)
                      {
                    ?>
                      <p class="comment">
                        <?php echo "\"" . $commentArray[$key]["userComment"] . "\"";
                        ?>
                      </p>
                      <p class="name">
                      <?php echo "- " . $commentArray[$key]["userName"];
                        ?>
                      </p>
                      <?php
                      }
                      }
                    ?>
                    </div>
                  </div>
                </div>
            </div>
          </div>

          </div>

 <?php include 'footer.php' ?>