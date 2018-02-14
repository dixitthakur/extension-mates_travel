<?php
namespace MT\MatesTravel\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author dixit 
 */
class AccommodationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Controller\AccommodationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MT\MatesTravel\Controller\AccommodationController::class)
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
    public function listActionFetchesAllAccommodationsFromRepositoryAndAssignsThemToView()
    {

        $allAccommodations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $accommodationRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\AccommodationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $accommodationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAccommodations));
        $this->inject($this->subject, 'accommodationRepository', $accommodationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('accommodations', $allAccommodations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAccommodationToView()
    {
        $accommodation = new \MT\MatesTravel\Domain\Model\Accommodation();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('accommodation', $accommodation);

        $this->subject->showAction($accommodation);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenAccommodationToAccommodationRepository()
    {
        $accommodation = new \MT\MatesTravel\Domain\Model\Accommodation();

        $accommodationRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\AccommodationRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $accommodationRepository->expects(self::once())->method('add')->with($accommodation);
        $this->inject($this->subject, 'accommodationRepository', $accommodationRepository);

        $this->subject->createAction($accommodation);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenAccommodationToView()
    {
        $accommodation = new \MT\MatesTravel\Domain\Model\Accommodation();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('accommodation', $accommodation);

        $this->subject->editAction($accommodation);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenAccommodationInAccommodationRepository()
    {
        $accommodation = new \MT\MatesTravel\Domain\Model\Accommodation();

        $accommodationRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\AccommodationRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $accommodationRepository->expects(self::once())->method('update')->with($accommodation);
        $this->inject($this->subject, 'accommodationRepository', $accommodationRepository);

        $this->subject->updateAction($accommodation);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenAccommodationFromAccommodationRepository()
    {
        $accommodation = new \MT\MatesTravel\Domain\Model\Accommodation();

        $accommodationRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\AccommodationRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $accommodationRepository->expects(self::once())->method('remove')->with($accommodation);
        $this->inject($this->subject, 'accommodationRepository', $accommodationRepository);

        $this->subject->deleteAction($accommodation);
    }
}
