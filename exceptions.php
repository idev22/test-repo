<?php

function inverse_number($x) {
	if(!is_numeric($x)) {
		throw new Exception('Division is not numeric');
	}
	
	if (!$x) {
		throw new Exception('Division by zero.');
	}

	return 1/$x;
}

function inverse ($x) {
	try {
		return inverse_number($x);
	} catch (Exception $e) {
		echo 'Caught exception: ',  $e->getMessage(), "<br />";
	}
}

if(!empty($_POST)) {
	if(isset($_POST['x'])) {
		$x = $_POST['x'];
	}

	// Continue execution
	echo inverse($x);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<body>

<form method="post">
	<p>
		<input name="x" />
	</p>
	<p>
		<button type="submit">Submit</button>
	</p>
</form>

</body>
</html>

