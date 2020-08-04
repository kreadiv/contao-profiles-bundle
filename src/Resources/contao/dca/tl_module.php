<?php

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['cp_profileReader'] = '{title_legend},name,type;{cp_profile_legend},cp_profile,cp_profile_slim';

/**
* Fields
*/
$GLOBALS['TL_DCA']['tl_module']['fields']['cp_profile'] = [
    'label'                       => &$GLOBALS['TL_LANG']['tl_module']['cp_profile'],
    'exclude'                     => true,
    'inputType'                   => 'select',
    'options_callback'            => function () {
        $objProfiles = \Database::getInstance()->prepare('SELECT id, first_name, last_name FROM tl_cp_profiles ORDER BY last_name');
        return $objProfiles;
    },
    'options'                     => $GLOBALS['TL_LANG']['tl_module']['cp_profileOptions']['options'],
    'eval'                        => ['includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50'],
    'sql'                         => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_module']['fields']['cp_profile_slim'] = [
    'label'                       => &$GLOBALS['TL_LANG']['tl_module']['cp_profile_slim'],
    'exclude'                     => true,
    'inputType'                   => 'checkbox',
    'eval'                        => ['includeBlankOption' => true, 'tl_class' => 'w50'],
    'sql'                         => "INT unsigned NULL",
];