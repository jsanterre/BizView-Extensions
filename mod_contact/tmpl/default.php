<?php
// No direct access
defined('_JEXEC') or die;
$address = $params->get('address');
$city = $params->get('city');
$province = $params->get('province');
$postalCode = $params->get('postalCode');
$phone = $params->get('phone');
$email = $params->get('email');
?>

<style type="text/css">
.contact-info {
	text-align: left;
	font-weight: bold;
}
#details {
	padding-top: 20px;
}
#social {
	background: #5e2c88;
	height: 40px;
	line-height: 40px;
	width: auto;/*200px;*/
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	-khtml-border-radius: 10px;
	border-radius: 5px;
	text-align: center;
}

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
		<a href="JavaScript:newPopup('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fbizview.com%2Fdirectory%2Fdirectory.cfm%3FbusinessID%3D36');"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-facebook.png" class="" title="Facebook"></a>
		<a href="JavaScript:newPopup('https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Fbizview.com%2Fdirectory%2Fdirectory.cfm%3FbusinessID%3D36&text=I+recommend+this+business!&url=http%3A%2F%2Fbizview.com%2Fdirectory%2Fdirectory.cfm%3FbusinessID%3D36');"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-twitter.png" class="" title="Twitter"></a>
		<a class="modal-sml" href="http://bizview.com/directory/email-friend.cfm?ref=http%3A%2F%2Fbizview%2Ecom%2Fdirectory%2Fdirectory%2Ecfm%3FbusinessID%3D36"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-email2.png" class="" title="Email"></a>
		<a href="http://bizview.com/directory/rss/rss.cfm?businessID=36" target="_blank"><img src="<?php JURI::root()?>modules/mod_contact/images/icon-rss.png" class="" title="RSS">
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
			<td><img src="<?php JURI::root()?>modules/mod_contact/images/icon-email.png" class="" title="Email"></td>
			<td><?php echo $email;?></td> 
	</table></div>
</div>
