<?php

final class BubbleSort extends SortAbstract implements SortInterface
{
    use SwapTrait {swap as private; }
    protected function doIt ()
    {
        for ($i = 0 ; $this->length > $i ; $i++)
            for ($j = 0 ; $this->length - $i > $j ; $j++ )
                if ($this->store[$j] > $this->store[$j+1])
                     $this->swap($j, $j+1);
    }
}

