<!DOCTYPE html>
<html>

<head>
  <title>Juego de Cartas</title>
  <meta charset="UTF-8" />
</head>

<body>

  <h1>Juego de Cartas</h1>

  <form action="Tirada.php" method="post">
    <label for="jugador1">Jugador 1:</label>
    <input type="text" name="jugador1" required>
    <br>
    <label for="jugador2">Jugador 2:</label>
    <input type="text" name="jugador2" required>
    <br>
    <input type="submit" value="Jugar">
  </form>

</body>

</html>