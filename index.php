<!DOCTYPE html>
<html>
<head>
<title>Table with Database</title>
<style>
table{
border-collapse: collapse;
width:100%;
color:#588c7e;
font-frame:monospace;
font-size:25px;
text-align:Left;
}
th {
background-color:#588c7e;
color:white;
}
tr:nth-child(even) {background-color:#f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>credit</th>
</tr>
<?php
$con =mysqli_connect("localhost","root","","usersdb");
if($conn->connect_error){
die("connection failed:",$conn->connect_error);
}
$sql="select id,name,email,credit from users";
$result=$con->query($sql);

if($result->num_rows>0){
while(#row=$result->fetch_assoc()) {
echo "<tr><td>",$row["id"],"</td><td>",$row["name"],"</td><td>",$row["email"],"</td><td>",$row["credit"],"</td></tr>;
}
echo "</table>";
}
else {
echo "0 result";
}
$con->close();
?>
</table>
</body>
</html>

