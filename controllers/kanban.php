<?php
require("../utilities/SQLiteHelper.php");
require("../models/Workspace/workspace.php");

$workspace_id = $_GET['workspace'];
$db = new SQLiteConection('../db/TaskMaker.db');

$results = $db->query("SELECT * FROM Workspace WHERE workspace_id = $workspace_id");
$workspace = new Workspace();
while ($row = $results->fetchArray()) {
    $workspace->setWokspace_id($row['workspace_id']);
    $workspace->setName($row['name']);
    $workspace->setDescription($row['description']);
    $workspace->setColor($row['color']);
    $workspace->setCreated_date($row['created_date']);
    $workspace->setLast_update($row['last_update']);
}

$results = $db->query("SELECT * FROM Task WHERE workspace_id = $workspace_id");

require("../views/kanban.view.php");
