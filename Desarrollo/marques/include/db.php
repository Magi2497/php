<?php
// Cream la bd i les taules
$db = new Sqlite3('marques.db');
$db->exec("CREATE TABLE IF NOT EXISTS marca(id INTEGER PRIMARY KEY, nom TEXT not null, uuid TEXT unique)");
?>
