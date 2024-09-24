<?php
declare(strict_types=1);

include_once ('ClassA.php');
include_once ('ClassB.php');
include_once ('ClassC.php');
include_once ('InterfaceI.php');

class Demo{
    //function type A
    public function typeAReturnA():A{
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeAReturnB():A{
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeAReturnC():A{
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeAReturnI():A{
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeAReturnNull():A{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //function type B
    public function typeBReturnA():B{
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeBReturnB():B{
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeBReturnC():B{
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeBReturnI():B{
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeBReturnNull():B{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //function type C
    public function typeCReturnA():C{
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeCReturnB():C{
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeCReturnC():C{
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeCReturnI():C{
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeCReturnNull():C{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //function type I
    public function typeIReturnA():I{
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeIReturnB():I{
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeIReturnC():I{
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeIReturnI():I{
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeIReturnNull():I{
        echo __FUNCTION__ . "<br>";
        return null;
    }

    //function type null
    public function typeNullReturnA():null{
        echo __FUNCTION__ . "<br>";
        return new A;
    }
    public function typeNullReturnB():null{
        echo __FUNCTION__ . "<br>";
        return new B;
    }
    public function typeNullReturnC():null{
        echo __FUNCTION__ . "<br>";
        return new C;
    }
    public function typeNullReturnI():null{
        echo __FUNCTION__ . "<br>";
        return new I;
    }
    public function typeNullReturnNull():null{
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

$demo = new Demo;
//type A
// $demo->typeAReturnA();
// $demo->typeAReturnB();
// $demo->typeAReturnC();
// $demo->typeAReturnI();
// $demo->typeAReturnNull();

//type B
// $demo->typeBReturnA();
//  $demo->typeBReturnB();
// $demo->typeBReturnC();
// $demo->typeBReturnI();
// $demo->typeBReturnNull();

//type C
// $demo->typeCReturnA();
// $demo->typeCReturnB();
// $demo->typeCReturnC();
// $demo->typeCReturnI();
// $demo->typeCReturnNull();

//type I
// $demo->typeIReturnA();
// $demo->typeIReturnB();
// $demo->typeIReturnC();
// $demo->typeIReturnI();
// $demo->typeIReturnNull();

//type null
// $demo->typeNullReturnA();
// $demo->typeNullReturnB();
// $demo->typeNullReturnC();
// $demo->typeNullReturnI();
// $demo->typeNullReturnNull();
