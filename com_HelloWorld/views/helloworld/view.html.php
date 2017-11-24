<html>
<body>
<?php
defined('_JEXEC') or die('Restricted access');
class HelloWorldViewHelloWorld extends JViewLegacy
{
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Hello World!';

		// Display the view
		parent::display($tpl);
	}
	
	
		function msql1($rows) {
		?>
		<table border="2px">
		<tr>
			<th>ID</th>
			<th>user</th>
			
		</tr>
		<?php
		foreach($rows as $row) {
		?>
		<tr>
		<td><?php echo $row->id; ?></td>
		<td><?php echo $row->usernm; ?></td>
		<tr>
		<?php
		}
		?>
		</table>
		<?php
	}
}
?>
</body>
</html>