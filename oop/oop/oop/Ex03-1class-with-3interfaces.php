<?php

// Example 01 in OOP_Diagram.drawio
include ('MyClass.php');
include ('MyAbstract.php');
include ('MyInterface.php');
// Single Abstract, Many Interfaces
class Ex03 extends A implements IA, IB, IC {   
    
    function func_from_class1(){
        echo 'Overriding Class 01 from Ex03 <br/>';
    }
    public function NotDeclare() {
        echo 'Implemented NotDeclare from AbsA';
    }

    function func_from_class1_noOverride() {
        echo 'Function from class A not overridden in Ex03 <br/>';
    }
    function func_from_Int1(){

    }

    function func_from_Int2(){
        
    }

    function func_from_Int3(){
        
    }
}


$ex = new Ex03();
$ex->func_from_class1();
$ex->func_from_class1_noOverride();


// public function func_from_Abs1(){
    //     echo 'b';
    // }
    
    // public function func_from_Abs2(){
    //     echo 'Abstract 02';
    // }
    
    // public function func_from_Abs3(){
    //     echo 'Abstract 03';
    // }
