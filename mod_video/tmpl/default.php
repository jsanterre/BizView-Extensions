<?php
// No direct access
defined('_JEXEC') or die;
$videoId = $params->get('videoId', "as1vlYPyq1c");
?>

<style type="text/css">
.embed-container {
    position: relative;
    padding-bottom: 56.25%; 
    padding-top: 30px;
    height: 0;
    overflow: hidden;
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
</style>

<div class="embed-container">
	<iframe src="http://www.youtube.com/embed/<?php echo $videoId; ?>" frameborder="0"> </iframe>
</div>
