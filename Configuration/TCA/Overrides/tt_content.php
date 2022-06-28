<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {

    $frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';

    // Add the CType "text_image_left"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'Text Image Left',
            'text_image_left',
            'content-image'
        ],
        'header',
        'after'
    );

    // Add the CType "text_image_left"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Category Box',
        'catbox',
        'content-image'
    ],
    'header',
    'after'
);

    // Add the CType "text_image_left"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Image with CSS Classes',
        'imageonly',
        'content-image'
    ],
    'header',
    'after'
);

    // Add the CType "text_image_left"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Image with CSS Classes simple',
        'imageonlysimple',
        'content-image'
    ],
    'header',
    'after'
);


    $tempColumns = Array (
        "slidenumber" => Array (
            "exclude" => 0,
            "label" => 'Slide Number to jump to',
            "config" => Array (
                'type' => 'input',
                'max' => 2,
                'size' => 2,
                'eval' => 'trim,int'
            )
        ),
        "carouseldomid" => Array (
            "exclude" => 0,
            "label" => 'DOM Id des BS4 Carousels',
            "config" => Array (
                'type' => 'input',
                'max' => 255,
                'size' => 20,
                'eval' => 'trim'
            )
        ),
        "addcssclasses" => Array (
            "exclude" => 0,
            "label" => 'Adding CSS Classes for Content',
            "config" => Array (
                'type' => 'input',
                'max' => 255,
                'size' => 20,
                'eval' => 'trim'
            )
        ),
    );


    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns, 1);
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'slidenumber');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'carouseldomid');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'addcssclasses');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'images',
        'slidenumber, carouseldomid, addcssclasses'

    );

    // Option to set an icon for content elements in overview page mode 
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['text_image_left'] = 'content-beside-text-img-left';
 // Option to set an icon for content elements in overview page mode 
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['catbox'] = 'content-beside-text-img-left';
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['imageonly'] = 'content-beside-text-img-left';
    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['imageonlysimple'] = 'content-beside-text-img-left';


    // Custom CE Text Image Left
    $GLOBALS['TCA']['tt_content']['types']['text_image_left'] = [
        'showitem' => '
			--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header, subheader, header_layout,
				bodytext;' . $frontendLanguageFilePrefix . 'bodytext_formlabel,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.images,
				image,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		',
        'columnsOverrides' => ['bodytext' => ['config' => ['enableRichtext' => true]]]
    ];
    // Custom CE Text Image Left
    $GLOBALS['TCA']['tt_content']['types']['catbox'] = [
        'showitem' => '
			--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.images,
				image,
				--div--;iTechnology Catbox,
				slidenumber,carouseldomid,
				--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		',
        'columnsOverrides' => ['bodytext' => ['config' => ['enableRichtext' => true]]]
    ];

    // Custom CE Text Image Left
    $GLOBALS['TCA']['tt_content']['types']['imageonly'] = [
        'showitem' => '
			--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.images,
				image,
				--div--;iTechnology Image Only,
				addcssclasses,
				--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		',
        'columnsOverrides' => ['bodytext' => ['config' => ['enableRichtext' => true]]]
    ];
    // Custom CE Text Image Left
    $GLOBALS['TCA']['tt_content']['types']['imageonlysimple'] = [
        'showitem' => '
			--palette--;' . $frontendLanguageFilePrefix . 'palette.general;general,
				header,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.images,
				image,
				--div--;iTechnology Image Only,
				addcssclasses,
				--div--;' . $frontendLanguageFilePrefix . 'tabs.appearance,
                --palette--;' . $frontendLanguageFilePrefix . 'palette.frames;frames,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.access,
				hidden;' . $frontendLanguageFilePrefix . 'field.default.hidden,
			--div--;' . $frontendLanguageFilePrefix . 'tabs.extended
		',
        'columnsOverrides' => ['bodytext' => ['config' => ['enableRichtext' => true]]]
    ];



\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->registerContainer(
    'itech-2cols-with-header-container',
    '2 Column Container With Header iTech TEst',
    'Some Description of the Container',
    'EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg',
    [
        [
            ['name' => 'header', 'colPos' => 200, 'colspan' => 2, 'allowed' => ['CType' => 'header, textmedia']]
        ],
        [
            ['name' => 'left side', 'colPos' => 201],
            ['name' => 'right side', 'colPos' => 202]
        ]
    ]
);

$GLOBALS['TCA']['tt_content']['types']['itech-2cols-with-header-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';



});