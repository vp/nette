<?php

/**
 * Test: Nette\Caching\FileStorage @serializationVersion dependency test.
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette\Caching
 * @subpackage UnitTests
 */

use Nette\Caching\Cache;



require __DIR__ . '/../initialize.php';



$key = 'nette';
$value = 'rulez';

// temporary directory
define('TEMP_DIR', __DIR__ . '/tmp');
T::purge(TEMP_DIR);


$cache = new Cache(new Nette\Caching\FileStorage(TEMP_DIR));


class Foo
{
}


// Writing cache...
$cache->save($key, new Foo);

Assert::true( isset($cache[$key]), 'Is cached?' );
