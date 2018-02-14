<?php
namespace MT\MatesTravel\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author dixit 
 */
class AccommodationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Domain\Model\Accommodation
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MT\MatesTravel\Domain\Model\Accommodation();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getAccomodationTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAccomodationType()
        );
    }

    /**
     * @test
     */
    public function setAccomodationTypeForStringSetsAccomodationType()
    {
        $this->subject->setAccomodationType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'accomodationType',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForIntSetsId()
    {
        $this->subject->setId(12);

        self::assertAttributeEquals(
            12,
            'id',
            $this->subject
        );
    }
}
