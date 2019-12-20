<html>
<head>
       <title> Sign Up and Login Page </title>
       <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" type="text/css"
       href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">`
       <h1> Welcome ADMIN </h1>
</head>
<body>

<div class="container">
    <div class="Login-box">
     <div class="row">
     <div class="col-md-6 login-left">
         <h2> Login Here </h2>
         <form action="admin_login_and_authentication.php" method="post">
          <div class="form-group">
             <label>Username</label>
             <input type="text" name="user" class="form-control" required>
             </div>
          <div class="form-group">
              <label>password</label>
             <input type="password" name="password" class="form-control" required>
             </div>
             <button type="submit" class="btn btn-primary"> Login </button>
         </form>
</body>
