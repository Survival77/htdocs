
<?php
// Basic session counter for page visits.
session_start();

$_SESSION["counter"] = ($_SESSION["counter"] ?? 0) + 1;
?>
<html>
<body bgcolor="#f4f4f4">
<?php echo "Your session is number: " . $_SESSION["counter"] . "<br/>"; ?>
<p>
 Hello, you are the visitor number <?php echo $_SESSION["counter"]; ?> to this page.
</p>
<p>
    <a href="counter2.php">Go to counter2</a>
</p>
<p>
    <a href="countermain.php">Back to counter home</a>
</p>
<input type="submit" name="log out" value="log out"/>
</body>
</html>
