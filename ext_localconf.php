<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MT.MatesTravel',
            'Createtripform',
            [
                'CreateTrip' => 'createTripForm,create, viewTrip, editTrip,update ,delete,notLoggedInError',
                'FindTravelers' => 'search'
            ],
            // non-cacheable actions
            [
                'CreateTrip' => 'create, update, delete, ',
                'FindTravelers' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MT.MatesTravel',
            'Searchtrips',
            [
                'CreateTrip' => 'searchTripForm , searchResult, detail, notLoggedInError',
                'FindTravelers' => 'search'
            ],
            // non-cacheable actions
            [
                'CreateTrip' => 'create, update, delete, ',
                'FindTravelers' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MT.MatesTravel',
            'Viewtrips',
            [
                'CreateTrip' => 'viewTrip, editTrip, createTripForm ,update ,delete,show,edit',
                'FindTravelers' => 'search'
            ],
            // non-cacheable actions
            [
                'CreateTrip' => 'create, update, delete, ',
                'FindTravelers' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MT.MatesTravel',
            'Viewalltrips',
            [
                'CreateTrip' => 'list, show, new, create, edit, update, delete, createTripForm, searchTripForm',
                'FindTravelers' => 'search'
            ],
            // non-cacheable actions
            [
                'CreateTrip' => 'create, update, delete, ',
                'FindTravelers' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    createtripform {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mates_travel') . 'Resources/Public/Icons/user_plugin_createtripform.svg
                        title = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_createtripform
                        description = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_createtripform.description
                        tt_content_defValues {
                            CType = list
                            list_type = matestravel_createtripform
                        }
                    }
                    searchtrips {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mates_travel') . 'Resources/Public/Icons/user_plugin_searchtrips.svg
                        title = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_searchtrips
                        description = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_searchtrips.description
                        tt_content_defValues {
                            CType = list
                            list_type = matestravel_searchtrips
                        }
                    }
                    viewtrips {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mates_travel') . 'Resources/Public/Icons/user_plugin_viewtrips.svg
                        title = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_viewtrips
                        description = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_viewtrips.description
                        tt_content_defValues {
                            CType = list
                            list_type = matestravel_viewtrips
                        }
                    }
                    viewalltrips {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('mates_travel') . 'Resources/Public/Icons/user_plugin_viewalltrips.svg
                        title = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_viewalltrips
                        description = LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_mates_travel_domain_model_viewalltrips.description
                        tt_content_defValues {
                            CType = list
                            list_type = matestravel_viewalltrips
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
