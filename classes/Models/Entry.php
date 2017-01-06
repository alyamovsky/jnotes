<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace classes\Models;

/**
 * Description of Entry
 *
 * @author Andrew
 */
class Entry
{

    protected $id;
    protected $subjectId;
    protected $issue;
    protected $date;
    protected $page;
    protected $comment;

    public function __construct($id, $subjectId, $issue, $date, $page, $comment)
    {
        $this->id = $id;
        $this->subjectId = $subjectId;
        $this->issue = $issue;
        $this->date = $date;
        $this->page = $page;
        $this->comment = $comment;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSubjectId()
    {
        return $this->subjectId;
    }

    public function getIssue()
    {
        return $this->issue;
    }

    public function getDate()
    {
        $raw = $this->date;
        $result = strtotime($raw);
        return $result;
    }

    public function getPage()
    {
        return $this->page;
    }

    public function getComment()
    {
        return $this->comment;
    }
}
