<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="loginStyle.css">
    </head>
    <body>
        <script>
            function check_Email(mail){
                var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
                if(regex.test(mail.myemail.value)){
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>
        <div class="sign-up-form">
            <h1>Register</h1>
            <form name="login" action="" method="POST" onSubmit="if(!check_Email(this.email)){alert('INVALID EMAIL ID')}">
                <input type="username" class="input-box" name="username" placeholder="Enter your username">
                <input type="password" class="input-box" name="password" placeholder="Enter your password">
                <input type="email" class="input-box" name="email" placeholder="Enter your email">
                <input type="submit" class="signup-button" name="submit" value="Submit"/>
                <hr>
                <p><font color = "#ffffff">Do you have an account? </font><a href="signin.php">Sign In</a></p>
                <p><font color = "#ffffff">Go Back? </font><a href="home.html">Home</a></p>
            </form>
            <?php  
                if(isset($_POST["submit"])){  
                    if(!empty($_POST['username']) && !empty($_POST['password'])) {  
                        $user=$_POST['username'];  
                        $pass=$_POST['password'];  
                        $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
                        mysqli_select_db($con,'user_registration') or die("cannot select DB");  
                    
                        $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
                        $numrows=mysqli_num_rows($query);  
                        if($numrows==0)  
                        {  
                        $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
                    
                        $result=mysqli_query($con,$sql);  
                            if($result){  
                        echo '<span style="color:#8b0000;">Account Successfully Created';  
                        } else {  
                        echo '<span style="color:#8b0000;">Failure!';  
                        }  
                    
                        } else {  
                        echo '<span style="color:#8b0000;">That username already exists! Please try again with another.';  
                        }  
                    
                    } else {  
                        echo '<span style="color:#8b0000;">All fields are required!';  
                    }  
                }  
            ?>  
        </div>
    </body>
</html>