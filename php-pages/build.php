<?php

$pages = [
    'main' => ['content'=>['begin.slim', 'body-branding', 'header-main', 'main-content', 'footer'],'out'=>'main.html']
];


function build($p, $pages) {
    
}

ob_start();
include "../slim/begin.slim";
include "../slim/body-empty.slim";

$out = ob_get_contents();


$fp = fopen("tmp.slim", "w");
fwrite($fp, $out);
fclose($fp);
//$out > "tmp.slim";

//echo exec('slimrb -p ../slim/begin.slim >> ../begin.html');
echo exec('slimrb -p tmp.slim > out.html');
unlink('tmp.slim');