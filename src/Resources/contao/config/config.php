<?php

$GLOBALS['FE_MOD']['cp']['profileListing'] = 'Kreadiv\ContaoProfilesBundle\Module\ProfileListingModule';

// Backend modules
array_insert($GLOBALS['BE_MOD'], 1, [
    'content' => [
        'cp_profiles' => [
            'tables' => ['tl_cp_profiles']
        ]
    ]
]);