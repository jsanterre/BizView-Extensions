<?php

// no direct access
defined('_JEXEC') or die;
$address = $params->get('address', "2nd Floor 472 Stradbrook Avenue Winnipeg");
?>

<div class="embed-container">
  <iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?q=<?php echo $address; ?>&output=embed"></iframe>
</div>