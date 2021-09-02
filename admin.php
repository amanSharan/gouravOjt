<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>


<div id="logo">
<img src="img/112.png" style="height:100px;width:100px;top:0px;left:0px">
</div>
<div id="head">
<center>
<h1 id="top" style="margin-top:-65px; color:#800080;top:0px;margin-right:85px">TAHIRA'S</h1>
</div>
<br>
<div id="head2">
<center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn"><a href="f.php">HOME</a></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="reg()">ADD PRODUCT</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="log()">LIST OF REGISTER USERS</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn" onclick="about()">UPDATE PRICE</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</div>
<center>
<br>
<br>
<br><br><br>
<br><br><br>
<div id="k1" style="display:none">
<table>
<form action="admin.php">
<tr>
<td>Product Name</td>
<td><input name="n1" type="text"></td>
</tr>
<tr>
<td>Description</td>
<td><textarea rows="6" name="n2" cols="40"></textarea></td>
</tr>
<tr>
<td>Price</td>
<td><input name="n3" type="text"></td>
</tr>
<tr>
<td>Product Id</td>
<td><input name="n4" type="text"  readonly value='<?php 
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$res=mysql_query("select * from pro");
$count=mysql_numrows($res);
$count=$count+1;
echo$count;
?>'></td>
</tr>
<tr>
<td>Upload Picture</td>
<td><input name="n5" type="file"></td>
</tr>
<tr>
<td>Upload Picture</td>
<td><input name="n6" type="file"></td>
</tr>
<tr>
<td>Upload Picture</td>
<td><input name="n7" type="file"></td>
</tr>

</table>
<input type="submit" name="x" id="btn2">
<button id="btn2">RESET</button>
</form>
</div>
<script>
function reg(){
document.getElementById("k1").style="position:absolute;top:200px;left:500px;display:block;";
//document.getElementById("k2").style="display:none";
//document.getElementById("k3").style="display:none";
//document.getElementById("k4").style="display:none";
}
</script>
<?php
if(isset($_REQUEST["x"]))
{
	$p1=$_REQUEST["n1"];
	$p2=$_REQUEST["n2"];
	$p3=$_REQUEST["n3"];
	$p4=$_REQUEST["n4"];
                  $p5=$_REQUEST["n5"];
	$p6=$_REQUEST["n6"];
	$p7=$_REQUEST["n7"];
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
mysql_query("insert into pro values('$p1','$p2','$p3',$p4,'$p5','$p6','$p7')");
?>
<script>alert("Product Is Registered !!!");</script>
<?php
}
?>