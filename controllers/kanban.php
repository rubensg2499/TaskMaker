<?php
require("../utilities/SQLiteHelper.php");
require("../models/Workspace/workspace.php");
require("../models/Task/task.php");

$workspace_id = $_GET['workspace'];
$db = new SQLiteConection('../db/TaskMaker.db');

$results = $db->query("SELECT * FROM Workspace WHERE workspace_id = $workspace_id");
$workspace = new Workspace();
while ($row = $results->fetchArray()) {
    $workspace->setWorkspace_id($row['workspace_id']);
    $workspace->setName($row['name']);
    $workspace->setDescription($row['description']);
    $workspace->setColor($row['color']);
    $workspace->setCreated_date($row['created_date']);
    $workspace->setLast_update($row['last_update']);
}

$results = $db->query("SELECT * FROM Task WHERE workspace_id = $workspace_id");
$tasks_to_do = array();
$tasks_doing = array();
$tasks_done = array();

while ($row = $results->fetchArray()) {
    $task = new Task();
    $task->setTask_id($row['task_id']);
    $task->setWorkspace_id($row['workspace_id']);
    $task->setTitle($row['title']);
    $task->setStage($row['stage']);
    $task->setDescription($row['description']);
    $task->setCreated_date($row['created_date']);
    $task->setLast_update($row['last_update']);

    switch ($task->getStage()) {
        case 'TO_DO':
            $tasks_to_do[] = $task;
            break;
        case 'DOING':
            $tasks_doing[] = $task;
            break;
        case 'DONE':
            $tasks_done[] = $task;
            break;
        default:
            $tasks_to_do[] = $task;
            break;
    }
}

require("../views/kanban.view.php");
