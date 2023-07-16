<?php

include 'koneksi.php';

$posts = mysqli_query($conn, "SELECT * FROM post");

?><!DOCTYPE html>
<html lang="en">

<head>
	<title>Blog</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
	
	<h1 style="text-align: center">My Blog</h1>
	<hr>
	
	<?php
	
	while($row = mysqli_fetch_array($posts)) {
	
		echo "<a href='post.php?id={$row['id']}'><h2>{$row['judul']}</h2></a>";
		echo "<small>Tanggal {$row['tanggal']}</small>";
		echo "<hr>";
		
	}
	
	?>
	
</body>

</html>
