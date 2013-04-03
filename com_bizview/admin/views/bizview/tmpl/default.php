<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?><form action="index.php?option=com_bizview" method="post" name="adminForm" id="adminForm">
	<table class="adminlist">
		<thead>
			<tr>
				<th></th>
				<th style="text-align: left; color: #285AB3; font-weight: bold;"><?php echo JText::_('COM_BIZVIEW_CLIENT_NAME_LABEL') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($this->items as $i=>$item) {?>
				<tr class="row<?php echo $i%2 ?>">
					<td style="width: 25px;">
						<?php echo JHtml::_('grid.id', $i, $item->id);?>
					</td>
					<td style="text-align: left; color: #285AB3;">
						<a href="<?php echo $item->url; ?>">
						<?php echo $item->name;?></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>		
	</table>
	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
