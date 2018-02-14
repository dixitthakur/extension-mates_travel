<?php
namespace MT\MatesTravel\Domain\Model;

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
 * FindTravelers
 */
class FindTravelers extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * destination
     *
     * @var string
     */
    protected $destination = '';

    /**
     * departDate
     *
     * @var \DateTime
     */
    protected $departDate = null;

    /**
     * returnDate
     *
     * @var \DateTime
     */
    protected $returnDate = null;

    /**
     * budget
     *
     * @var string
     */
    protected $budget = '';

    /**
     * travelType
     *
     * @var string
     */
    protected $travelType = '';

    /**
     * roomSharing
     *
     * @var string
     */
    protected $roomSharing = '';

    /**
     * purposeOfTravel
     *
     * @var string
     */
    protected $purposeOfTravel = '';

    /**
     * Returns the destination
     *
     * @return string $destination
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets the destination
     *
     * @param string $destination
     * @return void
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * Returns the departDate
     *
     * @return \DateTime $departDate
     */
    public function getDepartDate()
    {
        return $this->departDate;
    }

    /**
     * Sets the departDate
     *
     * @param \DateTime $departDate
     * @return void
     */
    public function setDepartDate(\DateTime $departDate)
    {
        $this->departDate = $departDate;
    }

    /**
     * Returns the returnDate
     *
     * @return \DateTime $returnDate
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Sets the returnDate
     *
     * @param \DateTime $returnDate
     * @return void
     */
    public function setReturnDate(\DateTime $returnDate)
    {
        $this->returnDate = $returnDate;
    }

    /**
     * Returns the budget
     *
     * @return string $budget
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Sets the budget
     *
     * @param string $budget
     * @return void
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * Returns the travelType
     *
     * @return array $travelType
     */
    public function getTravelType()
    {
        return explode(",",$this->travelType);
    }

    /**
     * Sets the travelType
     *
     * @param array $travelType
     * @return void
     */
    public function setTravelType(array $travelType)
    {

        $this->travelType = implode(',', $travelType);
    }

    /**
     * Returns the roomSharing
     *
     * @return string $roomSharing
     */
    public function getRoomSharing()
    {
        return $this->roomSharing;
    }

    /**
     * Sets the roomSharing
     *
     * @param string $roomSharing
     * @return void
     */
    public function setRoomSharing($roomSharing)
    {
        $this->roomSharing = $roomSharing;
    }

    /**
     * Returns the purposeOfTravel
     *
     * @return array $purposeOfTravel
     */
    public function getPurposeOfTravel()
    {
        return explode(",",$this->purposeOfTravel);
    }

    /**
     * Sets the purposeOfTravel
     *
     * @param array $purposeOfTravel
     * @return void
     */
    public function setPurposeOfTravel($purposeOfTravel)
    {
        $this->purposeOfTravel = implode(',', $purposeOfTravel);
    }
}
