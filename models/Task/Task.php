<?php
/**
 *
 */
class Task
{
    private $task_id = "";
    private $workspace_id = "";
    private $title = "";
    private $stage = ""
    private $description = "";
    private $created_date = "";
    private $last_update = "";
    function __construct(argument)
    {

    }
    public function setTask_id($_task_id) { $this->task_id = $_task_id; }
    public function setWokspace_id($_workspace_id) { $this->workspace_id = $_workspace_id; }
    public function setTitle($_title) { $this->title = $_title; }
    public function setDescription($_description) { $this->description = $_description; }
    public function setStage($_stage) { $this->stage = $_stage; }
    public function setCreated_date($_created_date) { $this->created_date = $_created_date; }
    public function setLast_update($_last_update) { $this->last_update = $_last_update; }

    public function getTask_id() { return $this->task_id; }
    public function getWokspace_id() { return $this->workspace_id; }
    public function getTitle() { return $this->title; }
    public function getDescription() { return $this->description; }
    public function getStage() { return $this->Stage; }
    public function getCreated_date() { return $this->created_date; }
    public function getLast_update() { return $this->last_update; }
}
