<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * Type/AbstractType: Base type
 *
 * @author Raúl Fraile Beneyto <raulfraile@gmail.com> || @raulfraile
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Theme;

use Ladybug\Format\FormatInterface;
use Ladybug\Container;

abstract class AbstractTheme implements ThemeInterface
{

    /** @var Container $container */
    protected $container;

    /** @var array $formats */
    protected $formats;

    public function supportsFormat(FormatInterface $format)
    {
        return in_array($format->getName(), static::getFormats());
    }

}
