<?php
    require("../../utilities/SQLiteHelper.php");
    require("../../models/Workspace/workspace.php");

    if(isset($_GET['workspace_id'])){
        if(!empty($_GET['workspace_id'])){
            $db = new SQLiteConection('../../db/TaskMaker.db');
            $handler = new SQLiteHelper($db);
            $delete_tasks = "DELETE FROM Task WHERE workspace_id = ".$_GET['workspace_id'];
            $delete_workspace = "DELETE FROM Workspace WHERE workspace_id = ".$_GET['workspace_id'];
            $handler->execute($delete_tasks);
            $handler->execute($delete_workspace);
            header("Location: ../../index.php");
        }
    }
