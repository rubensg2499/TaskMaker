<?php

    require("utilities/SQLiteHelper.php");
    //Database creation
    $db = new SQLiteConection('db/TaskMaker.db');
    $handler = new SQLiteHelper($db);

    /*Warning: Not modify this queries.*/
    //Drop objects
    $drop_objects = <<<query
        DROP TRIGGER IF EXISTS tgr_last_update_workspace;
        DROP TRIGGER IF EXISTS tgr_last_update_task;
        DROP TABLE IF EXISTS Task;
        DROP TABLE IF EXISTS Workspace;
    query;
    //table creation
    $table_workspace = <<<query
        CREATE TABLE Workspace(
            workspace_id INTEGER NOT NULL,
            name TEXT NOT NULL,
            description TEXT,
            color TEXT NOT NULL DEFAULT 'blue',
            created_date DATE DEFAULT (datetime('now','localtime')),
            last_update DATE DEFAULT (datetime('now','localtime')),
            PRIMARY KEY(workspace_id)
        );
    query;

    $table_task = <<<query
        CREATE TABLE Task(
            task_id INTEGER NOT NULL,
            workspace_id INTEGER NOT NULL,
            title TEXT NOT NULL,
            stage TEXT NOT NULL DEFAULT 'TO_DO',
            description TEXT DEAFAULT 'NOT DESCPRITION',
            created_date DATE DEFAULT (datetime('now','localtime')),
            last_update DATE DEFAULT (datetime('now','localtime')),
            PRIMARY KEY(task_id),
            FOREIGN KEY(workspace_id) REFERENCES Workspace(workspace_id) ON DELETE CASCADE
        );
    query;

    $trigger_workspace = <<<query
    CREATE TRIGGER tgr_last_update_workspace
    AFTER UPDATE ON Workspace
    BEGIN
        UPDATE Workspace SET last_update = (datetime('now','localtime')) WHERE workspace_id = NEW.workspace_id;
    END;
    query;

    $trigger_task = <<<query
    CREATE TRIGGER tgr_last_update_task
    AFTER UPDATE ON Task
    BEGIN
        UPDATE Task SET last_update = (datetime('now','localtime')) WHERE task_id = NEW.task_id;
    END;
    query;

    $queries = array($drop_objects, $table_workspace, $table_task, $trigger_workspace, $trigger_task);
    foreach ($queries as $query) {
        if ($handler->execute($query)) {
            echo $query;
        } else {
            echo "Ocurrió un error";
        }
    }
