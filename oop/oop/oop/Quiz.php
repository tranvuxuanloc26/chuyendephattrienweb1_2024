<?php

abstract class a{
    abstract static public function b();
}
class c extends a{
    static public function b() {
        echo "Method b from class c";
    }
    c::b();
}
$a= new c();
$a->b();