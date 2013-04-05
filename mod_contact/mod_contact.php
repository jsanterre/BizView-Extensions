<?php
// No direct access
defined('_JEXEC') or die;

// Get module's params
$id = $params->get('id');
$socialgradient1 = $params->get('socialgradient1');
$socialgradient2 = $params->get('socialgradient2');
$addressBackground = $params->get('addressBackground');

// Get contact info from the database
$db = JFactory::getDBO();
$query = $db->getQuery(true);      
$query->select('*')
	->from('#__bizview_clients')
	->where('id = ' .  "'". $id . "'" );          
$db->setQuery($query);  
$rows = $db->loadObjectList();	

// Set the variables
$address = $rows[0]->address;
$city = $rows[0]->city;
$province = $rows[0]->province;
$postalCode = $rows[0]->postal_code;
$phone = $rows[0]->phone_number;
$email = $rows[0]->email_address;
$facebook = $rows[0]->facebook;
$twitter = $rows[0]->twitter;
$emailFriend = $rows[0]->email_friend;
$rss = $rows[0]->rss;

?>

<style type="text/css">
.contact-info {
	text-align: left;
	font-weight: bold;
	background: rgba(255, 255, 255, 0.3);
	padding: 15px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 7px;
}
#details {
	padding-top: 20px;
}

#social {
	background: <?php echo $color1;?>;
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=<?php echo $socialgradient1;?>, endColorstr=<?php echo $socialgradient2;?>); /* for IE */
	background: -webkit-gradient(linear, left top, left bottom, from(<?php echo $socialgradient1;?>), to(<?php echo $socialgradient2;?>)); /* for webkit browsers */
	background: -moz-linear-gradient(top,  <?php echo $socialgradient1;?>,  <?php echo $socialgradient2;?>); /* for firefox 3.6+ */
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 7px;
	text-align: center;
	height: 40px;
	line-height: 40px;
	width: auto;	
}
<?php if($addressBackground) {?>
#details table {
	background: <?php echo $addressBackground;?>;
	display: block;
    margin-left: auto;
    margin-right: auto;
	padding:5px;
	width: auto;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 7px;
}
<?php }?>
</style>

<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=300,width=700,left=200,top=70,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>

<div class="contact-info">
	<div id="social"> <div class="inner">
		<a href="JavaScript:newPopup('<?php echo $facebook; ?>');"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-facebook.png" class="" title="Facebook"></a>
		<a href="JavaScript:newPopup('<?php echo $twitter; ?>');"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-twitter.png" class="" title="Twitter"></a>
		<a class="modal-sml" href="<?php echo $emailFriend; ?>"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-email2.png" class="" title="Email"></a>
		<a href="<?php echo $rss; ?>" target="_blank"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-rss.png" class="" title="RSS">
		<img src="<?php JURI::root()?>modules/mod_contact/images/icon-like.png" class="" title="Favorite"></a>
	</div></div>
	<div id="details"><table>
		<tr>
			<td style="padding-right:5px;"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-map.png" class="" title="Address"></td>
			<td><?php echo $address;?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo $city;?>, <?php echo $province;?></td>
		</tr>
		<tr>
			<td></td>
			<td><?php echo $postalCode;?>, Canada</td>
		</tr>
		<tr>
			<td><img src="<?php JURI::root()?>modules/mod_contact/images/icon-phone.png" class="" title="Phone"></td>
			<td><?php echo $phone;?></td>
		</tr>
		<?php if($email) {?>
		<tr>
			<td><img src="<?php JURI::root()?>modules/mod_contact/images/icon-email.png" class="" title="Email"></td>
			<td style="font-size: 0.9em;"><?php echo $email;?></td> 
		</tr>
		<?php }?>
	</table></div>
</div>

