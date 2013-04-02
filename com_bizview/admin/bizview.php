<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by BizView
$controller = JController::getInstance('BizView');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();