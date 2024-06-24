  <?php 
       session_start();
       if(!isset($_SESSION["user"])){
           echo "<script>  window.location.href='login.php';</script>";   
       }
  ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
    <style>
        .img1 {
            margin-top: -250px;
            margin-right: 850px;
            overflow: visible;
        }

        .img2 {
            margin-top: -100px;
            margin-right: 500px;
        }

        .about {
            margin-top: 50px;
            margin-left: 450px;
            font-size: 50px;
            padding-top: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .about>h3 {
            margin-top: 40px;
            line-height: 15px;
            margin-bottom: 30px;
        }

        h3 {
            color: azure;
        }

        .speaker {
            margin-top: 80px;
            overflow: hidden;
            border: 3px solid white;
            width: 250px;
            margin-left: 100px;
        }

        .speaker img {
            object-fit: cover;
            transition: all ease 1s;
        }

        .speaker img:hover {
            scale: 1.2;
        }

        .desc {
            width: 50%;
            height: 330px;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            color: azure;

        }

        .desc p {
            font-size: 20px;
            word-break: 5px;
            letter-spacing: 3px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="../CSS/STYLE.css">
</head>

<body>
    <div class="head">
        <li> <a href="/HTML/index.html" target="_self" style="color: azure;">Buzzthrough</a></li>
        <nav id="navbar">
            <li> <a href="../HTML/About.html" target="_blank">About</a></li>
            <li><a href="../HTML/Speakers.html" target="_blank">Speakers</a></li>
            <li><a href="../HTML/Topic.html" target="_blank">Topic</a></li>
            <li> <a href="../PHP/Logout.php" id="logout">Logout</a></li>
            <li><button class="btn2"> <a href="../PHP/Register.php"  target="_blank">Register Now</a></button></li>
        </nav>
    </div>
    <script>
        document.getElementById("logout").addEventListener("click",()=>{
            confirm("Do you really want to logout");
        });
    </script>
    <div class="container">
        <div class="main">
            <h1>UNDER</h1>
            <h1>CONSTRUCTION</h1>
        </div><br>
        <h4>SITE NEARLY READY</h4>
        <div class="bar">
            <section id="part"></section>
        </div>
        <div class="btn">
            <button >Notify Me!</button>
        </div> <br><br>

        <section id="media">
            <div class="m"> <a href="https://www.facebook.com" target="_blank"><img src="../logo.png/facebook.png" alt="Not Found"></a></div>
            <div class="m"><a href="https://www.instagram.com"target="_blank"><img src="../logo.png/instagram_4401407.png" alt="Not Found"></a></div>
            <div class="m"><a href="https://www.linkedin.com/in/aman-yadav-ba1415264/"target="_blank"><img src="../logo.png/linkedin_1384014.png" alt="Not Found"></a></div>
            <div class="m"><a href="https://github.com/Cyboammy" target="_blank"><img src="../logo.png/github_2111432.png" alt="Not Found"></a></div>
        </section><br><br>
        <div class="about">
            <section>
                <article>
                    <h1 style="color: azure;">About The Website</h1>
                    <h2 style="color: azure;font-size: 30px;"> Level up your Knowledge with the latest educational website</h2>
                    <h3 style="color: azure;font-size: 20px;">I'm a paragraph. <br>Welcome to Buzzthrough, your premier destination for educational enrichment and learning resources! We are dedicated to providing a dynamic platform where learners of all ages and backgrounds can engage, explore, and excel. Our mission is to foster a love for learning by offering a diverse array of high-quality content, including articles, videos, interactive lessons, and more. Whether you're a student looking to enhance your academic skills, a professional seeking career development opportunities, or a lifelong learner eager to expand your knowledge, we have something for you. Join our vibrant community today and embark on a journey of discovery with Buzzthrough.</h3>
                </article>
            </section>
        </div>
        <div class="img1">
            <img src="../Images.jpg/mikita-yo-IO_CWfjXM7U-unsplash.jpg" alt="Not Found" height="500px" width="350px">

        </div>
        <div class="img2">
            <img src="../Images.jpg/valentin-beauvais-yVUQlyRlJSw-unsplash.jpg" alt="Not Found" height="300px"
                width="300px">
        </div>
        <div class="head2">
            <h3>Meet The Creater</h3>
            <div class="speaker">
                <img src="../logo.png/IMG_20240129_091346.png" alt="" height="300px" width="250px">
            </div>
        </div>
        <div class="desc">
            <p style="text-transform:capitalize;">Hello developers ,my name is aman yadav and currently i am a third year college student.
              i have started my developer journey by diving into the ocean of the languages and technology,from the day of my begining i am trying to be consistent and dedicated to learn new skills to upgrade my self as a developer. i agree that it is not easy to stay consistent because we are covered from distraction every where and our mind always gives us excuses to find an escapism from our goal but at the end of the day we will except that their was knowledge which can make our life brighter, so no matter what is our situation we should always moves towards our goals. 
            </p>
        </div>
        <div class="line">
        </div>
        <div class="mid">
            <h1 style="color: azure;">What You Will Learn</h1>
        </div>
        
        <section class="dsa">
        <div class="part">
            <h2 style="color: azure;">Database</h2>
            </div>
           <a href="https://www.geeksforgeeks.org/sql-tutorial/" target="_blank"> <div class="topics">Sql</div></a>
           <a href="https://www.geeksforgeeks.org/mysql-introdution/" target="_blank"> <div class="topics">MySql</div></a>
           <a href="https://www.geeksforgeeks.org/mongodb-an-introduction/" target="_blank"> <div class="topics">MongoDb</div></a>
           <a href="https://aws.amazon.com/free/?gclid=EAIaIQobChMI2KaN7oWHhAMVWaVmAh1_xAPTEAAYASAAEgJ1CPD_BwE&trk=14a4002d-4936-4343-8211-b5a150ca592b&sc_channel=ps&ef_id=EAIaIQobChMI2KaN7oWHhAMVWaVmAh1_xAPTEAAYASAAEgJ1CPD_BwE:G:s&s_kwcid=AL!4422!3!453325184782!e!!g!!aws!10712784856!111477279771&all-free-tier.sort-by=item.additionalFields.SortRank&all-free-tier.sort-order=asc&awsf.Free%20Tier%20Types=*all&awsf.Free%20Tier%20Categories=*all" target="_blank"> <div class="topics">Aws</div></a>
           <a href="https://azure.microsoft.com/en-in/free/search/?ef_id=_k_EAIaIQobChMI7M_1tYaHhAMVN888Ah03gQzdEAAYAiAAEgI4a_D_BwE_k_&OCID=AIDcmmf1elj9v5_SEM__k_EAIaIQobChMI7M_1tYaHhAMVN888Ah03gQzdEAAYAiAAEgI4a_D_BwE_k_&gad_source=1&gclid=EAIaIQobChMI7M_1tYaHhAMVN888Ah03gQzdEAAYAiAAEgI4a_D_BwE" target="_blank"> <div class="topics">MS Azure</div></a>    
        </section>
        <section class="frontend">
        <div class="part">
            <h2 style="color: azure;">Frontend</h2>
        </div>
           <a href="https://www.geeksforgeeks.org/html-tutorial/" target="_blank"> <div class="topics1">Html</div></a>
           <a href="https://www.geeksforgeeks.org/css-tutorial/" target="_blank"> <div class="topics1">Css</div></a>
           <a href="https://www.geeksforgeeks.org/js-tutorial/" target="_blank"> <div class="topics1">Js</div></a>
           <a href="https://www.geeksforgeeks.org/introduction-to-rust-programming-language/" target="_blank"> <div class="topics1">Rust</div></a>
           <a href="https://www.geeksforgeeks.org/react-tutorial/" target="_blank"> <div class="topics1">React</div></a>
        </section>
        <section class="backend">
        <div class="part">
            <h2 style="color: azure;">Backend</h2>
        </div>
           <a href="https://www.geeksforgeeks.org/java/" target="_blank"> <div class="topics2">Java</div></a>
           <a href="https://www.geeksforgeeks.org/nodejs/" target="_blank"> <div class="topics2">Node Js</div></a>
           <a href="https://www.geeksforgeeks.org/express-js/" target="_blank"> <div class="topics2">Express Js</div></a>
           <a href="https://www.geeksforgeeks.org/dbms/" target="_blank"> <div class="topics2">Database</div></a>
           <a href="https://www.geeksforgeeks.org/linux-tutorial/" target="_blank"> <div class="topics2">Linux</div></a>
        </section>
        <section class="tutorial">
        <div class="part">
            <h2 style="color: azure;">Tutorials</h2>
        </div>
           <a href="https://www.geeksforgeeks.org/cyber-security-types-and-importance/" target="_blank"> <div class="tut">Cyber Security</div></a>
           <a href="https://www.geeksforgeeks.org/search-engine-optimization-seo-basics/" target="_blank"><div class="tut">Seo</div></a>
           <a href="https://www.geeksforgeeks.org/what-is-digital-marketing/" target="_blank"><div class="tut">Digital Marketing</div></a>
           <a href="https://www.geeksforgeeks.org/introduction-to-ethical-hacking/" target="_blank"> <div class="tut">Ethical Hacking</div></a>
           <a href="https://www.geeksforgeeks.org/system-design-tutorial/" target="_blank"> <div class="tut">System Design</div></a>
        </section>
        <div class="backgrd">
        <div class="end">
        <footer>
         <h1 id="stay">Stay in the know</h1>
          <section id="mail">
            <h1>Join our mailing list</h1>
            <form method="post" action="#">
            <input type="email" name="mail" style="color:white;"> &nbsp;&nbsp; <button><input type="submit" id="ebtn" style="color:azure;" name="signup"></button>
            </form> 
        </section>
         <div id="email">
         <h2>Buzzthrough</h2>
         For any questions please email <br>ay7121788@gmail.com
         </div>  
        <span id="web">
            Visit our <a href="" style="color: azure; text-decoration:underline;"> website</a>
        </span>
         <span id="address">
            CIMS group of colleges,Kuanwala Haridrwar Road,Dehradun
        </span>
         <div id="lastline"></div>
         <div class="last">
            <small>© 2035 by Under Construction. Powered and secured by <a href="https://www.Wix.com" target="_blank"
                    style="color: azure;">Wix</a></small>
        </div>
    </footer>
</div>
</div>
     <!-- <div id="copyright"><span> @Buzzthrough,Education private limited,all rights reserved</span> </div> -->
    </div>
</body>

</html>

<?php
  $mail=$_POST["mail"];
  $signup=$_POST["signup"];
     if(isset($signup)){
        $query="INSERT INTO emailrecord VALUES('','$mail')";
        $result=mysqli_query($conn,$query);
          if($result){
            echo "<script>Email has been inserted successfully</script>";
          }
     }
?>