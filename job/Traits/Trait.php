<?php
namespace job\Traits;

trait Trait {
    public function populaObjeto ( array $dados ) 
    {
        foreach ( $dados as $key => $value ) 
        {
            $this->$key = $value;
        }
    }
}