<?php

final class GnomeSort extends SortAbstract implements SortInterface
{
    use SwapTrait 
    {
        swap as private;
    }
    protected function doIt()
    {
        $i = 1;
        while ($this->length > $i){
            if ($this->store[$i-1] > $this->store[$i]) {
                $this->swap($i, $i-1);
            } else {
                 $i++;
            }
        }
    }
}



