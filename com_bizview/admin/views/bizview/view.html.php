<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

class BizViewViewBizView extends JView
{
	protected $items;
	
	public function display($tpl = null) 
	{
		$this->items = $this->get('Items');

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
		JToolBarHelper::title(JText::_('COM_BIZVIEW_ADMINISTRATION'), 'bizview');
		
		JToolBarHelper::addNew('client.add');
		JToolBarHelper::editList('client.edit');
		
		JToolBarHelper::divider();
		
		JToolBarHelper::preferences('com_bizview');
		
	}
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-bizview {background-image: url(../media/com_bizview/images/logo-48x48.png);}');
	}
}
