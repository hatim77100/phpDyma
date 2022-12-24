<?php

function bar() {
    echo "bar";
}

function func()
{
    bar();
    echo "Hello !";
    return 1;
}

$b = func();
echo $b;
