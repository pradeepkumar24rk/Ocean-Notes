<!-- <style>
  h1{
    display:none;
  }
</style> -->

<?php
$con=mysqli_connect('localhost','root','','student');
if(!$con)
{
die('connection error:'.mysqli_connect_error());
}
// echo '<h1>connection successfull</h1>';

?>