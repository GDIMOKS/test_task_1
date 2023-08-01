<?php
class ChildClass extends ParentClass implements InterfaceOne {
    private static $object = null;

    public static function getObject() {
        if (self::$object === null) {
            self::$object = new self();
        }

        return self::$object;
    }

    public function __construct() {}
    public function __clone() {}
    public function __wakeup() {}

    public function doAction() {}
}

ChildClass::getObject()->doAction();