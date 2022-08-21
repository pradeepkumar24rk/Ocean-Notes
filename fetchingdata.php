<style>
  .dbresult,.dbresult td ,.dbresult th{
    border: 1px solid black;
    border-collapse:collapse;
    padding: 8px;
  }
  .dbresult
  {
    width: 800px;
    margin:auto;

  }
  .dbresult tr:nth-child(odd){
    background-color: #b2d0d6;
  }
  .dbresult tr:nth-child(even){
    background-color:lightcyan;
  }
  
</style>
<script>
  function conf()
  {
    
  }
</script>

<?php

require 'connect.php';

$sql = "SELECT * FROM login1";
$result = mysqli_query($con, $sql);   //checking whether the table require mates is there or not

$row=mysqli_num_rows($result);
  // output data of each row
  if($row>0)
  {
    echo '<table class="dbresult">';
    echo "<tr>";
    echo "<th>DELETE</th>";
    echo "<th>ID</th>";
    echo "<th>FIRSTNAME</th>";
    echo "<th>LASTNAME</th>";
    echo "<th>EMAILID</th>";
    echo "<th>USERNAME</th>";
    echo "<th>PASSWORD</th>";
    echo "</tr>";
            
    while($fetch=mysqli_fetch_assoc($result))       // The required value is stored in associative array to fetch the data easly
    {
        $id=$fetch["id"];
        echo "<tr>";
        echo "<td><a href='delete.php?id=$id' onclick='return confirm(\'Are you sure want to delete the record?\');'>Delete</a></td>";  // pass the id value to url ...That value will get by delete.php file by using GET method
        echo "<td>".$fetch["id"]."</td>";
        echo "<td>".$fetch["firstname"]."</td>";
        echo "<td>".$fetch["lastname"]."</td>";
        echo "<td>".$fetch["emailid"]."</td>";
        echo "<td>".$fetch["username"]."</td>";
        echo "<td>".$fetch["password"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
  }

  ?>