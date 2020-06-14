# SOLID principles examples in PHP

## Single Responsibility Principle ([example #1](https://github.com/drzeitraum/php-solid-principles-examples/blob/master/single-responsibility-1.php), [example #2](https://github.com/drzeitraum/php-solid-principles-examples/blob/master/single-responsibility-2.php))

> **Wikipedia:** A computer-programming principle that states that every module or class should have responsibility over a single part of the functionality provided by the software, and that responsibility should be entirely encapsulated by the class, module or function.

**When use:** when there is at least one reason to change the class.

## Open-closed Principle ([example #1](open-closed-1.php)))

> **Wikipedia:** In object-oriented programming, the open/closed principle states "software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification";[1] that is, such an entity can allow its behaviour to be extended without modifying its source code.

**When use:** The class should not be modified, but we should be able to change its behavior.

## Liskov Substitution Principle

> **Wikipedia:** Substitutability is a principle in object-oriented programming stating that, in a computer program, if S is a subtype of T, then objects of type T may be replaced with objects of type S (i.e. an object of type T may be substituted with any object of a subtype S) without altering any of the desirable properties of the program (correctness, task performed, etc.).
