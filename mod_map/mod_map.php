<?php

// no direct access
defined('_JEXEC') or die;
$url = $params->get('url');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));


require JModuleHelper::getLayoutPath('mod_map', $params->get('layout', 'default'));

$document = &JFactory::getDocument(); 
$document->addStyleSheet('modules'.DS.'mod_map'.DS.'css'.DS.'embed.css');

?>