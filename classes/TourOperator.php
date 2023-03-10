<?php

class TourOperator
{

    private $id;
    private string $name;
    private string $link;

    /* construct */
    public function __construct($id, string $name, string $link)
    {

        $this->id = $id;
        $this->name = $name;
        $this->link = $link;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }
}
