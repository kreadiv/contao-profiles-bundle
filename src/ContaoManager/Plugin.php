<?php declare(strict_types=1);

/*
 * Contao profiles extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2020, Florian Wenzel
 * @author     Florian Wenzel <mail@kreadiv.de>
 * @license    LGPL-3.0+
 */

namespace Kreadiv\ContaoProfilesBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use Kreadiv\ContaoProfilesBundle\ContaoProfilesBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoProfilesBundle::class)->setLoadAfter(
                [ContaoCoreBundle::class]
            )
        ];
    }
}
