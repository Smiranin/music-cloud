<?php

class SongsModel extends Model
{
    public function getData()
    {
       $rs = $this->query("SELECT * FROM `songs`")->all();

        return $rs;
    }
}