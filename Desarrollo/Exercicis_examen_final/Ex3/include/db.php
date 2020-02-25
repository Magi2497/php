<?php
// Cream la bd i les taules
$db = new Sqlite3('llista.db');
$db->exec("CREATE TABLE IF NOT EXISTS llista(id INTEGER PRIMARY KEY, nom TEXT not null, uuid TEXT unique)");
?>
