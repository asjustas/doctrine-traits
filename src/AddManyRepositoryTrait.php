<?php

namespace AJ\Doctrine\Traits;

/**
 * Class AddManyRepositoryTrait
 * @package AJ\Doctrine\Traits
 */
trait AddManyRepositoryTrait
{
    /**
     * @param array $objects
     * @param bool  $flush
     */
    public function addMany(array $objects, $flush = true)
    {
        $em = $this->getEntityManager();

        foreach ($objects as $object) {
            $em->persist($object);
        }

        if ($flush) {
            $em->flush();
        }
    } 
}
