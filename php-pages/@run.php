<?php
$temp_file = fopen("tmp/".$out_file.".slim", "w");
foreach($in_files as $file_name => $file_depth){
    $file_for_read = file("../slim/{$file_name}.slim");
    foreach($file_for_read as $line_num => $line_content){
        fwrite($temp_file,$file_depth.$line_content);
    }
}
fclose($temp_file);
exec("slimrb -p tmp/"."$out_file".".slim > ../$out_file.html");
