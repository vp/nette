<?php

/**
 * Test: Nette\String and RegexpException compile error.
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette
 * @subpackage UnitTests
 */

use Nette\String;



require __DIR__ . '/../initialize.php';



try {
	String::split('0123456789', '#*#');
	Assert::failed();
} catch (Exception $e) {
	Assert::exception('Nette\RegexpException', 'preg_split(): Compilation failed: nothing to repeat at offset 0 in pattern: #*#', $e );
}

try {
	String::match('0123456789', '#*#');
	Assert::failed();
} catch (Exception $e) {
	Assert::exception('Nette\RegexpException', 'preg_match(): Compilation failed: nothing to repeat at offset 0 in pattern: #*#', $e );
}

try {
	String::matchAll('0123456789', '#*#');
	Assert::failed();
} catch (Exception $e) {
	Assert::exception('Nette\RegexpException', 'preg_match_all(): Compilation failed: nothing to repeat at offset 0 in pattern: #*#', $e );
}

try {
	String::replace('0123456789', '#*#', 'x');
	Assert::failed();
} catch (Exception $e) {
	Assert::exception('Nette\RegexpException', 'preg_replace(): Compilation failed: nothing to repeat at offset 0 in pattern: #*#', $e );
}
