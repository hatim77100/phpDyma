<?php 

// on arrète quand c'est false:
$i = 0;
while ($i<=10) {
    echo $i, '<br/>';
    $i++;

}

// avec do while on rentre au moin une fois dans le bloc
$i = 10;

do {
    echo $i;
    $i++;
}while ($i<10);