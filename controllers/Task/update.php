<?php
    require("../../utilities/SQLiteHelper.php");
    require("../../models/Task/task.php");
    if(
        isset($_GET['stage']) &&
        isset($_GET['action']) &&
        isset($_GET['task']) &&
        isset($_GET['workspace'])
    ){
        if (
            !empty($_GET['stage']) &&
            !empty($_GET['action']) &&
            !empty($_GET['task']) &&
            !empty($_GET['workspace'])
        ){
            switch ($_GET['stage']) {
                case 'backlog':
                    backlog_stage($_GET['action'], $_GET['task']);
                    break;
                case 'doing':
                    doing_stage($_GET['action'], $_GET['task']);
                    break;
                case 'done':
                    done_stage($_GET['action'], $_GET['task']);
                    break;
            }
        }

    }
    function backlog_stage($action, $task)
    {
        $db = new SQLiteConection('../../db/TaskMaker.db');
        $handler = new SQLiteHelper($db);
        switch ($action) {
            case 'move_to_right':
                $update_task = "UPDATE Task SET stage = 'DOING' WHERE task_id=".$task;
                $handler->execute($update_task);
                break;
        }
    }

    function doing_stage($action, $task)
    {
        $db = new SQLiteConection('../../db/TaskMaker.db');
        $handler = new SQLiteHelper($db);
        switch ($action) {
            case 'move_to_right':
                $update_task = "UPDATE Task SET stage = 'DONE' WHERE task_id=".$task;
                $handler->execute($update_task);
                break;
            case 'move_to_left':
                $update_task = "UPDATE Task SET stage = 'TO_DO' WHERE task_id=".$task;
                $handler->execute($update_task);
                break;
        }
    }

    function done_stage($action, $task)
    {
        $db = new SQLiteConection('../../db/TaskMaker.db');
        $handler = new SQLiteHelper($db);
        switch ($action) {
            case 'move_to_left':
                $update_task = "UPDATE Task SET stage = 'DOING' WHERE task_id=".$task;
                $handler->execute($update_task);
                break;
        }
    }

    header("Location: ../kanban.php?workspace=".$_GET['workspace']);
