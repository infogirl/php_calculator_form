<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h2>Caculator Form</h2>
    <p>A simple form that takes two numbers and uses PHP to calculate either the sum or dividend.</p>
    <form name="calculator" action="/addition.php" method="get">
      <label for="firstnum">First Number:</label><br>
      <input type="number" name="firstnum"></br>
      <label for="secondnum">Second Number:</label><br>
      <input type="number" name="secondnum"></br></br>
      <button type="submit">Addition</button>
      <button type="submit" formaction="/division.php">Division</button>
    </form>
    <a href="index.php">Reset</a>
</body>
</html>
