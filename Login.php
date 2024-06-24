<?php require_once "connection.php";

        session_start();
        if(isset($_SESSION["user"])){
            echo "<script>  window.location.href='index.php';</script>";   
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../CSS/style2.css">
</head>
<body>
    <h1 id="heading" style="color: azure;">Buzzthrough</h1>
    <div class="box">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h2 style="color: azure; margin-left: 95px;">Login Here</h2><br>
           <div class="input">
           <span><p id="email_err"> </p></span>
           <input type="text" name="email" id="email" placeholder="Enter Username or Email"><br><br>
           <span><p id="pass_err"> </p></span>
           <input type="password" name="pass"id="password" placeholder="Password"><br><br>
           </div>
           <a href="../PHP/forgot_pass.php" target="_blank" id="linking" style="color: azure;">Forgot password?</a> <br> <br>
           <input type="submit" name="log" value="Login" id="btn"> <br><br>
           <div class="otherpage">
           <button> <a href="../PHP/register.php" target="_blank" style="color: azure;" id="sign">Sign up</a></button>
           </div>
        </form>
        </div> 
        <script src="/JS/login.js"></script>  
        
</body>
</html>

<?php
    //   OR USER_ID='$text'
     if(isset($_POST['log'])){
          $text=$_POST["email"];
          $password=$_POST["pass"];
          $exist_query="SELECT * FROM register WHERE EMAIL='$text' OR USER_ID='$text'";
          $result=mysqli_query($conn,$exist_query);
          $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
          if($user){
                   
                   if(password_verify($password,$user["PASSWORD"])){
                         session_start();
                         $_SESSION["user"]="yes";
                         echo "<script>  window.location.href='index.php';</script>";
                    }
                    else{
                     echo "<script>
                            document.getElementById('password').style.border='1px solid red';
                            let pass_err=document.getElementById('pass_err').innerHTML='Password does not match';
                            pass_err.style.color='red';
                        
                          </script>";
                    }
              }
                 else{
                     echo "<script>
                            document.getElementById('email').style.border='1px solid red';
                            let email_err=document.getElementById('email_err').innerHTML='Email does not exist';
                            email_err.style.color='red';
                        
                          </script>"; 
                     }
                    }
?>