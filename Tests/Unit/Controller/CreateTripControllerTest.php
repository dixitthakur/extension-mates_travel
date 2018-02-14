<?php
namespace MT\MatesTravel\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author dixit 
 */
class CreateTripControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Controller\CreateTripController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MT\MatesTravel\Controller\CreateTripController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCreateTripsFromRepositoryAndAssignsThemToView()
    {

        $allCreateTrips = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $createTripRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\CreateTripRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $createTripRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCreateTrips));
        $this->inject($this->subject, 'createTripRepository', $createTripRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('createTrips', $allCreateTrips);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCreateTripToView()
    {
        $createTrip = new \MT\MatesTravel\Domain\Model\CreateTrip();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('createTrip', $createTrip);

        $this->subject->showAction($createTrip);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCreateTripToCreateTripRepository()
    {
        $createTrip = new \MT\MatesTravel\Domain\Model\CreateTrip();

        $createTripRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\CreateTripRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $createTripRepository->expects(self::once())->method('add')->with($createTrip);
        $this->inject($this->subject, 'createTripRepository', $createTripRepository);

        $this->subject->createAction($createTrip);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCreateTripToView()
    {
        $createTrip = new \MT\MatesTravel\Domain\Model\CreateTrip();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('createTrip', $createTrip);

        $this->subject->editAction($createTrip);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCreateTripInCreateTripRepository()
    {
        $createTrip = new \MT\MatesTravel\Domain\Model\CreateTrip();

        $createTripRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\CreateTripRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $createTripRepository->expects(self::once())->method('update')->with($createTrip);
        $this->inject($this->subject, 'createTripRepository', $createTripRepository);

        $this->subject->updateAction($createTrip);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCreateTripFromCreateTripRepository()
    {
        $createTrip = new \MT\MatesTravel\Domain\Model\CreateTrip();

        $createTripRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\CreateTripRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $createTripRepository->expects(self::once())->method('remove')->with($createTrip);
        $this->inject($this->subject, 'createTripRepository', $createTripRepository);

        $this->subject->deleteAction($createTrip);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCreateTripToCreateTripRepository()
    {
        $createTrip = new \MT\MatesTravel\Domain\Model\CreateTrip();

        $createTripRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\CreateTripRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $createTripRepository->expects(self::once())->method('add')->with($createTrip);
        $this->inject($this->subject, 'createTripRepository', $createTripRepository);

        $this->subject->createAction($createTrip);
    }
}
