<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?><form action="index.php?option=com_bizview&amp;id=<?php echo $this->item->id ?>" method="post" name="adminForm" id="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<ul class="adminformlist">
				<?php foreach($this->form->getFieldset() as $field): ?>
					<li><?php echo $field->label; ?>
					<?php echo $field->input; ?></li>
				<?php endforeach?>
			</ul>
		</fieldset>
	</div>
	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>
