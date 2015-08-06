<?php
include dirname(__FILE__)."/../inc.php";

$dbname = "sample";
$dbhost = "mysql";
$user = 'root';
$password = '4321qaz';
$dsn = 'mysql:dbname='.$dbname.';host='.$dbhost.';';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
} 

$table = "user";
$sql ="CREATE table IF NOT EXISTS `".$table."` (
	`id` INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR( 250 ) NOT NULL
	);";		
$dbh->query($sql);

$name = "Docker_".strtotime($now);
$sql = "insert into `user` ( name ) VALUES ('".$name."')";
$dbh->query($sql);

$sth = $dbh->prepare("select * from user");
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="tw">
<head>
	<title>Hello PHP-FPM</title>
</head>
<body>
	<h1>Hello PHP-FPM</h1>
	<p>Now: <?php echo $now; ?></p>
	<p>From: <a href="<?php echo "https://github.com/thomas-lin/docker-lnmp"; ?>">GitHub</a></p>
	<hr>
	<h2>DB Host: <?php echo $dbhost; ?><h2>
	<h2>DB Name: <?php echo $dbname; ?><h2>
	<h2>DB Table: <?php echo $table; ?><h2>
	<h4>User List:<h4>
	<ol>
		<?php foreach($result as $row){ ?>
		<li><?php echo $row['name'] ;?></li>
		<?php } ?>
	</ol>
</body>
</html>