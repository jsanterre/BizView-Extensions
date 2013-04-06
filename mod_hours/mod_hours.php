<?php
// No direct access
defined('_JEXEC') or die;

// Get the selected client
$id = $params->get('id');
$color = $params->get('color');

// Get the address from the database
$db = JFactory::getDBO();
$query = $db->getQuery(true);      
$query->select('*')
	->from('#__bizview_clients')
	->where('id = ' .  "'". $id . "'" );          
$db->setQuery($query);  
$rows = $db->loadObjectList();	

// Set the variable address
$sunday = $rows[0]->sunday;
$monday = $rows[0]->monday;
$tuesday = $rows[0]->tuesday;
$wednesday = $rows[0]->wednesday;
$thursday = $rows[0]->thursday;
$friday = $rows[0]->friday;
$saturday = $rows[0]->saturday;
?>

<style type="text/css">
#hours-info {
	padding-bottom: 20px;
}

#innerhours {
	background: <?php echo $color;?>;
	text-align:center !important;
	font-size: 1em;
	padding-top: 20px;
	padding-bottom: 20px;
	font-weight: bold;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 7px;
}
</style>

<div id="hours-info">
	<div id="innerhours">
	<div style="text-align:center;">
		Hours of Operation
	</div>
	<table align='center'>
		<tr>
			<td style="text-align:left; padding-right:30px; padding-top:10px;">SUN</td>
			<td style="text-align:right; font-style:italic; padding-top:10px;"><?php echo $sunday;?></td>
		</tr>
		<tr>
			<td style="text-align:left; padding-right:30px; padding-top:10px;">MON</td>
			<td style="text-align:right; font-style:italic; padding-top:10px;"><?php echo $monday;?></td>
		</tr>
		<tr>
			<td style="text-align:left; padding-right:30px; padding-top:10px;">TUE</td>
			<td style="text-align:right; font-style:italic; padding-top:10px;"><?php echo $tuesday;?></td>
		</tr>
		<tr>
			<td style="text-align:left; padding-right:30px; padding-top:10px;">WED</td>
			<td style="text-align:right; font-style:italic; padding-top:10px;"><?php echo $wednesday;?></td>
		</tr>
		<tr>
			<td style="text-align:left; padding-right:30px; padding-top:10px;">THU</td>
			<td style="text-align:right; font-style:italic; padding-top:10px;"><?php echo $thursday;?></td>
		</tr>
		<tr>
			<td style="text-align:left; padding-right:30px; padding-top:10px;">FRI</td>
			<td style="text-align:right; font-style:italic; padding-top:10px;"><?php echo $friday;?></td>
		</tr>
		<tr>
			<td style="text-align:left; padding-right:30px; padding-top:10px;">SAT</td>
			<td style="text-align:right; font-style:italic; padding-top:10px;"><?php echo $saturday;?></td>
		</tr>
	</table>
	</div>
</div>
