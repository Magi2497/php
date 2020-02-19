<?php
// Cream la bd i les taules
$db = new Sqlite3('llista.db');
$db->exec("CREATE TABLE IF NOT EXISTS llista(nombre  TEXT not null , unidad  TEXT not null, cantidad VARCHAR )");
?>
