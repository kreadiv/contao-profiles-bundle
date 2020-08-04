<?php

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['cp_profileReader'] = '{cp_profileReaderLegend},name,type;{cp_settingsLegend},cp_profile,cp_profileWithDescription';

$GLOBALS['TL_DCA']['tl_content']['palettes']['cp_profileList'] = '{cp_profileListLegend},name,type';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['cp_profile'] = [
    'label'                       => &$GLOBALS['TL_LANG']['tl_content']['cp_profile'],
    'exclude'                     => true,
    'inputType'                   => 'select',
    'options_callback'            => function () {
        $objProfiles = \Database::getInstance()->prepare('SELECT id, first_name, last_name FROM tl_cp_profiles ORDER BY last_name')->execute();

        $profileOptions = [];
        while ($objProfiles->next()) {
            $profileOptions[$objProfiles->id] = $objProfiles->first_name . ' ' . $objProfiles->last_name;
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
    'eval'                        => ['includeBlankOption' => true, 'tl_class' => 'w50 clr'],
    'sql'                         => "char(1) NOT NULL default ''",
];
