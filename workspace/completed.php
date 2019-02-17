<html>
<head>
<p>
<a href="dashboard.php">
<img border="0" src="https://s3-eu-west-1.amazonaws.com/mystudentevents.com/content/uploads/2016/01/13013443/South-Devon-College-logo_1.jpg">
</p>
</a>
<link rel="stylesheet" type="text/css" href="charts.css">
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
          
          <!-- HTML AND PHP FOR ADVANCED PROJECT -->
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p>
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
echo mysql_result($result, 3,3);
}
?>
</p>
</div>
</th>
         <!-- HTML AND PHP FOR APPLICATION DEVELOPMENT --> 
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result,4,3);
}
?>
</p>
</div>
</th>

          <!-- HTML AND PHP FOR DATABASE ANALYSIS --> 
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 6,3);
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
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p>
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
echo mysql_result($result, 7,3);
}
?>
</p>
</div>
</th>
        <!-- HTML AND PHP FOR Networking Fundamentals -->
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p><?php
mysql_connect("localhost", "root", "");
mysql_select_db("Assignments");

$result = mysql_query('SELECT * FROM Modules');
if (!$result) {
die('Could not query:' . mysql_error());
while($row = mysql_fetch_array($result));
}
else
{
echo mysql_result($result, 8,3);
}
?>
</p>
</div>
</th>
      <!-- HTML AND PHP FOR Programming Concepts -->
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p>
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
echo mysql_result($result, 9,3);
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
echo mysql_result($result, 8,1);
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
echo mysql_result($result, 9,1);
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
          
              <!-- HTML AND PHP FOR SERVER SIDE -->
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p>
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
echo mysql_result($result, 0,3);
}
?>
</p>
</div>
</th>
              <!-- HTML AND PHP FOR OBJECT ORIENTATED -->
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p>
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
echo mysql_result($result, 1,3);
}
?>
</p>
</div>
</th>
            <!-- HTML AND PHP FOR CYBER SECURITY -->
<th  class="chartTableBars"><div style="height: 100px;" class="chartPingBar chartGreen"><p>
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
echo mysql_result($result, 2,3);
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
?></th>

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
?>
</th>
</tr>
</table>
</div>
</body>
</html>

