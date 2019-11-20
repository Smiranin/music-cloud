<?php
class Model
{
// соединение с БД
    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'music_db');
        if ($this->mysqli->connect_error) {
            die('Connect Error (' . $this->mysqli->connect_errno . ') ' . $this->mysqli->connect_error);
        }
    }

// фильтрация запросов БД
    public function query($sql)
    {
        //берем аргументы функции, которые пришли
        $args = func_get_args();

        //выдергиваем первый аргумент
        $sql = array_shift($args);

        //>>> фильтруем массив
        $link = $this->mysqli;
        $args = array_map(function ($params) use ($link) {
            //экранирование
            return "'" . $link->escape_string($params) . "'";
        }, $args);

        //sql запрос заменим проценты и вопросы
        $sql = str_replace(array('%', '?'), array('%%', '%s'), $sql);

        array_unshift($args, $sql);

        $sql = call_user_func_array('sprintf', $args);
        //<<<
        $this->last = $this->mysqli->query($sql);
        if ($this->last === false) throw new Exception('DataBase error'.$this->mysqli->error);

        return $this;
    }

    public function assoc()
    {
        return $this->last->fetch_assoc();
    }

    public function all()
    {
        $result = array();
        while ($row = $this->last->fetch_assoc())
            $result[] = $row;
        return $result;
    }
}