

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img\onion.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style_Login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
   <div class="login-container">
   <h1>Login</h1>
   <form action="checking.php" method="post">
   <div class="input-group" >
   <div class="email">
    <label for="email">Email</label>
    <input type="email" name="email"  placeholder="email">
    <i class='bx bxs-envelope' style=' color:#793892'  ></i>
    </div>
</div>
   <div class="input-group" >
 
    
    <label for="email">Password</label>
    <input type="password" name="password" placeholder="password">
    <i class='bx bxs-lock-alt'  style=' color:#793892'></i>
    </div>

    <button type="submit">Login</button>
    <p>Don't have an account? <a href="Sign_Up.php">Sign Up</a></p>


    </div>         
</form>

</div>    
</body>
</html>
