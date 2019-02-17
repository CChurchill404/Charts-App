<html>
<head>
<a href="cmsform.php">
<img border="0" src="https://s3-eu-west-1.amazonaws.com/mystudentevents.com/content/uploads/2016/01/13013443/South-Devon-College-logo_1.jpg">
</a>
<link rel="stylesheet" type="text/css" href="styles1.css">
</head>
<body>
<div style="background-color: #FFAE1A; 
    border-width:5px; 
    border-style: solid; 
    border-color: #000000; 
    height: 5%; width: 12.7%; 
    position: absolute; 
    left: 42%; top: 10%; 
    font-family: 'Share Tech Mono', monospace;
    color= white;
    opacity: 0.5;
    position: relative">
<?php 
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Assessment');
    
    $sql = "SELECT * FROM upcoming ";
    
    //Execute Query
    $records = mysqli_query($con,$sql);
    
?>
<table>
    <tr>
        <th>Assessments</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr><form action=update1.php method=post>";
        echo "<td><input type=text name=anime value='".$row['Assessments']."'</td>";
        echo "<input type=hidden name=ide value='".$row['ID']."'>";
        echo "<td><input type =submit>";
        echo "</form></tr>";
        
    }
    ?>
</table>
</div>
</body>
</html>