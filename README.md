# Nouveau

## Description

*Nouveau* adds a `new()` static method to your class for constructing an instance of the class, as an alternative to using the `new` keyword.

In [ruby](https://ruby-lang.org) and [crystal](https://crystal-lang.org), you instantiate a class by doing:

```ruby
MyClass.new(*args)
```

In [rust](https://rust-lang.org), it is idiomatic to add a *constructor* to a type:

```rust
pub struct MyStruct {}

impl MyStruct {
    pub fn new() {}
}
```

...and call it thus:

```rust
MyStruct::new();
```

*Nouveau* brings the same concept to PHP, allowing to intantiate a class thus:

```php
MyClass::new(..$args);
```

The above is equivalent to:

```php
new MyClass(...$args);
```

Among other things, this allows chaining a method immediately unto the constructed object.

This:

```php
Person::new('John', 'Doe')->fullName();
```

Versus:

```php
$john = new Person('John', 'Doe');
$john->fullName();

// OR
(new Person('John', 'Doe'))->fullName();
```

## Usage

Install via composer:

`composer require grottopress/nouveau`

1. Import trait into your class:

```php
<?php

use GrottoPress\Nouveau\NewTrait;

class Greeter
{
    /**
     * Import trait
     */
    use NewTrait;

    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): string
    {
        return "Hello, {$this->name} :-)";
    }
}
```

1. Instantiate class

```php
$greeter = Greeter::new('John'); // Same as `new Greeter('John');`
echo $greeter->sayHello(); // => Hello, John :-)
```

Note that `new()` is variadic, and takes as many arguments as you pass to `__construct()`.
