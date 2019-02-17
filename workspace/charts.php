<html>
<head>
<link rel="stylesheet" type="text/css" href="charts.css">
<p>
<a href="dashboard.php">
<img border="0" src="https://s3-eu-west-1.amazonaws.com/mystudentevents.com/content/uploads/2016/01/13013443/South-Devon-College-logo_1.jpg">
</p>
</a>
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
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 0,2) . $row['ModulesScore'] . "\"$result, 0,2\"";
}

?>"; class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
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
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 1,2) . $row['ModulesScores'] . "\"$result, 1,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
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
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 2,2) . $row['ModulesScores'] . "\"$result, 2,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db(Assignments);

$result = mysql_query('SELECT * FROM Modules');
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
  
<th class="chartTableBottomTimeUnits"><p>
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
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
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
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
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 2,1);
}
?></th>
</tr>
</table>
</div>
</div>

<div class="contentWrap">
<div class="chartWrap">
<table class="chartTable">
<tr>
<!-- HTML AND PHP FOR Advanced Project -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 3,2) . $row['ModulesScores'] . "\"$result, 3,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 3,2) . "%";
}
?>
</p>
</div>
</th>

<!-- HTML AND PHP FOR Application Development -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 4,2) . $row['ModulesScores'] . "\"$result, 4,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 4,2) . "%";
}
?>
</p>
</div>
</th>

<!-- HTML AND PHP FOR Database Analysis -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 5,2) . $row['ModulesScores'] . "\"$result, 5,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 5,2) . "%";
}
?>
</p></div></th>
</tr>
<tr>
<th class="chartTableBottomTimeUnits">
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 3,1);
}
?>
</th>

<th class="chartTableBottomTimeUnits">
<?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 4,1);
}
?>
</th>

<th class="chartTableBottomTimeUnits"><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 5,1);
}
?>
</th>
          
</tr>
</table>
</div>
</div>

<div class="contentWrap">
<div class="chartWrap">
<table class="chartTable">
  
<tr>
<!-- HTML AND PHP FOR Employability Development -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 7,2) . $row['ModulesScores'] . "\"$result, 7,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 7,2) . "%";
}
?>
</p>
</div>
</th>

<!-- HTML AND PHP FOR Networking Fundamentals -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 8,2) . $row['ModulesScores'] . "\"$result, 8,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 8,2) . "%";
}
?>
</p>
</div>
</th>

      <!-- HTML AND PHP FOR Programming Concepts -->
<th  class="chartTableBars"><div style="height: <?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 9,2) . $row['ModulesScores'] . "\"$result, 9,2\"";
}

?>;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 9,2) . "%";
}
?>
</p>
</div>
</th>
</tr>

<tr>
<th class="chartTableBottomTimeUnits"><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 7,1);
}
?>
</th>

<th class="chartTableBottomTimeUnits"><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 8,1);
}
?>
</th>

<th class="chartTableBottomTimeUnits"><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 9,1);
}
?>
</th>
</tr>
</table>
</div>
</div>
</body>
</html>