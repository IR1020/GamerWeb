<?php

namespace App\Models;

class Flag
{
    private $flag;
    
    public function __construct(bool $flag){
        if($flag == true){$this->flag = true;}
        else $this->flag = false;
    }
    public function getFlag(){return $this->flag;}
}
