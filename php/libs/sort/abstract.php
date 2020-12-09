<?php
abstract class SortAbstract {
    protected $store  = [];
    protected $length;
    public function sorting (): bool
    {
         $this->doIt();
         return true;
    }
    public function get (): array
    {
        return $this->store;
    }
    public function __construct(array $in_array)
    {
        $this->store = $in_array;
        $this->length = count($in_array);
    }
}

