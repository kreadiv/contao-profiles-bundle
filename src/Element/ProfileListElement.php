<?php

namespace Kreadiv\ContaoProfilesBundle\Element;

use Contao\Database;

class ProfileListElement extends \ContentElement
{

    /**
     * @var string
     */
    protected $strTemplate = 'ce_cp_profileList';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function compile()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');
            $template->wildcard = '### ' . $GLOBALS['TL_LANG']['tl_content']['cp_profileList'][0] . ' ###';
            return $template->parse();
        } else {
            $objProfiles                               = $this->loadProfiles();
            $this->Template->objProfiles               = $objProfiles;
            $this->Template->intProfileWithDescription = $this->cp_profileWithDescription;
        }
    }

    /**
     * Loads all profiles
     * @return \Database\Result|object
     */
    private function loadProfiles()
    {
        $objDb      = \Contao\Database::getInstance();
        $strQuery   = "SELECT id, first_name, last_name FROM tl_cp_profiles ORDER BY last_name";
        $objResult  = $objDb->execute($strQuery);
        return $objResult;
    }
}
