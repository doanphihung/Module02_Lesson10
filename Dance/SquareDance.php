<?php

class SquareDance
{
    public $maleQueue;
    public $femaleQueue;

    public function __construct()
    {
        $this->maleQueue = new SplQueue();
        $this->femaleQueue = new SplQueue();
    }

    public function getNumberInQueue()
    {
        $num = $this->maleQueue->count() + $this->femaleQueue->count();
        echo "There are $num persons in queue";
    }

    public function getFirstCouple()
    {
        if ($this->maleQueue->isEmpty() || $this->femaleQueue->isEmpty()) {
            echo "Empty queue, cannot match a couple dancer <br>";
            return false;
        } else {
            echo $this->maleQueue->dequeue()->name . ' match with ' . $this->femaleQueue->dequeue()->name . '<br>';
        }
    }
}

