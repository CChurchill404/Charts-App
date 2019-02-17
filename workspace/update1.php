<?php 
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Assessment');
    
    $sql = "UPDATE upcoming SET Assessments='$_POST[anime]' WHERE ID='$_POST[ide]'";
    
    //Execute Query
    if(mysqli_query($con,$sql))
    header("refresh:1; url=cms3.php");
    else
    echo "nope";
    ?>