<?php

namespace AJ\Doctrine\Traits;

/**
 * Class RemoveRepositoryTrait
 * @package AJ\Doctrine\Traits
 */
trait RemoveRepositoryTrait
{
    /**
     * @param object $object
     * @param bool   $flush
     */
    public function remove($object, $flush = true)
    {
        $em = $this->getEntityManager();
        $em->remove($object);

        if ($flush) {
            $em->flush();
        }
    }
}
