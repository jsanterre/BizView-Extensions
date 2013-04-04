<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelform library
jimport('joomla.application.component.modellist');

class BizViewModelBizView extends JModelList
{
	public function getItems() {
		
		$items = parent::getItems();
		
		foreach($items as &$item) {
			$item->url = 'index.php?option=com_bizview&amp;view=client&amp;layout=edit&id=' . $item->id;//task=client.edit&amp;id=' . $item->id;
		}
			
		return $items;
	}
	
	public function getListQuery() 
	{
		$query = parent::getListQuery();
		// Select all the fields
		$query->select('*');
		// From the bizview_clients table
		$query->from('#__bizview_clients');
		$query->order('name');  
		
		return $query;
	}
}