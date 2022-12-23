<?php

// arrondir à un entier inférieur:
echo floor(0.1);
echo "<br/>";
echo floor(0.6);
echo "<br/>";

// arrondir à un entier supérieur:
echo ceil(0.25);
echo "<br/>";
echo ceil(0.9);
echo "<br/>";

// arrondir avec round
echo round(0.8);
echo "<br/>";
echo round(0.4);
echo "<br/>";

// Methode MAX retourne le nombre le plus grand:
echo max(5, 11, 44, 23, 54, 158, 3);
echo "<br/>";

// Methode MIN retourne le nombre le plus petit:
echo min(5, 11, 44, 23, 54, 158, 3);
echo "<br/>";

// la puissance
echo pow(3,2);
echo "<br/>";

// récuperer la valeur de PI:
echo pi();
echo "<br/>";

// générer les nombres aléatoire:
echo mt_rand(0, 9);
echo "<br/>";
echo mt_srand(51);
echo "<br/>";
echo mt_rand();
echo "<br/>";
echo mt_rand();
echo "<br/>";
echo mt_rand();
echo "<br/>";