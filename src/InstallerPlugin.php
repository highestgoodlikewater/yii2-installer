<?php
/**
 * @link http://www.wedigital.pt
 * @copyright Copyright (c) 2016 Wedigital We Love to Code
 * @license http://www.wedigital.com/license
 */

namespace fbarrento\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class InstallerPlugin is the plugin that registers the fbarrento composer packages.
 *
 * @package fbarrento\Composer
 * @author Francisco Barrento <francisco.barrento@gmail.com>
 * @since 1.0
 *
 */
class InstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new Installer($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}