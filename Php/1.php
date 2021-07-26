<?php
$pwd=$_POST["pwd"];
$err=$_POST["Dealer"];
if(empty($pwd) && empty($err))
{
	echo '<script>alert("Missing Dealer_id and Password");window.location.href="/1.html";</script>';
}
else if(empty($pwd))
{
	echo '<script>alert("Missing Password");window.location.href="/1.html";</script>';
}
else if(empty($err))
{
	echo '<script>alert("Missing Dealer_id");window.location.href="/1.html";</script>';	
}
?>