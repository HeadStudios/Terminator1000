<?php

$rob = new A3();
$rob->wut();

abstract class N1 {
    public $a;
}

class A1 {
    function wut() { echo "Wut?"; }
}

class A2 extends A1 {
    function who() { echo "Who"; }
}

class A3 extends A2 {
    function where() { echo "Where"; }
}

