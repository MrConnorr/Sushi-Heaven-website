<?php
include 'db.php';

$a = $_GET["id"];
$product = $dbHandle->getQuery("SELECT * FROM menu WHERE id='$a'");
 ?>

 <a href="adminMenu.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Update <?php echo $product["name"] ?> product</title>
   </head>
   <body>
     <form class="" method="post" enctype="multipart/form-data">
     Product Code:<br>
     <input type="text" name="code" value="<?php echo $product["code"] ?>" required><br>
     Product Name:<br>
     <input type="text" name="name" value="<?php echo $product["name"] ?>" required><br>
     Product Description:<br>
     <textarea type="text" name="description" required><?php echo $product["description"] ?></textarea><br>
     Product Price:<br>
     <input type="number" step="0.01" name="price" value="<?php echo $product["price"]; ?>" required>€<br>
     Product Image:<br>
     <img src="<?php echo "../".$product["image"] ?>" alt=""> <br>
     <input type="file" name="image" accept="image/*"> <br>
     <input type="submit" name="submit" value="Save Data" >
    </form>

      <?php
      
      if(isset($_POST['submit']))
      {
        $pCode = $_POST['code'];
        $pName = $_POST['name'];
        $pDescription = $_POST['description'];
        $pPrice = $_POST['price'];
        $pImage = $_FILES['image']['name'];
        $imagesFolder = "../images/".basename($pImage);

        $query = $dbHandle->insertQuery("UPDATE menu set code='$pCode', name='$pName', description='$pDescription', price='$pPrice', image='images/$pImage' WHERE id='$a'");

        $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

        echo "Product info was updated. <br> Please return back to Menu Management to see changes";
      }

       ?>
   </body>
 </html>
