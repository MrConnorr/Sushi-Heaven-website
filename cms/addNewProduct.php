<?php include 'db.php' ?>

 <a href="adminMenu.php"><img src="../images/back.png" alt="" style="width:50px"></a>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Add New Product</title>
   </head>
   <body>
     <div class="container">
     <form class="" action="addNewProduct.php" method="post" enctype="multipart/form-data">
     Product Code:<br>
     <input type="text" name="code" value="" required><br>
     Product Name:<br>
     <input type="text" name="name" value="" required><br>
     Product Description:<br>
     <textarea type="text" name="description" style="text-align:left;" rows="10" required></textarea><br>
     Product Price:<br>
     <input type="number" step="0.01" name="price" value="" required>€<br>
     Product Image:<br>
     <input type="file" name="image" accept="image/*"> <br>
     <input type="submit" name="submit" value="Save Data" >
    </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
    $pCode = $_POST['code'];
    $pName = $_POST['name'];
    $pDescription = $_POST['description'];
    $pPrice = $_POST['price'];
    $pImage = $_FILES['image']['name'];
    $imagesFolder = "../images/".basename($pImage);

    $sql = "INSERT INTO menu (code, name, description, price, image) VALUES('$pCode', '$pName', '$pDescription', '$pPrice', 'images/$pImage')";

    $imageMoveToFolder = move_uploaded_file($_FILES['image']['tmp_name'], $imagesFolder);

    $newProduct = $dbHandle->insertQuery($sql);

    echo "New Product Was Added to Menu. <br> Please go back to Menu Management to see changes.";
    }
    ?>
   </body>
 </html>
