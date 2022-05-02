<?php
/**
 *
 */
class Workspace
{
    private $workspace_id = "";
    private $name = "";
    private $description = "";
    private $color = "";
    private $created_date = "";
    private $last_update = "";
    function __construct()
    {

    }
    public function setWorkspace_id($_workspace_id) { $this->workspace_id = $_workspace_id; }
    public function setName($_name) { $this->name = $_name; }
    public function setDescription($_description) { $this->description = $_description; }
    public function setColor($_color) { $this->color = $_color; }
    public function setCreated_date($_created_date) { $this->created_date = $_created_date; }
    public function setLast_update($_last_update) { $this->last_update = $_last_update; }

    public function getWorkspace_id() { return $this->workspace_id; }
    public function getName() { return $this->name; }
    public function getDescription() { return $this->description; }
    public function getColor() { return $this->color; }
    public function getCreated_date() { return $this->created_date; }
    public function getLast_update() { return $this->last_update; }
}
