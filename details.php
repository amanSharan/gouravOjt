<?php
session_start();
?>

<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body onload="date1()">
<script>
function date1()
{
document.getElementById("d").value=new Date();
}
function a1()
{
document.getElementById("k1").style="display:block;height:200px;width:100px;";
document.getElementById("k2").style="display:none";
document.getElementById("k").style="display:none";
}
function a2()
{
document.getElementById("k2").style="display:block;height:200px;width:100px;";
document.getElementById("k1").style="display:none";
document.getElementById("k").style="display:none";
}
function a3()
{
document.getElementById("k").style="display:block;height:200px;width:100px;";
document.getElementById("k1").style="display:none";
document.getElementById("k2").style="display:none";

}

</script>

<div id="logo">
<img src="img/<?php echo$_SESSION["pic"];?>" style="height:100px;width:100px;top:0px;left:0px">
Welcome:<?php echo$_SESSION["user"];?>
</div>
<div id="head">
<center>
<h1 id="top" style="margin-top:-65px; color:#800080;top:0px;margin-right:85px">TAHIRA'S</h1>
</div>
<br>
<div style="width:500px; height:400px;position:absolute;top:200px;left:200px;">
<?php
$p1=$_REQUEST["id"];
$_SESSION["pid"]=$p1;
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$res=mysql_query("select * from pro where id=$p1");
if(($rows=mysql_fetch_array($res)))
{
?>
<div id="k1">
<img src="img/<?php echo$rows[4];?>">
</div>
<div id="k2" style="display:none" >
<img src="img/<?php echo$rows[5];?>">
</div>
<div id="k" style="display:none">
<img src="img/<?php echo$rows[6];?>">
</div>
<input type="radio" name="r" onclick="a1()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="r" onclick="a2()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio"  name="r" onclick="a3()">

<?php
echo"<br>".$rows[0]."<br>";
echo$rows[1]."<br>";
echo$rows[2]."<br>";
echo$rows[3]."<br>";

}
?>
<script>
function by()
{
alert("Done!!!");
}
</script>
<form action="cart.php">
<input type="hidden" name="d" id="d">
<input type="submit" id="btn2" value="Add To Cart" name="x">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" id="btn2" onclick="by()" value="Buy Now">
</form>


</div>
