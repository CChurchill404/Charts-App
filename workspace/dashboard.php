<html>
<head>
<title>Dashboard</title>
<img src="https://s3-eu-west-1.amazonaws.com/mystudentevents.com/content/uploads/2016/01/13013443/South-Devon-College-logo_1.jpg">
<link rel="stylesheet" type="text/css" href="styles1.css">
<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
<div style="background-color: #FFAE1A; 
    border-width:5px; 
    border-style: solid; 
    border-color: #000000; 
    height: 7.7%; width: 25%; 
    position: absolute; 
    left: 37%; top: 50%; 
    font-family: 'Share Tech Mono', monospace;
    color= white;
    opacity: 0.5;
    position: relative">
<?php

$con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Random');
    
    $sql = "SELECT ModuleName,CourseworkScore,PracticalScore,ExamScore FROM rndm ORDER BY RAND() LIMIT 1";
    
    //Execute Query
    $records = mysqli_query($con,$sql);

?>
 <table border = 1>
    <tr>
        <th>Module Name</th>
        <th>Coursework Score</th>
        <th>Practical Score</th>
        <th>Exam Score</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($records))
    {
    
        echo "<td>'".$row['ModuleName']."'</td>";
        echo "<td>'".$row['CourseworkScore']."'</td>";
        echo "<td>'".$row['PracticalScore']."'</td>";
        echo "<td>'".$row['ExamScore']."'</td>";
        echo "<input type=hidden name=id value='".$row['ID']."'>";
        echo "</form></tr>";
        
    }
?>
</table>
</div>
</head>
<body>
<body>
<style>
.button {
    background-color: #FFAE1A;
    border: 5px;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    opacity: 0.5;
    font-family: 'Share Tech Mono', monospace;
    width: 40%;
    position: relative; 
    left: 30%; top: 60%; 
    border-width:5px; 
    border-style: solid; 
    border-color: #000000; 
}
</style>    
<div>
<form method="get" action="gdaverage.php">
<button class="button">Year Grade Averages</button>
</form>
</div>  
<div>
<form method="get" action="completed.php">
<button class="button">Completed Units</button>
</form>    
</div>
<div>
<form method="get" action="charts.php">
<button class="button">Completed Module Scores</button>
</form>
</div>

<div>
<form method="get" action="cmsform.php">
<button class="button">Content Management System</button>
</form>    
</div>
<div>
    <div style="background-color: #FFAE1A; 
    border-width:5px; 
    border-style: solid; 
    border-color: #000000; 
    height: 7%; width: 8%; 
    position: absolute; 
    left: 46%; top: 85%; 
    font-family: 'Share Tech Mono', monospace;
    color= white;
    opacity: 0.5;">
<?php

$con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'Assessment');
    
    $sql = "SELECT * FROM upcoming";
    
    //Execute Query
    $records = mysqli_query($con,$sql);

?>
 <table border = 1>
    <tr>
        <th>Next Due Assessment</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($records))
    {
        echo "<td>'".$row['Assessments']."'</td>";
        echo "</form></tr>";
        
    }
    ?>
</div>
</body>
</html>