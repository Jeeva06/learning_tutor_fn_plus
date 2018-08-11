<!DOCTYPE html>
<html>
    <head>
        <title>Login-page:Fn+ Community</title>
        <link rel="stylesheet" type="text/css" href="fn_plus.css">
    </head>
    <body>
    <header class="home_header">
    
        <span style="font-size:30px;">Welcome to Fn+ Community</span>
        <nav>
            <ul>
                <li><a href="home.php">HOME</a></li>
                <li><a href="" style="background-color:darkgrey;color:#00004f">LOGIN</a></li>
                <li><a href="">CONTENTS</a></li>
                <li><a href="">CONTACT US</a></li>
            </ul>
        </nav>
        </header>
        <div class="login-form"><img src="person.png">
            <form action="" method="post"><br>
                Name (Mail Id)<br><input type="text" name="user_name" required><br><br>
                Password<br><input type="password" name="password" required><br><br>
                <input type="submit" name="login" value="Sign In"><br><br>
                Don't have an account? Create one <a href="reg_page.php" style="font-size:30px;letter-spacing:1px;color:white;text-shadow:1px 1px dodgerblue,2px 2px dodgerblue;text-decoration:none">here</a>
                
                <?php
                if(isset($_POST['login'])){
                    $mail=$_POST['user_name'];
                    $pass=$_POST['password'];
                     $conn=new mysqli("localhost","root","","fn_plus");
                    $sql=$conn->query("select *from login where mail_id='$mail'");
                    if($sql->num_rows>0){
                    $row=$sql->fetch_assoc();
                    $db_pass=$row['password'];
                    if($pass==$db_pass){
                        echo "<script>alert('Login success')</script>;";
                         echo"<script>window.location='www.google.com'</script>";
                    }else{
                        echo "<script>alert('Incorrect Password')</script>";
                    }
                }
                    else{
                        echo "<script>alert('This mail_id has not been Registered');</script>";
                         echo"<script>window.location='reg_page.php'</script>";
                    }
                }
                ?>
            </form>
        </div>
        <footer>
            All rights reserved &copy; <span style="font-weight:bold;">www.fn+community.com</span>
        </footer>
    </body>
</html>