<?php
require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
    <link rel="stylesheet" href="../CSS/forgot.css">
</head>
<body>
    <header><h1>Buzzthrough</h1></header>
     <div class="container">
        <form action="" method="post">
              <span> <p id="error">  </p> </span>
            <input type="text" name="text" id="input" placeholder="Enter Email or Username">
             <input type="submit" value="Submit" id="submit" name="submit">
        </form>
     </div>
</body>
</html>


<?php
    if(isset($_POST["submit"])){

        $text=$_POST["text"];
           if(empty($text)){
            echo "<script>var error=document.getElementById('error').innerHTML='Please enter username or email'; 
                          error.style.color='red';
                          error.style.display='block';
                          error.style.fontSize='17px';
                  </script>";
           }
           else{
            $query="SELECT * FROM register WHERE EMAIL='$text' OR USER_ID='$text'";
            $result=mysqli_query($conn,$query);
            $rowcount=count($result);
            if($rowcount!=0){
                $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
                   if($user["USER_ID"]==$text || $user["EMAIL"]==$text){
                    echo "<script> window.location.href='index.php';</script>";
                    //Creating new password code
                   }
                   else{
                    echo "<script> 
                           let btn=document.getElementById('submit').addEventListener('click',()=>{
                             let err=document.getElementById('error').innerHTML='Feild does not match';
                             err.style.color='red';
                             err.style.display='block';
                             err.style.fontSize='17px';
                           });
                         </script>";
                   }
               }
               else{
                   echo "<script> var error=document.getElementById('error').innerHTML='User does not exist';
                                error.style.color='red';
                                error.style.display='block';
                                error.style.fontSize='17px';
                        </script>";
               }
           }
          
    }

?>