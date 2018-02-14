<?php
namespace MT\MatesTravel\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author dixit 
 */
class BudgetControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \MT\MatesTravel\Controller\BudgetController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MT\MatesTravel\Controller\BudgetController::class)
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
    public function listActionFetchesAllBudgetsFromRepositoryAndAssignsThemToView()
    {

        $allBudgets = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $budgetRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\BudgetRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $budgetRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBudgets));
        $this->inject($this->subject, 'budgetRepository', $budgetRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('budgets', $allBudgets);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBudgetToView()
    {
        $budget = new \MT\MatesTravel\Domain\Model\Budget();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('budget', $budget);

        $this->subject->showAction($budget);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBudgetToBudgetRepository()
    {
        $budget = new \MT\MatesTravel\Domain\Model\Budget();

        $budgetRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\BudgetRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $budgetRepository->expects(self::once())->method('add')->with($budget);
        $this->inject($this->subject, 'budgetRepository', $budgetRepository);

        $this->subject->createAction($budget);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBudgetToView()
    {
        $budget = new \MT\MatesTravel\Domain\Model\Budget();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('budget', $budget);

        $this->subject->editAction($budget);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBudgetInBudgetRepository()
    {
        $budget = new \MT\MatesTravel\Domain\Model\Budget();

        $budgetRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\BudgetRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $budgetRepository->expects(self::once())->method('update')->with($budget);
        $this->inject($this->subject, 'budgetRepository', $budgetRepository);

        $this->subject->updateAction($budget);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBudgetFromBudgetRepository()
    {
        $budget = new \MT\MatesTravel\Domain\Model\Budget();

        $budgetRepository = $this->getMockBuilder(\MT\MatesTravel\Domain\Repository\BudgetRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $budgetRepository->expects(self::once())->method('remove')->with($budget);
        $this->inject($this->subject, 'budgetRepository', $budgetRepository);

        $this->subject->deleteAction($budget);
    }
}
