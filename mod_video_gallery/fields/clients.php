<?php
	// No direct access to this file
	defined('_JEXEC') or die('Restricted access');
	 
	// Import the list field type
	jimport('joomla.form.helper');
	JFormHelper::loadFieldClass('list');

	/**
	 * Formulize Form Field class
	 */
	class JFormFieldClients extends JFormFieldList
	{
		protected $type = 'Clients';

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
				->from('#__bizview_clients')
				->order('name');          
			$db->setQuery($query);  

			// Get the result
			$rows = $db->loadObjectList();	
			foreach($rows as $row) {
				$options[$row->id] = $row->name;
			}
		
			return $options;
		}
	}