<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="//db.onlinewebfonts.com/c/1333b13c4f911f3160f1c2822573f70c?family=Poor+Richard" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    

    <title>Sushi Heaven</title>

        <!-- default favicon -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon">
    <!-- wideley used favicon -->
    <link rel="icon" href="/images/favico/favicon-32x32.png" sizes="32x32" type="image/png">

  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script>
      function myFunction()
      {
        var x = document.getElementById("hidden-menu");
        if (x.style.display === "block")
        {
          x.style.display = "none";
        } else
        {
          x.style.display = "block";
        }
      }
    </script>

          <!-- Navbar Starts Here -->
        <nav class="navbar-flex sticky-top">
          <a href="index.php" class="brand-text">
          <img src="images/brand-icon.png" alt="Sushi Heaven Icon" class="brand-icon img-fluid">
          Sushi Heaven
          </a>

          <div class="toggler-btn">
          <button class="navbar-toggler custom-toggler" href="javascript:void(0);" onclick="myFunction()" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          </div>

          <div id="hidden-menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="non-active" id="menu" href="menu.php">Menu</a></li>
            <li><a class="non-active" href="contacts.php">Contacts</a></li>
          </ul>

          <div class="lang-selector">
          <a href="index.php" class="lang-links"><img src="images/uk-icon.png" alt="UK LANGUAGE ICON" class="lang-icons img-fluid"></a>
          <a href="#" class="lang-links unactive"><img src="images/ru-icon.png" alt="RU LANGUAGE ICON" class="lang-icons img-fluid"></a>
          </div>

          </div>
        </nav>
        <!-- Navbar Ends Here -->
        <div class="page-content">
