<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace classes\Models;

/**
 * Description of Index
 *
 * @author Andrew
 */
class Index
{

    protected $db;

    public function __construct()
    {
        $this->db = new \classes\Db();
    }

    public function returnRawSubjects()
    {

        $sql = 'SELECT * FROM `subjects` ORDER BY `id`';
        $data = $this->db->query($sql);
        $ret = [];
        if (!empty($data)) {
            foreach ($data as $subjects) {
                $id = $subjects['id'];
                $name = $subjects['name'];
                $ret[] = new \classes\Models\Subject($id, $name, null);
            }
        }
        return $ret;
    }

    public function returnEntries($subjId = null)
    {

        $sql = 'SELECT * FROM `entries` ORDER BY `issue`';
        $data = $this->db->query($sql);
//        var_dump($data);
        $ret = [];
        foreach ($data as $entries) {
            $id = $entries['id'];
            $subjectId = $entries['subjectId'];
            $issue = $entries['issue'];
            $date = $entries['date'];
            $page = $entries['page'];
            $comment = $entries['comment'];
            if (isset($subjId) && ($subjId == $subjectId)) {
                $ret[] = new \classes\Models\Entry($id, $subjectId, $issue, $date, $page, $comment);
            }
        }
        return $ret;
    }

    public function returnIndex()
    {
        $subjects = $this->returnRawSubjects();
        $ret = [];
        foreach ($subjects as $data) {
            $id = $data->getId();
            $name = $data->getName();
            $entries = $this->returnEntries($data->getId());
            $ret[] = new \classes\Models\Subject($id, $name, $entries);
        }
        return $ret;
    }
}
