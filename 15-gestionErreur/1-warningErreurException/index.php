<pre>
<?php

set_error_handler(function(
    $no,
    $str,
    $file,
    $line
){
    echo $no;
    echo "<br>";
    echo $str;
    echo "<br>";
    echo $file;
    echo "<br>";
    echo $line;
});
echo $var;
echo "<br>";
echo "salut";

?>
</pre>
