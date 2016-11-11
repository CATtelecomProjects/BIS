<!-- jQuery -->


function get(url,div_name){
	jQuery("#"+div_name).html( '<img src="http://bis.cattelecom.com/usermanagement/images/loading.gif"  align="absmiddle" /> Loading...') ;	
	jQuery.get(url,								 
	function(data) {				
		jQuery("#"+div_name).html(data);					
		 					}
					);
	}

function set_dialog(div_name,w , h , title){
// Dialog	comment	
					jQuery("#"+div_name).dialog("destroy");	
					jQuery("#"+div_name).dialog({
						autoOpen: false,
						height: h,
						width: w,
						modal: true	,
						title : title
					});
}


function loading(div){
	jQuery("#"+div).html( '<img src="http://bis.cattelecom.com/usermanagement/images/loading.gif"  align="absmiddle" /> Loading...') ;		
}


