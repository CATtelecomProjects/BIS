<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../../includes/dhtmlwindow/dhtmlwindow.css" type="text/css" />
<script type="text/javascript" src="../../includes/dhtmlwindow/dhtmlwindow.js"></script>
<script type="text/javascript">
function openPopUp(win_name , url , title ){
	  w = screen.availWidth-45;
	  h = screen.availHeight-180;
	  features = "width="+w+"px,height="+h+"px";
var googlewin=dhtmlwindow.open(win_name, "iframe", url, title, features+",resize=1,scrolling=1,center=1", "recal")

googlewin.onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
return window.confirm("ต้องการปิดหน้าต่าง ใช่ หรือ ไม่?")
	}
}

</script>
</head>

<body>
<li><a href="#" onClick="openPopUp('WebPortal','http://bis.cattelecom.com','SAS Portal'); return false">Change Window's URL to CSS Drive</a></li>
</body>
</html>
