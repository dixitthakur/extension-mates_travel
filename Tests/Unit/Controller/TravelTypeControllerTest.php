<?php
namespace MT\MatesTravel\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author dixit 
 */
class TravelTypeControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Controller\TravelTypeController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MT\MatesTravel\Controller\TravelTypeController::class)
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
    public function listActionFetchesAllTravelTypesFromRepositoryAndAssignsThemToView()
    {

        $allTravelTypes = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $travelTypeRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\TravelTypeRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $travelTypeRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTravelTypes));
        $this->inject($this->subject, 'travelTypeRepository', $travelTypeRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('travelTypes', $allTravelTypes);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTravelTypeToView()
    {
        $travelType = new \MT\MatesTravel\Domain\Model\TravelType();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('travelType', $travelType);

        $this->subject->showAction($travelType);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenTravelTypeToTravelTypeRepository()
    {
        $travelType = new \MT\MatesTravel\Domain\Model\TravelType();

        $travelTypeRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\TravelTypeRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $travelTypeRepository->expects(self::once())->method('add')->with($travelType);
        $this->inject($this->subject, 'travelTypeRepository', $travelTypeRepository);

        $this->subject->createAction($travelType);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenTravelTypeToView()
    {
        $travelType = new \MT\MatesTravel\Domain\Model\TravelType();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('travelType', $travelType);

        $this->subject->editAction($travelType);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenTravelTypeInTravelTypeRepository()
    {
        $travelType = new \MT\MatesTravel\Domain\Model\TravelType();

        $travelTypeRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\TravelTypeRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $travelTypeRepository->expects(self::once())->method('update')->with($travelType);
        $this->inject($this->subject, 'travelTypeRepository', $travelTypeRepository);

        $this->subject->updateAction($travelType);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenTravelTypeFromTravelTypeRepository()
    {
        $travelType = new \MT\MatesTravel\Domain\Model\TravelType();

        $travelTypeRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\TravelTypeRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $travelTypeRepository->expects(self::once())->method('remove')->with($travelType);
        $this->inject($this->subject, 'travelTypeRepository', $travelTypeRepository);

        $this->subject->deleteAction($travelType);
    }
}
