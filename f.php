<?php
session_start();
?>
<body>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<script>
function a()
{
str=pn.value;
x=new XMLHttpRequest();
x.onreadystatechange=function()
{
document.getElementById("k4").style="display:none";
document.getElementById("k").style="position:absolute;top:300px;border:solid;width:500px;border-radius:50px;text-align:center;display:block";
document.getElementById("k").innerHTML=x.responseText;
};
x.open("GET","get.php?key="+str,true);
x.send();
}
</script>
<div id="logo">
<input type="text" id="pn" style="border-radius:50px;text-align:center;" placeholder="Search By Product Name" onkeyup="a()">
<img src="img/112.png" style="height:100px;width:100px;top:0px;left:0px">
</div>

<div id="head">
<center>
<h1 id="top" style="margin-top:-65px; color:#800080;top:0px;margin-right:85px">TAHIRA'S</h1>
</div>
<br>
<div id="head2">
<center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="hm()">HOME</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="reg()">REGISTER</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="log()">LOGIN</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="about()">ABOUT US</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="contact()">CONTACT US</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</div>
<center>
<br>
<br>
<br><br><br>
<div id="k1" style="display:none">
<table>
<form action="f.php">
<tr>
<td>Name</td>
<td><input name="n1" type="text"></td>
</tr>
<tr>
<td>Address</td>
<td><textarea rows="6" name="n2" cols="40"></textarea></td>
</tr>
<tr>
<td>Email</td>
<td><input name="n3" type="text"></td>
</tr>
<tr>
<td>Mobile no.</td>
<td><input name="n4" type="text"></td>
</tr>
<tr>
<td>Upload Picture</td>
<td><input name="n5" type="file"></td>
</tr>
</table>
<input type="submit" name="x" id="btn2">
<button id="btn2">RESET</button>
</form>
</div>
<?php
if(isset($_REQUEST["x"]))
{
	$p1=$_REQUEST["n1"];
	$p2=$_REQUEST["n2"];
	$p3=$_REQUEST["n3"];
	$p4=$_REQUEST["n4"];
$p5=$_REQUEST["n5"];	
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
mysql_query("insert into user_info values('$p1','$p2','$p3','$p4','$p5')");
?>
<script>alert("You Are Registered !!!");</script>
<?php
}
?>
<div id="k2" style="display:none">
<form action="f.php">
<h2>Login As :<select name="type1"><option>Admin</option><option>User</option></select>
<table>
<tr>
<td>UserName</td>
<td><input type="text" name="n1"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="n2" ></td>
</tr>
</table>
<input type="submit" name="x2" id="btn2">
<button id="btn2">RESET</button>
</form>
</div>
<div id="k3" style="display:none">

<center>
<h1>About tahira's<h1>
<hr class="hrc">
<h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</h2>
</div>
<div id="abtimg" style="display:none"> <img id="img" src="ll.jpg"></div>
<div id="k4">
<h1> "YOUR DREAM DRESS IS <br>JUST ONE STEP AHEAD OF YOU"</h1>
<button id="btn2">START SHOPPING</button>
</div>

<div id="k5" style="display:none">
<h1>Drop us a line</h1>

</div>
<?php
if(isset($_REQUEST["x2"]))
{
	$p1=$_REQUEST["n1"];
	$p2=$_REQUEST["n2"];
	$ch=$_REQUEST["type1"];
if($ch=="User")
{
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$res=mysql_query("select * from user_info where name='$p1' and email='$p2'");
if(($rows=mysql_fetch_array($res)))
{
$name=$rows[0];
$path=$rows[4];
$_SESSION["user"]=$name;
$_SESSION["email"]=$rows[2];
$_SESSION["pic"]=$path;
header("location:profile.php");
}
else
{
?>
<script>alert("Invalid Login");</script>
<?php
}
}
else
{
if($p1=="online" && $p2=="mcr")
header("location:admin.php");
else
{
?>
<script>alert("Invalid Admin Login");</script>
<?php
}
}
}
?>
<script>
function reg(){
document.getElementById("k1").style="position:absolute;top:200px;left:500px;display:block;";
document.getElementById("k2").style="display:none";
document.getElementById("k3").style="display:none";
document.getElementById("k4").style="display:none";
}
function log(){
document.getElementById("k2").style="display:block";
document.getElementById("k1").style="display:none";
document.getElementById("k3").style="display:none";
document.getElementById("k4").style="display:none";
document.getElementById("k5").style="display:none";
document.getElementById("abtimg").style="display:none";
}
function about(){
document.getElementById("k2").style="display:none";
document.getElementById("k1").style="display:none";
document.getElementById("k3").style="display:block";
document.getElementById("k4").style="display:none";
document.getElementById("k5").style="display:none";
document.getElementById("abtimg").style="display:block";
}
function hm(){
document.getElementById("k1").style="display:none";
document.getElementById("k2").style="display:none";
document.getElementById("k3").style="display:none";
document.getElementById("k4").style="display:block";
document.getElementById("abtimg").style="display:none";
document.getElementById("k5").style="display:none";
}
function contact(){
document.getElementById("abtimg").style="display:none";
document.getElementById("k1").style="display:none";
document.getElementById("k2").style="display:none";
document.getElementById("k3").style="display:none";
document.getElementById("k4").style="display:none";
document.getElementById("k5").style="display:block";
}
</script>
<div id="k" style="position:absolute;top:300px;border:solid;width:500px;border-radius:50px;text-align:center;display:none">
</div>


