<?php  



?>

<!DOCTYPE html>
<html>
<head>
	<title>Madlips-main</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="textonkunde.php" method="POST">
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
		<p class="vraag">Wat zou je graag willen kunnen?<input name="gave" type="input" id="inpt" placeholder="gave" required></p>
        <br>
        <p class="vraag">Met welk persoon kun je goed opschieten? <input name="persoon" type="input" id="inpt" placeholder="Persoon" required></p>
        <br>
        <p class="vraag">Wat is je favoriete getal? <input name="getal" type="input" id="inpt" placeholder="Getal" required></p>
        <br>
        <p class="vraag">Wat heb je altijd bij je als je op vakantie gaat? <input name="voorwerp" type="input" id="inpt" placeholder="Voorwerp" required></p>
        <br>
        <p class="vraag">Wat is je beste persoonlijke eigenschap? <input name="eigenschap" type="input" id="inpt" placeholder="Eigenschap" required></p>
        <br>
        <p class="vraag">Wat is je slechte persoonlijke eigenschap? <input name="eigenschap2" type="input" id="inpt" placeholder="Eigenschap" required></p>
        <br>
        <p class="vraag">Wat is het ergste dat je kan overkomen? <input name="gebeurtenis" type="input" id="inpt" placeholder="Gebeurtenis" required></p>
        

        <input type="submit" id="submit" value="Versturen">

			</div>
        <div class="footer">
      <p>Dit is gemaakt door Dylan van Masbergen.</p>
        </div>

	</div>
</form>
</body>
</html>
