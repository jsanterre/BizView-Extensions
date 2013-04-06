<?php
	// No direct access to this file
	defined('_JEXEC') or die('Restricted access');
	 
	// Import the list field type
	jimport('joomla.form.helper');
	JFormHelper::loadFieldClass('list');

	/**
	 * Formulize Form Field class
	 */
	class JFormFieldTemplates extends JFormFieldList
	{
		protected $type = 'Templates';

		/**
		 * Method to get the list of all the clients.
		 *
		 * @return an array of BizView's clients (ids and names).
		 */
		protected function getOptions() 
		{		
			// Query the database
			// Create a new query object.
			$db = JFactory::getDBO();
			$query = $db->getQuery(true);      
			$query->select('*')
				->from('#__template_styles')
				->order('title');          
			$db->setQuery($query);  

			// Get the result
			$rows = $db->loadObjectList();	
			foreach($rows as $row) {
				if($row->client_id == 0)
					$options[$row->id] = $row->title;
			}
		
			return $options;
		}
	}