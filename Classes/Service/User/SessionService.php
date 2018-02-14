<?php
namespace MT\MatesTravel\Service\User;

use MT\MatesTravel\Domain\Repository\CreateTripRepository;
use In2code\Femanager\Domain\Model\User;
use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;
use TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class SessionService
{
    /**
     * @var \In2code\Femanager\Domain\Repository\UserRepository
     * @inject
     */
    protected $userRepository;
    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * createTripRepository
     *
     * @var \MT\MatesTravel\Domain\Repository\CreateTripRepository
     * @inject
     */
    protected $createTripRepository = null;

    protected $createTripModel = null;
    /**
     * @param ObjectManager $objectManager
     */
    public function injectObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function provideUserDetails(): array
    {
        $frontendUserId = $this->getFrontendUserId();
        $frontendUser=$this->getFrontendUserDetails();
        $userArray=['userId'=>$frontendUserId,
            "username"=>$frontendUser['username'],
            "email"=>$frontendUser['email'],
            "telephone"=>$frontendUser['telephone'],
            "image"=>$frontendUser['image']
        ];
        return $userArray;
    }
    /**
     * @return int|null
     */
    private function getFrontendUserId()
    {
        return $this->getFrontendController()->fe_user->user['uid'] ?? null;
    }
    /**
     * @return array|null
     */
    private function getFrontendUserDetails()
    {
        $userDetail=[];
        $firstName = $this->getFrontendController()->fe_user->user['first_name'] ?? null;
        $lastName = $this->getFrontendController()->fe_user->user['last_name'] ?? null;
        $email = $this->getFrontendController()->fe_user->user['email'] ?? null;
        $telephone = $this->getFrontendController()->fe_user->user['telephone'] ?? null;
        $image = $this->getFrontendController()->fe_user->user['image'] ?? null;
        $userName= firstName ." ". lastName;
       $userDetail = ["username"=>$userName,"email"=>$email,"telephon"=>$telephone,"image"=>$image];
       return $userDetail;
    }
    /**
     * @return TypoScriptFrontendController
     * @internal Exposed as protected to be testable with method mocks
     */
    protected function getFrontendController()
    {
        return $GLOBALS['TSFE'];
    }
    public function findByUserId(int $id)
    {
        $user = $this->userRepository->findByUid($id);
        return $user;

    }

}