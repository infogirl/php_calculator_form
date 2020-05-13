<html>
<body>

<?php
echo "<p>The first number is " . $_GET["firstnum"] .".</p>" . "<p>The second number is " . $_GET["secondnum"] . ".</p>" . "<p><b>The dividend of " . $_GET["firstnum"] . " and " . $_GET["secondnum"] . " is " . ($_GET["firstnum"] / $_GET["secondnum"]) . "</b></p>";
?>

<p><a href="index.php">Reset</a></p>
</body>
</html>
