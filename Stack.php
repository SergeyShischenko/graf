<?php


class Stack
{
    /**@var Node*/
    private $last;

    public function __construct()
    {
        $this->last = null;
    }

    public function put(string $item): void
    {
        $this->last = new Node($item, $this->last); // создаем элемент

    }

    public function get(): ?string
    {
        if ($this->isEmpty()) return null;
        $item = $this->last->getItem();
        $this->last = $this->last->getNext();
        return $item;
    }

    public function isEmpty():bool
    {
        return $this->last == null;
    }

}