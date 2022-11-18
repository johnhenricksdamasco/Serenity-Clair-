<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    
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
        .ig{
        padding-bottom: 700px;
        float: left;
    }
    .container{
        position: absolute;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        width: 1100px;
        background-color: white;
        border-radius: 60px;
    }
    .container form{
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
    input[type=email], 
        input[type=password],input[type=text] { 
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
    </style>
    <div class="container">
                <form action="signup-user.php" method="POST" autocomplete="" class="right">
                    <h2 class="text-center">Signup Form</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div><br>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
                <form class="ig">
        <img src="LOGO Circle.png">
    </form>
            </div>
    
</body>
</html>