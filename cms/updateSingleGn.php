<?php
include 'db.php';

$a = $_GET["id"];
$gnInfo = $dbHandle->getQuery("SELECT * FROM generalinfo WHERE id='$a'");
 ?>

 <a href="gnInfoMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update <?php echo $gnInfo['title']; ?> Info</title>
   </head>
   <body>
   <div class="container">
   <form class="" method="post" enctype="multipart/form-data">
     General Info Title: <br>
     <input type="text" name="title" value="<?php echo $gnInfo['title']; ?>" required>
     General Info Description: <br>
     <textarea name="description" type="text" rows="10" required><?php echo $gnInfo['description']; ?></textarea>
     General Info Image:<br>
     <img src="<?php echo "../".$gnInfo["image"]; ?>" alt="" style="width:50%;"> <br>
     <input type="file" name="image" accept="image/*"> <br>
     Other Info: <br>
     <textarea name="otherinfo" type="text" rows="10"><?php echo $gnInfo['otherinfo']; ?></textarea>
     <input type="submit" name="submit" value="Save Data" >
    </form>
    </div>

      <?php

      if(isset($_POST['submit']))
      {
        $gnTitle = $_POST['title'];
        $gnDescription = $_POST['description'];
        $gnImage = $_FILES['image']['name'];
        $gnOtherInfo = $_POST['otherinfo'];
        $imagesFolder = "../images/".basename($gnImage);

        $query = $dbHandle->insertQuery("UPDATE generalinfo set title='$gnTitle', description='$gnDescription', image='images/$gnImage', otherinfo='$gnOtherInfo' WHERE id='$a'");

        $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

        echo "General Info was updated. <br> Please return back to General Info Management to see changes";
      }

       ?>
   </body>
 </html>
