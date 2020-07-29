<?php

$GLOBALS['TL_DCA']['tl_cp_profiles'] = [

    // Config
    'config' => [
        'dataContainer'                  => 'Table',
        'enableVersioning'               => true,
        'sql' => [
            'keys' => [
                'id'     => 'primary',
                'email'  => 'unique',
                'email'  => 'index'
            ]
        ]
    ],

    // List
    'list' => [
        'sorting' => [
            'mode'               => 4,
            'fields'             => ['first_name', 'last_name'],
            'panelLayout'        => 'filter;sort,search,limit',
            'headerFields'       => ['title', 'jumpTo', 'tstamp']
        ],
        'label' => [
            'fields' => ['first_name', 'last_name'],
            'format' => '%s %s',
        ],
        'operations' => [
            'edit' => [
                'href'           => 'act=edit',
                'icon'           => 'edit.svg'
            ],
            'copy' => [
                'href'           => 'act=paste&amp;mode=copy',
                'icon'           => 'copy.svg'
            ],
            'delete' => [
                'href'           => 'act=delete',
                'icon'           => 'delete.svg',
                'attributes'     => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ],
            'show' => [
                'href'           => 'act=show',
                'icon'           => 'show.svg'
            ]
        ]
    ],

    // Palettes
    'palettes' => [
        'default'                => '{profile_legend},first_name,last_name,email'
    ],

    // Fields
    'fields' => [
        'id' => [
            'sql'                => "int(10) unsigned NOT NULL auto_increment"            
        ],
        'tstamp' => [
            'sql'                => "int(10) unsigned NOT NULL default 0"
        ],
        'first_name' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['first_name'],
            'exclude'            => true,
            'search'             => true,
            'sorting'            => true,
            'flag'               => 1,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'last_name' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['last_name'],
            'exclude'            => true,
            'search'             => true,
            'sorting'            => true,
            'flag'               => 1,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'department' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['department'],
            'exclude'            => true,
            'search'             => true,
            'sorting'            => true,
            'flag'               => 1,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'email' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['email'],
            'exclude'            => true,
            'search'             => true,
            'sorting'            => true,
            'flag'               => 1,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'rgxp' => 'email', 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'phone' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['phone'],
            'exclude'            => true,
            'search'             => true,
            'sorting'            => true,
            'flag'               => 1,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'rgxp' => 'phone', 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'profile' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['profile'],
            'exclude'            => true,
            'inputType'          => 'textarea',
            'eval'               => ['mandatory' => false, 'rte' => 'tinyMCE', 'decodeEntities' => true, 'tl_class' => 'clr', 'allowHtml' => true],
            'sql'                => "text NULL"
        ]
    ]
];
