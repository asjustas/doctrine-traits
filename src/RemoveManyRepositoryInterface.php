<?php

namespace AJ\Doctrine\Traits;

/**
 * Interface RemoveManyRepositoryInterface
 * @package AJ\Doctrine\Traits
 */
interface RemoveManyRepositoryInterface
{
    public function removeMany(array $objects, $flush = true);
}
