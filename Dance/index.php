<?php
include_once "Dancer.php";
include_once "SquareDance.php";

$squareDance = new SquareDance();

$squareDance->maleQueue->enqueue(new Dancer('Bob1', 'male'));
$squareDance->maleQueue->enqueue(new Dancer('Bob2', 'male'));
$squareDance->maleQueue->enqueue(new Dancer('Bob3', 'male'));
$squareDance->maleQueue->enqueue(new Dancer('Bob4', 'male'));

$squareDance->femaleQueue->enqueue(new Dancer('Alice1', 'female'));
$squareDance->femaleQueue->enqueue(new Dancer('Alice2', 'female'));
$squareDance->femaleQueue->enqueue(new Dancer('Alice3', 'female'));

while (!($squareDance->maleQueue->isEmpty() || $squareDance->femaleQueue->isEmpty())) {
    $squareDance->getFirstCouple();
}

$squareDance->femaleQueue->enqueue(new Dancer('Alice4', 'female'));
$squareDance->femaleQueue->enqueue(new Dancer('Alice5', 'female'));
$squareDance->femaleQueue->enqueue(new Dancer('Alice6', 'female'));

while (!($squareDance->maleQueue->isEmpty() || $squareDance->femaleQueue->isEmpty())) {
    $squareDance->getFirstCouple();
}

$squareDance->getNumberInQueue();