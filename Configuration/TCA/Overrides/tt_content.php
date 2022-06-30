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
				--div--;iTechnology Catbox (+),
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





    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-for-bs4-container', // CType
            'Content for BS4 Container (+)', // label
            'BS4 Inhalte in einem Container platzieren', // description
            [
                [
                    ['name' => 'Content for BS4 Container (+)', 'colPos' => 200]
                ]
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );


    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'row-with-4-cols', // CType
            'Reihe mit 4 Spalten', // label
            'Startseiten Anordnung 4 Spalten für Boxen', // description
            [
                [
                    ['name' => 'First Shortcut (+)', 'colPos' => 200],
                    ['name' => 'Second Shortcut (+)', 'colPos' => 201],
                    ['name' => 'Third Shortcut (+)', 'colPos' => 202],
                    ['name' => 'Fourth Shortcut (+)', 'colPos' => 203],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'header-row-with-3-cols', // CType
            'Reihe 3 Spalten für Heaeder', // label
            'Header Aufteilung für 3 Spalten', // description
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 200],
                    ['name' => 'Mittlere Spalte', 'colPos' => 201],
                    ['name' => 'Rechte Spalte', 'colPos' => 202],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-hidden-on-phone', // CType
            'Content wird nicht auf Phone angezeigt', // label
            'Container der nicht in Phone Größe angezeigt', // description
            [
                [
                    ['name' => 'Content hidden on Phone (+)', 'colPos' => 200],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-visible-on-phone', // CType
            'Content wird nur auf Phone angezeigt', // label
            'Container der in Phone Größe angezeigt', // description
            [
                [
                    ['name' => 'Content visible on Phone (+)', 'colPos' => 200],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'images-with-rounded-corners', // CType
            'Bilder abgerunded', // label
            'Bildelemente mit abgerundeten Ecken', // description
            [
                [
                    ['name' => 'Images with rounded Corners (+)', 'colPos' => 200],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );


    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-align-center', // CType
            'Inhalt zentriert', // label
            'Inhalte wird zentriert angezeigt', // description
            [
                [
                    ['name' => 'Content align center (+)', 'colPos' => 200],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-reihe-3-spalten-3-6-3', // CType
            'Reihe mit 3 Spalten 3/6/3', // label
            'Reihe mit 3 Spalten in der Verteilung 3 - 6 - 3', // description
            [
                [
                    ['name' => 'Links  / 3 (+)', 'colPos' => 200],
                    ['name' => 'Mitte  / 6 (+)', 'colPos' => 201],
                    ['name' => 'Rechts / 3 (+)', 'colPos' => 202],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-reihe-2-spalten-7-5', // CType
            'Reihe mit 2 Spalten 7/5', // label
            'Reihe mit 2 Spalten in der Verteilung 7 - 5 (-sm) 12-12(xs)', // description
            [
                [
                    ['name' => 'Links  / 7 (+)', 'colPos' => 200],
                    ['name' => 'Rechts / 5 (+)', 'colPos' => 201],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-reihe-2-spalten-6-6-reverse', // CType
            'Reihe mit 2 Spalten 6/6 Reverse', // label
            'Reihe mit 2 Spalten in der Verteilung 6-6 Reverse Order (sm)', // description
            [
                [
                    ['name' => 'Links / Oben wenn klein (+)', 'colPos' => 200],
                    ['name' => 'Rechts / Unten wenn klein (+)', 'colPos' => 201],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );


    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'content-reihe-2-spalten-5-7', // CType
            'Reihe mit 2 Spalten 5/7', // label
            'Reihe mit 2 Spalten in der Verteilung 5 - 7 (-sm) 12-12(xs)', // description
            [
                [
                    ['name' => 'Links  / 5 (+)', 'colPos' => 200],
                    ['name' => 'Rechts / 7 (+)', 'colPos' => 201],
                ]

            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:contentpack/Resources/Public/Icons/container.svg')
    );


    /*
     *
     * Ersetzt
     *
     * 27
     * 8
     * 3
     * 4
     * 5
     * 20
     * 13
     * 15
     * 19
     * 18
     * 14
     */

});