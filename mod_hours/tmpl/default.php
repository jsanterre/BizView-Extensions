<?php
// No direct access
defined('_JEXEC') or die;
$sunday = $params->get('sunday');
$monday = $params->get('monday');
$tuesday = $params->get('tuesday');
$wednesday = $params->get('wednesday');
$thursday = $params->get('thursday');
$friday = $params->get('friday');
$saturday = $params->get('saturday');
$color = $params->get('color');
?>

<style type="text/css">
#hours-info {
	padding-top: 20px;
	padding-bottom: 20px;
}
#innerhours {

	border-style:solid; 
	border-width:10px;
	border-color:rgba(255, 255, 255, 0.3);
	
}
#innerinnerhours {
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
	<div id="innerhours"><div id="innerinnerhours">
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
	</div></div>
</div>

