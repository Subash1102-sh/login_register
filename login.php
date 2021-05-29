<!DOCTYPE html>
<html>
<head>
     <title>Login and Register page</title>
     <link rel ="stylesheet" type ="text/css" href ="style.css">
     <link rel ="stylesheet" type ="text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class name ="container">
     <div class ="login-box">
    <div class ="row">  
    <div class ="col-md-6 login-left">
    <h2>login here </h2>
    <form action = "validation.php" method ="post">
     <div class ="form-group">
     <label>username</label>
     <input type ="text"name ="user" class ="form-control" required >
</div>
<div class ="form-group">
     <label>password</label>
     <input type ="password"name ="password" class ="form-control" required >
</div>
   <button type ="submit" class ="btn btn-primary">log in </button>
</form>
</div>
     <div class ="col-md-6 login-right">
     <h2>Register here </h2>
     <form action ="register.php" method ="post">
     <div class ="form-group">
      <label>username</label>
      <input type ="text"name ="user" class ="form-control" required >
 </div>
 <div class ="form-group">
      <label>password</label>
      <input type ="password"name ="password" class ="form-control" required >
 </div>
     <button type ="submit" class ="btn btn-primary">Register </button>

</div>
</body>
</html>