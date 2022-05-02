<?php
    require("../../utilities/SQLiteHelper.php");
    require("../../models/Workspace/workspace.php");

    if(isset($_POST['submit'])){
        if(!empty($_POST['name'])){
            $db = new SQLiteConection('../../db/TaskMaker.db');
            $handler = new SQLiteHelper($db);
            $workspace = new Workspace();

            $workspace->setWorkspace_id($_POST['workspace_id']);
            $workspace->setName($_POST['name']);
            $workspace->setDescription($_POST['description']);
            $workspace->setColor($_POST['color']);

            $update_workspace = "UPDATE Workspace SET name = '".$workspace->getName()."', description = '".$workspace->getDescription()."', color = '".$workspace->getColor()."' WHERE workspace_id = ".$workspace->getWorkspace_id();

            $handler->execute($update_workspace);
            header("Location: ../kanban.php?workspace=".$workspace->getWorkspace_id());
        }

    }
