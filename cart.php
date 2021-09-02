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
session_start();
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$user=$_SESSION["user"];
$email=$_SESSION["email"];
$p1=$_SESSION["pid"];
$date1=$_REQUEST["d"];
mysql_query("insert into cart values($p1,'$user','$email','$date1')");
?>
<script>alert("Product is add on cart");</script>
<?php
$res=mysql_query("Select * from cart,pro where pro.id=cart.pid and username='$user' and email='$email'");
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