<?php
declare (strict_types = 1);

namespace GrottoPress\Nouveau;

trait NewTrait
{
    public static function new(...$args): self
    {
        return new static(...$args);
    }
}
