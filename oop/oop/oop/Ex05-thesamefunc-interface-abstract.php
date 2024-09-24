<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');


// Single Abstract, Many Interfaces
class Ex05 extends AbsA implements IA {   
    public function NotDeclare() {
        echo 'Implemented NotDeclare from AbsA';
    }
    public function theSame() {
        echo 'This is theSame method from Ex05' . PHP_EOL;
    }
}

$ex = new Ex05();
$ex->theSame();


