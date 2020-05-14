<?php

namespace Ough;


class SysInfo
{
    protected $os;
    public function __construct(){
            $this->os = 'Lnu';
    }

    public static function __callStatic($name, $arguments)
    {
        $self = new static();
        if(method_exists($self,$name)){
           return $self->$name(...$arguments);
        }
    }
}