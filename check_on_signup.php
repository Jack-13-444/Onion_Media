<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check page</title>
    <link rel="stylesheet" href="css/LOgin-to.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
<?php
function checklenword($password,$int){
    if(strlen($password) < $int){
        return true;
        
    }else{
        return false;
    }
}
    
    


 if($_SERVER['REQUEST_METHOD'] == "POST"){
    // inputs 
    $password = $_POST['password'];
    $email = $_POST['email'];
    // ? 
    filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

    htmlspecialchars($password);    
    htmlspecialchars($email);

    addslashes($password);
    addslashes($email); 
    // check password
    if (checklenword($password, 8)) {        

       echo "<form action=\"Login.php\" method=\"post\">";

       echo "<div class=\"check-password\">"; 

       echo "<h1>ERROR</h1>";

       echo "<p >" . "This password must be greater than 8" . "</p>";

      
       echo "<button><i class=\"bx bx-arrow-back\"></i></button>";

       echo "</div>"; 
       echo "</form>";

    }
    // check email
    elseif(checklenword($email,1)) { 
        echo "<form action=\"Login.php\" method=\"post\">";

        echo "<div class=\"check-password\">"; 

        echo "<p>" . "You, Not write email" . "</p>";

        echo "<button><i class=\"bx bx-arrow-back\"></i></button>";
        echo "</div>"; 
        echo "</form>";

     
    }

    

 }
?>
</body>
</html>