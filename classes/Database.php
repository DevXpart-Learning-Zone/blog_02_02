<?php

class Database
{
    public $link;

    public function __construct()
    {
        $this->link = new mysqli("localhost",'root','','blogsite');
    }



}