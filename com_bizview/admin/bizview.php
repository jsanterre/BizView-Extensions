<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Set the administration interface
// Set the Toolbar
JToolBarHelper::title(JText::_('COM_BIZVIEW_ADMINISTRATION'), 'bizview');
//JToolBarHelper::preferences('com_bizview', '300', '700', 'Configure', ' ');

// Add an image to the backend
$document = JFactory::getDocument();
$document->addStyleDeclaration('.icon-48-bizview {background-image: url(../media/com_bizview/images/logo-48x48.png);}');

// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('BizView');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();