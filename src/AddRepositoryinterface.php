<?php

namespace AJ\Doctrine\Traits;

/**
 * Interface AddRepositoryInterface
 * @package AJ\Doctrine\Traits
 */
interface AddRepositoryInterface
{
    public function add($object, $flush = true);
}
