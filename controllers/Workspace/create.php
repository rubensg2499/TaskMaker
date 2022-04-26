<?php
    require("../../utilities/SQLiteHelper.php");
    require("../../models/Workspace/workspace.php");

    if(isset($_POST['submit'])){
        if(!empty($_POST['name'])){
            $db = new SQLiteConection('../../db/TaskMaker.db');
            $handler = new SQLiteHelper($db);
            $workspace = new Workspace();

            $workspace->setName($_POST['name']);
            $workspace->setDescription($_POST['description']);
            $workspace->setColor($_POST['color']);

            $insert_workspace = "INSERT INTO Workspace(name, description, color) VALUES('".
                $workspace->getName()."','".$workspace->getDescription()."','".$workspace->getColor()."');";

            $handler->execute($insert_workspace);
            header("Location: ../../index.php");
        }

    }
