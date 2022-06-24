<?php
    
    function demofunction1() {
        $c = new demoClass;
        echo "<h2>".demoClass::statfunct()."</h2>";
    }


    class demoClass {
        public $testVar1 = 'this is a test variable';
        public static $num = 5;
        public $funcName = 'classFunction';

        function classFunction() {
            return self::$num + 5;
        }

        public static function statfunct() {
            return self::$num + 5;
        }
    }

    
    ?>