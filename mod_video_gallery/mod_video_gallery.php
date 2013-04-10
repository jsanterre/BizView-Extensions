<?php
// No direct access
defined('_JEXEC') or die;
?>

<html>
<head>

<script type="text/javascript" src="modules/mod_video_gallery/frameworks/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="modules/mod_video_gallery/frameworks/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="modules/mod_video_gallery/frameworks/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="modules/mod_video_gallery/frameworks/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" href="modules/mod_video_gallery/frameworks/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen">
<link rel="stylesheet" src="modules/mod_video_gallery/frameworks/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" src="modules/mod_video_gallery/frameworks/bootstrap/css/bootstrap-responsive.min.css">

<script type="text/javascript">
$(document).ready(function() {
	
	$(".fancyYoutube").fancybox({
		'transitionIn' : 'fade',
		'transitionOut': 'fade',
		'padding' : 5,
		'width' : 560,
		'height' : 315,
		'type' : 'swf',
		'allowfullscreen': true,
		'titleShow': true,
		'arrows' : false
	});
	
	if(location.hash) {
		$(location.hash).click();
	}
 
});
</script>

<style type="text/css">
.embed-container3{
    position: relative;
    padding-bottom: 9.375%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}
.embed-container3 img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.thumbnail {
	margin-top: -6px;
	margin-left: -2px;
	width: 120px;
	height: auto;
}
/* potrait tablets */
@media (min-width: 768px) and (max-width: 979px) {
	.embed-container3{
		padding-bottom: 6%;
	}
}

/* phones */
@media (max-width: 767px){
	.embed-container3{
		padding-bottom: 56.25%;
	}
}
</style>
</head>
<body>
<div class="row-fluid">
<div class="span2 embed-container3">
<a title="3 Fathoms SCUBA" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid1" href="https://www.youtube.com/v/u8qNru84pC4"><img  class="thumbnail" src=http://img.youtube.com/vi/u8qNru84pC4/0.jpg /></a>
</div>
<div class="span2 embed-container3">
<a title="Saba/St. Kitts 2013" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid2" href="https://www.youtube.com/v/_hNll7dqqXc"><img class="thumbnail" src=http://img.youtube.com/vi/_hNll7dqqXc/0.jpg alt=""/></a>
</div>
<div class="span2 embed-container3">
<a title="La Paz October 2012" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid3" href="https://www.youtube.com/v/shzDEUrkJXY"><img class="thumbnail" src=http://img.youtube.com/vi/shzDEUrkJXY/0.jpg alt=""/></a>
</div>
<div class="span2 embed-container3">
<a title="Saba January 2013" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid4" href="https://www.youtube.com/v/ra9AKf-ZXHc"><img class="thumbnail" src=http://img.youtube.com/vi/ra9AKf-ZXHc/0.jpg alt=""/></a>
</div>
<div class="span2 embed-container3">
<a title="After the Sun Goes Down" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid5" href="https://www.youtube.com/v/ThiM5MuUFvI"><img class="thumbnail" src=http://img.youtube.com/vi/ThiM5MuUFvI/0.jpg alt=""/></a>
</div>
<div class="span2 embed-container3">
<a title="Diver's of the Caribbean" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid6" href="https://www.youtube.com/v/MbsgWnsSnbI"><img class="thumbnail" src=http://img.youtube.com/vi/MbsgWnsSnbI/0.jpg alt=""/></a>
</div>
</div>
</body>
</html>

