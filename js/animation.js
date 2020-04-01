function web_anim(){
  var multi = bodymovin.loadAnimation({
    container: document.getElementById('multidev'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'animate_icon/data.json',
  })

//  document.getElementById('multidiv').addEventListener('mouseenter', function(){ multi.play(); });
//  document.getElementById('multidiv').addEventListener('mouseleave', function(){ multi.stop(); });
}

function web_design(){
  var wdesign = bodymovin.loadAnimation({
    container: document.getElementById('web_design'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: 'animate_icon/web_design.json',
  });

  wdesign.addEventListener('complete', function(){
      wdesign.playSegments ([[97,160], [100]], true);
  })
}

function graphic(){
  var graph = bodymovin.loadAnimation({
    container: document.getElementById('graphic'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: 'animate_icon/graphic.json',
  });

  graph.addEventListener('complete', function(){
      graph.playSegments ([[37,95], [100]], true);
  })
}

function seo_anim(){
  var seo = bodymovin.loadAnimation({
    container: document.getElementById('seo'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: 'animate_icon/seo1.json',
  });

  seo.addEventListener('complete', function(){
      seo.playSegments ([[101,152], [100]], true);
  })
}



function isOnScreen(elem) {
	// if the element doesn't exist, abort
	if( elem.length == 0 ) {
		return;
	}
	var $window = jQuery(window)
	var viewport_top = $window.scrollTop()
	var viewport_height = $window.height()
	var viewport_bottom = viewport_top + viewport_height
	var $elem = jQuery(elem)
	var top = $elem.offset().top
	var height = $elem.height()
	var bottom = top + height

	return (top >= viewport_top && top < viewport_bottom) ||
	(bottom > viewport_top && bottom <= viewport_bottom) ||
	(height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}

var i=0;
jQuery( document ).ready( function() {
	window.addEventListener('scroll', function(e) {
		if(isOnScreen( jQuery( '#myskill' ) ) && i==0 ) { /* Pass element id/class you want to check */
        i=1;
        graphic();
        web_anim();
        seo_anim();
        web_design();
 		}
    else{}

	});
});


$(document).ready(function() {
     $('.progress .progress-bar').css("width",
               function() {
                   return $(this).attr("aria-valuenow") + "%";
               }
       )
   });
