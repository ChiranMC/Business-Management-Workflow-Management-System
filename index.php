<?php
echo ".";
// Database configuration
$servername = "localhost";
$username = "test";
$password = "test";
$dbname = "company";

// Establish the database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform a query to check if the user exists
    $sql = "SELECT * FROM Admin WHERE email = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: main-page.html");
        echo "Login successful!";
    } else {
        // User doesn't exist or invalid credentials
        echo "<label style='color:white;'>Invalid username or password</label>";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nils Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
	<style> @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap'); </style>
    <link rel="stylesheet" href="loginpagestyle.css">

</head>
<body style="background-color: black;">
<div class="row main">
    <div class="col-8 first-slide">
        <div class="titles">
                <span class="label-1">Welcome To,</span><br><span class="label-12">Nils Management</span>
        </div>
    </div>
    <div class="col-4 second-slide">
        <div class="loginPanel">
        <center>
        <span class="login_label">
            Login
        </span>
        <br>
        &nbsp;
    <form method="post" action="">
        <div class="foraligments">
        <div class="UsernameInput">
        <img class="usrnmIMG" src="images/username_Icon.png" alt="">
            <input type="text" placeholder="Username" name="username" class="username_TXTBOXcs" required>
        </div>
        </div>
        <div class="passwordInput">
            <img class="psswrdIMG" src="images/password_Icon.png" alt="">
            <input type="password" placeholder="Password" name="password" class="Password_TXTBOXcs" required>
        </div>
        <br>
        <input type="submit" name="login" value="Login" class="loging_BTN"><span class="loging_BTN_text" style="font-weight: 700;">Login</span></button>
        <br>
        <a href="ForgotPswd.php" class="troubleshoot-Link">Having Trouble Loging in ?</a>
    </form>
    </center>
        </div>
    </div>
    <img class="front_login_page_IMG" src="images/login_Pic.png" alt="">
</div>
</body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
    <title>Nils Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
	<style> @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap'); </style>
    <link rel="stylesheet" href="loginpagestyle.css">

</head>
<body style="background-color: black;">
<div class="row main">
    <div class="col-8 first-slide">
        <div class="titles">
                <span class="label-1">Welcome To,</span><br><span class="label-12">Nils Management</span>
        </div>
    </div>
    <div class="col-4 second-slide">
        <div class="loginPanel">
        <center>
        <span class="login_label">
            Login
        </span>
        <br>
        &nbsp;
       <form method="post" action="" class="Login_INFO">
            <div class="foraligments">
            <div class="UsernameInput">
            <img class="usrnmIMG" src="images/username_Icon.png" alt="">
            <input type="text" placeholder="Username" name="username_TXTBOX" class="username_TXTBOXcs">
            </div>
            </div>
        
            <div class="passwordInput">
                <img class="psswrdIMG" src="images/password_Icon.png" alt="">
                <input type="password" placeholder="Password" name="Password_TXTBOX" class="Password_TXTBOXcs">  
            </div>
            <br>
            <button type="submit" value="Login"  name="Login" class="loging_BTN"><span class="loging_BTN_text" style="font-weight: 700;">Login</span></button>
            <br>
            <a href="#" class="troubleshoot-Link">Having Trouble Loging in ?</a>
        </form>
        </center>
        </div>
    </div>
    <img class="front_login_page_IMG" src="images/login_Pic.png" alt="">
</div>
</body>
</html>
--> 


