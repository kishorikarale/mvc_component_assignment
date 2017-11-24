<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
/**
 * Hello World Component Controller
 *
 * @since  0.0.1
 */
class HelloWorldController extends JControllerLegacy
{
	public function display($cachable=false,$urlparams=false)
	{
		//get the document obj
		$document=JFactory::getDocument();
		$usernm=$this->input->get('view','helloworld');
		$this->input->set('view',$usernm);
		
		parent::display($cachable,$urlparams);
		
		return $this;
		
	}
}