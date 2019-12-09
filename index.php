<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
	<head>
	</head>
	<body>
		<?php
			$link = mysqli_connect("localhost", "root","")
			or die("nem sikerült kapcsolódni az adatbázishoz");
			
			mysqli_select_db($link, "esport")
			or die("nem sikerült kiválasztani az adatbázist");
			
			mysqli_set_charset($link, "utf8");
			
			$sql = "select * from tabla ";
			$ered = mysqli_query($link, $sql);
			
			echo "<table>";
			echo "<tr>
				<th>verseny_id</th>
				<th>Jatek</th>
				<th>Datum</th>
				<th>URL</th>
				<th>Csapatnev</th>
				<th>Tag</th>
				<th>IGN</th>
				<th>Video</th>
				<th>Eredmeny</th>
				<th>Bejegyzest_tette</th>
				</tr>";
			
			while ($sor = mysqli_fetch_array($ered))
			{
				echo "<tr><td>" . $sor['verseny_id'] . "</td><td>"
				. $sor['Jatek'] . "</td><td>"
				. $sor['Datum'] . "</td><td>"
				. $sor['URL'] . "</td><td>"
				. $sor['Csapatnev'] . "</td><td>"
				. $sor['Tag'] . "</td><td>"
				. $sor['IGN'] . "</td><td>"
				. $sor['Video'] . "</td><td>"
				. $sor['Eredmeny'] . "</td><td>"
				. $sor['Bejegyzest_tette'] . "</td></tr>";
			}
			
			echo "</table>";
			
			mysqli_close($link);
		?>
	</body>
</html>