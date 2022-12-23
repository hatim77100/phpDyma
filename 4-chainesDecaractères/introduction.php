<?php
$a = 'je suis sur l\'echelle';
echo $a;
$b = 5;
echo '<br/>';

// unicode => \u{....}
$c = "je suis sur l'echelle $b \u{2665}";
echo $c;
echo '<br/>';

echo $a[5];
echo '<br/>';
echo $a[-1]; // on part de la fin:
echo '<br/>';
echo $a[-1] = 'p'; // on remplace le dernier caractère par p
echo '<br/>';
echo $a;

$d = "jhogpe
jhgpoeh
gpo jgo
iehgpo ie
hgopie ghg opiehg";

// une autre syntax (Heredoc):
echo '<br/>';
$e = <<<SALUT
jhogpe
jhgpoeh
gpo jgo
iehgpo ie
hgopie ghg opiehg
$d
SALUT;

echo $e;
echo '<br/>';

$char = 'ç';
for ($i = 0; $i < strlen($char); $i++) {
    echo ord($char[$i]) . " ";}