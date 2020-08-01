<?php

namespace Kreadiv\ContaoProfilesBundle\Element;

use Contao\Input;

class ProfileReaderElement extends \ContentElement
{

    /**
     * @var string
     */
    protected $strTemplate = 'ce_cp_profileReader';

    protected $profile;

    /**
     * Displays a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $template = new \BackendTemplate('be_wildcard');
            $template->wildcard = '### ' . $GLOBALS['TL_LANG']['tl_content']['cp_profileReader'][0] . ' ###';
            return $template->parse();
        }

        return parent::generate();
    }

    /**
     * Generates the module.
     */
    protected function compile()
    {
        $this->Template->profile = $this->profile;
    }
}
