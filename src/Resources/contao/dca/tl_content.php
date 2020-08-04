<?php

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['cp_profileReader'] = '{title_legend},name,type;{cp_profileLegend},cp_profile,cp_profileWithDescription;{expert_legend:hide},guests,cssID,space';

/**
* Fields
*/
$GLOBALS['TL_DCA']['tl_content']['fields']['cp_profile'] = [
    'label'                       => &$GLOBALS['TL_LANG']['tl_content']['cp_profile'],
    'exclude'                     => true,
    'inputType'                   => 'select',
    'options_callback'            => function () {
        $objProfiles = \Database::getInstance()->prepare('SELECT id, first_name, last_name FROM tl_cp_profiles ORDER BY last_name');

        dd($objProfiles);
        $profileOptions = [];
        foreach ($objProfiles->data as $profile) {
            $profileOptions[$profile['id']] = $profile['first_name'] . ' ' . $profile['last_name'];
        }
        return $profileOptions;
    },
    'options'                     => $GLOBALS['TL_LANG']['tl_content']['cp_profileOptions']['options'],
    'eval'                        => ['includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50'],
    'sql'                         => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['cp_profileWithDescription'] = [
    'label'                       => &$GLOBALS['TL_LANG']['tl_content']['cp_profileWithDescription'],
    'exclude'                     => true,
    'inputType'                   => 'checkbox',
    'eval'                        => ['includeBlankOption' => true, 'tl_class' => 'w50'],
    'sql'                         => "char(1) NOT NULL default ''",
];