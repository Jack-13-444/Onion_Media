

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img\onion.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style_sIgn_Up.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
   <div class="login-container">
   <h1>Sign Up</h1>
   <form action="check_on_signup.php" method="post">
   <div class="input-group" >
    <div class="username">

    <label for="username">Username</label>
    <input type="text" name="uname"  placeholder="username">
    <i class='bx bxs-user' style='color:#793892' ></i>

    </div>    
    
   <div class="email">
    <label for="email">Email</label>
    <input type="email" name="email"  placeholder="email">
    <i class='bx bxs-envelope' style=' color:#793892'  ></i>
    </div>
</div>
   <div class="input-group" >
 
    
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="password">
    <i class='bx bxs-lock-alt'  style=' color:#793892'></i>
    </div>

    <button type="submit">Sign Up</button>
   


    </div>         
</form>

</div>    
</body>
</html>
