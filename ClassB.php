<?php
include_once ('ClassC.php');
include_once ('InterfaceI.php');

class B extends C{
    public function b1(){
        echo 'This is function b1 from class B.';
    }
}