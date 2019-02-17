<html>
<head>
<p>
<a href="dashboard.php">
<img border="0" src="https://s3-eu-west-1.amazonaws.com/mystudentevents.com/content/uploads/2016/01/13013443/South-Devon-College-logo_1.jpg">
</p>
</a>
<link rel="stylesheet" type="text/css" href="charts.css">
<link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
</head>
<body>
<style>
body {
  background-image: url("http://getwallpapers.com/wallpaper/full/b/5/b/101727.jpg");
}
</style>
<div class="contentWrap">
<div class="chartWrap">
<table class="chartTable">
  
<tr>
<!-- HTML AND PHP FOR Serverside -->
<th  class="chartTableBars"><div style="height:
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 0,2) . $row['Score'] . "\"$result, 0,2\"";
}

?>"; class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 0,2) . "%";
}
?>
</p>
</div>
</th>

<!-- HTML AND PHP FOR Object Orientated -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 1,2) . $row['Score'] . "\"$result, 1,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 1,2) . "%";
}
?>
</p>
</div>
</th>

      <!-- HTML AND PHP FOR Cyber Security -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 2,2) . $row['Score'] . "\"$result, 2,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db('AssessmentYear');

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 2,2) . "%";
}
?>
</p>
</div>
</th>
</tr>
<tr>
<th class="chartTableBottomTimeUnits">
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 0,1);
}
?>
</th>
<th class="chartTableBottomTimeUnits">
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 1,1);
}
?>
</th>
<th class="chartTableBottomTimeUnits">
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("AssessmentYear");

$result = mysql_query('SELECT * FROM Year');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 2,1);
}
?>
</th>
</tr>
</table>
</div>
</div>
</body>
</html>