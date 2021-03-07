<?php
 include 'header.php';

 $imgSlider = $dbHandle->getQuery("SELECT * FROM imgslider");
 $imgSliderArray = $dbHandle->runQuery("SELECT * FROM imgslider WHERE imgslidernum >= 1");
 $postsArray = $dbHandle->runQuery("SELECT * FROM maininfoposts ORDER BY id ASC");
 $commentArray = $dbHandle->runQuery("SELECT * FROM comments ORDER BY RAND() LIMIT 1;");
 $welcometxt = $dbHandle->getQuery("SELECT * FROM welcometxt");
 $partnersArray = $dbHandle->runQuery("SELECT * FROM partners ORDER BY id ASC");
 $generalInfoArray = $dbHandle->runQuery("SELECT * FROM generalinfo ORDER BY id ASC");

 ?>
      <div class="img-slider">

        <div class="welcome">
          <h1><?php echo $welcometxt['slidertitletxt']; ?></h1>
          <p><?php echo $welcometxt['sliderwelcometxt']; ?></p>
          <a href="#scroll-target" type="button" class="btn"><?php echo $welcometxt['sliderbuttontxt']; ?></a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <ol class="carousel-indicators">

            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $imgSlider['imgslidernum']; ?>" class="active"></li>

            <?php
            if(!empty($imgSliderArray))
            {
              foreach ($imgSliderArray as $key => $value)
              {
             ?>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $imgSliderArray[$key]['imgslidernum']; ?>"></li>
            <?php
                }
              }
            ?>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo $imgSlider['image']; ?>" class="d-block w-100 img-fluid" alt="<?php echo $imgSlider['imagealt']; ?>">
            </div>

            <?php
            if(!empty($imgSliderArray))
            {
              foreach ($imgSliderArray as $key => $value)
              {
             ?>
            <div class="carousel-item">
              <img src="<?php echo $imgSliderArray[$key]['image']; ?>" class="d-block w-100 img-fluid" alt="<?php echo $imgSliderArray[$key]['imagealt']; ?>">
            </div>
            <?php
                }
              }
            ?>

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
                if(!empty($postsArray))
                {
                  foreach ($postsArray as $key => $value)
                  {
                    if ($postsArray[$key]['imglocation'] == "right")
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
            } else if ($postsArray[$key]['imglocation'] == "left")
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
                <?php
                if(!empty($generalInfoArray))
                {
                  foreach ($generalInfoArray as $key => $value)
                  {
                 ?>
                <div class="col-md-6">
                  <h2><?php echo $generalInfoArray[$key]['title']; ?></h2>
                  <p>
                    <?php echo $generalInfoArray[$key]['description']; ?>
                    <?php if($generalInfoArray[$key]['image'] != "images/")
                    {
                    ?>
                  <img src="<?php echo $generalInfoArray[$key]['image']; ?>" alt="" class="img-fluids">
                  <?php
                    }
                   ?>
                  <p class="hours-info" style="white-space: pre-line;">
                    <?php echo $generalInfoArray[$key]['otherinfo']; ?>
                  </p>
                </div>
                <?php
                    }
                  }
                 ?>
              </div>
            </div>
          </div>

            <div class="partners">
                <h3>Our Partners</h3>
                <div class="container">
                <?php
                  if(!empty($partnersArray))
                  {
                    foreach ($partnersArray as $key => $value)
                    {
                  ?>
                    <li><img src="<?php echo $partnersArray[$key]['image']; ?>" alt="<?php echo $partnersArray[$key]['imageAlt']; ?>" class="img-fluid"></li>
                    <?php
                    }
                    }
                    ?>
              </div>
            </div>

          <div class = "comments">
            <div class="container">
                <div class="row">
                  <div class="col-md-4 cmnt">
                    <div class="commentfield">
                    <?php
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
