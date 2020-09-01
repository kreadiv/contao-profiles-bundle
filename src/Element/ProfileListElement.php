<?php

namespace Kreadiv\ContaoProfilesBundle\Element;

use Contao\Database;
use Kreadiv\ContaoProfilesBundle\Model\CpProfilesModel;

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
            $objProfiles                               = CpProfilesModel::getAll();
            $this->Template->objProfiles               = $objProfiles;
            $this->Template->intProfileWithDescription = $this->cp_profileWithDescription;
        }
    }

}
