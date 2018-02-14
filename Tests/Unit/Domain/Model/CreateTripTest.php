<?php
namespace MT\MatesTravel\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author dixit 
 */
class CreateTripTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Domain\Model\CreateTrip
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MT\MatesTravel\Domain\Model\CreateTrip();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUserIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUserId()
        );
    }

    /**
     * @test
     */
    public function setUserIdForIntSetsUserId()
    {
        $this->subject->setUserId(12);

        self::assertAttributeEquals(
            12,
            'userId',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTripCreatorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTripCreator()
        );
    }

    /**
     * @test
     */
    public function setTripCreatorForStringSetsTripCreator()
    {
        $this->subject->setTripCreator('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tripCreator',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDestinationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDestination()
        );
    }

    /**
     * @test
     */
    public function setDestinationForStringSetsDestination()
    {
        $this->subject->setDestination('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'destination',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDepartDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDepartDate()
        );
    }

    /**
     * @test
     */
    public function setDepartDateForDateTimeSetsDepartDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDepartDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'departDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getReturnDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getReturnDate()
        );
    }

    /**
     * @test
     */
    public function setReturnDateForDateTimeSetsReturnDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setReturnDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'returnDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTripTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTripTitle()
        );
    }

    /**
     * @test
     */
    public function setTripTitleForStringSetsTripTitle()
    {
        $this->subject->setTripTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tripTitle',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAccommodationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAccommodation()
        );
    }

    /**
     * @test
     */
    public function setAccommodationForStringSetsAccommodation()
    {
        $this->subject->setAccommodation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'accommodation',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIitineraryReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getIitinerary()
        );
    }

    /**
     * @test
     */
    public function setIitineraryForStringSetsIitinerary()
    {
        $this->subject->setIitinerary('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'iitinerary',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBudgetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBudget()
        );
    }

    /**
     * @test
     */
    public function setBudgetForStringSetsBudget()
    {
        $this->subject->setBudget('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'budget',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTransportModeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTransportMode()
        );
    }

    /**
     * @test
     */
    public function setTransportModeForStringSetsTransportMode()
    {
        $this->subject->setTransportMode('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'transportMode',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRoomSharingReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRoomSharing()
        );
    }

    /**
     * @test
     */
    public function setRoomSharingForStringSetsRoomSharing()
    {
        $this->subject->setRoomSharing('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'roomSharing',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypeOfTravelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTypeOfTravel()
        );
    }

    /**
     * @test
     */
    public function setTypeOfTravelForStringSetsTypeOfTravel()
    {
        $this->subject->setTypeOfTravel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'typeOfTravel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPurposeOfTravelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPurposeOfTravel()
        );
    }

    /**
     * @test
     */
    public function setPurposeOfTravelForStringSetsPurposeOfTravel()
    {
        $this->subject->setPurposeOfTravel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'purposeOfTravel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getThingsToDoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getThingsToDo()
        );
    }

    /**
     * @test
     */
    public function setThingsToDoForStringSetsThingsToDo()
    {
        $this->subject->setThingsToDo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'thingsToDo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlacesToSeeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPlacesToSee()
        );
    }

    /**
     * @test
     */
    public function setPlacesToSeeForStringSetsPlacesToSee()
    {
        $this->subject->setPlacesToSee('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'placesToSee',
            $this->subject
        );
    }
}
