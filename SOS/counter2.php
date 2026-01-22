
<?php
session_start();

if (isset($_SESSION["counter"])) {
    $_SESSION["counter"] += 1;
} else {
    $_SESSION["counter"] = 1;
}
?>
<html>
<body>
<p>
    Hello, you are the <?php echo $_SESSION["counter"]; ?> visitor to the page.<br>
    Display ID: <?php echo session_id(); ?>
</p>
<p>
    <a href="counter1.php">Back to counter1</a>
</p>
<p>
    <a href="countermain.php">Back to counter home</a>
</p>
</body>
</html>
