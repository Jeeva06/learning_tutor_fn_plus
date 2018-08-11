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
                Name<br><input type="text" name="user_name" required><br><br>
                Mail Id<br><input type="text" name="mail_id" required><br><br>
                Password<br><input type="password" name="password" required><br><br>
                Re-EnterPassword<br><input type="password" name="re-password" required><br><br>
                <input type="submit" name="go" value="Register"><br><br>
            </form>
        </div>
        <?php
        if(isset($_POST['go'])){
        $name=$_POST['user_name'];
        $mail_id=$_POST['mail_id'];
        $password=$_POST['password'];
        $re_pass=$_POST['re-password'];
        if($password==$re_pass){
            $conn=new mysqli("localhost","root","","fn_plus");
            $sql=$conn->query("select *from login where mail_id='$mail_id'");
            if($sql->num_rows>0){
                echo"<script>alert('This mail_id already exists');</script>";
                echo"<script>window.location='login_page.php'</script>";
            }
            else{
            $sql1=$conn->query("insert into login values ('$name','$mail_id','$password')");
            echo"<script>alert('Registration Successful');</script>";
                echo"<script>window.location='login_page.php'</script>";
        }
        }
        else{
            echo"<script>alert('Password Mis-matches. Please try again');</script>";
        }
            
       
        }
        ?>
<!--
        <footer>
            All rights reserved &copy; <span style="font-weight:bold;">www.fn+community.com</span>
        </footer>
-->
    </body>
</html>