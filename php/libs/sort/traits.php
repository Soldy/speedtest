<?php
trait SwapTrait
{
    public function swap (int $a, int $b) //pointer maybe faster but not safer
    {
        $temp = $this->store[$a];
        $this->store[$a] = $this->store[$b];
        $this->store[$b] = $temp;
    }
}


