<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27.03.2019
 * Time: 10:15
 */

abstract class Sequence
{
   abstract public function put(string $item): void;
   abstract public function get(): ?string;
   abstract public function isEmpty():bool;
}