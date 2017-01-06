<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace classes\Models;

/**
 * Description of Subject
 *
 * @author Andrew
 */
class Subject
{

    protected $id;
    protected $name;
    protected $entries;

    public function __construct($id, $name, $entry)
    {
        $this->id = $id;
        $this->name = $name;
        $this->entries = $entry;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEntries()
    {
        return $this->entries;
    }

    public function countEntries()
    {
        $data = new \classes\Models\Index;
        return count($data->returnEntries($this->getId()));
    }
}
