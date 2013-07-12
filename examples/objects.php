<?php

require_once __DIR__.'/../vendor/autoload.php';
Ladybug\Loader::loadHelpers();

// user class
class Foo
{
    const TEST = 1;

    public $bar = 1;


    /**
     * Constructor
     *
     * @return null
     */
    public function __construct() {}

    /**
     * Get bar
     *
     * Get the bar value
     *
     * @return int
     */
    protected function getBar() { return $this->bar; }
    private function setBar($bar) { $this->bar = $bar; }
    public function __toString() {return $this->bar; }
}

$foo = new Foo();
//ld($foo);



// DateTime object

$date = new DateTime();
//ladybug_dump_die($date);

$sXml = <<<XML
<books>
    <book id="1">
        <title>PHP 5 Power Programming</title>
        <author>Andi Gutmans, Stig Bakken, Derick Rethans</author>
    </book>
    <book id="2">
        <title>Clean Code: A Handbook of Agile Software Craftsmanship</title>
        <author>Robert C. Martin</author>
    </book>
</books>
XML;
$dom = new DOMDocument();
$dom->loadXml($sXml);

//ladybug_dump($dom);

$reflected = new ReflectionClass('Foo');

//ladybug_dump($reflected);


$dumper = new \Ladybug\Dumper();

echo $dumper->dump($foo);
