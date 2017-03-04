<?php

namespace AJ\Doctrine\Traits;

/**
 * Interface RemoveRepositoryInterface
 * @package AJ\Doctrine\Traits
 */
interface RemoveRepositoryInterface
{
    public function remove($object, $flush = true);
}
