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
		JToolBarHelper::title(JText::_('COM_BIZVIEW_ADMINISTRATION'), 'client');
		
		JToolBarHelper::addNew('client.add', 'JTOOLBAR_NEW');
		JToolBarHelper::editList('client.edit', 'JTOOLBAR_EDIT');
		
		JToolBarHelper::divider();
		
		JToolBarHelper::deleteList('', 'client.delete', 'JTOOLBAR_DELETE');
		
		
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
		$document->setTitle(JText::_('COM_BIZVIEW_ADMINISTRATION'));
	}
}
