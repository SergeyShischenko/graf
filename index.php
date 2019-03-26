<?php
include 'Node.php';
include 'Stack.php';

$stack = new Stack();

$stack->put('John');
$stack->put('Alex');
$stack->put('Mike');

echo $stack->get(). "<br>\n";
echo $stack->get(). "<br>\n";
echo $stack->get(). "<br>\n";