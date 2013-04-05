<?php
// No direct access
defined('_JEXEC') or die;

// Get the selected client
$id = $params->get('id');

// Get the address from the database
$db = JFactory::getDBO();
$query = $db->getQuery(true);      
$query->select('*')
	->from('#__bizview_clients')
	->where('id = ' .  "'". $id . "'" );          
$db->setQuery($query);  
$rows = $db->loadObjectList();	

// Set the variable address
$address = $rows[0]->address. ' ' . $rows[0]->city;
?>

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
</style>

<div class="embed-container">
  <iframe scrolling="no" frameborder="0" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?q=<?php echo $address; ?>&iwloc=near&amp;z=15&amp;output=embed"></iframe>
</div>
