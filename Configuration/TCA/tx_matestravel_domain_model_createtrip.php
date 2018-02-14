<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip',
        'label' => 'user_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'user_id,trip_creator,destination,depart_date,return_date,trip_title,accommodation,iitinerary,budget,transport_mode,room_sharing,type_of_travel,purpose_of_travel,description,things_to_do,places_to_see',
        'iconfile' => 'EXT:mates_travel/Resources/Public/Icons/tx_matestravel_domain_model_createtrip.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, user_id, trip_creator, destination, depart_date, return_date, trip_title, accommodation, iitinerary, budget, transport_mode, room_sharing, type_of_travel, purpose_of_travel, description, things_to_do, places_to_see',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, user_id, trip_creator, destination, depart_date, return_date, trip_title, accommodation, iitinerary, budget, transport_mode, room_sharing, type_of_travel, purpose_of_travel, description, things_to_do, places_to_see, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_matestravel_domain_model_createtrip',
                'foreign_table_where' => 'AND tx_matestravel_domain_model_createtrip.pid=###CURRENT_PID### AND tx_matestravel_domain_model_createtrip.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'user_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.user_id',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'trip_creator' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.trip_creator',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'destination' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.destination',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'depart_date' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.depart_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'size' => 7,
                'eval' => 'date,required',
                'default' => '0000-00-00'
            ],
        ],
        'return_date' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.return_date',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'size' => 7,
                'eval' => 'date,required',
                'default' => '0000-00-00'
            ],
        ],
        'trip_title' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.trip_title',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required'
            ]
        ],
        'accommodation' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.accommodation',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'iitinerary' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.iitinerary',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'budget' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.budget',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'transport_mode' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.transport_mode',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'room_sharing' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.room_sharing',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'type_of_travel' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.type_of_travel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'purpose_of_travel' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.purpose_of_travel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => false,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'things_to_do' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.things_to_do',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'places_to_see' => [
            'exclude' => true,
            'label' => 'LLL:EXT:mates_travel/Resources/Private/Language/locallang_db.xlf:tx_matestravel_domain_model_createtrip.places_to_see',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
    
    ],
];
