<?php

AddUp::add();
AddUp::add();
AddUp::add();
AddUp::wat();

class AddUp {

    protected static $variable = 0;

    public static function add() {
        self::$variable += 2;
    }

    public static function wat() {
        echo self::$variable;
    }
}