<?php
/**
 * @link http://www.kickou.com
 * @copyright Copyright (c) 2016 Kickou Amazing Software
 * @license http://www.kickou.com/license
 */

namespace fbarrento\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

/**
 * Class ModuleInstaller
 *
 * @package kickou\Composer
 * @author Francisco Barrento <francisco.barrento@gmail.com>
 * @since 1.0
 */
class Installer extends LibraryInstaller
{

    /**
     * @inheritdoc
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 15);
        if('fbarrento/yii2-' !== $prefix){
            throw new \InvalidArgumentException(
                'Unable to install template, phpdocumentor templates '
                .'should always start their package name with '
                .'"kickou/yii2-"'
            );
        }
        $themePrefix = substr($package->getPrettyName(), 0, 21);
        if('fbarrento/yii2-theme-' === $themePrefix) {
            return 'themes/'.substr($package->getPrettyName(), 21);
        } else {
            return 'modules/'.substr($package->getPrettyName(), 15);
        }

    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'fbarrento-yii2' === $packageType;
    }

}