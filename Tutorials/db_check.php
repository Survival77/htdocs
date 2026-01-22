<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db   = 'tutorials_db';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset('utf8mb4');

    $resDb = $conn->query("SELECT DATABASE() AS db")->fetch_assoc();
    $resTables = $conn->query("SHOW TABLES");
    $tables = [];
    while ($row = $resTables->fetch_row()) { $tables[] = $row[0]; }

    $counts = [];
    foreach (['bank_accounts','transactions','form_submissions'] as $t) {
        $r = $conn->query("SELECT COUNT(*) AS c FROM `$t`")->fetch_assoc();
        $counts[$t] = (int)$r['c'];
    }

    header('Content-Type: text/plain; charset=utf-8');
    echo "Connected to DB: ".$resDb['db']."\n";
    echo "Tables: ".implode(', ', $tables)."\n";
    foreach ($counts as $t => $c) { echo "$t: $c\n"; }
    exit(0);
} catch (Throwable $e) {
    header('Content-Type: text/plain; charset=utf-8');
    http_response_code(500);
    echo "Error: ".$e->getMessage()."\n";
    exit(1);
}
