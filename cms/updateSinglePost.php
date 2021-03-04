<?php
include 'db.php';

$a = $_GET["id"];
$post = $dbHandle->getQuery("SELECT * FROM maininfoposts WHERE id='$a'");
 ?>

 <a href="adminMain.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update <?php echo $post["title"]; ?></title>
   </head>
   <body>
     <form class="" method="post" enctype="multipart/form-data">
     Post Title:<br>
     <input type="text" name="title" value="<?php echo $post["title"] ?>" required><br>
     Post Description:<br>
     <textarea type="text" name="description" required><?php echo $post["description"] ?></textarea><br>
     Alt Image:<br>
     <input type="text" name="altimg" value="<?php echo $post['imageAlt'] ?>"> <br>
     Post Image:<br>
     <img src="<?php echo "../".$post["image"] ?>" alt=""> <br>
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

      <?php

      if(isset($_POST['submit']))
      {
        $pTitle = $_POST['title'];
        $pDescription = $_POST['description'];
        $pImage = $_FILES['image']['name'];
        $pImageAlt = $_POST['altimg'];
        $pImgLocation = $_POST['imglocation'];
        $imagesFolder = "../images/".basename($pImage);

        $query = $dbHandle->insertQuery("UPDATE maininfoposts set title='$pTitle', description='$pDescription', image='images/$pImage', imageAlt='$pImageAlt', imglocation='$pImgLocation' WHERE id='$a'");

        $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

        echo "Post was updated. <br> Please return back to Main Management to see changes";
      }

       ?>
   </body>
 </html>
