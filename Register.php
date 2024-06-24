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
    <title>Registration Page</title>
<link rel="stylesheet" href="../CSS/style3.css">
</head>
<body>
     <h1 id="heading" style="color: azure;">Buzzthrough</h1>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
              
            <h2 style="color: azure;margin-left: 50px;">Register Here</h2><br><br>
            <p id="main_err"></p>
            <div class="box">
            <p id="name_err"></p>
            <input type="text" name="fname" id="name"  placeholder="Enter User Id"><br><br> 
             <p id="msg"></p>    
            <input type="password" name="pass" id="passwrd"placeholder="Enter Password" ><br><br>
            <input type="email" name="email" id="email" placeholder="Enter Email Id"><br><br>
            <p id="ph_error"></p>
            <input type="number" name="num" id="ph_no"placeholder="Enter Mobile Number"><br><br>
            </div>
            <input type="submit" name="register" id="btn">
        </form>
        </div>
        <script src="../JS/validation.js"></script>
</body>
</html>


 <?php

function test_input($data)
  {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
  }
if (isset($_POST['register']))
 {

    $name =htmlspecialchars($_POST["fname"]);
    $email =htmlspecialchars($_POST["email"]);
    $password =htmlspecialchars($_POST["pass"]);
    $phno =htmlspecialchars($_POST["num"]);
    
    
    
        $name=test_input($name);
        $email=test_input($email);
        $password=test_input($password);
        $phno=test_input($phno);
     
     //Hash form of the password
    $password_hash=password_hash($password,PASSWORD_BCRYPT);

    //Code to check weather user already exist or not 
    $user_already_exists="SELECT * FROM register WHERE EMAIL='$email' AND USER_ID = '$name'";
    $email_chk=mysqli_query($conn,$user_already_exists);
  
     if($email_chk)
     {
      if(mysqli_num_rows($email_chk)>0)
      {
        $result_fetch = mysqli_fetch_assoc($email_chk);
        if($result_fetch['USER_ID'] == $name)
        {
          echo"<script>alert('username already taken');
          window.location.href='register.php';
          </script>";

        }
        else
        {
          echo"<script>alert('email alerady registered');
          window.location.href='register.php';
          </script>";
        }
      }
      else
      {
        if(!empty($name && $password &&$email && $phno)){
        $query="INSERT INTO register VALUES ('$name','$password_hash','$email','$phno')";
        if(mysqli_query($conn,$query))
        {
          echo"<script>alert('Registration successfully');
          window.location.href='login.php';</script>";
        } 
        }
        else
        {
          echo"<script>let done=document.getElementById('btn');
          done.addEventListener('click',()=>{
            let phno=document.getElementById('ph_no');
            let name=document.getElementById('name');
            let paswrd=document.getElementById('passwrd');
            let email=document.getElementById('email');
              if(phno.value.length=='' || email.value.length=='' || paswrd.value.length=='' || name.value.length==''){
                  let main_err=document.getElementById('main_err');
                  main_err.innerHTML='All fields are required';
                  main_err.style.color='red';
                  main_err.style.display='block';
                  main_err.style.fontSize='17px';
                  
              }
              else{
                  main_err.style.display='none';
                  main_err.innerHTML=''; 
              }
          })</script>";
        }    
      }
     }
     else
     {
      echo"<script>alert('error1');</script>";
     }
    }
  
?> 
