<!DOCTYPE html>
<html>
    <head>
        <title>Sign In Form</title>
        <link rel="stylesheet" href="loginStyle.css">
    </head>
    <body>
        <div class="sign-up-form">
            <h1>Login</h1>
            <form action="" method="POST">
                <input type="username" class="input-box" name="username" placeholder="Enter your username">
                <input type="password" class="input-box" name="password" placeholder="Enter your password">
                <input type="submit" class="signup-button" value="Login" name="submit"/>
                <hr>
                <p><font color = "#ffffff">New here? </font><a href="signup.php">Sign Up</a></p>
                <p><font color = "#ffffff">Go Back? </font><a href="home.html">Home</a></p>
            </form>
            <?php  
                if(isset($_POST["submit"])){
                    if(!empty($_POST['username']) && !empty($_POST['password'])) {  
                        $user=$_POST['username'];  
                        $pass=$_POST['password'];  
                        $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
                        mysqli_select_db($con,'user_registration') or die('<span style="color:#8b0000;">cannot select DB');  
                        $query=mysqli_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
                        $numrows=mysqli_num_rows($query);  
                        if($numrows!=0)  
                        {  
                        while($row=mysqli_fetch_assoc($query))  
                        {  
                        $dbusername=$row['username'];  
                        $dbpassword=$row['password'];  
                        }  
                        if($user == $dbusername && $pass == $dbpassword)  
                        {  
                        session_start();  
                        $_SESSION['sess_user']=$user;  
                        /* Redirect browser */  
                        header("Location: first.html");  
                        }  
                        } else {  
                        echo '<span style="color:#8b0000;">Invalid username or password!';  
                        }
                    } else {  
                        echo '<span style="color:#8b0000;">All fields are required!';  
                    }  
                }  
            ?>  
        </div>
    </body>
</html>