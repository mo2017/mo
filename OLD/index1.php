<!DOCTYPE html>
<html lang="en-US">
	<head>
		<link rel="stylesheet" href="style.css">
		<title>
					Profile
		</title>
		<meta chrset="utf-8">
		<meta name="Auther" content="Mohammed Hassan">
		<meta name="viweport" content="width=device-width initial-scale=1.0">
		<meta name="description" content="This side is developed @ SIMPLON"
	</head>
		<body>
			<a href="index.php"><b> Home </b></a> |
			<a href="index.php?content=first.php"> first </a> |
			<a href="index.php?content=2.php"> second </a> |
			<a href="index.php?content=3.php"> therd </a> |
			<a href="http://localhost/~mo/index.php?content=../secret.php"> pass </a>
			<br>
			<img src="index.jpeg" alt="my name is MOHAMMED" width="200" height="100">
			<hr size="3">
			<h1>
					<b><strong><mark><abbr title="MY NAME IS">Mohammed <ins>Hassan</ins></abbr></mark></strong></b>
			</h1>
			<bdo dir="rtl">Hi</bdo>
			<p> <i><small>at</small> this side you <del>will</del> find <sup>all</sup> of my </i><sub> information </sub>
			<?php
			 	include basename($_GET["content"]);
			?>
			<br>
			<a href="https://www.facebook.com/">
			<em>	MY FACEBOOK </em>
			</a>
			<address>
				visit me at:<br>
				90 Charonne<br>
				Paris 11<br>
				France.
			</address>
			<pre>
				<q>Copy Right</q>
			</pre>
  	</body>
</html>
