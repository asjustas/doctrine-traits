<?php

namespace AJ\Doctrine\Traits;

/**
 * Class RemoveManyRepositoryTrait
 * @package AJ\Doctrine\Traits
 */
trait RemoveManyRepositoryTrait
{
    /**
     * @param array $objects
     * @param bool  $flush
     */
    public function removeMany(array $objects, $flush = true)
    {
        $em = $this->getEntityManager();

        foreach ($objects as $object) {
            $em->remove($object);
        }

        if ($flush) {
            $em->flush();
        }
    }
}
