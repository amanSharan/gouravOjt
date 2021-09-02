<?php
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$i=$_REQUEST["id"];
mysql_query("delete from cart where pid=$i");
header("location:f.php");
?>