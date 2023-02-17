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
            'format' => '%s %s',
            'showColumns' => true
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
                'attributes'     => 'onclick="if(!confirm(\'' . ($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? null) . '\'))return false;Backend.getScrollOffset()"'
            ],
            'show' => [
                'href'           => 'act=show',
                'icon'           => 'show.svg'
            ]
        ]
    ],

    // Palettes
    'palettes' => [
        'default'                => '{profile_legend},last_name,first_name,department,department_english,profile_image,profile_image_size,email,phone,profile,profile_english,sorting,hide_in_profile_list'
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
            'eval'               => ['mandatory' => true, 'rgxp' => 'alpha', 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50 clr'],
            'sql'                => ['type' => 'string', 'length' => 255, 'notnull' => true, 'default' => '']
        ],
        'last_name' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['last_name'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'rgxp' => 'alpha', 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50 clr'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'department' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['department'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50 clr'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'department_english' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['department_english'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50 clr'],
            'sql'                => "varchar(255) NOT NULL default ''"
        ],
        'email' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['email'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['mandatory' => true, 'rgxp' => 'email', 'maxlength' => 255, 'decodeEntities' => true, 'tl_class' => 'w50 clr'],
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
        ],
        'profile_english' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['profile_english'],
            'exclude'            => true,
            'inputType'          => 'textarea',
            'eval'               => ['mandatory' => false, 'rte' => 'tinyMCE', 'decodeEntities' => true, 'tl_class' => 'clr', 'allowHtml' => true],
            'sql'                => "text NULL"
        ],
        'profile_image' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['profile_image'],
            'exclude'            => true,
            'inputType'          => 'fileTree',
            'eval'               => ['mandatory' => false, 'tl_class' => 'flr clr', 'files' => true, 'fieldType' => 'radio', 'extensions' => \Contao\Config::get('validImageTypes')],
            'sql'                => "blob NULL"
        ],
        'profile_image_size' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['profile_image_size'],
            'exclude'            => true,
            'inputType'          => 'imageSize',
            'reference'          => &$GLOBALS['TL_LANG']['MSC'],
            'eval'               => ['rgxp' => 'natural', 'includeBlankOption' => true, 'nospace' => true, 'helpwizard' => true, 'tl_class' => 'w50'],
            'options_callback' => static function () {
                return Contao\System::getContainer()->get('contao.image.image_sizes')->getOptionsForUser(Contao\BackendUser::getInstance());
            },
            'sql'                => "varchar(64) NOT NULL default ''"
        ],
        'sorting' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['sorting'],
            'exclude'            => true,
            'inputType'          => 'text',
            'eval'               => ['rgxp' => 'natural', 'maxlength' => 255, 'tl_class' => 'w50'],
            'sql'                => ['type' => 'integer', 'unsigned' => true, 'default' => 0]
        ],
        'hide_in_profile_list' => [
            'label'              => &$GLOBALS['TL_LANG']['tl_cp_profiles']['hide_in_profile_list'],
            'exclude'            => true,
            'inputType'          => 'checkbox',
            'eval'               => ['tl_class' => 'w50 clr'],
            'sql'                => "char(1) NOT NULL default ''"
        ],
    ]
];
