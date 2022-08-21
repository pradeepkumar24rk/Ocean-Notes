<?php
    require 'connect.php';
    if(isset($_POST["submit"]))
    {
        $firstname1=$_POST["firstname"];
        $lastname1=$_POST["lastname"];
        $emailid1=$_POST["emailid"];
        $username1=$_POST["username"];
        $password1=$_POST["password"];
        $cpassword1=$_POST["cpassword"];


        $select="SELECT * FROM login1 WHERE emailid='$emailid1' && password='md5($password1' ";
        $result=mysqli_query($con,$select);
        if(mysqli_num_rows($result)>0)
        {
            $error[]='user already exist!';
        }
        else{
            if($password1!=$cpassword1)
            {
                $error[]='password not matched';
            }
            else{
                $sql="INSERT INTO login1(firstname,lastname,emailid,username,password)VALUES('$firstname1','$lastname1','$emailid1','$username1','$password1')";
                $query=mysqli_query($con,$sql);
                header('location:registerform.php');
                $error[]='Thanks for register';
            }
        }
        
    }

?>                    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-image: linear-gradient(to right,rgba(24, 20, 20, 0.315),rgba(17, 16, 16, 0.658)),url("registerform.jpg");
            background-size: cover;
        }
        form{
            /* margin: 100px; */
             margin-left: 400px;
            margin-top: 30px;
            width: 630px;
            height: inherit;
            border: outset 2px white;
            padding: 10px;
            padding-left: 100px;
            border-radius: 30px;
            background-color: rgba(90, 102, 102, 0.39);
            opacity: 0;
            transform: translateY(-30px);
            animation: moveup 0.5s linear forwards;
        }
        @keyframes moveup {
            100%
            {
                opacity: 1;
                transform: translateY(0px);
                
            }
            
        }
        form h2{
            color: aliceblue;
            text-transform: uppercase;
            font-size: 30px;
            padding: 40px;
            padding-left: 70px;
            cursor: default;
            /* background-color: red; */
            height:30px ;
        }
        span
        {
            color:rgb(15, 189, 108); 
        }
        form input
        {
            margin-left: 20px;
            width: 285px;
            height: 40px;
            border: none;
            border-radius: 30px;
            font-size: 15px;
            padding-left: 10px;
        }
        form label
        {
            color: aliceblue;
            font-size: 20px;
        }
        button
        {
        padding: 20px 30px;
        border-radius: 10px;
        border: none;
        margin: 20px;
        margin-left: 150px;
        background-color: rgb(15, 189, 108); 
        color: aliceblue;
        font-size: 20PX;
        text-transform: uppercase;
        }
        button:hover{
            background-color: rgb(41, 124, 76);
            cursor: pointer;
        }
        .form-container form .error-msg{
            margin-bottom: 10px;
            display: block;
            background: crimson;
            color: white;
            border-radius: 5px;
            font-size: 20px;
            padding: 10px;
            padding-left: 65px;
            width: 60%;
        }

    </style>
    <!-- <script>
        function F1()
        {
            document.getElementById("tq").style.visibility="visible";
        }
    </script> -->
</head>
<body>
    <div class="form-container">
        <form action="" method="post" >
            <h2>Register<span>form</span></h2><br>
            <?php
            if(isset($error))
            {
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="name" style="margin-left:85px ;" placeholder="FIRST NAME" required><br><br>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" style="margin-left:86px ;" placeholder="LAST NAME" required><br><br>
            <label for="emailid">Email ID</label>
            <input type="email" name="emailid" id="emailid" style="margin-left:95px ;" placeholder="EMAIL ID" required><br><br>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" style="margin-left:90px ;" placeholder="USER NAME" required><br><br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" style="margin-left:95px ;" placeholder="PASSWORD" required><br><br>
            <label for="password">Confirm Password</label>
            <input type="password" name="cpassword" id="cpassword" style="margin-left:30px ;" placeholder="PASSWORD" required><br><br>

            <button name="submit" type="submit">register</button><br>
            
            <!-- <label id="tq" style="color: rgb(22, 230, 108);visibility: hidden; font-size: 30PX;">*Thanks for the register</label> -->
        </form>
    </div>
</body>
</html>