<?php
session_start();
   if(!isset($_SESSION['username'])) {
    header('location:login.php');
   }

?>
<html>
    <head>
    <title>homepage</title>
    <link rel ="stylesheet" type ="text/css" href ="style.css">
     <link rel ="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class ="container">
    <a class ="float-right" href ="logout.php"> Log out </a>
    <h1>  welcome <?php echo $_SESSION['username']; ?> </h1>
</div>
</body>

</html>