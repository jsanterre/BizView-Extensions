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
			$options[0] = 'me';
			$options[1] = 'you';
			return $options;
		}
	}