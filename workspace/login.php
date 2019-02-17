<!DOCTYPE HTML>
<html>
<head>
<title>Login Page</title>
<img src="https://s3-eu-west-1.amazonaws.com/mystudentevents.com/content/uploads/2016/01/13013443/South-Devon-College-logo_1.jpg">
<link rel="stylesheet" type="text/css" href="styles1.css">
<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
</head>
<body>
<div id= "frm">
    <div style="background-color: #FFAE1A; 
    border-width:5px; 
    border-style: solid; 
    border-color: #000000; 
    height: 150px; width: 200px; 
    position: 
    absolute; 
    left: 45%; top: 30%; 
    font-family: 'Share Tech Mono', monospace;
    color= white;
    opacity: 0.5;">
        
    <form action="function.php" method="POST">
        <p>
            <label><center>Username</center></label>
          <center><input type="text" id="user" name="user" /></center>
        </p>
        <p>
            <center><label>Password</label></center>
            <center><input type="password" id="pass" name="pass" /><center>
        </p>
        <p>
            <center><input type="submit" id="btn" value="login" /></center>
        </p>
    </form>
</div>
</body>

</html>