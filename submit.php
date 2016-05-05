
<?php
	include_once('dblogin.php');

	if (isset($_POST['name']))
	{
		$name = $_POST['name'];
		$base = $_POST['base'];
		$nuts = $_POST['checknuts'];
		$sprinkles = $_POST['checksprinkles'];
		$cookiechunks = $_POST['checkcookie'];
		$fruit = $_POST['checkfruit'];
		
		if(mysql_query("INSERT INTO user_t VALUES('$name');")) {
			echo "purchased";
		} else {
			echo "failed";
		}
	} else {
		echo "nothing stored";
	}	
?>
