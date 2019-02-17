<?php 
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Assignments');
    
    $sql = "UPDATE Modules SET ModuleName='$_POST[pname]', 
    ModulesScore='$_POST[score]', 
    Completed='$_POST[completed]'
    WHERE ID='$_POST[id]'
    ";
    
    //Execute Query
    if(mysqli_query($con,$sql))
    header("refresh:1; url=cms2.php");
    else
    echo "nope";
    ?>