<?php
declare (strict_types = 1);

namespace GrottoPress\Nouveau;

use Codeception\Test\Unit;

class NewTraitTest extends Unit
{
    public function testObjectInstantiationWithNewMethodWorksForBaseClass()
    {
        $this->assertSame('John Doe', Person::new('John', 'Doe')->fullName());
    }

    public function testObjectInstantiationWithNewMethodWorksForSubclass()
    {
        $this->assertSame(
            'Mary Smith',
            Student::new('Mary', 'Smith')->fullName()
        );
    }
}
