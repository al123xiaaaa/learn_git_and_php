<?php

/**
 * Created by PhpStorm.
 * User: al123
 * Date: 5/23/2017
 * Time: 9:47 PM
 */
class foo
{
    public $tvar = 10;

    function do_foo()
    {
        echo "Doing foo.";
    }

    function do_test()
    {
        echo "test";
    }
}

$bar = new foo;
$bar->do_foo();
$bar->do_test();
echo "\n=====================\n";
$obj = (object)array('1' => 'foo','2' => 'bar');
$tt = isset($obj->{'1'});
echo isset($obj->{'2'}) . "111\n";
var_dump(isset($obj->{'2'})); // outputs 'bool(false)'
var_dump(key($obj)); // outputs 'int(1)'
echo 'hello ';
echo 'world';