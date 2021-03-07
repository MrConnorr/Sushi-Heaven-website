<?php include 'db.php' ?>

 <a href="imgSliderMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add New Image To Slider</title>
   </head>
   <body>
     <div class="container">
     <form class="" method="post" enctype="multipart/form-data">
     Slider Image Alt:<br>
     <input type="text" name="altimg" value="" required> <br>
     Slider Image:<br>
     <input type="file" name="image" accept="image/*" required> <br>
     Slider Image Number: <br>
     <input type="number" min="1" name="imgNum" value="" required> <br>

     <input type="submit" name="submit" value="Add Image" >
    </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      $sImage = $_FILES['image']['name'];
      $sImageAlt = $_POST['altimg'];
      $sImageSliderNum = $_POST['imgNum'];
      $imagesFolder = "../images/".basename($sImage);

    $sql = "INSERT INTO imgslider(image, imageAlt, imgslidernum) VALUES('images/$sImage', '$sImageAlt', '$sImageSliderNum')";

    $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

    $newImageToSlider = $dbHandle->insertQuery($sql);

    echo "New Product Was Added to Main Page. <br> Please go back to Main Management to see changes.";
    }
    ?>
   </body>
 </html>
