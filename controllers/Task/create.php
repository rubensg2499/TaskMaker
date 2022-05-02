<?php
    require("../../utilities/SQLiteHelper.php");
    require("../../models/Task/task.php");

    if(isset($_POST['submit'])){
        if(!empty($_POST['title'])){
            $db = new SQLiteConection('../../db/TaskMaker.db');
            $handler = new SQLiteHelper($db);
            $task = new Task();

            $task->setTitle($_POST['title']);
            $task->setDescription($_POST['description']);
            $task->setWorkspace_id($_POST['workspace_id']);

            $insert_task = "INSERT INTO Task(workspace_id, title, description) VALUES('".
                $task->getWorkspace_id()."','".$task->getTitle()."','".$task->getDescription()."');";

            $handler->execute($insert_task);
            header("Location: ../kanban.php?workspace=".$task->getWorkspace_id());
        }

    }
