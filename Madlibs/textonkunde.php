<!DOCTYPE html>
<html>
<head>
	<title>Madlips-main</title>
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
      <h2>Onkunde</h2>
      <br>
      <p>Er zijn veel mensen die niet goed kunnen <?php echo $_POST['gave']?>. Neem nou <?php echo $_POST['persoon']?>. Zelfs met de hulp van een <?php echo $_POST['voorwerp']?> of zelfs <?php echo $_POST['getal']?> kan <?php echo $_POST['persoon']?> niet <?php echo $_POST['gave']?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST['eigenschap']?>, maar te veel aan <?php echo $_POST['eigenschap2']?>. Te veel <?php echo $_POST['eigenschap2']?> leidt tot <?php echo $_POST['gebeurtenis']?> en dat is niet goed als je wilt <?php echo $_POST['gave']?>. Helaas voor <?php echo $_POST['persoon']?>.</p>

			</div>
        <div class="footer">
      <p>Dit is gemaakt door Dylan van Masbergen.</p>
        </div>

	</div>

</body>
</html>
