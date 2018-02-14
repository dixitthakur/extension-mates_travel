<?php
namespace MT\MatesTravel\Domain\Repository;

/***
 *
 * This file is part of the "MatesTravel" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 dixit
 *
 ***/

/**
 * The repository for CreateTrips
 */
class CreateTripRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @param int UserId
     * @return QueryResultInterface|CreateTrip[]
     */
    public function findMyTrip(int $id)
    {
        $query = $this->createQuery();
        $query->matching($query->equals('user_id', $id));
        return $query->execute();
    }

    /**
     * @param \MT\MatesTravel\Domain\Model\FindTravelers $findTravelers
     */
    public function findSearchTrip(\MT\MatesTravel\Domain\Model\FindTravelers $findTravelers)
    {

        $query = $this->createQuery();

        $and=[];
        $or = [];
        if(!is_null($findTravelers->getDestination())){
           $and[]=$query->equals('destination',$findTravelers->getDestination());
        }
        $or[]=$query->greaterThanOrEqual('depart_date',$findTravelers->getDepartDate()->format('Y-m-d'));
        $or[]=$query->lessThanOrEqual('return_date',$findTravelers->getReturnDate()->format('Y-m-d'));
        $and[] = $query->logicalOr($or);
        $query->matching($query->logicalAnd($and));
        return $query->execute();

    }
}
