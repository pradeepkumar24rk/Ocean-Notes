<?php
    require 'connect.php';
    if(isset($_POST["submit"]))
    {
   
        $username1=$_POST["Username"];
        $password1=$_POST["Password"];
        // echo $username1;
        // echo $password1;
    
        $sql = "SELECT * FROM login1 WHERE username='$username1' && password='$password1'";
        $result = mysqli_query($con, $sql);   //checking whether the table require mates is there or not
        $row=mysqli_num_rows($result);
        //echo $row;
        
        
        if($row>0)
        {
            $fetch=mysqli_fetch_assoc($result);
            $id=$fetch["id"];
            if($username1=='admin')
            {
                header("location:fetchingdata.php?id=$id");
            }
            else
            {
                
                header("location:loading.php?id=$id");
            }
            echo "echo success";
        }
        else{
            $error[]= "<h4 style='color: rgb(223, 32, 64);text-transform:uppercase;''>user or password is incorrect</h2><br>";
        }
    }
   

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in </title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/1743032bc0.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="navbar">

        <h1>lo<span>go</span></h1>

        <ul>
            <li><a href="#"><i class="fa-solid fa-house" style="color: rgb(15, 189, 108);"></i> Home</a></li> 
            <li><i class="fa-solid fa-display" style="color: rgb(15, 189, 108);"></i> Service <i class="fa-solid fa-caret-down" style="color: rgb(15, 189, 108);"></i>
                <div class="sub-menu">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-android" style="color: rgb(15, 189, 108);"></i> App Development</a></li>
                        <li><a href="#"><i class="fa-brands fa-chrome" style="color: rgb(15, 189, 108);"></i> Web Development</a></li>       
                        <li><a href="#"><i class="fa-solid fa-link" style="color: rgb(15, 189, 108);"></i> Block chain</a></li> 
                    </ul>
                </div>
            </li> 
            <li><a href="#"><i class="fa-solid fa-user" style="color: rgb(15, 189, 108);"></i> About</a></li> 
            <li><a href="#"><i class="fa-solid fa-phone" style="color: rgb(15, 189, 108);"></i> Contact</a></li> 
        </ul> 

        <button onclick="window.location.href='registerform.php'">SIGN UP</button> 
        
    </div>
    <div class="loginform">
        <form action="" method="post">
            <h1>Lo<span style="color: rgb(15, 189, 108);">gin</span> </h1><br>


            <?php                                                  //php variable calling
            if(isset($error))
            {
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>


            <input type="text" class="uname" placeholder="Username" name="Username" required/><br><br>
            <input type="password" placeholder="Password" name="Password" required/><br><br>
            <button name="submit" type="submit">Login</button>
            <p style="margin:10px ;">
                If you don't have a account?<a href="registerform.php"> register </a>
            </p>
        </form>
    </div>
    <footer>
        <h3>Copyright © 2024 Interdeccan solution</h3>
    </footer>
</body>
</html>