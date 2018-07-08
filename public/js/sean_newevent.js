$( document ).ready(function() {
	var tag = 1;
	var status = 1;

 	window.onscroll = function(){ 
 		// console.log(status);
 	 	var height = $(document).height()-$(document).scrollTop(); 
	 	 	if(height <= 1000 && status == 1) {
	  			get_event();
	  		}

 	}
 	function get_event(){
 		status = 0;
		$.get("events_get?tag="+tag+"&event="+window.event, function(result){
	 		set_element(result);
  		});
	 	tag++;
 
 	}
 	function redirect(id){
 		document.location.href="gallery?event="+window.event+"&id="+id;
 	}
 	function set_element(values){
 		values = jQuery.parseJSON(values);
 		if(Object.keys(values).length == 0){
 			return;
 		}
 		// console.log(values)
 		// console.log(Object.keys(values).length);
 		tottext = "";
 		for(value in values){
 			// console.log(values[value]['body']);
 			tottext = '<div class="col-lg-4 col-md-6 col-sm-12 evendev">';
 			tottext += '<div class="evendev-img">';
 			tottext += '<img src="'+values[value]["img_path"]+'"/></div>';
 			tottext += '<div class="evendev-section"><section><div><header>';
 			tottext += '<h3>'+values[value]["img_header"]+'</h3></header></div>';
 			tottext +='<div class="evendev-section-body">';
 			tottext += '<body>'+values[value]["img_body"]+'</body></div>';
 			tottext += '<div class="evendev-section-footer">';
 			tottext += '<footer>'+values[value]["img_footer"]+'</footer></div></section></div>';
 			tottext += '<div class="evendev-button">';
 			tottext += '<input type="button" value="details" onclick="javascript:location.href='+'\''+'gallery?event='+window.event+'&id='+values[value]["id"]+'\''+'"</div></div>';	
 			$('.addeven').append(tottext);	
 		}
 		status = 1;
 	}
 	
  
});
