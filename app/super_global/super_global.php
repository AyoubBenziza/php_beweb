<?php

echo "<h2>sup_global.php</h2><hr>";

$currentTime = $_SERVER['REQUEST_TIME'];
$host = $_SERVER['HTTP_HOST'];
$serverOs = $_SERVER['SERVER_SOFTWARE'];
$clientLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$currentFile = $_SERVER['SCRIPT_NAME'];

echo "<p>CURRENT TIME <b>" . date('m/d/Y H:i:s', $currentTime) . "</b></p>";
echo '<p>Current PHP version: <b>' . phpversion() . '</b></p>';
echo "<p>HOST: <b>" . $host . "</b></p>";
echo "<p>SERVER OS: <b>" . $serverOs . "</b></p>";
echo "<p>CURRENT FILE: <b>" . $currentFile . "</b></p>";
echo "<p>CLIENT LANGUAGE: <b>" . $clientLanguage . "</b></p>";
?>