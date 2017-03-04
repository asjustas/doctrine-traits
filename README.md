# Doctrine traits

[![Latest Stable Version](https://poser.pugx.org/asjustas/doctrine-traits/v/stable.svg)](https://packagist.org/packages/asjustas/doctrine-traits)
[![Latest Unstable Version](https://poser.pugx.org/asjustas/doctrine-traits/v/unstable.svg)](https://packagist.org/packages/asjustas/doctrine-traits)

Traits to help now write same code again.

## Installation

Install via composer:

 `composer require asjustas/doctrine-traits`

## Traits

### AddRepositoryTrait

Trait add `add` method to doctrine repository.

```php
class UserRepository extends EntityRepository
{
    use AddRepositoryTrait;
}
```

persist and flush object:

```php
$userRepository->add($object);
```

only persist object:

```php
$userRepository->add($object, false);
```

### AddManyRepositoryTrait

Trait add `addMany` method to doctrine repository.

```php
class UserRepository extends EntityRepository
{
    use AddManyRepositoryTrait;
}
```

persist and flush objects array:

```php
$userRepository->addMany($objects);
```

only persist objects array:

```php
$userRepository->addMany($object, false);
```

### RemoveRepositoryTrait

Trait add `remove` method to doctrine repository.

```php
class UserRepository extends EntityRepository
{
    use RemoveRepositoryTrait;
}
```

remove and flush object:

```php
$userRepository->remove($object);
```

only remove object:

```php
$userRepository->remove($object, false);
```

### RemoveManyRepositoryTrait

Trait add `addMany` method to doctrine repository.

```php
class UserRepository extends EntityRepository
{
    use RemoveManyRepositoryTrait;
}
```

remove and flush objects array:

```php
$userRepository->removeMany($objects);
```

only remove objects array:

```php
$userRepository->removeMany($object, false);
```