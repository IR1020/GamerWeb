<?php

namespace App\Models;

class Flag
{
    private $flag;
    
    public function __construct(int $flag){
        if($flag == 0){$this->flag = true;}
        else $this->flag = false;
    }
    public function getFlag(){return $this->flag;}
}
