<?php
$host = getenv('MYSQLHOST');
$db   = getenv('MYSQLDATABASE');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "✅ Connected to MySQL!<br>";
} catch (PDOException $e) {
    echo "❌ DB connection failed: " . $e->getMessage();
}

echo "🚀 Hello from Docker PHP app!";