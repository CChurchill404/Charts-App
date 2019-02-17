<?php 
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'AssessmentYear');
    
    $sql = "UPDATE Year SET Year='$_POST[pyear]', 
    Score='$_POST[pscore]' 
    WHERE ID='$_POST[i]'
    ";
    
    //Execute Query
    if(mysqli_query($con,$sql))
    header("refresh:1; url=cms4.php");
    else
    echo "nope";
    ?>