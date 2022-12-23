<?php
// les expressions régulières
$a = 'Il fait beau en été';
$pattern = "/e/";
echo preg_match($pattern,$a);
echo preg_match_all($pattern, $a);
echo preg_replace($pattern, "3  ", $a);