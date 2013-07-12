<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * Processor / Standard Object
 *
 * (c) Raúl Fraile Beneyto <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Metadata;

class TwigMetadata extends AbstractMetadata
{

    const ICON = 'twig';
    const URL = 'http://twig.sensiolabs.org/api/master/%class%.html';

    public function __construct()
    {
        $this->version = null;
    }

    public function hasMetadata($class)
    {
        return $this->isPrefix($class, 'Twig_');
    }

    public function getMetadata($class)
    {
        if ($this->hasMetadata($class)) {
            return array(
                'help_link' => $this->generateHelpLinkUrl(array(
                    '%class%' => urlencode($class)
                )),
                'icon' => self::ICON
            );
        }

        return array();
    }

}
