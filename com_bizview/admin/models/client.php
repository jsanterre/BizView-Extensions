<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla modelform library
jimport('joomla.application.component.modeladmin');

class BizViewModelClient extends JModelAdmin
{
	public function getTable($type = 'Client', $prefix = 'BizViewTable', $config  = array()) {
		return JTable::getInstance($type, $prefix, $config);
	}
	
	protected function loadFormData() {
		return $this->getItem();
	}
	
	public function getForm($data = array(), $loadData = true) {
		$form = $this->loadForm('com_bizview.client', 'client', array('control' => 'jform', 'load_data' => $loadData));
		return $form;
	}

}