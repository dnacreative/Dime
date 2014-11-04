<?php

namespace Dime\TimetrackerBundle\Entity;

use Dime\TimetrackerBundle\Entity\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * SettingRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SettingRepository extends EntityRepository
{
    /**
     * Search
     * Not implemented yet.
     *
     * @param string $text
     * @param QueryBuilder $qb
     *
     * @return SettingRepository
     */
    public function search($text, QueryBuilder $qb = null)
    {
        return $this;
    }

    /**
     * Scope by date,
     * Not implemented yet.
     *
     * @param                   $date
     * @param QueryBuilder $qb
     *
     * @return SettingRepository
     */
    public function scopeByDate($date, QueryBuilder $qb = null)
    {
        return $this;
    }

    /**
     * Filter by namespace
     *
     * @param                            $namespace
     * @param QueryBuilder $qb
     *
     * @return SettingRepository
     */
    public function scopeByNamespace($namespace, QueryBuilder $qb = null)
    {
        return $this->scopeByField('namespace', $namespace, $qb);
    }
}