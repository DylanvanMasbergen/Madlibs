<!DOCTYPE html>
<html>
<head>
	<title>Madlips-main</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="Paniek.php" method="POST">
<h1 class="title">Mad libs</h1>
	<div class="stoofpot">
		<div class="head">
			<ul>
				<li><a href="#">Er heerst paniek...</a>
  				<a href="Onkunde.php">Onkunde</a></li>
  			</ul>
		</div>
			<div class="main">
      <h2>Er heerst paniek...</h2>
      <br>
		    <p class="vraag">Welk dier zou je nooit als huisdier willen hebben?<input name="huisdier" type="input" id="inpt" placeholder="Huisdier" required></p>
        <br>
        <p class="vraag">Wie is de belangrijkste persoon in je leven? <input name="persoon" type="input" id="inpt" placeholder="Persoon" required></p>
        <br>
        <p class="vraag">In welk land zou je graag willen wonen? <input name="land" type="input" id="inpt" placeholder="Land" required></p>
        <br>
        <p class="vraag">Wat doe je als je je verveelt? <input name="activiteit" type="input" id="inpt" placeholder="Activiteit" required></p>
        <br>
        <p class="vraag">Met welk speelgoed speelde je als kind het meest? <input name="speelgoed" type="input" id="inpt" placeholder="Speelgoed" required></p>
        <br>
        <p class="vraag">Bij welke docent spijbel je het liefst? <input name="docent" type="input" id="inpt" placeholder="Docent" required></p>
        <br>
        <p class="vraag">Als je €100.000,- had, wat zou je dan kopen? <input name="product" type="input" id="inpt" placeholder="Product" required></p>
        <br>
        <p class="vraag">Wat is je favoriete bezigheid? <input name="bezigheid" type="input" id="inpt" placeholder="Bezigheid" required></p>

        <input type="submit" id="submit" value="Versturen">

			</div>
        <div class="footer">
      <p>Dit is gemaakt door Dylan van Masbergen.</p>
        </div>

	</div>
</form>
</body>
</html>
