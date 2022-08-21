<?php
require 'connect.php';
$id=$_GET['id'];
$sql="SELECT * FROM user_info WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
// print($row);
if($row==1)
{
    $fetch=mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Loading....</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="5; url=sticky notes.html?">
<link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./loading.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
	<video autoplay playsinline muted loop preload poster="http://i.imgur.com/xHO6DbC.png">
    <source src="https://storage.coverr.co/videos/7RzPQrmB00s01rknm8VJnXahEyCy4024IMG?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcHBJZCI6Ijg3NjdFMzIzRjlGQzEzN0E4QTAyIiwiaWF0IjoxNjI5MTg2NjA0fQ.M8oElp5VNO8bWEWmdF2nGiu3qDOOYRFfP8wkKvl8I20" />
	</video>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 285 80" preserveAspectRatio="xMidYMid slice">
    <defs>
      <mask id="mask" x="0" y="0" width="100%" height="100%" >
        <rect x="0" y="0" width="100%" height="100%" />
        <text x="72" y="50">NOTES</text>
      </mask>
    </defs>
    <rect x="0" y="0" width="100%" height="100%" />
  </svg>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
