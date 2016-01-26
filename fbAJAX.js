
	$.ajax({
		type: "GET",
		url: 'https://graph.facebook.com/396033240503987/posts?access_token=425373540870557|u8ql5LZbH1kujeaha2WTwv5jEKY',

		dataType: 'json',
		success: function( data ){
		var	liData = new Array();
		var slideLength;
		
		
	 	
		
		$.each(data , function( index, obj ) { var li=index;	
			$.each(obj, function( key, value ) {
				
			li += '<li class="fbfeed">'
			+'<div id="fb_image"><span><img style="width:150px;height:215px"src='+ obj[key].picture +' /></span></div>'
                +'<div class="fb_message">'
                +'<a fb_message="'+ obj[key].message
                
                +'</a></div>'
                +'</li>';
				
			});
			li = li.substring(li.indexOf("<") + 0);
			$('#fbfeed').append(li);
		var fuckyou ="";	
		}); 

	},
});

				/*li += '<li class="row__inner movie tile">'
				+'<div id="slides" class="tile__media"><span><img style="width:150px;height:215px"src='+ 'http://groupxnow.com/'+ obj[key].image_url +' /></span></div>'
				+'<div class="tile__play">'
				+'<a  class_duration="'+ obj[key].class_duration+'"className="'+ obj[key].title +'"'+'class_time="'+ obj[key].class_time +'"'
				+'class_id="'+ obj[key].event_id +'"'+'instructor="'+ obj[key].instructor +'"'+'level="'+ obj[key].level +'"'
				+'category="'+ obj[key].category +'"'
				+'genre="'+ obj[key].genre +'"'
				+'usrname="'+ obj[key].usr +'"'
				+'instructor_link="'+ obj[key].instructor_link +'"'
				+'size="'+ obj[key].size +'"'
				+'description="'+ obj[key].description +'"'
				+'image_url="'+obj[key].image_url +'"'
				+'href='+ obj[key].video_url +'></a></div><div class="tile__details"><div class="tile__title">'+ obj[key].title +'</div>'
				+'<div class="tile__desc">'+ obj[key].description +'</div>'
				+'</div></li>';

				*/