<?php

namespace AJ\Doctrine\Traits;

/**
 * Class AddRepositoryTrait
 * @package AJ\Doctrine\Traits
 */
trait AddRepositoryTrait
{
    /**
     * @param object $object
     * @param bool   $flush
     */
    public function add($object, $flush = true)
    {
        $em = $this->getEntityManager();
        $em->persist($object);

        if ($flush) {
            $em->flush();
        }
    }
}
