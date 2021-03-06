<?php
namespace Gabriel\Biblio\Domain\Repository;

/***
 *
 * This file is part of the "Biblioteca" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * The repository for Lectors
 */
class LectorRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param $searchTerm
     */
    public function findByLike($searchTerm)
    {
        $query = $this->createQuery();
        $query->matching($query->logicalOr($query->like('nombre', '%' . $searchTerm . '%'), $query->like('rut', '%' . $searchTerm . '%')));
        return $query->execute();
    }
}
