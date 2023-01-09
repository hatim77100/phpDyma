<pre>
<?php

class Foo 
{
    static $a = 1;
    const CLASSNAME = 'FOO';
    function func() {

        // echo Foo::$a;
        // self est une notation alternatif qui fait référence à notre claa Foo
        echo self::$a;
    }
}
// :: => c'est un opérateur de résolution de porté
// echo Foo::$a;
$foo = new Foo();
$foo->func();
echo "<br>";
echo Foo::CLASSNAME;

?>
</pre>
