<?php
include 'Node.php';
include 'Sequence.php';
include 'Stack.php';
include 'Queue.php';

$stack = new Queue();

$stack->put('John');
$stack->put('Alex');
$stack->put('Mike');

echo $stack->get(). "<br>\n";
echo $stack->get(). "<br>\n";
echo $stack->get(). "<br>\n";