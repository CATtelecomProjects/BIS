<?
	include("conora.php");  // Function  connect Database


?>

<html>

<head>
<title>ข้อมูลในอดีตย้อนหลัง</title>
</head>

<?
	$sql = " select score_level from tris_operation_quality where year = '".$yr."' and month = '".$mn."' and topic_id = '".$topicid."' ";

	echo $sql;
?>

<body>
</body>

</html>