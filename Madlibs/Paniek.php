
<!DOCTYPE html>
<html>
<head>
	<title>Madlips-paniek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="title">Mad libs</h1>
	<div class="stoofpot">
		<div class="head">
			<ul>
				<li><a href="index.php">Er heerst paniek...</a>
  				<a href="Onkunde.php">Onkunde</a></li>
  			</ul>
		</div>
			<div class="main">
			<p>Er heerst paniek in het Koninkrijk <?php echo $_POST['land']?> , Koning <?php echo $_POST['docent']?> is ten einde raad en als koning <?php echo $_POST['docent']?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST['persoon']?>.</p>
			<br>
			<p>"<?php echo $_POST['persoon']?>! Het is een ramp! Het is een schande!</p>
			<br>
			<p>"Sire , Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
			<br>
			<p>"Mijn <?php echo $_POST['huisdier']?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['speelgoed']?> voor hem gekocht!"</p>
			<br>
			<p>"Majesteit, uw <?php echo $_POST['huisdier']?> komt vast vanzelf weer terug?"</p>
			<br>
			<p>"Ja da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['bezigheid']?> leren?"</p>
			<br>
			<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['product']?> voor gebruiken."</p>
			<br>
			<p>"<?php echo $_POST['persoon']?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
			<br>
			<p>"Mij vervelen, Sire."</p>

			</div>
        <div class="footer">
      <p>Dit is gemaakt door Dylan van Masbergen.</p>
        </div>

	</div>

</body>
</html>
