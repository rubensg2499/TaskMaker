<?php

    //Data types
    const TYPE_INT = "integer";
    const TYPE_TEXT = "text";
    const TYPE_DOUBLE = "double";
    const TYPE_BLOB = "blob";
    const NOT_NULL = "not null";
    const NOT_KEY = "not key";
    const PRIMARY_KEY = "primary key";
    const FOREIGN_KEY = "foreign key";
    //DB
    const DB_NAME = 'db/TaskMaker.db';
    //Tables
    const TABLE_WORKSPACE = "Workspace";
    const TABLE_TASK = "Task";
    const TABLE_EVENT = "Event";
    //Fields
    const FIELD_WORKSPACE_ID = "workspace_id";
    const FIELD_NAME = "name";
    const FIELD_CREATED_DATE = "created_date";
    const FIELD_LAST_UPDATE = "last_update";
    const FIELD_TASK_ID = "task_id";
    const FIELD_TITLE = "title";
    const FIELD_STAGE = "stage";
    const FIELD_DESCRIPTION = "description";
    const FIELD_COLOR = "color";
    const FIELD_EVENT_ID = "event_id";
    const FIELD_EVENT_DATE = "event_date";
    const FIELD_EVENT_TIME = "event_time";
    const FIELD_EVENT_LINK = "event_link";

    const COLOR_BLUE = "#2A59A5";
    const COLOR_PURPLE = "#8047B9";
    const COLOR_RED = "#BA2222";

    $colors = array('blue' => COLOR_BLUE, 'purple' => COLOR_PURPLE, 'red' => COLOR_RED);
