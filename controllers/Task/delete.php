<?php
    require("../../utilities/SQLiteHelper.php");
    require("../../models/Task/task.php");

    if(isset($_GET['task_id']) && isset($_GET['workspace_id'])){
        if(!empty($_GET['task_id']) && !empty($_GET['workspace_id'])){
            $db = new SQLiteConection('../../db/TaskMaker.db');
            $handler = new SQLiteHelper($db);
            $delete_task = "DELETE FROM Task WHERE task_id = ".$_GET['task_id'];
            $handler->execute($delete_task);
            header("Location: ../kanban.php?workspace=".$_GET['workspace_id']);
        }
    }
