<?php

class Queue extends Sequence
{
    /**@var Node*/
    private $head; // Первый элемент
    /**@var Node*/
    private $last; // Последний элемент

    public function put(string $item): void
    {
        $node = new Node($item);// создаем элемент
        if ($this->isEmpty())
        {
            $this->head = $node;//добавляем эл. в начало
            $this->last = $node;//добавляем эл. в конец
        }else {
            $this->last->setNext($node);
            $this->last = $node;
        }
    }

    public function get(): ?string
    {
        if($this->isEmpty()) return null;
        $item = $this->head->getItem();// определяем первый эл.
        $this->head = $this->head->getNext();//опрелеляем каккой будет первым когда выйдет первый

        return $item;

    }

    public function isEmpty(): bool
    {
        return $this->head == null;
    }
}