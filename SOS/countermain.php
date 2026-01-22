<?php
session_start();

$currentCounter = $_SESSION["counter"] ?? 0;
$username = $_SESSION["username"] ?? "Guest";
?>
<html>
<body bgcolor="#eef2f5">
<h2>Counter Home</h2>
<p>Welcome <?php echo htmlspecialchars($username); ?>. Current session counter: <?php echo $currentCounter; ?>.</p>
<p>
    <a href="counter1.php">Go to counter1</a> |
    <a href="counter2.php">Go to counter2</a>
</p>
<p>Session ID: <?php echo session_id(); ?></p>
<p><a href="logon.php">Back to login</a></p>
</body>
</html>
