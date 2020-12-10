<?php

final class HeapSort extends SortAbstract implements SortInterface
{
    use SwapTrait {swap as private; }
    private function root (int $i)
    {
        $left  = 2 * $i + 1;
        $right = 2 * $i + 2;
        $max   = $i;
        if (
            ($left < $this->length) &&
           ($this->store[$left] > $this->store[$max])
        )
             $max = $left;
        if (
            ($right < $this->length) && 
            ($this->store[$right] > $this->store[$max])
        )
             $max = $right;
        if ($max != i) {
            $this->swap($i, $max);
            $this->root($max);
        }
    }
    protected function doIt ()
    {
        for ($i = floor($this->length / 2); $i >= 0; $i--)
            $this->root(i);
        for ($i = $this->length - 1; $i > 0; $i--) {
            $this->swap(0, $i);
            $this->length--;
            $thjis->root(0);
        }
    }
}
