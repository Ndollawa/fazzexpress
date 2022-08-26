<?php
include '/database.php';
session_start();
$sql="
UPDATE sessions 
SET last_activity = now()
WHERE sessions = '".session_id()."'
";
$statement=$database->query($sql);
?>