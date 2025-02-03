<?php
$name = $pass = $phone = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $phone=$_POST['phone'];
    
}

// echo "Ram Ram <br>";
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database="aastha" ;


$con = mysqli_connect($servername, $username, $password,$database);

if(!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Succesfull connection";
    $sql="INSERT INTO `ph` (`id`, `name`, `pass`, `phone`) VALUES (NULL, '$name', '$pass', '$phone');";
    $result= mysqli_query($con,$sql);

    if($result){
        echo "Entry has been succesfully submitted";
    }
    else{
        echo "Recorde was not submitted -->" .mysqli_error($con);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="home.css\reg.css">
    <title>Register</title>

</head>
<body>
    <div class="container">
        <div class="title">Registration</div>  
        <form action="index.php" method="POST" >
            <div class="user-details">
                <div class="input-box">
                    <label for="name">Name</label>
                    <input type="text" name = "name" placeholder="Enter your first name" required>
                </div>
                <div class="input-box">
                    <label for="pass">Password</label>
                    <input type="text" name="pass" id = "pass" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id = "Phone" placeholder="Enter your number" required>
                </div>
            </div>
            <div id="register_btn" class="button">

                <input type="submit" value="Register">

            </div>
        </form>
        <div class="button">
            <input type="submit" onclick="location.href='login.html'" value="Back">
        </div>
    </div>
    <script src="https://unpkg.com/@supabase/supabase-js@2"></script>
    <script  src="register.js"></script>
</body>
</html>