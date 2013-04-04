<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelform library
jimport('joomla.application.component.modellist');

class BizViewModelBizView extends JModelList
{
	public function getItems() {
			
		// Get a reference to the database
		$db = JFactory::getDbo();
		
		// Query the database
		$query = $db->getQuery(true);      
		$query->select('*')
			->from('#__bizview_clients')
			->order('name');           
		$db->setQuery($query);   
		
		// Get the result and return the userId
		$items = $db->loadObjectList();  
		
		foreach($items as &$item) {
			$item->url = 'index.php?option=com_bizview&amp;view=client&amp;layout=edit&id=' . $item->id;//task=client.edit&amp;id=' . $item->id;
		}
				
		return $items;
	}
	
	public function getListQuery() {
		$query = parent::getListQuery();
		
		$query->select('*');
		$query->from('#_modules');
		return $query;
	}
}