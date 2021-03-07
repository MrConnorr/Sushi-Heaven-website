<?php include 'db.php' ?>

 <a href="postsMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add New Post</title>
   </head>
   <body>
     <div class="container">
     <form class="" method="post" enctype="multipart/form-data">
     Post Title:<br>
     <input type="text" name="title" value="" required><br>
     Post Description:<br>
     <textarea type="text" name="description" rows="10" required></textarea><br>
     Alt Image:<br>
     <input type="text" name="altimg" value=""> <br>
     Post Image:<br>
     <img src="" alt=""> <br>
     <input type="file" name="image" accept="image/*"> <br>
     Image Location: <br>
     <select name="imglocation" required>
     <option value="none" selected disabled hidden>Choose Image Location</option>
     <option value="none">None</option>
     <option value="left">Left</option>
     <option value="right">Right</option>
     <option value="up">Up</option>
     <option value="down">Down</option>
    </select>
     <input type="submit" name="submit" value="Save Data" >
    </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
      $pTitle = $_POST['title'];
      $pDescription = $_POST['description'];
      $pImage = $_FILES['image']['name'];
      $pImageAlt = $_POST['altimg'];
      $pImgLocation = $_POST['imglocation'];
      $imagesFolder = "../images/".basename($pImage);

    $sql = "INSERT INTO maininfoposts(title, description, image, imageAlt, imglocation) VALUES('$pTitle', '$pDescription', 'images/$pImage', '$pImageAlt', '$pImgLocation')";

    $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

    $newPost = $dbHandle->insertQuery($sql);

    echo "New Product Was Added to Main Page. <br> Please go back to Main Management to see changes.";
    }
    ?>
   </body>
 </html>
