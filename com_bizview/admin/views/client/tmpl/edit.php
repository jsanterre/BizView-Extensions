<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?><form action="index.php?option=com_bizview&amp;id=<?php echo $this->item->id ?>" method="post" name="adminForm" id="form-validate">
	<div class="width-40 fltlft">
		<fieldset class="adminform">
			<h4 style="color:#146295; font-weight: bold;"> Contact Information </h4>
			<ul class="adminformlist">
				<?php foreach($this->form->getFieldset('essential') as $field): ?>
					<li><?php echo $field->label; ?>
					<?php echo $field->input; ?></li>
				<?php endforeach?>
			</ul>
		</fieldset>
		<fieldset class="adminform">
			<h4 style="color:#146295; font-weight: bold; vertical-align: top;"> Site Configuration </h4>
			<ul class="adminformlist">
				<?php foreach($this->form->getFieldset('configuration') as $field): ?>
					<li>
						<?php echo $field->label; ?>
						<?php echo $field->input; ?>
					</li>
				<?php endforeach?>
			</ul>
		</fieldset>
		<fieldset class="adminform">
			<h4 style="color:#146295; font-weight: bold; vertical-align: top;"> Media </h4>
			<ul class="adminformlist">
				<?php foreach($this->form->getFieldset('media') as $field): ?>
					<li>
						<?php echo $field->label; ?>
						<?php echo $field->input; ?>
					</li>
				<?php endforeach?>
			</ul>
		</fieldset>
	</div>
	
	<div class="width-60 fltrt">
		<fieldset class="adminform">
			<h4 style="color:#146295; font-weight: bold; vertical-align: top;"> Store Hours </h4>
			<ul class="adminformlist">
				<?php foreach($this->form->getFieldset('hours') as $field): ?>
					<li>
						<?php echo $field->label; ?>
						<?php echo $field->input; ?>
					</li>
				<?php endforeach?>
			</ul>
		</fieldset>
		<fieldset class="adminform">
			<h4 style="color:#146295; font-weight: bold; vertical-align: top;"> Social Links </h4>
			<ul class="adminformlist">	
					<li>
						<?php echo $this->form->getField('facebook')->label; ?>
						<img src="../media/com_bizview/images/icon-facebook.png" style="float: left; vertical-align: middle;">
						<?php echo $this->form->getField('facebook')->input; ?>
					</li>
					<li>
						<?php echo $this->form->getField('twitter')->label; ?>
						<img src="../media/com_bizview/images/icon-twitter.png" style="vertical-align: middle;">
						<?php echo $this->form->getField('twitter')->input; ?>
					</li>
					<li>
						<?php echo $this->form->getField('email_friend')->label; ?>
						<img src="../media/com_bizview/images/icon-email2.png" style="vertical-align: bottom;">
						<?php echo $this->form->getField('email_friend')->input; ?>
					</li>
					<li>
						<?php echo $this->form->getField('rss')->label; ?>
						<img src="../media/com_bizview/images/icon-rss.png" style="vertical-align: bottom;">
						<?php echo $this->form->getField('rss')->input; ?>
					</li>
			</ul>
		</fieldset>
	</div>
	
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
