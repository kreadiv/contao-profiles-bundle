<?php

$GLOBALS['TL_DCA']['tl_cp_profiles'] = [

    // Config
    'config' => [
        'dataContainer'                  => 'Table',
        'enableVersioning'               => true,
        'sql' => [
            'keys' => [
                'id'     => 'primary'
            ]
        ]
    ],

    // List
    'list' => [
        'sorting' => [
            'mode' => 1,
            'fields' => ['last_name'],
            'flag' => 1,
            'panelLayout' => 'search,limit'
        ],
        'label' => [
            'fields' => ['last_name', 'first_name'],
            'format' => '%s %',
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
        'default'                => '{profile_legend},first_name,last_name,department,email,phone,profile'
    ],

    // Fields
    'fields' => [
        'id' => [
            'sql'                => ['type' => 'integer', 'unsigned' => true, 'autoincrement' => true]            
        ],
        'tstamp' => [
            'sql'                => ['type' => 'integer', 'unsigned' => true, 'default' => 0]
        ],
        'first_name' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['first_name'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'last_name' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['last_name'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'department' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['department'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'email' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['email'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'rgxp' => 'email', 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'phone' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['phone'],
            'exclude'            => true,
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
