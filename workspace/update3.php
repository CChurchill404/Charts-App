<?php 
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Random');
    
    $sql = "UPDATE rndm SET ModuleName='$_POST[mname]', 
    CourseworkScore='$_POST[mcourse]', 
    PracticalScore='$_POST[mprac]',
    ExamScore='$_POST[mexam]'
    WHERE ID='$_POST[id]'
    ";
    
    //Execute Query
    if(mysqli_query($con,$sql))
    header("refresh:1; url=cms5.php");
    else
    echo "nope";
    ?>