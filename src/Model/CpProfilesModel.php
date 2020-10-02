<?php

namespace Kreadiv\ContaoProfilesBundle\Model;

use Contao\Model;

class CpProfilesModel extends Model
{

    /**
     * Name of the current table
     * @var string
     */
    protected static $strTable = 'tl_cp_profiles';

    public static function getAll()
    {
        return static::findAll(['order' => 'sorting ASC']);
    }

}
