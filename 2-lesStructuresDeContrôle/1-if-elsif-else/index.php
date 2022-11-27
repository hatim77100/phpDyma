<?php

$condition =  0;

if ($condition) {
    echo 'dans le if';
} elseif($condition === 0) {
    echo 'bonjour';
} else {
    echo 'Pas dans le if';
}

// autre Syntax

if ($condition) :
    echo 'dans le if';
elseif($condition === 0):
    echo 'bonjour';
else: 
    echo 'Pas dans le if';
endif;
