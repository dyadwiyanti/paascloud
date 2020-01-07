<html>
<head>
<link href="style3.css" rel="stylesheet" />
</head>

<body>

<table border="0" background="bg10.png" style="background-size:100% 100%" border="0" width="100%" height="50%" align="center" cellpadding="0" cellspacing="0">
	<tr height="1%" style="background-color:rgba(165, 42, 42, 0.7);"><td>
		<nav>
			<hr width="100%" align="center" noshade color="white">
			<a href="icon3.png"><img src="icon3.png" width="3%" height="5%"></a>
			<ul>
				<li><a href="?page=home">Home</a></li>	
				<li><a href="#">Articles</a>
					<ul>
						<li><a href="?page=visits">Visit & Iconic</a></li>
					</ul>
				</li>
				<li><a href="#">Collections</a>
					<ul>
						<li><a href="?page=image">Images</a></li>
					</ul>
				</li>	
			</ul>
			<hr width="100%" align="center" noshade color="white">		
		</nav>
	</td></tr>
	<tr>
		<td></td>
	</tr>
	<tr height="1%" style="background-color:rgba(165, 42, 42, 0.2);" align="center"><td><br><p><h1><font color="Black" face="bell mt"><marquee>Menelusuri Keindahan dan Budaya Jepang</marquee></h1></p><br></td></tr>	
</table>

<hr width="100%" align="center" noshade color="white">

	<?php
	
		$link = @$_GET['page'];
		

		if ($link == "home") {
			include 'home.html';
		} elseif ($link == "foods") {
			include 'foods.html';
		} elseif ($link == "visits") {
			include 'visits.html';
		} elseif ($link == "image") {
			include 'image.html';
		} elseif ($link == "fujiyama") {
			include 'fujiyama.html';
		} elseif ($link == "animanga") {
			include 'animanga.html';
		} elseif ($link == "inari") {
			include 'inari.html';
		} else
			include 'home.html' ;

		?>	

	<?php 

		?>
<hr width="100%" align="center" noshade color="white">

				<center>
				<a href="https://web.facebook.com/dya.dwiyanti" target="_blank"><img src="fb2.png" width="2%"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="http://www.pictame.com/user/dwiyantidya/4485485725" target="_blank"><img src="ig2.png" width="2%"></a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://plus.google.com/109548735529296115862" target="_blank"><img src="go4.png" width="2%"></a>
			<hr width="20%" align="center" noshade color="white">

	
</body>
</html>