<!-- submit.php -->
<html>
<?php
	if (isset($_POST['name']))
	{
		$name = $_POST['name'];
		$base = $_POST['base'];
		$nuts = $_POST['checknuts'];
		$sprinkles = $_POST['checksprinkles'];
		$cookiechunks = $_POST['checkcookie'];
		$fruit = $_POST['checkfruit'];
		
		echo "<p>The data was:</p>" .
			"<ul>" .
			"<li>name = $name</li>" .
			"<li>base = $base</li>" .
			"<li>checks = $nuts </li>" .
			"<li>$sprinkles </li>" .
			"<li>$cookiechunks </li>" .
			"<li>$fruit </li>" .
			"</ul>";
	} else {
		echo "nothing stored";
	}
	
	
?>
</html>