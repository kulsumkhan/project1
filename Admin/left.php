<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table style="width:100%">
	<tr><td style="font-size:28px">Admin Links</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<?php }?>
<tr><td><a href="viewcategory.php">View product suggestion</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<?php }?>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<?php }?>

<tr><td><a href="addadvertisement.php">Add Advertisement</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="deleteadvertisement.php">Delete Advertisement</a></td></tr>
<?php }?>
<tr><td><a href="viewadvertisement.php">View Advertisement</a></td></tr>
<tr><td><a href="abc.php">Compose Message To A Company</a></td></tr>
<tr><td><a href="def.php">View composed messages</a></td></tr>
</table>
</body>
</html>