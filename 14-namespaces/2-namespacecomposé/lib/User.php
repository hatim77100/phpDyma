<?php
/* Les namespaces s'appliquent aux classes, aux interfaces, aux traits, aux fonctions et aux constantes. */
namespace Dyma;

class User
{
    function __construct()
    {
        echo "lib User construct";
    }
}
class Admin
{
    function __construct()
    {
        echo "lib Admin construct";
    }
}

function func() {

}
function func2() {

}

const TEST = 1;
const TEST2 = 3;