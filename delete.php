<?php

require 'connect.php';

if(isset($_GET["id"]))
{
    $id=$_GET["id"];    // we cannot use POST method ,because we get id value in url only so we want to use GET method only
    $sql = "DELETE FROM login1 WHERE id=$id";
    $result = mysqli_query($con, $sql);

    if($result)
    {
        // echo 'deleted successfully';
        header('location:fetchingdata.php');
    }
    else
    {
        echo 'Not Deleted';
    }
}

?>