<?php
    namespace MT\MatesTravel\Controller;

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
    use MT\MatesTravel\Domain\Model\FindTravelers;
    use TYPO3\CMS\Core\Exception;
    use MT\MatesTravel\Service\User\InvalidSessionException;

    /**
     * CreateTripController
     */
    class CreateTripController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
    {
        /**
         * createTripRepository
         *
         * @var \MT\MatesTravel\Domain\Repository\CreateTripRepository
         * @inject
         */
        protected $createTripRepository = null;

        /**
         * @var \MT\MatesTravel\Service\User\SessionService
         * @inject
         */
        private $sessionService = null;

        /**
         * @var array
         */
        private $user = [];

        /**
         * @var \MT\MatesTravel\Domain\Model\CreateTrip
         */
        private $currentUserTrip = null;

        /**
         * AccommodationViewHelper
         *
         * @var \MT\MatesTravel\ViewHelpers\Form\GetAccommodationViewHelper
         * @inject
         */
        protected $getAccommodationViewHelper = null;

        /**
         * GetCountriesViewHelper
         *
         * @var \MT\MatesTravel\ViewHelpers\Form\GetCountriesViewHelper
         * @inject
         */
        protected $getCountriesViewHelper = null;

        /**
         * GetModeViewHelper
         *
         * @var \MT\MatesTravel\ViewHelpers\Form\GetModeViewHelper
         * @inject
         */
        protected $getModeViewHelper = null;

        /**
         * GetBudgetViewHelper
         *
         * @var \MT\MatesTravel\ViewHelpers\Form\GetBudgetViewHelper
         * @inject
         */
        protected $getBudgetViewHelper = null;

        /**
         * GetItineraryViewHelper
         *
         * @var \MT\MatesTravel\ViewHelpers\Form\GetItineraryViewHelper
         * @inject
         */
        protected $getItineraryViewHelper = null;

        /**
         * GetPurposeOfTravelViewHelper
         *
         * @var \MT\MatesTravel\ViewHelpers\Form\GetPurposeOfTravelViewHelper
         * @inject
         */
        protected $getPurposeOfTravel = null;

        /**
         * GetTypeOfTravelViewHelper
         *
         * @var \MT\MatesTravel\ViewHelpers\Form\GetTypeOfTravelViewHelper
         * @inject
         */
        protected $getTypeOfTravel = null;
        /**
         *
         *FindTravelers
         * @var \MT\MatesTravel\Domain\Model\FindTravelers
         * @inject
         */
        protected $findTravelers = null;



        public function initializeAction()
        {

            if ($this->arguments->hasArgument('createTrip')) {
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->allowProperties('purposeOfTravel');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->setTargetTypeForSubProperty('purposeOfTravel', 'array');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->allowProperties('typeOfTravel');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->setTargetTypeForSubProperty('typeOfTravel', 'array');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->allowProperties('transportMode');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->setTargetTypeForSubProperty('transportMode', 'array');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->allowProperties('iitinerary');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->setTargetTypeForSubProperty('iitinerary', 'array');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->allowProperties('accommodation');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->setTargetTypeForSubProperty('accommodation', 'array');
                $this->arguments->getArgument('createTrip')->getPropertyMappingConfiguration()->forProperty('*')->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter', \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, 'd/m/Y');
            }
            if ($this->arguments->hasArgument('findTravelers')) {
                $this->arguments->getArgument('findTravelers')->getPropertyMappingConfiguration()->allowProperties('purposeOfTravel');
                $this->arguments->getArgument('findTravelers')->getPropertyMappingConfiguration()->setTargetTypeForSubProperty('purposeOfTravel', 'array');
                $this->arguments->getArgument('findTravelers')->getPropertyMappingConfiguration()->allowProperties('travelType');
                $this->arguments->getArgument('findTravelers')->getPropertyMappingConfiguration()->setTargetTypeForSubProperty('travelType', 'array');
                $this->arguments->getArgument('findTravelers')->getPropertyMappingConfiguration()->forProperty('*')->setTypeConverterOption('TYPO3\\CMS\\Extbase\\Property\\TypeConverter\\DateTimeConverter', \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, 'd/m/Y');
            }

        }
        public function initializeCreateTripFormAction()
        {
            try{
                $user = $this->sessionService->provideUserDetails();
                if(empty($user['userId'])){
                    throw new InvalidSessionException();
                }
            }
            catch (InvalidSessionException $exception) {
                $this->redirect('notLoggedInError');
            }
        }

        /**
         * action list
         *
         * @return void
         */
        public function listAction()
        {
            $createTrips = $this->createTripRepository->findAll();
            $this->view->assign('createTrips', $createTrips);
        }

        /**
         * action show
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @return void
         */
        public function showAction(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip)
        {
            $this->view->assign('createTrip', $createTrip);
        }

        /**
         * action new
         *
         * @return void
         */
        public function newAction()
        {

        }

        /**
         * action create
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @return void
         */
        public function createAction(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip)
        {
            try {
                $this->user = $this->sessionService->provideUserDetails();
                $createTrip->setUserId($this->user['userId']);
                $createTrip->setTripCreator($this->user['username']);
                $this->createTripRepository->add($createTrip);
                $this->addFlashMessage('New Trip' . ' ' . $createTrip->getTripTitle() . ' ' . 'has been created');
                $this->redirect('createTripForm');
            } catch (Exception $exception) {
                $this->redirect('notLoggedInError');
            }

        }

        /**
         * action edit
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @ignorevalidation $createTrip
         * @return void
         */
        public function editAction(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip)
        {
            $this->view->assign('createTrip', $createTrip);
        }

        /**
         * action update
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $newCreateTrip
         * @return void
         */
        public function updateAction(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip)
        {
            $this->createTripRepository->update($createTrip);
            $this->addFlashMessage('The trip' . ' ' . $createTrip->getTripTitle() . ' ' . 'details have been updates');
            $this->redirect('viewTrip');
        }

        /**
         * action delete
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @return void
         */
        public function deleteAction(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip)
        {

            $this->createTripRepository->remove($createTrip);
            $this->addFlashMessage('The trip' . ' ' . $createTrip->getTripTitle() . ' ' . ' has been deleted ');
            $this->redirect('viewTrip');
            $this->registerCacheUpdate();
        }

        /**
         * action createTripForm
         *
         * @return void
         */
        public function createTripFormAction()
        {

        }

        /**
         * action searchTripForm
         *
         * @param \MT\MatesTravel\Domain\Model\FindTravelers $findTravelers
         * @return void
         */
        public function searchTripFormAction()
        {
            $createTrips = $this->createTripRepository->findAll();
            foreach ($createTrips as $indx => $createTrip) {
                $this->{$createTrip} = $this->getUserData($createTrip);
                $this->{$createTrip} = $this->getArrayValues($createTrip);
            }

            $this->view->assign('createTrips', $createTrips);



        }

        /**
         * action searchResult
         *
         * @param \MT\MatesTravel\Domain\Model\FindTravelers $findTravelers
         * @return void
         */
        public function searchResultAction(\MT\MatesTravel\Domain\Model\FindTravelers $findTravelers)
        {
            $createTrips = $this->createTripRepository->findSearchTrip($findTravelers);
            foreach ($createTrips as $indx => $createTrip) {
                    $this->{$createTrip} = $this->getUserData($createTrip);
                    $this->{$createTrip} = $this->getArrayValues($createTrip);
                }
            $this->view->assignMultiple([
                'createTrips'=>$createTrips,
                'findTravelers'=>$findTravelers
            ]);


        }

        /**
         * action getUserData
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @return \MT\MatesTravel\Domain\Model\CreateTrip $createTrips
         */
        private function getUserData(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip){
               $user = $this->sessionService->findByUserId($createTrip->getUserId());
               $createTrip->setUser($user);
           return $createTrip;

        }
        /**
         * action editTripAction
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @return void
         */
        public function editTripAction(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip)
        {
            $this->view->assign('createTrip', $createTrip);
        }
        /**
         * action detail
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @return void
         */
        public function detailAction(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip){
            try {

                $this->user = $this->sessionService->provideUserDetails();
                if(empty($this->user['userId'])){
                    throw new InvalidSessionException();
                }
                else {
                    $this->{$createTrip} = $this->getUserData($createTrip);
                    $this->{$createTrip} = $this->getArrayValues($createTrip);
                    $this->view->assign('createTrip', $createTrip);
                }

            }
            catch (InvalidSessionException $exception) {
                $this->redirect('notLoggedInError');
            }
        }

        /**
         * action viewTrip
         *
         * @return void
         */
        public function viewTripAction()
        {
            try {
                $this->user = $this->sessionService->provideUserDetails();
                if(empty($this->user['userId'])){
                    throw new InvalidSessionException();
                }
                else {
                    $createTrips = $this->createTripRepository->findMyTrip($this->user['userId']);
                    foreach ($createTrips as $indx => $createTrip) {
                        $this->{$createTrip} = $this->getArrayValues($createTrip);
                    }
                    $this->view->assign('createTrips', $createTrips);
                }
            } catch (InvalidSessionException $exception) {
                $this->redirect('notLoggedInError');
            }
        }

        /**
         * action getArrayValues
         *
         * @param \MT\MatesTravel\Domain\Model\CreateTrip $createTrip
         * @return \MT\MatesTravel\Domain\Model\CreateTrip $createTrips
         */
        private function getArrayValues(\MT\MatesTravel\Domain\Model\CreateTrip $createTrip)
        {
            if (!is_null($createTrip->getAccommodation())) {
                $accomodationValue = $this->getAccommodationViewHelper->getValuesFromKey($createTrip->getAccommodation());
                $createTrip->setAccommodation($accomodationValue);
            }
            if (!is_null($createTrip->getDestination())) {
                $destinationValue = $this->getCountriesViewHelper->getValuesFromKey(explode(',', $createTrip->getDestination()));
                $createTrip->setDestination(implode(',', $destinationValue));
            }
            if (!is_null($createTrip->getTransportMode())) {
                $modeValue = $this->getModeViewHelper->getValuesFromKey($createTrip->getTransportMode());
                $createTrip->setTransportMode($modeValue);
            }
            if (!is_null($createTrip->getPurposeOfTravel())) {
                $purposeOfTravelValue = $this->getPurposeOfTravel->getValuesFromKey($createTrip->getPurposeOfTravel());
                $createTrip->setPurposeOfTravel($purposeOfTravelValue);
            }
            if (!is_null($createTrip->getIitinerary())) {
                $itineraryValue = $this->getItineraryViewHelper->getValuesFromKey($createTrip->getIitinerary());
                $createTrip->setIitinerary($itineraryValue);
            }
            if (!is_null($createTrip->getBudget())) {
                $budgetValue = $this->getBudgetViewHelper->getValuesFromKey(explode(',', $createTrip->getBudget()));
                $createTrip->setBudget(implode(',', $budgetValue));
            }
            if (!is_null($createTrip->getTypeOfTravel())) {
                $typeValue = $this->getTypeOfTravel->getValuesFromKey($createTrip->getTypeOfTravel());
                $createTrip->setTypeOfTravel($typeValue);
            }
            if (!is_null($createTrip->getUser()) && !is_null($createTrip->getUser()->getCountry()) ) {
                $countryValue = $this->getCountriesViewHelper->getValuesFromKey(explode(',', $createTrip->getUser()->getCountry()));
                $createTrip->getUser()->setCountry(implode(',', $countryValue));
            }
            return $createTrip;
        }
        /**
         * action notLoggedInError
         *
         * @return void
         */
        public function notLoggedInErrorAction()
        {
            $uriBuilder = $this->uriBuilder;
            $uri = $uriBuilder
                ->setTargetPageUid(8)
                ->build();
            $this->redirectToUri($uri, 0, 404);


        }
        /**

         * Registers cache update for current frontend page id.

         *

         * Alternative:

         * In TYPO3 Backend in Page TSconfig define

         * `TCEMAIN.clearCacheCmd = <frontend page id>`

         * in storage folder of car records

         */

        private function registerCacheUpdate()

        {

            $this->cacheService->getPageIdStack()->push(

                $this->getFrontendController()->id

            );

        }
        /**

         * @return TypoScriptFrontendController

         */

        private function getFrontendController()

        {

            return $GLOBALS['TSFE'];

        }
    }
