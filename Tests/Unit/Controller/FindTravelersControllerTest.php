<?php
namespace MT\MatesTravel\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author dixit 
 */
class FindTravelersControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Controller\FindTravelersController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MT\MatesTravel\Controller\FindTravelersController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
