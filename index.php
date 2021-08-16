<?php
	include_once("title.php");

	echo "Hello world";

	$myArray = array(array('Ana', 'are', 'mere'), array('Ana', 'are', 'mere'), array('Ana', 'are', 'mere'), array('Ana', 'are', 'mere'));

	echo "<table border=\"1px\">";
	foreach($myArray as $subArray)
	{
		echo "<tr>";
		foreach($subArray as $value)
		{
			echo "<td> $value </td>";
		}
		echo "</tr>";
	}
	echo "</table>";


	include_once("strings.php");

?>
