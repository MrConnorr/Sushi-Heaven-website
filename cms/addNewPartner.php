<?php include 'db.php' ?>

 <a href="adminPartners.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add New Partner</title>
   </head>
   <body>
     <form class="" action="addNewPartner.php" method="post" enctype="multipart/form-data">
     Partner Image:<br>
     <input type="file" name="image" accept="image/*"> <br>
     Partner Image Description:<br>
     <input type="text" name="imageAlt" value="" required><br>
     <input type="submit" name="submit" value="Save Data" >
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
    $pImage = $_FILES['image']['name'];
    $pImageAlt = $_POST['imageAlt'];
    $imagesFolder = "../images/".basename($pImage);

    $sql = "INSERT INTO partners (image, imageAlt) VALUES('images/$pImage', '$pImageAlt')";

    $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

    $newProduct = $dbHandle->insertQuery($sql);

    echo "New Partner Was Added. <br> Please go back to Menu Management to see changes.";
    }
    ?>
   </body>
 </html>
