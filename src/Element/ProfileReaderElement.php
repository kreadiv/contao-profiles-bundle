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
            if ($this->cp_profile) {
                $objProfile                                = $this->loadProfile($this->cp_profile);
                $this->Template->objProfile                = $objProfile;
                $this->Template->intProfileWithDescription = $this->cp_profileWithDescription;
                $this->insertImage($objProfile);
            }
        }
    }

    /**
     * Loads a profile
     * @return \Database\Result|object
     */
    private function loadProfile($intId)
    {
        $objDb      = \Contao\Database::getInstance();
        $strQuery   = "SELECT * FROM tl_cp_profiles WHERE tl_cp_profiles.id = $intId";
        $objResult  = $objDb->execute($strQuery);
        return $objResult;
    }

    /**
     * Fügt ein Bild in das Template ein.
     * @param $objProduct
     */
    private function insertImage($objProfile)
    {
        $arrData                = $objProfile->fetchAssoc();

        if ( ! empty($arrData['profile_image'])) {
            $arrData['singleSRC']   = \Contao\FilesModel::findByUuid($arrData['profile_image'])->path;
    
            // Override the default image size
            if ($arrData['profile_image_size'] != '') {
                $size = \Contao\StringUtil::deserialize($arrData['profile_image_size']);
    
                if ($size[0] > 0 || $size[1] > 0 || is_numeric($size[2]) || ($size[2][0] ?? null) === '_') {
                    $arrData['size'] = $arrData['profile_image_size'];
                }
            }
    
            $this->addImageToTemplate($this->Template, $arrData);
        }
    }
}
