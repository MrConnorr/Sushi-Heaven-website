<?php
include 'db.php';

$a = $_GET["id"];
$imageSlider = $dbHandle->getQuery("SELECT * FROM imgslider WHERE id='$a'");
 ?>

 <a href="imgSliderMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update Slider Image</title>
   </head>
   <body>
     <div class="container">
     <form class="" method="post" enctype="multipart/form-data">
     Slider Image Alt:<br>
     <input type="text" name="altimg" value="<?php echo $imageSlider['imagealt']; ?>" required> <br>
     Slider Image:<br>
     <img src="<?php echo "../".$imageSlider["image"]; ?>" alt="" style="width:50%;"> <br>
     <input type="file" name="image" accept="image/*" required> <br>
     Slider Image Number: <br>
     <?php if($imageSlider['imgslidernum'] != 0)
     {
       ?>
     <input type="number" name="imgNum" value="<?php echo $imageSlider['imgslidernum']; ?>" required>
   <?php
    } else
    {
      ?>
      <input type="number" name="imgNum" value="<?php echo $imageSlider['imgslidernum']; ?>" readonly>
    <?php
      }
     ?>
     <input type="submit" name="submit" value="Save Data" >
    </form>
    </div>

      <?php

      if(isset($_POST['submit']))
      {
        $sImage = $_FILES['image']['name'];
        $sImageAlt = $_POST['altimg'];
        $sImageSliderNum = $_POST['imgNum'];
        $imagesFolder = "../images/".basename($sImage);

        $query = $dbHandle->insertQuery("UPDATE imgslider set image='images/$sImage', imageAlt='$sImageAlt', imgslidernum='$sImageSliderNum' WHERE id='$a'");

        $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

        echo "Image in Slider was updated. <br> Please return back to Image Slider Management to see changes";
      }

       ?>
   </body>
 </html>
