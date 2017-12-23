<?php
/**
 * Created by PhpStorm.
 * User: lightning
 * Date: 2017/12/22
 * Time: 22:57
 */
$a = 'hello';
$$a = 'world';

echo "$a \n";
echo "$$a \n";
echo "$hello \n";
echo "${$a} \n";
echo "$a      ${$a} \n";
echo $a . " " . ${$a};
