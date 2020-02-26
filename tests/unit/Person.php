<?php
declare (strict_types = 1);

namespace GrottoPress\Nouveau;

class Person
{
    use NewTrait;

    private $firstNname;
    private $lastName;

    public function __construct(string $first_name, string $last_name)
    {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
    }

    public function fullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }
}
