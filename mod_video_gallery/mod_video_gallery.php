<?php
// No direct access
defined('_JEXEC') or die;

// Get the selected client
$id = $params->get('id');

// Get the video id from the database
$db = JFactory::getDBO();
$query = $db->getQuery(true);      
$query->select('*')
	->from('#__bizview_clients')
	->where('id = ' .  "'". $id . "'" );          
$db->setQuery($query);  
$rows = $db->loadObjectList();	

// Set the variable videoId
$videoId = $rows[0]->video_id;
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
		'transitionIn' : 'elastic',
		'transitionOut': 'fade',
		'padding' : 5,
		'width' : 560,
		'height' : 315,
		'type' : 'swf',
		'titleShow': true,
		'arrows' : true
	});
	
	if(location.hash) {
		$(location.hash).click();
	}
 
});
</script>

<style type="text/css">

.embed-container {
    position: relative;
    padding-bottom: 56.25%; 
    padding-top: 30px;
    height: 0;
    overflow: hidden;
	border-style:solid; 
	border-width:10px;
	border-color:rgba(255, 255, 255, 0.3);
}
.embed-container iframe,
.embed-container object,
.embed-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
	
}
.embed-container3{
    position: relative;
    padding-bottom: 18.75%;
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
	width: 120px;
	height: auto;
}
</style>
</head>
<body>
<div class="embed-container">
	<iframe src="http://www.youtube.com/embed/<?php echo $videoId; ?>"> </iframe>
</div>
<div>
<div class="row-fluid">
<div class="span4 embed-container3">
<a title="3 Fathoms SCUBA" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid1" href="https://www.youtube.com/v/u8qNru84pC4"><img  class="thumbnail" src=http://img.youtube.com/vi/u8qNru84pC4/0.jpg /></a>
</div>
<div class="span4 embed-container3">
<a title="Saba/St. Kitts 2013" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid2" href="https://www.youtube.com/v/_hNll7dqqXc"><img class="thumbnail" src=http://img.youtube.com/vi/_hNll7dqqXc/0.jpg alt=""/></a>
</div>
<div class="span4 embed-container3">
<a title="La Paz October 2012" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid3" href="https://www.youtube.com/v/shzDEUrkJXY"><img class="thumbnail" src=http://img.youtube.com/vi/shzDEUrkJXY/0.jpg alt=""/></a>
</div>
</div>
<div class="row-fluid">
<div class="span4 embed-container3">
<a title="Saba January 2013" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid4" href="https://www.youtube.com/v/ra9AKf-ZXHc"><img class="thumbnail" src=http://img.youtube.com/vi/ra9AKf-ZXHc/0.jpg alt=""/></a>
</div>
<div class="span4 embed-container3">
<a title="After the Sun Goes Down" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid5" href="https://www.youtube.com/v/ThiM5MuUFvI"><img class="thumbnail" src=http://img.youtube.com/vi/ThiM5MuUFvI/0.jpg alt=""/></a>
</div>
<div class="span4 embed-container3">
<a title="Diver's of the Caribbean" class="fancyYoutube fancybox" rel="vol_slideshow" id="vid6" href="https://www.youtube.com/v/MbsgWnsSnbI"><img class="thumbnail" src=http://img.youtube.com/vi/MbsgWnsSnbI/0.jpg alt=""/></a>
</div>
</div>
</div>
</body>
</html>

