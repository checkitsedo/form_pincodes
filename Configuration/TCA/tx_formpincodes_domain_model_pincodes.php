<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:form_pincodes/Resources/Private/Language/locallang.xlf:tx_formpincodes_domain_model_pincodes',
        'label' => 'pincode',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden'
        ],
        'searchFields' => 'pincode',
        'iconfile' => 'EXT:form_pincodes/Resources/Public/Icons/Extension.svg'
    ],
    'types' => [
        '1' => [
            'showitem' => 'pincode, is_used'
        ]
    ],
    'columns' => [
        'pincode' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:form_pincodes/Resources/Private/Language/locallang.xlf:tx_formpincodes_domain_model_pincodes.pincode',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'readOnly' => 0
            ]
        ],
        'is_active' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:form_pincodes/Resources/Private/Language/locallang.xlf:tx_formpincodes_domain_model_pincodes.is_active',
            'config' => [
                'type' => 'check',
                'readOnly' => 0
            ]
        ],
        'is_used' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:form_pincodes/Resources/Private/Language/locallang.xlf:tx_formpincodes_domain_model_pincodes.is_used',
            'config' => [
                'type' => 'check',
                'readOnly' => 0
            ]
        ],
    ]
];
