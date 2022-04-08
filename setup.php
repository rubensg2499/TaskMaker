<?php

    require("utilities/SQLiteHelper.php");
    //Database creation
    $db = new SQLiteConection();
    $handler = new SQLiteHelper($db);

    /*Warning: Not modify this queries.*/
    //Drop tables
    $drop_tables = <<<query
        DROP TABLE IF EXISTS Task;
        DROP TABLE IF EXISTS Workspace;
    query;
    //table creation
    $table_workspace = <<<query
        CREATE TABLE Workspace(
            workspace_id INTEGER NOT NULL,
            name TEXT NOT NULL,
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
            FOREIGN KEY(workspace_id) REFERENCES Workspace(workspace_id)
        );
    query;

    $queries = array($drop_tables, $table_workspace, $table_task);
    foreach ($queries as $query) {
        if ($handler->create_table($query)) {
            echo $query;
        } else {
            echo "Ocurrió un error";
        }
    }
