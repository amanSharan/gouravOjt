<?php
$p1=$_REQUEST["key"];
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("web2021",$conn);
$res=mysql_query("select * from pro where pname='$p1'");
while(($rows=mysql_fetch_array($res)))
{
?>
<br>
<img src="img/<?php echo$rows[4]; ?>">
<br>
<?php
echo$rows[0]."<br>";
echo$rows[1]."<br>";
echo$rows[2]."<br>";
echo$rows[3]."<br>";
echo"<hr>";
}
?>