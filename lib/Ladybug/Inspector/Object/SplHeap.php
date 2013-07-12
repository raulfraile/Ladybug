<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * Object/SplHeap dumper
 *
 * (c) Raúl Fraile Beneyto <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Inspector\Object;

use Ladybug\Dumper;
use Ladybug\Inspector\AbstractInspector;
use Ladybug\Type;

abstract class SplHeap extends AbstractInspector
{

    /**
     * @param string $var
     * @return \Ladybug\Type\Extended\CollectionType
     * @throws \Ladybug\Exception\InvalidInspectorClassException
     */
    public function getData($var)
    {
        if (!$var instanceof \SplHeap) {
            throw new \Ladybug\Exception\InvalidInspectorClassException();
        }

        /** @var $var \SplHeap */

        $arrayData = iterator_to_array($var);

        $collection = new Type\Extended\CollectionType();
        $collection->setTitle(sprintf('Heap (%d)', count($arrayData)));

        foreach ($arrayData as $item) {
            $collection->add($this->factory->factory($item, $this->level));
        }

        return $collection;
    }

}
