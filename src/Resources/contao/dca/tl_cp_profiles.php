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
                'email'  => 'index',
                'active' => 'index'
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
        'default'                => '{profile_legend},first_name,last_name,active'
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
            'exclude'            => true,
            'search'             => true,
            'sorting'            => true,
            'flag'               => 1,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'last_name' => [
            'exclude'            => true,
            'search'             => true,
            'sorting'            => true,
            'flag'               => 1,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ]
    ]
];
