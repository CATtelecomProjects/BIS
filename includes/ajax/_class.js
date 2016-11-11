function checkLogin(param, objId) {	
	var _url = "./modules/Login/check_id.php?obj=" + objId + "&" + param;	
	//alert(_url);
	loading(objId);
	ajax_load(_url, objId);
}

function checkUser(param, objId) {	
	var _url = "./modules/Login/forgetPass.php?obj=" + objId + "&" + param;	
	//alert(_url);
	loading(objId);
	ajax_load(_url, objId);
}

function sendForgotPass(param, objId) {	
	var _url = "./modules/Login/forgetPass.php?obj=" + objId + "&" + param;	
	//alert(_url);
	loading(objId);
	ajax_load(_url, objId);
}

function SaveEvent(param, objId) {	
	var _url = "./modules/Login/event_log.php?obj=" + objId + "&" + param;	
	//alert(_url);
	//loading(objId);
	ajax_load(_url, objId);
}

function sendUrl(url){
	window.location = url ;
	alert(url);
}

function loading(objId){
	document.getElementById(objId).innerHTML = "<div name='loading' style='font-family:tahoma;font-size=9pt;font-weight:normal;color:green'><img src='../../images/loading.gif' align='absmiddle' /> °”≈—ß‚À≈¥...</div>";

}



