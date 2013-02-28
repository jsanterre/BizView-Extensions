<?php
// No direct access
defined('_JEXEC') or die;
$address = $params->get('address', "2nd Floor 472 Stradbrook Avenue Winnipeg");
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
  <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?q=<?php echo $address; ?>&iwloc=near&amp;output=embed"></iframe>
</div>
