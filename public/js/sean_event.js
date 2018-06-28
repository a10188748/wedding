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
		$.get("events_get?tag="+tag+"&event="+event, function(result){
	 		set_element(result);
  		});
	 	tag++;
 
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
 			text0 = '<div class="popular-grids">';
 			text1 = '<div class="col-md-4 popular-grid">';
 			text2 = '<img src="'+values[value]["img_path"]+'" class="img-responsive" alt=""/>';
 			text3 = '<div class="popular-text">';
 			text4 = '<h5><a href="gallery?event='+window.event+'&id='+values[value]["id"]+'">'+values[value]["title"]+'</a></h5>';
 			text5 = '<div class="detail-bottom">';
 			text6 = '<ul>';
 			text7 = '<li><i class="fa fa-calendar" aria-hidden="true"></i>'+values[value]["date"]+'</li>';
 			text8 = '<li><i class="fa fa-map-marker" aria-hidden="true"></i>'+values[value]["location"]+'</li>';
 			text9 = '</ul><p>'+values[value]["body"]+'</p>';
 			textend1 = '</div></div></div>';
 			textend2 = '</div></div></div><div class="clearfix"></div></div>';
 			if(value %3 ==0 &&value == 0 && value == Object.keys(values).length-1){
 				text = text0+text1+text2+text3+text4+text5+text6+text7+text8+text9+textend2;
 				tottext = tottext+text;
 			} 
 			else if(value %3 ==0 &&value == 0){
 				text = text0+text1+text2+text3+text4+text5+text6+text7+text8+text9+textend1;
 				tottext = tottext+text;
 			} 
 			else if(value %3 != 0 && value == Object.keys(values).length-1){
 				text = text1+text2+text3+text4+text5+text6+text7+text8+text9+textend2;
 				tottext = tottext+text;
 			}
 			else if(value %3 == 2){
 				text = text1+text2+text3+text4+text5+text6+text7+text8+text9+textend2;
 				tottext = tottext+text;
 			}
 			else if(value %3 != 0){
 				text = text1+text2+text3+text4+text5+text6+text7+text8+text9+textend1;
 				tottext = tottext+text;
 			}
 
 			else if(value %3 == 0&&value !=0 && value == Object.keys(values).length-1){
 				text =text0+text1+text2+text3+text4+text5+text6+text7+text8+text9+textend2;console.log(value);
 				tottext = tottext+text;
 			}
 			else if(value %3 == 0&&value !=0){
 				text = text0+text1+text2+text3+text4+text5+text6+text7+text8+text9+textend1;
 				tottext = tottext+text;
 			}	
 		}
 		
 		$('.event_wedding').append(tottext);
 		status = 1;
 	}
  
});
