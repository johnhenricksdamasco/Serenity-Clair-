<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<style type="text/css">
    body
        {
        margin: 0;
        padding: 0;
        background-image: url(BGG.jpg);
        background-size: cover;
        font-family: sans-serif;
        }
    .mane{
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        width: 1100px;
        background-color: white;
        border-radius: 60px;
    }
    .mane h1{
        padding: 1px 0px 10px 0px;
    }
    .mane form{
        padding: 0 40px;
        box-sizing: border-box;
    }
    .right{
        border: none;
        padding: 10px 101px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 18px;
        margin: 40px 3px;
        cursor: pointer;
        font-weight: bold;
        position:relative; 
        left: 70px; 
        top:2px;
    }
    img{
        width: 500px;
        height: 500px;
    }
    .ig{
        padding-bottom: 700px;
        float: left;
    }
    .txt_field i {
        position: absolute;
        margin-top: 18px; 
        margin-left: 18px;
        margin-bottom: 20px;
    }
    .icon {
        padding: 10px;
        min-width: 40px;
    }
    input[type=email], 
        input[type=password] { 
            width: 100%; 
            padding: 12px 40px; 
            margin: 8px 0; 
            display: inline-block; 
            border: 1px solid #ccc; 
            box-sizing: border-box; 
            background-color: #9BA7AF;
            border-radius: 20px;    
        }
    ::placeholder {
        color: black;
    }
    .button { 
        background-color: #84B6D8; 
        padding: 13px 3px; 
        margin: 8px 0; 
        border: none; 
        width: 100%; 
        border-radius: 20px;
        font-size: 15px;
    }
    .button a{
        color: white;
    }
    p {
        font-size: 10px;
        float: left;
    }
    p a{
        text-decoration: none;
        color: black;
    }
    .sin h1{
        font-size: 10px;
        margin-top: 140px;
        margin-right: 200px;
    }
</style>
<div class="mane">
    <form class="right" action="login-user.php" method="POST" autocomplete="">
        <h1 class="name">Admin Login</h1>


        <div style="max-width:350px;margin:auto">
            <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
        <div class="txt_field">
            <i class="fas fa-envelope"></i>
            <input class="input-field" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
        </div>
        <div class="txt_field">
            <i class="fas fa-lock"></i>
            <input class="input-field" type="password" name="password" placeholder="Password" required>
        </div>
        </div><br><br>
        <div class="form-group">
                        <input class="button" type="submit" name="login" value="Login">
                    </div>

        <p><a href="forgot-password.php">Forget Password?</a></p>

        <div class="sin"><h1>
        <a href="signup-user.php">Create New Account?</a></h1>
        </div>
    </form>
    <form class="ig">
        <img src="LOGO Circle.png">
    </form>
</div>
</body>
</html>