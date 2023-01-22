<pre>
<?php

$filename = __DIR__. "./data.json";
$data = file_get_contents($filename);

echo $data;
echo "</br>";
// on va convertir un json en tableau associatif
$arr = json_decode($data, true);
print_r($arr);

// on va convertir un tableau associatif en json
$json = json_encode($arr);
print_r($json);

//on va mettre notre json dans un fichier
file_put_contents(__dir__ . "./data2.json",$json)


?>
</pre>