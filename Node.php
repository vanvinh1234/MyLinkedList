<?php


class Node
{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = NUll;
    }

    public function readNode()
    {
        return $this->data;
    }

    public function getData()
    {
        return $this->data;
    }
}