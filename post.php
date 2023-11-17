<form method="POST" action="verwerking.php">

  <input type="text" name="name" placeholder="Naam" required> <br>
  <input type="text" name="surname" placeholder="Achternaam" required> <br>
  <input type="nummer" name="number" placeholder="Leeftijd" required> <br>
  <input type="adress" name="adress" placeholder="Adress" required> <br>
  <input type="email" name="email" placeholder="Email" required> <br>
  <input type="submit" value="Verstuur">

</form>

<!-- Het verschill 

GET: Gegevens worden toegevoegd aan de URL als een querystring. Dit betekent dat de gegevens zichtbaar zijn in de URL en dat er beperkingen zijn aan de hoeveelheid gegevens die kunnen worden verzonden (beperkt door de maximale lengte van een URL).
POST: Gegevens worden verzonden in het aanvraaglichaam, dus ze zijn niet zichtbaar in de URL. Deze methode is meer geschikt voor het verzenden van grotere hoeveelheden gegevens.
Veiligheid:

GET: Omdat gegevens aan de URL worden toegevoegd, is het minder veilig voor gevoelige informatie zoals wachtwoorden. Gegevens zijn zichtbaar in de browsergeschiedenis en serverlogs.
POST: De gegevens zijn niet zichtbaar in de URL, waardoor het een veiligere optie is voor het verzenden van gevoelige informatie.
Caching:

GET: Gegevens kunnen worden gecachet door de browser, en de informatie is opgenomen in de browsegeschiedenis.
POST: Gegevens worden niet gecachet door de browser, en de informatie is niet opgenomen in de browsegeschiedenis.
Idempotentie:

GET: Over het algemeen beschouwd als idempotent, wat betekent dat meerdere identieke verzoeken hetzelfde effect zouden moeten hebben als een enkel verzoek.
POST: Niet noodzakelijk idempotent. Herhaalde verzoeken kunnen verschillende effecten hebben (bijvoorbeeld het indienen van hetzelfde formulier meerdere keren kan resulteren in meerdere databasevermeldingen).