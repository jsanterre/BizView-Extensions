<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controlleradmin');

class BizViewControllerBizView extends JControllerAdmin {
	protected $text_prefix = 'COM_BIZVIEW_BIZVIEW';
	
	public function getModel($name = 'Client', $prefix = 'BizViewModel', $config = array('ignore_request' => true)) {
		$model = parent::getModel($name, $prefix, $config);
		
		return $model;
	}
}