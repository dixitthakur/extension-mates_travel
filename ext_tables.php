<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MT.MatesTravel',
            'Createtripform',
            'CreateTripForm'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MT.MatesTravel',
            'Searchtrips',
            'SearchTrips'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MT.MatesTravel',
            'Viewtrips',
            'ViewTrips'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'MT.MatesTravel',
            'Viewalltrips',
            'ViewAllTrips'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('mates_travel', 'Configuration/TypoScript', 'MatesTravel');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_matestravel_domain_model_createtrip', 'EXT:mates_travel/Resources/Private/Language/locallang_csh_tx_matestravel_domain_model_createtrip.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_matestravel_domain_model_createtrip');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_matestravel_domain_model_findtravelers', 'EXT:mates_travel/Resources/Private/Language/locallang_csh_tx_matestravel_domain_model_findtravelers.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_matestravel_domain_model_findtravelers');

    }
);
