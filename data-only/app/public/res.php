<?php
$timeout = $_GET["timeout"];
if (!empty($timeout)){
	sleep($timeout);
}

$code = $_GET["code"];
if (!isset($code)){
	$code = 200;
}

http_response_code($code);
if ($code != 200){
	exit;
}

?>
<!DOCTYPE html>
<html lang="tw">
<head>
	<title>Hello Nginx</title>
</head>
<body>
	<h1>Hello Nginx - 200 OK !!!</h1>
</body>
</html>
