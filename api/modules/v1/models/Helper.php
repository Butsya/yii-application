<?php

namespace api\modules\v1\models;

class Helper
{
    public $begin;
    public $end;
    public $type;

    public function __construct($begin, $end, $type)
    {
        $this->begin = $begin;
        $this->end = $end;
        $this->type = $type;
    }
}
