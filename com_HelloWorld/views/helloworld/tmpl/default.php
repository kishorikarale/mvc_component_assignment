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
?>
<h1><?php echo "";
//include_once($_SERVER[DOCUMENT_ROOT]."\components\com_helloworld\models\helloworld.php");

$var=new HelloWorldModelHelloWorld();
$var->msql();
?>
</h1>