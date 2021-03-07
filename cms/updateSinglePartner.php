<?php
include 'db.php';

$a = $_GET["id"];
$partner = $dbHandle->getQuery("SELECT * FROM partners WHERE id='$a'");
 ?>

 <a href="adminPartners.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update Partner</title>
   </head>
   <body>
     <div class="container">
     <form class="" method="post" enctype="multipart/form-data">
     Partner Image:<br>
     <img src="<?php echo "../".$partner["image"] ?>" alt="" style="width:50%;"> <br>
     <input type="file" name="image" accept="image/*" required> <br>
     Partner Image Description:<br>
     <input type="text" name="imageAlt" value="<?php echo $partner['imageAlt']; ?>" required><br>
     <input type="submit" name="submit" value="Save Data" >
    </form>
    </div>

      <?php

      if(isset($_POST['submit']))
      {
        $pImage = $_FILES['image']['name'];
        $pImageAlt = $_POST['imageAlt'];
        $imagesFolder = "../images/".basename($pImage);

        $query = $dbHandle->insertQuery("UPDATE partners set image='images/$pImage', imageAlt='$pImageAlt' WHERE id='$a'");

        $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

        echo "Partner info was updated. <br> Please return back to Partner Management to see changes";
      }

       ?>
   </body>
 </html>
