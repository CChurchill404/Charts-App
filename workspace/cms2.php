<html>
<head>
<a href="cmsform.php">
<img src="https://s3-eu-west-1.amazonaws.com/mystudentevents.com/content/uploads/2016/01/13013443/South-Devon-College-logo_1.jpg">
<link rel="stylesheet" type="text/css" href="styles1.css">
</a>
</head>
<body>
<div style="background-color: #FFAE1A; 
    border-width:5px; 
    border-style: solid; 
    border-color: #000000; 
    height: 30%; width: 31.3%; 
    position: absolute; 
    left: 35%; top: 10%; 
    font-family: 'Share Tech Mono', monospace;
    color= white;
    opacity: 0.5;
    position: relative">
<?php 
    
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Assignments');
    
    $sql = "SELECT * FROM Modules";
    
    //Execute Query
    $records = mysqli_query($con,$sql);
    
?>
<table>
    <tr>
        <th>ModuleName</th>
        <th>ModulesScore</th>
        <th>Completed</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($records))
    {
        echo "<tr><form action=update.php method=post>";
        echo "<td><input type=text name=pname value='".$row['ModuleName']."'</td>";
        echo "<td><input type=text name=score value='".$row['ModulesScore']."'</td>";
        echo "<td><input type=text name=completed value='".$row['Completed']."'</td>";
        echo "<input type=hidden name=id value='".$row['ID']."'>";
        echo "<td><input type =submit>";
        echo "</form></tr>";
        
    }
    ?>
</table>
</div>
</body>
</html>