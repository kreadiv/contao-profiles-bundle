<?php

/**
 * Palettes
 */
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
    ]
];
