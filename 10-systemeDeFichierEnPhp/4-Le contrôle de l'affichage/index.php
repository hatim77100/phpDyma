<?php

//output control
ob_start();
echo "hello";

$content = ob_get_contents();
ob_end_clean();

echo $content;
