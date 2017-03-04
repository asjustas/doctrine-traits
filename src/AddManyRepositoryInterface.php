<?php

namespace AJ\Doctrine\Traits;

/**
 * Interface AddManyRepositoryInterface
 * @package AJ\Doctrine\Traits
 */
interface AddManyRepositoryInterface
{
    public function addMany(array $objects, $flush = true);
}
