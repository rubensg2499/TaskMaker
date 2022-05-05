<?php
require("utilities/SQLiteHelper.php");
require("models/Workspace/workspace.php");
$db = new SQLiteConection('db/TaskMaker.db');
$results = $db->query("SELECT * FROM Workspace");
$workspaces = array();
while ($row = $results->fetchArray()) {
    $w = new Workspace();
    $w->setWorkspace_id($row['workspace_id']);
    $w->setName($row['name']);
    $w->setDescription($row['description']);
    $w->setColor($row['color']);
    $w->setCreated_date($row['created_date']);
    $w->setLast_update($row['last_update']);
    $workspaces[] = $w;
}
require("views/index.view.php");
