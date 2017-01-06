<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace classes;

/**
 * Description of Uploader
 *
 * @author Andrew
 */
class Uploader // в дальнейшем сделать его extends \classes\Models\Index
{

    protected $db;

    public function __construct()
    {
        $this->db = new \classes\Db();
    }

    public function uploadSubject($name)
    {
        $sql = 'INSERT INTO `subjects`(`name`) VALUES (:name);';
        $params[':name'] = $name;
        $data = $this->db->execute($sql, $params);
//        var_dump($sql);
//        echo '<br>';
//        var_dump($params);
        return $data;
    }

    public function uploadEntry($issue, $date_month, $date_year, $page, $comment, $subjectId)
    {
        $var = '01-' . $date_month . '-' . $date_year . ' 12:00';
        $date = strtotime($var);
        $date = date('Y-m-d', $date);
        $sql = 'INSERT INTO `entries`(`subjectId`, `issue`, `date`, `page`, `comment`) VALUES (:subjectId, :issue, :date, :page, :comment);';
        $params = [
            ':subjectId' => $subjectId,
            ':issue' => $issue,
            ':date' => $date,
            ':page' => $page,
            ':comment' => $comment,
        ];
        $data = $this->db->execute($sql, $params);
//        var_dump($sql);
//        echo '<br>';
//        var_dump($params);
        return $data;
    }

    public function editEntry($issue, $date_month, $date_year, $page, $comment, $entryId)
    {
        $var = '01-' . $date_month . '-' . $date_year . ' 12:00';
        $date = strtotime($var);
        $date = date('Y-m-d', $date);
        $sql = 'UPDATE `entries` '
            . 'SET `issue`=:issue, `date`=:date, `page`=:page, `comment`=:comment '
            . 'WHERE `entries`.`id`=:entryId;';
        $params = [
            ':issue' => $issue,
            ':date' => $date,
            ':page' => $page,
            ':comment' => $comment,
            ':entryId' => $entryId,
        ];
        $data = $this->db->execute($sql, $params);
//        var_dump($sql);
//        echo '<br>';
//        var_dump($params);
        return $data;
    }

    public function deleteEntry($entryId)
    {
        $sql = 'DELETE FROM `entries` '
            . 'WHERE `entries`.`id`=:entryId;';
        $params = [
            ':entryId' => $entryId,
        ];
        $data = $this->db->execute($sql, $params);
//        var_dump($sql);
//        echo '<br>';
//        var_dump($params);
        return $data;
    }

    public function redirect()
    {
        $url = 'Location: /';
        header($url);
    }
}
