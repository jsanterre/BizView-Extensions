<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelform library
jimport('joomla.application.component.modeladmin');

class BizViewModelClient extends JModelAdmin
{
	public function getTable($type = 'Client', $prefix = 'BizViewTable', $config  = array()) {
		return NULL;//JTable::getInstance($type, $prefix $config);
	}
	
	public function getForm($data = array(), $loadData = true) {
		//$form = this->loadForm();
		return NULL;//$form;
	}

	public function getItem() {
			
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
			$item->url = 'index.php?option=com_bizview&amp;task=bizview.edit&amp;client_id=' . $item->id;
		}
				
		return $items[2];
	}
	
}