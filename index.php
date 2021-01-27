<?php include ('Shop.php');?>


<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../ShopApi/WebShop-Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">
    <title>Webshop</title>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">WebShop</a>
    </div>
  </nav>
  <style> img {width: 50%; display: block; margin-left: auto; margin-right: auto; margin-top:auto; margin-bottom:auto;padding: 20px 0;}</style>

  <!-- Page Content -->
  <div class="container">
       <h3>BÄSTSÄLJARE</h3> 
    <div  class="row">
    
    <?php 
    $count = isset($_GET["limit"]) ? $_GET["limit"] : 10;
    
    Shop::main($count); ?>
    </div>
       
  </div>
  
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Olga Domorod & Jovana Hurra 2021</p>
    </div>
    
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>