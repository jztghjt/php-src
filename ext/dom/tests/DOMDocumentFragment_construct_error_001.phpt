--TEST--
DOMDocumentFragment::__construct() with too many errors.
--CREDITS--
Eric Lee Stewart <ericleestewart@gmail.com>
# TestFest Atlanta 2009-05-24
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
try {
    $fragment = new DOMDocumentFragment("root");
} catch (TypeException $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECTF--
DOMDocumentFragment::__construct() expects exactly 0 parameters, 1 given
