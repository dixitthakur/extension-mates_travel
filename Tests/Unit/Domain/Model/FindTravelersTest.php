<?php
namespace MT\MatesTravel\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author dixit 
 */
class FindTravelersTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Domain\Model\FindTravelers
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MT\MatesTravel\Domain\Model\FindTravelers();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getTravelTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTravelType()
        );
    }

    /**
     * @test
     */
    public function setTravelTypeForStringSetsTravelType()
    {
        $this->subject->setTravelType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'travelType',
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
}
