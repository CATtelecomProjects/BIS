<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
?>
<HTML>
<HEAD>
</HEAD>
<BODY >
<?echo $desc?>
<?echo "<BR>">
<?echo $emp?>
</BODY>
</HTML>
