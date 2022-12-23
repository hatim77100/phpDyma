<?php

$a = 'Il fait beau en été';
// mb_strlen()
echo mb_strlen($a);
echo "<br/>";
// mb_strtolower();
echo mb_strtolower($a);
echo "<br/>";
//mb_strtoupper()
echo mb_strtoupper($a);
echo "<br/>";
// trim() => elle enlève toutes les espaces avant et après une chaine de caractère;
echo trim("$a");
echo "<br/>";
// str_contains() => elle regarde s'il y'a une portion de chaine de caractète si présente dans une autre chaîne de caractère.
echo str_contains($a, "été");
echo "<br/>";
echo str_starts_with($a, "a");
echo "<br/>";
// mb_substr() => il récupère une portion de chaine de caractère et la stocker dans une nouvelle chaine de caractère.
echo mb_substr($a, 0, 5);
echo "<br/>";
// il remplace une chaine de caractère par une autre portion de chaîne de caractère
echo str_replace("été", "hiver", $a);
echo "<br/>";
//explode() => transformé une chaîne de caractère en tableau:
print_r(explode(" ", $a)) ;
echo "<br/>";
//implode()
echo implode(" ", explode(" ", $a));
echo "<br/>";
