<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

class BizViewViewClient extends JView
{
	protected $items;
	
	public function display($tpl = null) 
	{
		$this->items = $this->get('Item');

		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);
		
		// Set the document
		$this->setDocument();
	}

	/**
	 * Setting the toolbar
	 */
	protected function addToolBar() 
	{
		
		//if($this->item->id) {
			JToolBarHelper::title(JText::_('COM_BIZVIEW_EDIT_CLIENTS_TITLE'), 'bizview');
		//}
		//else {
			//JToolBarHelper::title(JText::_('COM_BIZVIEW_ADD_CLIENTS_TITLE'), 'bizview');
		//}
		
		JToolBarHelper::save('bizview.save', 'JTOOLBAR_SAVE');
		JToolBarHelper::save2new('bizview.save2new', 'JTOOLBAR_SAVE_AND_NEW');
		
		JToolBarHelper::cancel('bizview.cancel');
	}
	
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		//$document->addStyleDeclaration('.icon-48-bizview {background-image: url(../media/com_bizview/images/logo-48x48.png);}');
	}
}
