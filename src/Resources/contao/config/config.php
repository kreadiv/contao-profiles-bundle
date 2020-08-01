<?php

// Content elements
$GLOBALS['TL_CTE']['cp']['cp_profileReader'] = 'Kreadiv\ContaoProfilesBundle\Element\ProfileReaderElement';

// Backend modules
array_insert($GLOBALS['BE_MOD'], 1, [
    'content' => [
        'cp_profiles' => [
            'tables' => ['tl_cp_profiles']
        ]
    ]
]);
