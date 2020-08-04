<?php

namespace Kreadiv\ContaoProfilesBundle\Element;

use Contao\Database;

class ProfileReaderElement extends \ContentElement
{

    /**
     * @var string
     */
    protected $strTemplate = 'ce_cp_profileReader';

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function compile()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');
            $template->wildcard = '### ' . $GLOBALS['TL_LANG']['tl_content']['cp_profileReader'][0] . ' ###';
            return $template->parse();
        } else {
            if (!empty($this->cp_profile)) {
                $db = Database::getInstance();
                $result = $db->prepare("SELECT * FROM tl_cp_profiles WHERE tl_cp_profiles.id = ?")->execute($this->cp_profile);

                $this->Template->profile = $result->next();
                $this->Template->profileWithDescription = $this->cp_profileWithDescription;
            }
        }
    }
}
