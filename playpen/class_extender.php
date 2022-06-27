<?php

abstract class Baseline {
    public function scream(string $msg) : void {
        echo strtoupper($msg);
    }
}
class A1 extends Baseline {

}

class A2 extends A1 {

}

class A3 extends A2 {

}

$bob = new A3();
$bob->scream('Hello partner');
$shop = array();
for($i++ < 20) {
    $shop[] = new A3();
}