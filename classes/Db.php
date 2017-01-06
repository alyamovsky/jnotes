<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author Andrew
 */
namespace classes;

class Db
{

    protected $handler;
    protected $statement;

    public function __construct()
    {
        // В конструкторе устанавливается и сохраняется соединение с базой данных. Параметры соединения берем из файла конфига
        global $dsn, $dblogin, $dbpass;
        $this->handler = new \PDO($dsn, $dblogin, $dbpass);
    }

    public function execute($query, $params = null)
    {
        // Метод execute(string $sql) выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
        // То есть метод служит для внесения и изменения данных в БД
        $this->statement = $this->handler->prepare($query);
        $bool = $this->statement->execute($params); // [':id' => 42];
        return $bool;
    }

    public function query($sql, $data = null)
    {
        // Метод query(string $sql, array $data) выполняет запрос, подставляет в него данные $data, возвращает данные результата запроса либо false, если выполнение не удалось
        // То есть метод служит для вывода данных из БД
//        $this->statement = $this->handler->prepare($sql);
//        $bool = $this->statement->execute($data);
        $this->statement = $this->handler->query($sql);
        $ret = $this->statement->fetchAll(\PDO::FETCH_ASSOC);
        if ($ret != true) {
            return false;
        } else {
            return $ret;
        }
    }
}
