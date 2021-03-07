<?php include 'db.php' ?>

 <a href="gnInfoMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add New General Info</title>
   </head>
   <body>
   <div class="container">
   <form class="" method="post" enctype="multipart/form-data">
     General Info Title: <br>
     <input type="text" name="title" value="" required>
     General Info Description: <br>
     <textarea name="description" type="text" rows="10" required></textarea>
     General Info Image:<br>
     <input type="file" name="image" accept="image/*"> <br>
     Other Info: <br>
     <textarea name="otherinfo" type="text" rows="10"></textarea>
     <input type="submit" name="submit" value="Save Data" >
    </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      $gnTitle = $_POST['title'];
      $gnDescription = $_POST['description'];
      $gnImage = $_FILES['image']['name'];
      $gnOtherInfo = $_POST['otherinfo'];
      $imagesFolder = "../images/".basename($gnImage);

    $sql = "INSERT INTO generalinfo(title, description, image, otherinfo) VALUES('$gnTitle', '$gnDescription', 'images/$gnImage', '$gnOtherInfo')";

    $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

    $newPost = $dbHandle->insertQuery($sql);

    echo "New General Info Was Added to Main Page. <br> Please go back to General Info Management to see changes.";
    }
    ?>
   </body>
 </html>
