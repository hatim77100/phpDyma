<?php 

for($i = 0; $i < 3; $i++) {
    echo $i, '<br/>';
}

$i = 0;
for(; ; $i++) {
    if($i>5) {
        break;
    }
    echo $i;
}

for($i = 0; $i < 3; $i++) {
    if($i === 1) {
        continue;
    }
    echo $i, '<br/>';
}