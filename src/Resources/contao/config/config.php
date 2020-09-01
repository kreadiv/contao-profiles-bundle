<?php

// Content elements
$GLOBALS['TL_CTE']['cp']['cp_profileReader'] = 'Kreadiv\ContaoProfilesBundle\Element\ProfileReaderElement';
$GLOBALS['TL_CTE']['cp']['cp_profileList'] = 'Kreadiv\ContaoProfilesBundle\Element\ProfileListElement';

// Models
$GLOBALS['TL_MODELS']['tl_cp_profiles'] = 'Kreadiv\ContaoProfilesBundle\Model\CpProfilesModel';

// Backend modules
array_insert($GLOBALS['BE_MOD'], 1, [
    'content' => [
        'cp_profiles' => [
            'tables' => ['tl_cp_profiles']
        ]
    ]
]);
