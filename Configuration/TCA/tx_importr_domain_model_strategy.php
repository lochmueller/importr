<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

return [
    'ctrl'      => [
        'title'             => 'LLL:EXT:importr/Resources/Private/Language/locallang.xml:tx_importr_domain_model_strategy',
        'label'             => 'title',
        'searchFields'      => 'title',
        'rootLevel'         => 1,
        'delete'            => 'deleted',
        'default_sortby'    => 'ORDER BY title',
        'iconfile'          => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('importr') . 'Resources/Public/Icons/Strategy.png',
    ],
	'interface' => [
		'showRecordFieldList' => 'title, configuration, resources, targets',
    ],
	'types' => [
		'1' => ['showitem' => 'title, general, configuration, resources, targets'],
    ],
	'columns' => [
		'title' => [
			'label' => 'LLL:EXT:importr/Resources/Private/Language/locallang.xml:title',
			'config' => [
				'type' => 'input',
				'size' => 50,
				'eval' => 'trim,required'
            ],
        ],
		'configuration' => [
			'label' => 'LLL:EXT:importr/Resources/Private/Language/locallang.xml:configuration',
			'config' => [
				'type' => 'text',
				'rows' => 15,
				'cols' => 100,
            ],
        ],
		'resources' => [
			'label' => 'LLL:EXT:importr/Resources/Private/Language/locallang.xml:resources',
			'config' => [
				'type' => 'text',
				'rows' => 15,
				'cols' => 100,
            ],
        ],
		'targets' => [
			'label' => 'LLL:EXT:importr/Resources/Private/Language/locallang.xml:targets',
			'config' => [
				'type' => 'text',
				'rows' => 15,
				'cols' => 100,
            ],
        ],
		'general' => [
			'label' => 'General strategy (selectable for the user)',
			'config' => [
				'type' => 'check',
            ],
        ],
    ],
];
