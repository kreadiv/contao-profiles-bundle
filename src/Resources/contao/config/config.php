<?php

$GLOBALS['FE_MOD']['cp']['profileListing'] = 'Kreadiv\ContaoProfilesBundle\Module\ProfileListingModule';

// Models
$GLOBALS['TL_MODELS']['tl_cp_profiles'] = 'Kreadiv\ContaoProfilesBundle\Model\Profiles';

// Backend modules
array_insert($GLOBALS['BE_MOD'], 1, [
    'content' => [
        'cp_profiles' => [
            'tables' => ['tl_cp_profiles']
        ]
    ]
]);