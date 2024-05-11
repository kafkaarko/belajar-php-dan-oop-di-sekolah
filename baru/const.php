<?php

// class con{
//      const KAFKA = "nama saya";
// }

// echo con::KAFKA;

// class co{
//      public static $kafka = "nama saya";
// }

// echo co::$kafka;


// class web{
//     public static $title = "My page";

//     public function changeTitle(){
//         self::$title = "My page 2";
//         return self::$title;
//     }

//     public function changeTitle2(){
//         return self::$title;
//     }
// }

// class yourWeb extends web{
//     public function changeTitle(){
//         self::$title = 'your page';
//         return self::$title;
//     }
// }

// echo web::$title. "<br>";
// $MyWeb = new web();
// echo $MyWeb -> changeTitle(). "<br>" . $MyWeb -> changeTitle2();
// echo "<br>";
// $yourWeb = new yourWeb();
// echo $yourWeb -> changeTitle() . "<br>" . $yourWeb -> changeTitle2();

// echo"<br>";

// class we{
//     public static $title = "first page";

//     public static function getTitlePage(){
//         return "nama halaman ini adalah '" . self::$title . "'";
//     }
// }

// echo we::$title;
// echo"<br>";
// echo we::getTitlePage();


// class web{
//     protected static $title = "firs page";

//     public static function getTitlePage(){
//         echo "nama halaman ini adalah ' " . self::$title . "'";
//     }

// }

// class otherWeb extends web{
//     public function __construct()
//     {
//         web::getTitlePage();
//     }

//     public function getTitle(){
//         return self::$title;
//     }
// }

// $other = new otherWeb;
// echo "<br>";
// echo $other->getTitle();


class web{
    protected static $title = "first page";

    protected static function getTitlePage(){
        echo "nama  halaman ini adalah'" . self::$title . "'";
    }
}

class otherweb extends web{
    public function __construct()
    {
        web::getTitlePage();
    }
}

new otherweb;

