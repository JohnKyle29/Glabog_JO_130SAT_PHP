<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
@@ -12,4 +11,7 @@

authorize($note['user_id'] === $currentUserId);

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);