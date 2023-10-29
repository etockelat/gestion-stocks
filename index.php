<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"  href="../vendors/bootst/bootstrap.min.css">
   <link href=" ../vendors/fontawesome/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href=" ../vue/css/sidebar.css">
 <script src=" ../vendors/fontawesome/js/all.min.js"></script>
  <script src=" ../vendors/bootst/bootstrap.min.js"></script>
  <script src=" ../vendors/bootst/bootstrap.bundle.min.js"></script>
  <script src=" ../vendors/jquery/jquery.min.js"></script>
 
	
	<title></title>
</head>
<body>

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"> Home</a>
  <a href="#">Client</a>
  <a id="exampleModal" href="#">Produit</a>
  <a href="#">Facture</a>
  <a href="fonction.php">Fonction</a>
  <a href="#"> Stock</a>
  <a href="">Utilisateur</a>
  <a href="">Mon compte</a>
  
</div>

<!--ouvrir le side bar -->
<span onclick="openNav()"> <i class="fas fa-align-justify"></i>
</span>

</body>
</html>
<script src=" ../vue/js/sidebars.js"></script>