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
 * CreateTrip
 */
class   CreateTrip extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * userId
     *
     * @var int
     */
    protected $userId = 0;

    /**
     * tripCreator
     *
     * @var string
     */
    protected $tripCreator = '';

    /**
     * destination
     *
     * @var string
     * @validate NotEmpty
     */
    protected $destination = '';

    /**
     * departDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $departDate = null;

    /**
     * returnDate
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $returnDate = null;

    /**
     * tripTitle
     *
     * @var string
     * @validate NotEmpty
     */
    protected $tripTitle = '';

    /**
     * accommodation
     *
     * @var string
     * @validate NotEmpty
     */
    protected $accommodation = '';

    /**
     * iitinerary
     *
     * @var string
     * @validate NotEmpty
     */
    protected $iitinerary = '';

    /**
     * budget
     *
     * @var string
     * @validate NotEmpty
     */
    protected $budget = '';

    /**
     * transportMode
     *
     * @var string
     * @validate NotEmpty
     */
    protected $transportMode = '';

    /**
     * roomSharing
     *
     * @var string
     * @validate NotEmpty
     */
    protected $roomSharing = '';

    /**
     * typeOfTravel
     *
     * @var string
     * @validate NotEmpty
     */
    protected $typeOfTravel = '';

    /**
     * purposeOfTravel
     *
     * @var string
     */
    protected $purposeOfTravel = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * thingsToDo
     *
     * @var string
     */
    protected $thingsToDo = '';

    /**
     * placesToSee
     *
     * @var string
     */
    protected $placesToSee = '';

    /**
     * email
     * @var string
     *@transient
     */
    protected $email = '';





    /**
     * @var \In2code\Femanager\Domain\Model\User
     * @transient
     */
    protected $user=null;

    /**
     * @return \In2code\Femanager\Domain\Model\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \In2code\Femanager\Domain\Model\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    /**
     * telephone
     * @var string
     *@transient
     */
    protected $telephone = '';
    /**
     * profileImg
     * @var string
     *@transient
     */
    protected $profileImg = '';

    /**
     * @return string
     */
    public function getProfileImg()
    {
        return $this->profileImg;
    }

    /**
     * @param string $profileImg
     *
     */
    public function setProfileImg($profileImg)
    {
        $this->profileImg = $profileImg;
    }

    /**
     * Returns the userId
     *
     * @return int $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets the userId
     *
     * @param int $userId
     * @return void
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Returns the tripCreator
     *
     * @return string $tripCreator
     */
    public function getTripCreator()
    {
        return $this->tripCreator;
    }

    /**
     * Sets the tripCreator
     *
     * @param string $tripCreator
     * @return void
     */
    public function setTripCreator($tripCreator)
    {
        $this->tripCreator = $tripCreator;
    }

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
     * Returns the tripTitle
     *
     * @return string $tripTitle
     */
    public function getTripTitle()
    {
        return $this->tripTitle;
    }

    /**
     * Sets the tripTitle
     *
     * @param string $tripTitle
     * @return void
     */
    public function setTripTitle($tripTitle)
    {
        $this->tripTitle = $tripTitle;
    }

    /**
     * Returns the iitinerary
     *
     * @return array $iitinerary
     */
    public function getIitinerary()
    {
        return explode(',', $this->iitinerary);
    }

    /**
     * Sets the iitinerary
     *
     * @param array $iitinerary
     * @return void
     */
    public function setIitinerary(array $iitinerary)
    {
        $this->iitinerary = implode(',', $iitinerary);
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
     * Returns the transportMode
     *
     * @return array $transportMode
     */
    public function getTransportMode()
    {
        return explode(',', $this->transportMode);
    }

    /**
     * Sets the transportMode
     *
     * @param array $transportMode
     * @return void
     */
    public function setTransportMode(array $transportMode)
    {
        $this->transportMode = implode(',', $transportMode);
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
     * Returns the typeOfTravel
     *
     * @return array $typeOfTravel
     */
    public function getTypeOfTravel()
    {
        return explode(',', $this->typeOfTravel);
    }

    /**
     * Sets the typeOfTravel
     *
     * @param array $typeOfTravel
     * @return void
     */
    public function setTypeOfTravel(array $typeOfTravel)
    {
        $this->typeOfTravel = implode(',', $typeOfTravel);
    }

    /**
     * Returns the purposeOfTravel
     *
     * @return array $purposeOfTravel
     */
    public function getPurposeOfTravel()
    {
        return explode(',', $this->purposeOfTravel);
    }

    /**
     * Sets the purposeOfTravel
     *
     * @param array $purposeOfTravel
     * @return void
     */
    public function setPurposeOfTravel(array $purposeOfTravel)
    {
        $this->purposeOfTravel = implode(',', $purposeOfTravel);
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the thingsToDo
     *
     * @return string $thingsToDo
     */
    public function getThingsToDo()
    {
        return $this->thingsToDo;
    }

    /**
     * Sets the thingsToDo
     *
     * @param string $thingsToDo
     * @return void
     */
    public function setThingsToDo($thingsToDo)
    {
        $this->thingsToDo = $thingsToDo;
    }

    /**
     * Returns the placesToSee
     *
     * @return string $placesToSee
     */
    public function getPlacesToSee()
    {
        return $this->placesToSee;
    }

    /**
     * Sets the placesToSee
     *
     * @param string $placesToSee
     * @return void
     */
    public function setPlacesToSee($placesToSee)
    {
        $this->placesToSee = $placesToSee;
    }

    /**
     * Returns the accommodation
     *
     * @return array $accommodation
     */
    public function getAccommodation()
    {
        return explode(',', $this->accommodation);
    }

    /**
     * Sets the accommodation
     *
     * @param array $accommodation
     * @return void
     */
    public function setAccommodation(array $accommodation)
    {
        $this->accommodation = implode(',', $accommodation);
    }
}
