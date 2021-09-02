<?php
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>

<script>
function cart1()
{
alert("Going To Display The Cart!!!");
document.getElementById("k").style="display:none;";
document.getElementById("p1").style="display:none;";
document.getElementById("cart").style="display:block;";
}

function see()
{
document.getElementById("k").style="display:block;";
document.getElementById("p").style="display:none;";
document.getElementById("cart").style="display:none;";

}
function pro()
{
document.getElementById("p1").style="display:block;";
document.getElementById("k").style="display:none;";
document.getElementById("cart").style="display:none;";

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
<div id="head2">
<center>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn"><a href="f.php">Logout</a></button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn"  onclick="see()">See Your Profile</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn"  onclick="pro()" >Edit Your Profile</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button id="btn"  onclick="cart1()">Show Cart</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</div>
<br><br>
<div id="pro">
<?php
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$res=mysql_query("select * from pro");
while(($rows=mysql_fetch_array($res)))
{
?>
<! passing parameter by url in php>
<a href="details.php?id=<?php echo$rows[3];?>"><img src="img/<?php echo$rows[4];?>" height="120" width="100"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
}
?>
</div>
<div id="k"  class="div_style" style="display:none">
<?php
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$x1=$_SESSION["user"];
$x2=$_SESSION["pic"];
$res=mysql_query("select * from user_info where name='$x1' and pic='$x2'");
if(($rows=mysql_fetch_array($res)))
{
?>
echo$rows[4];
<img src='img/<?php echo$rows[4];?>'><br>
<?php
echo$rows[0]."<br>";
echo$rows[1]."<br>";
echo$rows[2]."<br>";
echo$rows[3]."<br>";

}
?>
</div>
<div id="p1"   style="display:none;" >
<?php
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$x1=$_SESSION["user"];
$x2=$_SESSION["pic"];
$res=mysql_query("select * from user_info where name='$x1' and pic='$x2'");
if(($rows=mysql_fetch_array($res)))
{
?>
<form action="profile.php" >
<table>
<tr>
<td>Name</td>
<td><input type="text" value='<?php echo$rows[0]; ?>' name="n"></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" value='<?php echo$rows[1]; ?>' name="a"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" value='<?php echo$rows[2]; ?>' name="e"></td>
</tr>
<tr>
<td>Mobileno</td>
<td><input type="text" value='<?php echo$rows[3]; ?>' name="m"></td>
</tr>
<tr>
<td><input type="submit" value="UPDATE" name="x"></td>
<td><input type="reset"></td>
</tr>
</table>
</form>




<?php
}
?>

</div>

<?php
if(isset($_REQUEST["x"]))
{
$key=$_SESSION["pic"];
$p1=$_REQUEST["n"];
$p2=$_REQUEST["a"];
$p3=$_REQUEST["e"];
$p4=$_REQUEST["m"];
mysql_query("update user_info set name='$p1',address='$p2',email='$p3',mobile='$p4'  where pic='$key'");
?>
<script>alert("Record Updated!!");</script>
<?php

}
?>

<div id="cart" style="display:none;" >
<table border="">
<tr>
<th>Product Id</th>
<th>Username</th>
<th>Email</th>
<th>Date-Time</th>
<th>Product Name</th>
<th>Product Description</th>
<th>Product Price</th>
<th>Product Picture</th>
</tr>
</tr>
<?php

$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$user=$_SESSION["user"];
$res=mysql_query("Select * from cart,pro where pro.id=cart.pid and username='$user'");
while(($rows=mysql_fetch_array($res)))
{
?>
<tr>
<td><?php echo$rows[0]; ?></td>
<td><?php echo$rows[1]; ?></td>
<td><?php echo$rows[2]; ?></td>
<td><?php echo$rows[3]; ?></td>
<td><?php echo$rows[4]; ?></td>
<td><?php echo$rows[5]; ?></td>
<td><?php echo$rows[6]; ?></td>
<td><img src='img/<?php echo$rows[9];?>'><a href="delete.php?id=<?php echo$rows[0]?>">Remove</a></td>
</tr>
<?php

}
?>
</table>
</div>